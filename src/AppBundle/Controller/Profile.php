<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\pics;
use AppBundle\Entity\comment;
use AppBundle\Entity\likes;
use AppBundle\Entity\subscriptions;
class Profile extends Controller
 {
	/**
     * @Route("/Profile")
     */
	 
	 public function Profile()
	 {
		 if(!isset($_SESSION["CurrentUser"]))
		 {
			 return new Response("Nie jesteś zalogowany");
		 }
		else
		{
			
			$err_comm='';
		 
		 $pics=$this->GetDoctrine()
		->getRepository('AppBundle:pic')
        ->findByLogin($_SESSION["CurrentUser"]->getLogin());
		
		 $user=$this->GetDoctrine()
		 ->getRepository('AppBundle:user')->
		 findOneByLogin($_SESSION["CurrentUser"]->getLogin());
		 


		 $usr['login']=$user->getLogin();
		 $usr['email']=$user->getEmail();
		 $usr['nameAndSurrname']=$user->getNameAndSurrname();
		 $usr['about']=$user->getAbout();
		 $usr['avatar']=$user->getAvatar();
		 if(!isset($usr['avatar'])) // Warning 
    	{
    		$usr['avatar']="Brak Avatara";
    	}
    	else
    	{
       
    		$usr['avatar']=base64_encode(stream_get_contents($usr['avatar']));    // wchodzi do tego momentu 
       
         
    	}
		 $i=0;
		 foreach($pics as $pic)
		 {
			 
			 $pictures[$i]['id']=$pic->getId();
			 $pictures[$i]['login']=$pic->getLogin();
			 $pictures[$i]['pic']=$pic->getPic();
			 $pictures[$i]['date']=$pic->getDate();
			 $pictures[$i]['tag_id']=$pic->getTagId();
			 $i++;
		 }
		 
		if(isset($_SESSION["CurrentUser"])){
			
			$loggedIn=true;
			$currentUserLogin=$_SESSION["CurrentUser"]->getLogin();
		}
		else{
			$loggedIn=false;
			$currentUserLogin='none';
		}
		 
		 if(isset($pictures))
		 return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr,'loggedIn'=>$loggedIn,'CurrentUserLogin'=>$currentUserLogin    // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr,'loggedIn'=>$loggedIn,'CurrentUserLogin'=>$currentUserLogin   // Tablica do wysyłania zmiennych do widoku 
				));
		}
		}
	 }
	 
	 /**
     * @Route("/Profile/{Login}")
     */
	 public function OtherProfile($Login)
	 {
		 $err_comm='';
		 

		 $pics=$this->GetDoctrine()
		->getRepository('AppBundle:pic')
        ->findByLogin($Login);
		$user=$this->GetDoctrine()
		 ->getRepository('AppBundle:user')->
		 findOneByLogin($Login);
		 if($user==NULL)
			 return new Response('Brak użytkownika');
		 $usr['login']=$user->getLogin();
		 $usr['email']=$user->getEmail();
		 $usr['nameAndSurrname']=$user->getNameAndSurrname();
		 $usr['about']=$user->getAbout();
		 $usr['avatar']=$user->getAvatar();
		 if(!isset($usr['avatar'])) // Warning 
    	{
    		$usr['avatar']="Brak Avatara";
    	}
    	else
    	{
       
    		$usr['avatar']=base64_encode(stream_get_contents($usr['avatar']));    // wchodzi do tego momentu 
       
         
    	}
		 
		 
		 $i=0;
		 foreach($pics as $pic)
		 {
			 
			 $pictures[$i]['id']=$pic->getId();
			 $pictures[$i]['login']=$pic->getLogin();
			 $pictures[$i]['pic']=$pic->getPic();
			 $pictures[$i]['date']=$pic->getDate();
			 $pictures[$i]['tag_id']=$pic->getTagId();
			 $i++;
		 }
		 
		 if(isset($_SESSION["CurrentUser"])){
			$loggedIn=true;
			$currentUserLogin=$_SESSION["CurrentUser"]->getLogin();
		}
		else{
			$loggedIn=false;
			$currentUserLogin='none';
		}
		 
		 if(isset($pictures))
		 return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr,'loggedIn'=>$loggedIn,'CurrentUserLogin'=>$currentUserLogin  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr,'loggedIn'=>$loggedIn,'CurrentUserLogin'=>$currentUserLogin  // Tablica do wysyłania zmiennych do widoku 
				));
		}
	 }
	 
	 /**
     * @Route("/Profile/Photo/{PhotoId}")
     */
	 
	 public function Photo($PhotoId)
	 {
		 $err_comm='';
		 
		 $pic=$this->GetDoctrine()
		->getRepository('AppBundle:pic')
        ->findOneById($PhotoId);
		
		$pictures['id']=$pic->getId();
		$pictures['login']=$pic->getLogin();
		$pictures['pic']=$pic->getPic();
		$pictures['date']=$pic->getDate();
		$pictures['tag_id']=$pic->getTagId();
		
		$usr=$this->GetDoctrine()
		->getRepository('AppBundle:user')
		->findOneByLogin($pictures['login']);
		
		$user['login']=$usr->getLogin();
		$user['email']=$usr->getEmail();
		$user['nameAndSurrname']=$usr->getNameAndSurrname();
		$user['about']=$usr->getAbout();
		$user['avatar']=$usr->getAvatar();
		if(!isset($user['avatar'])) // Warning 
    	{
    		$user['avatar']="Brak Avatara";
    	}
    	else
    	{
       
    		$user['avatar']=base64_encode(stream_get_contents($user['avatar']));    // wchodzi do tego momentu        
         
    	}
		
		$tgs=$this->GetDoctrine()
		->getRepository('AppBundle:tags')
		->findByContentid($PhotoId);
		// $tags[];
		$i=0;
		foreach($tgs as $tag)
		{
			if($tag->getOf()=='pic') 
			{
				$tags[$i]=$tag->getTag();
				$i++;
			}
		}
		
		if(!isset($tags)) $tags=NULL;
		
		$likes=$this->GetDoctrine()
		->getRepository('AppBundle:likes')
		->findByPicid($PhotoId);
		$like=count($likes);
		foreach($likes as $like1)
		{
			if($like1->getLogin()==$_SESSION['CurrentUser']->getLogin()) $liked="1";
		}
		if(!isset($liked)) $liked="0";
		$comms=$this->GetDoctrine()
		->getRepository('AppBundle:comment')
		->findByPicid($pictures['id']);
		
		$i=0;
		foreach($comms as $comm)
		{
			$comments[$i]['id']=$comm->getId();
			$comments[$i]['content']=$comm->getCommentsContent();
			$comments[$i]['date']=date_format($comm->getDate(),'H:i d/m/y');
			$comments[$i]['login']=$comm->getLogin();
			$comments[$i]['tag_id']=$comm->getTagId();
			$i++;
		}
		
		//TU POBIERANIE TAGOW
		/*$tgs=$this->GetDoctrine()
		->getRepository('AppBundle:tags')
		->findBy*/
		
		//var_dump($_SESSION);
		
		if(isset($_SESSION["CurrentUser"]))
			$loggedIn=true;
		
		if(isset($loggedIn))
		{
			if(isset($comments))
			return $this->render('Profile/Photo.html.twig', array( 
				'pic'=> $pictures,'usr'=>$user,'comms'=>$comments,'loggedIn'=>true,'tags'=>$tags,'login'=>$_SESSION['CurrentUser']->getLogin(),'likes'=>$like,'liked'=>$liked  // Tablica do wysyłania zmiennych do widoku 
					));
			else 
				return $this->render('Profile/Photo.html.twig', array( 
				'pic'=> $pictures,'usr'=>$user,'comms'=>'','loggedIn'=>true,'tags'=>$tags,'login'=>$_SESSION['CurrentUser']->getLogin(),'likes'=>$like,'liked'=>$liked // Tablica do wysyłania zmiennych do widoku 
					));
		}
		else
		{
			if(isset($comments))
			return $this->render('Profile/Photo.html.twig', array( 
				'pic'=> $pictures,'usr'=>$user,'comms'=>$comments,'loggedIn'=>false,'tags'=>$tags,'likes'=>$like,'liked'=>$liked  // Tablica do wysyłania zmiennych do widoku 
					));
			else 
				return $this->render('Profile/Photo.html.twig', array( 
				'pic'=> $pictures,'usr'=>$user,'comms'=>'','loggedIn'=>false,'tags'=>$tags,'likes'=>$like,'liked'=>$liked  // Tablica do wysyłania zmiennych do widoku 
					));
		}
	 }

 	/**
     * @Route("/Profile/Photo/NewComment/{PhotoId}")
     */
	 public function AddComment($PhotoId)
	 {

	 	if(!isset($_SESSION["CurrentUser"]))
		 {
			 return new Response("Nie jesteś zalogowany");
		 }
		 

		 $DoctrineManager = $this->getDoctrine()->getManager();
		$comment = new comment();
		$commentcont= $_POST["CommentContent"];
		$comment->setCommentsContent($commentcont);
		$comment->setLogin($_SESSION['CurrentUser']->getLogin());
		$comment->setpicid($PhotoId);
		$comment->setTagId("tag");
		//$comment->setTagId("0"); // narazie bez taga

		$DoctrineManager->persist($comment);
		$DoctrineManager->flush();

		return $this->redirect("/Profile/Photo/".$PhotoId);
	}
	
	/**
     * @Route("/Profile/Photo/AddLike/{PhotoId}/{login}")
     */
	public function Like($PhotoId, $login)
	{
		if(!isset($_SESSION["CurrentUser"]))
		{
			 return new Response("Nie jesteś zalogowany");
		}
		$likes=$this->GetDoctrine()
		->getRepository('AppBundle:likes')
		->findByPicid($PhotoId);
		$DoctrineManager = $this->getDoctrine()->getManager();
		foreach($likes as $like)
		{
			if($like->getLogin()==$login) {
				$fail=TRUE;
				$index=$like->getId();
			}
		}
		if(!isset($fail)) {
			$like=new likes();
			$like->setPicId($PhotoId);
			$like->setLogin($login);
		
			$DoctrineManager->persist($like);
			$DoctrineManager->flush();
		}
		else{
			$like=$DoctrineManager->getRepository('AppBundle:likes')->findOneById($index);
			$DoctrineManager->remove($like);
			$DoctrineManager->flush();
		}
		
		
		
		
		return $this->redirect("/Profile/Photo/".$PhotoId);
	}

	/**
     * @Route("/Explore")
     */
	 public function Explore()
	 {
		
		$err_comm="";
		$PlaceHolder="Wyszukaj po nazwie użytkownika "; // dodać tagi jak będą gotowe

		$Repository = $this->getDoctrine()->getRepository('AppBundle:pic');
		
		$query = $Repository->createQueryBuilder('p')
		->orderBy('p.date','DESC')
		->setMaxResults(20) // Tutaj można zmieniać ilość wyświetlanych zdjęć. 
		->getQuery();

		$pics = $query->getResult();
		$i = 0 ; 
	    foreach($pics as $pic)
	    {
			 
			 $pictures[$i]['id']=$pic->getId();
			 $pictures[$i]['login']=$pic->getLogin();
			 $pictures[$i]['pic']=$pic->getPic();
			 $pictures[$i]['date']=$pic->getDate();
			 $pictures[$i]['tag_id']=$pic->getTagId();
			 $i++;
	    }

	    $Repository = $this->getDoctrine()->getRepository('AppBundle:tags');



	    if(isset($pictures))
		 return $this->render('SearchPanel/Explore.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('SearchPanel/Explore.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder // Tablica do wysyłania zmiennych do widoku 
				));
		}
		
	 }
	 
	/**
	*@Route("/Search")
	**/
	public function Search()
	{
		if(!isset($_POST['SearchedArgument']) || empty($_POST['SearchedArgument']))
		{
			return $this->redirect("/");
		}

	/*
		// Wyszukiwanie po tagach można machnać tak,że sprawdzi się w if'ie czy pierwsza litera jest haszem 
		return $this->redirect("/Profile/".$_POST['SearchedArgument']);
    */


			$err_comm="";
		$PlaceHolder="Wyszukaj po nazwie użytkownika "; // dodać tagi jak będą gotowe

		$Repository = $this->getDoctrine()->getRepository('AppBundle:user');
		
		$query = $Repository->createQueryBuilder('u')
		->where('u.login LIKE :s')
		->setParameter('s',$_POST['SearchedArgument'].'%')
		->getQuery();

		$usrs = $query->getResult();
		$i = 0 ; 
	    foreach($usrs as $user)
	    {
			 
			 $users[$i]['login']=$user->getLogin();
			 $users[$i]['avatar']=$user->getAvatar();
			if($users[$i]['avatar']!=NULL)
			{
				 $users[$i]['avatar']=base64_encode(stream_get_contents($users[$i]['avatar']));
			}
			
			 $i++;
	    }

	
	    $Repository = $this->getDoctrine()->getRepository('AppBundle:tags');
	  
	    $query = $Repository->createQueryBuilder('t')
	    ->where('t.tag = :tag')
	    ->setParameter('tag','#'.$_POST['SearchedArgument'])
	    ->getQuery();

	    $tgs = $query->getResult();
/*
	    $i=0;

	    foreach ($tgs as $tag) 
	    {
	    	$tags[$i]['contentId']= $tag->getContentid();
	    	$pics[$i][]
	    }
*/
	    if(isset($users))
		 return $this->render('SearchPanel/Results.html.twig', array( 
			'users'=> $users,'placeholder'=>$PlaceHolder  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$users='';
			return $this->render('SearchPanel/Results.html.twig', array( 
			'users'=> $users,'placeholder'=>$PlaceHolder // Tablica do wysyłania zmiennych do widoku 
				));
		}





			
	}
	
	/**
     * @Route("/Profile/{login}/Follow")
     */
	public function Follow()
	{
		
		
		$follows=$this->getDoctrine()
		->getRepository('AppBundle:subscriptions')
		->findByIdsubscriber($_POST['UserToFollow']);
		foreach($follows as $follow){
			if($follow->getIdSub2()==$_POST['CurrentUser']) {
				$followed=true;
				$index=$follow->getId();
			}
		}
		
		if(!isset($followed)){
			$followed=false;
		}
		if($followed==false){
			$foll=new subscriptions();
			$foll->setIdSubscriber($_POST['UserToFollow']);
			$foll->setIdSub2($_POST['CurrentUser']);
			$DoctrineManager=$this->getDoctrine()->getManager();
			$DoctrineManager->persist($foll);
			$DoctrineManager->flush();
		}
		else{
			$DoctrineManager=$this->getDoctrine()->getManager();
			$foll=$DoctrineManager->getRepository('AppBundle:subscriptions')
			->findOneById($index);
			$DoctrineManager->remove($foll);
			$DoctrineManager->flush();
		}
		
		
	}

}
