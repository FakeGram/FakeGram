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
    public function Panel() // ewentualnie przenieść to do rejestracji z tym,że i tak potrzebne jest zabezpieczenie,żeby nikt nie miał dostępu jak sobie wpisze po prostu http://localhost:8000/
    {																																												//Panel
    	if(!isset($_SESSION["CurrentUser"]))
    	{
    		 return new Response("Nie posiadasz uprawinień do przeglądania tej strony");
    	}
    	
    	if(!isset($_SESSION["err_comm"]))
    	{
    		$err_comm='';
    	}
    	else
    	{
    		$err_comm = $_SESSION["err_comm"];
    		$_SESSION["err_comm"]="";
    	} 

    	return $this->render('UserPanel/UserPanel.html.twig',array(
    	'login'=>$_SESSION["CurrentUser"]->getLogin(),
    	'email'=>$_SESSION["CurrentUser"]->getEmail(),
    	'role'=>$_SESSION["CurrentUser"]->getRole(),
    	'reg_date'=>$_SESSION["CurrentUser"]->getRegistrationDate(),
    	'err_comm'=>$err_comm
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
  		 	return new Response("Błąd, nie można znaleźć użytkownika\nERROR: ULU");  // skrót od nazwy funkcji 
    		 
   			 }
   	  
     

   		//$loginToEdit = $_POST['edtLogin'];
   		 $loginToEdit = filter_var($_POST['edtLogin'],FILTER_SANITIZE_STRING);
   		$EditedUser->setLogin($loginToEdit);
   		$DoctrineManager->flush();
   		$_SESSION["CurrentUser"]=$EditedUser;
   		$_SESSION["err_comm"] = "Zaaktualizowano nazwę użytkownika! ";
   		  return $this->redirect("/Panel");
   		
 	}

  	 /**
     * @Route("/UserEmailUpdated")
     */
  	 public function UserEmailUpdated()
  	 {
  	 	if(!isset($_SESSION["CurrentUser"]))
    	{
    		 return new Response("Nie posiadasz uprawinień do przeglądania tej strony");
    	}

    	$DoctrineManager = $this->getDoctrine()->getManager();
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneByLogin($_SESSION["CurrentUser"]->getLogin());

    	if(!$EditedUser)
    	{
    		return new Response("Błąd, nie można znaleźć użytkownika\nERROR: UEU");
    	}
  

        $emailToEdit = filter_var($_POST['edtEmail'],FILTER_SANITIZE_EMAIL);
    	$EditedUser->setEmail($emailToEdit);
    	$DoctrineManager->flush();
    	$_SESSION["CurrentUser"]=$EditedUser;
    	$_SESSION["err_comm"] = "Zaaktualizowano adres e-Mail !";
    	return $this->redirect("/Panel"); 	
  	 }

  	  /**
     * @Route("/UserPassUpdated")
     */
  	  public function UserPassUpdated()
  	  {
  	  	if(!isset($_SESSION["CurrentUser"]))
    	{
    		 return new Response("Nie posiadasz uprawinień do przeglądania tej strony");
    	}
    	$DoctrineManager = $this->getDoctrine()->getManager();
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneByLogin($_SESSION["CurrentUser"]->getLogin());

    	if(!$EditedUser)
    	{
    		return new Response("Błąd, nie można znaleźć użytkownika\nERROR: UPU");
    	}

    	$passToEdit =$_POST['edtPass'];
    	$passToCompare =$_POST['edtPass2'];

    	if(strlen($passToEdit) <8 || strlen($passToEdit) > 25)
        {
           // $Validation_OK=false;
           $_SESSION["err_comm"]="Hasło musi być dłuższe niż 8 znaków i krótsze niż 25 znaków";
          
      			  return $this->redirect("/Panel"); 	
        }

        if($passToEdit != $passToCompare)
        {
           // $Validation_OK=false;
           $_SESSION["err_comm"]="Podane hasłą muszą być identyczne";
           
            return $this->redirect("/Panel"); 	
   		}

   		$passToEdit_hased = password_hash($passToEdit,PASSWORD_DEFAULT);
   		$EditedUser->setPass($passToEdit_hased);
   		$DoctrineManager->flush();
   		$_SESSION["CurrentUser"]=$EditedUser;
   		$_SESSION["err_comm"] = "Zaaktualizowano adres Hasło !";
    	return $this->redirect("/Panel"); 	
  	  }
}
?>