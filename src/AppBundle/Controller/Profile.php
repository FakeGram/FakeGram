<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\pics;

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
		 
		 
		 
		 if(isset($pictures))
		 return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr // Tablica do wysyłania zmiennych do widoku 
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
		 
		 
		 
		 if(isset($pictures))
		 return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr  // Tablica do wysyłania zmiennych do widoku 
				));
		else
		{
			$pictures='';
			return $this->render('Profile/Profile.html.twig', array( 
			'pictures'=> $pictures,'user'=>$usr  // Tablica do wysyłania zmiennych do widoku 
				));
		}
	 }
	 
	 /**
     * @Route("/Photo/{PhotoId}")
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
		
		/*TU BĘDZIE POBIERANIE KOMENTARZY
		$comms=$this->GetDoctrine()
		->getRepository('AppBundle:comment')
		->findByPicid($pictures['id']);
		$i=0;
		foreach($comms as $comm)
		{
			$comments[$i]['id']=$comm->getId();
			$comments[$i]['content']=$comm->getComments_Content();
			$comments[$i]['date']=$comm->getDate();
			$comments[$i]['login']=$comm->getLogin();
			$comments[$i]['tag_id']=$comm->getTag_Id();
		}*/
		
		//TU POBIERANIE TAGOW
		/*$tgs=$this->GetDoctrine()
		->getRepository('AppBundle:tags')
		->findBy*/
		
		
		
		
		if(isset($comments))
		return $this->render('Profile/Photo.html.twig', array( 
			'pic'=> $pictures,'usr'=>$user,'comms'=>$comments  // Tablica do wysyłania zmiennych do widoku 
				));
		else 
			return $this->render('Profile/Photo.html.twig', array( 
			'pic'=> $pictures,'usr'=>$user  // Tablica do wysyłania zmiennych do widoku 
				));
	 }
}