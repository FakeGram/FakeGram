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
		 findOneByLogin($_SESSION["CurrentUser"]->getLogin());
		 echo '<br/><br/>';
		 var_dump($user);
		 echo '<br/><br/>';
		 $usr['login']=$user->getLogin();
		 $usr['email']=$user->getEmail();
		 $usr['nameAndSurrname']=$user->getNameAndSurrname();
		 $usr['about']=$user->getAbout();
		 $usr['avatar']=$user->getAvatar();
		 
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
	
}