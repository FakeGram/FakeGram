<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\user;

//session_start();

class UserPanel extends Controller
{
	 /**
     * @Route("/PanelT")
     */
    public function PanelT() // do Testów
    {
       $err_comm = "DEV: It Cannons !";// narazie nie wywalać bo zmienna ta musi istnieć,żeby ją wysłać 

        return $this->render('UserPanel/UserPanel.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'err_comm' => $err_comm));
    }
    
     /**
     * @Route("/Panel")
     */
    public function Panel() // ewentualnie przenieść to do rejestracji z tym,że i tak potrzebne jest zabezpieczenie,żeby nikt nie miał dostępu jak sobie wpisze po prostu http://localhost:8000/Panel
    {
    	if(!isset($_SESSION["CurrentUser"]))
    	{
    		 return new Response("Nie posiadasz uprawinień do przeglądania tej strony");
    	}
    	return $this->render('UserPanel/UserPanel.html.twig',array(
    	'login'=>$_SESSION["CurrentUser"]->getLogin(),
    	'email'=>$_SESSION["CurrentUser"]->getEmail(),
    	'role'=>$_SESSION["CurrentUser"]->getRole(),
    	'reg_date'=>$_SESSION["CurrentUser"]->getRegistrationDate(),
    	'err_comm'=>''
    	));
    }

    /**
     * @Route("/UserLoginUpdated")
     */
 	public function UserLoginUpdated()
 	{
		if(!isset($_SESSION["CurrentUser"]))
    	{
    		 return new Response("Nie posiadasz uprawinień do przeglądania tej strony");
    	}
    	$DoctrineManager = $this->getDoctrine()->getManager();
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneByLogin($_SESSION["CurrentUser"]->getLogin());
		
			 if (!$EditedUser)
			 {
   		  	   return new Response ("Update Login nie działa");
    		 
   			 }

   		$loginToEdit = $_POST['edtLogin'];
   		$EditedUser->setLogin($loginToEdit);
   		$DoctrineManager->flush();
   		 return $this->redirect("/Panel");
 	}
}
?>