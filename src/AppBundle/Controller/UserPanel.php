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
    	
    	 $Actual_avatar = $_SESSION['CurrentUser']->getAvatar();
    	if(!isset($Actual_avatar)) // Warning 
    	{
    		$Actual_avatar="Brak Avatara";
    	}
    	else
    	{
    		$Actual_avatar=base64_encode($_SESSION['CurrentUser']->getAvatar());

    	}

    	return $this->render('UserPanel/UserPanel.html.twig',array(
    	'login'=>$_SESSION["CurrentUser"]->getLogin(),
    	'email'=>$_SESSION["CurrentUser"]->getEmail(),
    	'role'=>$_SESSION["CurrentUser"]->getRole(),
    	'reg_date'=>$_SESSION["CurrentUser"]->getRegistrationDate(),
    	'Actual_avatar'=> $Actual_avatar,
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
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneBylogin($_SESSION["CurrentUser"]->getLogin());
		
			 if (!$EditedUser)
			 {
  		 	return new Response("Błąd, nie można znaleźć użytkownika\nERROR: ULU");  // skrót od nazwy funkcji 
    		 
   			 }
   	  
         $repository = $this->getDoctrine()->getRepository('AppBundle:user');
		 $loginToEdit = filter_var($_POST['edtLogin'],FILTER_SANITIZE_STRING);
         $numberOfLogins= count($repository->findBylogin($loginToEdit),COUNT_NORMAL);
        
        if($numberOfLogins>0)
        {          
           	$_SESSION["err_comm"]="Podany login jest już zajęty.";
             return $this->redirect("/Panel");
        }
   	    
   		//$loginToEdit = $_POST['edtLogin'];
   		
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
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneBylogin($_SESSION["CurrentUser"]->getLogin());

    	if(!$EditedUser)
    	{
    		return new Response("Błąd, nie można znaleźć użytkownika\nERROR: UEU");
    	}
  	
  		$repository = $this->getDoctrine()->getRepository('AppBundle:user');
        $emailToEdit = filter_var($_POST['edtEmail'],FILTER_SANITIZE_EMAIL);
        $numberofMails = count($repository->findByemail($emailToEdit),COUNT_NORMAL);

        if($numberofMails>0)
        {
           	$_SESSION["err_comm"]="Podany login jest już zajęty.";
             return $this->redirect("/Panel");
        }

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
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneBylogin($_SESSION["CurrentUser"]->getLogin());

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
   		$_SESSION["err_comm"] = "Zaaktualizowano  Hasło !";
    	return $this->redirect("/Panel"); 	
  	  }


  	  /**
     * @Route("/UserAvatarUpdated")
     */
  	  public function UserAvatarUpdated()
  	  {
	 	if(!isset($_SESSION["CurrentUser"]))
    	{
    		 return new Response("Nie posiadasz uprawinień do przeglądania tej strony");
    	}

    	$DoctrineManager = $this->getDoctrine()->getManager();
    	$EditedUser=$DoctrineManager->getRepository('AppBundle:user')->findOneBylogin($_SESSION["CurrentUser"]->getLogin());

    	if(!$EditedUser)
    	{
    		return new Response("Błąd, nie można znaleźć użytkownika\nERROR: UEU");
    	}
  
    	if(is_uploaded_file($_FILES['avatar']['tmp_name']))
    	{
    		$file = file_get_contents($_FILES['avatar']['tmp_name']);
    		$max = 1024*64; // Max rozdzielczosc
    		$sizeOfFile= $_FILES['avatar']['size'];
    		
    		if($sizeOfFile>$max)
    		{
    			$_SESSION["err_comm"]="Przekroczono dopuszczalną wielkość pliku. Rozmiar obrazu to: ".$sizeOfFile."  Dopuszczalna wielkosc to ".$max." !";
    			
    			return $this->redirect("\Panel");
    		//	return new Response(var_dump($sizeOfFile));
    		}
    		else
    		{
    			$EditedUser->setAvatar($file);
    			$DoctrineManager->flush();
    			$_SESSION["CurrentUser"]=$EditedUser;
    			$_SESSION["err_comm"] = "Zaaktualizowano  Avatara !";
    			return $this->redirect("/Panel"); 	
    		}
    	}
    	else return $this->redirect("\Panel");
  	  }
 	
 	/**
     * @Route("/Logout")
     */
 	public function Logout()
 	{
 		session_destroy();
 		return $this->redirect("\Login");
 	}
}
?>