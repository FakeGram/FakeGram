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
		 
		$i = 0 ; 
	    foreach($pics as $pi)
	    {
			 
			 $pictures[$i]['id']=$pi->getId();
			 $pictures[$i]['login']=$pi->getLogin();
			 $pictures[$i]['pic']=$pi->getPic();
			 $pictures[$i]['date']=$pi->getDate();
			 $pictures[$i]['tag_id']=$pi->getTagId();
			 $kwerenda='SELECT login FROM likes WHERE picid='.$pictures[$i]['id'].';';
			 $dm=$this->getDoctrine()->getManager();
			 $connection = $dm->getConnection();
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $logins = $statement->fetchAll();
			 //var_dump($logins);
			 $polajkowane=false;
			 $like=0;
			 foreach ($logins as $login)
			 {
				$like++;
				if($login['login']==$_SESSION['CurrentUser']->getLogin()) $polajkowany=true;
			 }
			 $kwerenda='SELECT avatar FROM user WHERE login="'.$pictures[$i]['login'].'";';
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $user=$statement->fetchAll();
			 $usr['login']=$pictures[$i]['login'];
			 // $usr['name_and_surrname']=$user->getN
			 //var_dump($user);
			 
			 if(isset($user[0]['avatar']))
			 {
				 $usr['avatar']=base64_encode(($user[0]['avatar']));
			 }
			 else 
			{
				$usr['avatar']="Brak Avatara";
			}
			
			$kwerenda='SELECT * FROM comment WHERE picid='.$pictures[$i]['id'].' ORDER BY date DESC LIMIT 3;';
			$statement=$connection->prepare($kwerenda);
			$statement->execute();
			$comms=$statement->fetchAll();
			$comm=array();
			$x=0;
			foreach ($comms as $com)
			{
			$comm[$x]['login']=$com['login'];
			$comm[$x]['date']=$com['date'];
			$comm[$x]['content']=$com['commentscontent'];
			$x++;
			}
			$pic[$i]['pic']=$pictures[$i]['pic'];
			$pic[$i]['id']=$pictures[$i]['id'];
			$pic[$i]['date']=$pictures[$i]['date'];
			$pic[$i]['comm']=$comm;
			$pic[$i]['usr']=$usr;
			$pic[$i]['likes']=$like;
			$pic[$i]['liked']=$polajkowane;
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
		 return $this->render('SearchPanel/Explore.html.twig', array( 
			'pic'=>$pic,'loggedIn'=>$loggedIn,'placeholder'=>'placeholder','set'=>'prof'    // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pic='';
			return $this->render('SearchPanel/Explore.html.twig', array( 
			'loggedIn'=>$loggedIn,'pic'=>$pic   // Tablica do wysyłania zmiennych do widoku 
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
		 
		 
		 
		$i = 0 ; 
	    foreach($pics as $pi)
	    {
			 
			 $pictures[$i]['id']=$pi->getId();
			 $pictures[$i]['login']=$pi->getLogin();
			 $pictures[$i]['pic']=$pi->getPic();
			 $pictures[$i]['date']=$pi->getDate();
			 $pictures[$i]['tag_id']=$pi->getTagId();
			 $kwerenda='SELECT login FROM likes WHERE picid='.$pictures[$i]['id'].';';
			 $dm=$this->getDoctrine()->getManager();
			 $connection = $dm->getConnection();
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $logins = $statement->fetchAll();
			 //var_dump($logins);
			 $polajkowane=0;
			 $like=0;
			 foreach ($logins as $login)
			 {
				$like++;
				if($login['login']==$_SESSION['CurrentUser']->getLogin()) $polajkowany=1;
			 }
			 $kwerenda='SELECT avatar FROM user WHERE login="'.$pictures[$i]['login'].'";';
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $user=$statement->fetchAll();
			 $usr['login']=$pictures[$i]['login'];
			 // $usr['name_and_surrname']=$user->getN
			 //var_dump($user);
			 if(isset($user[0]['avatar']))
			 {
				 $usr['avatar']=base64_encode(($user[0]['avatar']));
			 }
			 else 
			{
				$usr['avatar']="Brak Avatara";
			}
			$kwerenda='SELECT * FROM comment WHERE picid='.$pictures[$i]['id'].' Order BY date DESC LIMIT 3;';
			$statement=$connection->prepare($kwerenda);
			$statement->execute();
			$comms=$statement->fetchAll();
			$comm=array();
			$x=0;
			foreach ($comms as $com)
			{
			$comm[$x]['login']=$com['login'];
			$comm[$x]['date']=$com['date'];
			$comm[$x]['content']=$com['commentscontent'];
			}
			$pic[$i]['pic']=$pictures[$i]['pic'];
			$pic[$i]['id']=$pictures[$i]['id'];
			$pic[$i]['date']=$pictures[$i]['date'];
			$pic[$i]['comm']=$comm;
			$pic[$i]['usr']=$usr;
			$pic[$i]['likes']=$like;
			$pic[$i]['liked']=$polajkowane;
			 $i++;
	    }
		 if(!isset($pic)) $pic=0;
		 if(isset($_SESSION["CurrentUser"])){
			$loggedIn=true;
			$currentUserLogin=$_SESSION["CurrentUser"]->getLogin();
		}
		else{
			$loggedIn=false;
			$currentUserLogin='none';
		}
		 
		 if(isset($pictures))
		 return $this->render('SearchPanel/Explore.html.twig', array( 
			'loggedIn'=>$loggedIn,'placeholder'=>'placeholder','pic'=>$pic  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('SearchPanel/Explore.html.twig', array( 
			'loggedIn'=>$loggedIn,'placeholder'=>'placeholder','pic'=>$pic  // Tablica do wysyłania zmiennych do widoku 
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
	    foreach($pics as $pi)
	    {
			 
			 $pictures[$i]['id']=$pi->getId();
			 $pictures[$i]['login']=$pi->getLogin();
			 $pictures[$i]['pic']=$pi->getPic();
			 $pictures[$i]['date']=$pi->getDate();
			 $pictures[$i]['tag_id']=$pi->getTagId();
			 $kwerenda='SELECT login FROM likes WHERE picid='.$pictures[$i]['id'].';';
			 $dm=$this->getDoctrine()->getManager();
			 $connection = $dm->getConnection();
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $logins = $statement->fetchAll();
			 //var_dump($logins);
			 $polajkowane=0;
			 $like=0;
			 foreach ($logins as $login)
			 {
				$like++;
				if($login['login']==$_SESSION['CurrentUser']->getLogin()) $polajkowany=1;
			 }
			 $kwerenda='SELECT avatar FROM user WHERE login="'.$pictures[$i]['login'].'";';
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $user=$statement->fetchAll();
			 $usr['login']=$pictures[$i]['login'];
			 // $usr['name_and_surrname']=$user->getN
			 //var_dump($user);
			 if(isset($user['avatar']))
			 {
				 $usr['avatar']=base64_encode(stream_get_contents($user['avatar']));
				 
			 }
			 
			 else
			{
				
				$usr['avatar']="Brak Avatara";
				
			}
			
			$kwerenda='SELECT * FROM comment WHERE picid='.$pictures[$i]['id'].' ORDER BY date DESC LIMIT 3;';
			$statement=$connection->prepare($kwerenda);
			$statement->execute();
			$comms=$statement->fetchAll();
			$comm=array();
			$x=0;
			
			foreach ($comms as $com)
			{
				
			$comm[$x]['login']=$com["login"];
			$comm[$x]['date']=$com['date'];
			$comm[$x]['content']=$com['commentscontent'];
			$x++;
			}
			$pic[$i]['pic']=$pictures[$i]['pic'];
			$pic[$i]['id']=$pictures[$i]['id'];
			$pic[$i]['date']=$pictures[$i]['date'];
			$pic[$i]['comm']=$comm;
			$pic[$i]['usr']=$usr;
			$pic[$i]['likes']=$like;
			$pic[$i]['liked']=$polajkowane;
			 $i++;
	    }
	    $Repository = $this->getDoctrine()->getRepository('AppBundle:tags');
		
	    if(isset($pictures))
		 return $this->render('SearchPanel/Explore.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder,'pic'=>$pic  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('SearchPanel/Explore.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder,'pic'=>$pic)); // Tablica do wysyłania zmiennych do widoku 
	    if(!isset($pictures))
	    {
	    	$pictures='';
	    }
	    if(!isset($users))
	    {
	    	$users='';
	    }
		 return $this->render('SearchPanel/Results.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder,
			'users'=>$users,'pic'=>$pic   // Tablica do wysyłania zmiennych do widoku 
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

	    $i=0;
	    $Repository=$this->getDoctrine()->getRepository('AppBundle:pic');
	  
	    foreach ($tgs as $tag) 
	    {
	    	//$tags[$i]['contentId']= $tag->getContentid();
	    	//$tags[$i]['kindOfContent']=$tag->getOf();  Narazie tylko zdjęcia
	    	$pic_buff=$Repository->findOneById($tag->getContentid());
	    	$pictures[$i]['id']=$pic_buff->getId();
	    	$pictures[$i]['pic']=$pic_buff->getPic();
	    	$i++;
	    }


	    if(!isset($pictures))
	    	 $pictures='';
	   
	    if(!isset($users))
	    	$users='';

		 return $this->render('SearchPanel/Results.html.twig', array( 
			'users'=> $users,'placeholder'=>$PlaceHolder,
			'pictures'=>$pictures  // Tablica do wysyłania zmiennych do widoku 
				));
		
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
	
	/**
     * @Route("/Following")
     */
	 public function Following()
	 {
		if(!isset($_SESSION))
		{
			return new Response("Nie jesteś zalogowany");
		}
		$err_comm="";
		$PlaceHolder="Wyszukaj po nazwie użytkownika "; // dodać tagi jak będą gotowe
		$Repository = $this->getDoctrine()->getRepository('AppBundle:pic');
		$followusers=$this->getDoctrine()
		->getRepository('AppBundle:subscriptions')
		->findByIdsub2($_SESSION['CurrentUser']->getLogin());
		$foll='';
		foreach($followusers as $fl)
		{
			$foll.="'".$fl->getIdsubscriber()."',";
		}
		$i=strlen($foll);
		if($i>0) 
		{
			$foll[$i-1]=' ';
		
		
		$query = $Repository->createQueryBuilder('p')
		->where('p.login IN('.$foll.')')
		->orderBy('p.date','DESC')
		->setMaxResults(20) // Tutaj można zmieniać ilość wyświetlanych zdjęć. 
		->getQuery();
		$pics = $query->getResult();
		$i = 0 ; 
	    foreach($pics as $pi)
	    {
			 
			 $pictures[$i]['id']=$pi->getId();
			 $pictures[$i]['login']=$pi->getLogin();
			 $pictures[$i]['pic']=$pi->getPic();
			 $pictures[$i]['date']=$pi->getDate();
			 $pictures[$i]['tag_id']=$pi->getTagId();
			 $kwerenda='SELECT login FROM likes WHERE picid='.$pictures[$i]['id'].';';
			 $dm=$this->getDoctrine()->getManager();
			 $connection = $dm->getConnection();
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $logins = $statement->fetchAll();
			 //var_dump($logins);
			 $polajkowane=0;
			 $like=0;
			 foreach ($logins as $login)
			 {
				$like++;
				if($login['login']==$_SESSION['CurrentUser']->getLogin()) $polajkowany=1;
			 }
			 $kwerenda='SELECT avatar FROM user WHERE login="'.$pictures[$i]['login'].'";';
			 $statement=$connection->prepare($kwerenda);
			 $statement->execute();
			 $user=$statement->fetchAll();
			 $usr['login']=$pictures[$i]['login'];
			 // $usr['name_and_surrname']=$user->getN
			 //var_dump($user);
			 if(isset($user['avatar']))
			 {
				 $usr['avatar']=base64_encode(($user['avatar']));
				 
			 }
			 
			 else
			{
				
				$usr['avatar']="Brak Avatara";
				
			}
			
			$kwerenda='SELECT * FROM comment WHERE picid='.$pictures[$i]['id'].' ORDER BY date DESC LIMIT 3;';
			$statement=$connection->prepare($kwerenda);
			$statement->execute();
			$comms=$statement->fetchAll();
			$comm=array();
			$x=0;
			
			foreach ($comms as $com)
			{
				
			$comm[$x]['login']=$com["login"];
			$comm[$x]['date']=$com['date'];
			$comm[$x]['content']=$com['commentscontent'];
			$x++;
			}
			$pic[$i]['pic']=$pictures[$i]['pic'];
			$pic[$i]['id']=$pictures[$i]['id'];
			$pic[$i]['date']=$pictures[$i]['date'];
			$pic[$i]['comm']=$comm;
			$pic[$i]['usr']=$usr;
			$pic[$i]['likes']=$like;
			$pic[$i]['liked']=$polajkowane;
			 $i++;
	    }
	    //$Repository = $this->getDoctrine()->getRepository('AppBundle:tags');
	 }
	 if(!isset($pic)) $pic=0;
	    if(isset($pictures))
		 return $this->render('SearchPanel/Explore.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder,'pic'=>$pic  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('SearchPanel/Explore.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder,'pic'=>$pic)); // Tablica do wysyłania zmiennych do widoku 
	    if(!isset($pictures))
	    {
	    	$pictures='';
	    }
	    if(!isset($users))
	    {
	    	$users='';
	    }
		 return $this->render('SearchPanel/Results.html.twig', array( 
			'pictures'=> $pictures,'placeholder'=>$PlaceHolder,
			'users'=>$users,'pic'=>$pic   // Tablica do wysyłania zmiennych do widoku 
				));
	
		
	 }
	}
}