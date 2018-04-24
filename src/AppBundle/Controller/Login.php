<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\user;

class Login extends Controller
{
    /**
     * @Route("/Login")
     */
    public function Login()
    {
        
        $err_comm = "";
        return $this->render('Login/Login.html.twig', array( 
        'err_comm'=> $err_comm  // Tablica do wysyłania zmiennych do widoku 
            ));
    }

    /**
     * @Route("/execute_login")
     */
    public function execute_login()
    {
<<<<<<< HEAD

    if(!isset($_SESSION))
    {
        session_start();
    }
     
=======
        session_start();
>>>>>>> 773ced3c122e757155ac460653471435393aa21b
      $email = $_POST['email'];
      $pass = $_POST['pwd'];
      // kwestie bezpieczeństwa 
     // $login=htmlentities($login,ENT_QUOTES,"utf-8");

        $user = $this->getDoctrine()
        ->getRepository('AppBundle:user')
        ->findOneByEmail($email);

        if(is_null($user))
        {
         //    throw new  $this->createNotFoundException(
          //          'Nie ma takiego adresu E-mail'
          //  );
            $err_comm ="Błędny adres E-mail ";
               return $this->render('Login/Login.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'err_comm' => $err_comm));
        }

 
        if(!password_verify($pass,$user->getPass())) // sprawdezamy hasło 
        {
           //  throw new  $this->createNotFoundException(
            //        'Błędne hasło'
           // );
            $err_comm ="Błędne hasło ";
            
          return $this->render('Login/Login.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'err_comm' => $err_comm));

        }
        

        $_SESSION["CurrentUser"]=$user;
        
        return $this->redirect("/Panel");
        //return new Response('Zalogowano! Dane: id '.$user->getLogin().$user->getId().$user->getEmail()); // dodać render Panelu i przekazać dane logowania 
       // return UserPanel.Panel()
    }

    /**
     * @Route("/Registration")
     */
    public function Registration()
    {
         $err_comm = ""; // ewentualny komunikat dev

        return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));


    }

       /**
     * @Route("/Register")
     */
   public function Register()
    {
     //  $dev_comm = $_POST['login']." ".$_POST['email']." ".$_POST['pwd']; // testowy komunikat
        try
        {
            $err_comm="";
        /**
        return $this->render('Login/Register.html.twig',array(
        'dev_comm' => $dev_comm));
        */
        $login = $_POST['login'];
        $email = $_POST['email'];
        $pwd   = $_POST['pwd'];
        $pwd_ack = $_POST['pwd_ack'];

// Dodać sprawdzanie czy Login jest dotępny 
       if(strlen($login) <3 || strlen($login) > 10)
       {
            $err_comm="Login musi mieć minimum 3 znaki i maksimum 10 znaków";
           
             return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));
       }
       if(ctype_alnum($login)==false)
        {
           
             $err_comm="Login może składać się tylko z liter i cyfr bez polskich znaków";
           
             return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));
            
        }
       if(strlen($pwd) <8 || strlen($pwd) > 25)
        {
           // $Validation_OK=false;
            $err_comm="Hasło musi być dłuższe niż 8 znaków i krótsze niż 25 znaków";
           
             return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));
        }
        if($pwd != $pwd_ack)
        {
           // $Validation_OK=false;
            $err_comm="Podane hasłą muszą być identyczne";
           
             return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));
        }

       
        $filtered_login = filter_var($login,FILTER_SANITIZE_STRING);
        $filtered_email = filter_var($email,FILTER_SANITIZE_EMAIL);
        $repository = $this->getDoctrine()->getRepository('AppBundle:user');

        $numberOfLogins=count($repository->findBylogin($filtered_login),COUNT_NORMAL);
        
        if($numberOfLogins>0)
        {
            $err_comm="Podany Login jest już zajęty";
           
             return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));
        }

        $numberOfmails = count($repository->findByemail($filtered_email),COUNT_NORMAL);

         if($numberOfmails>0)
        {
            $err_comm="Podany adres e-Mail jest już zajęty";
           
             return $this->render('Login/Register.html.twig',array(
        'err_comm' => $err_comm));
        }

       // $encoder = $this->container->get('security.password_encoder');  | <--- ewentualnie na później jeśli pokusimy sie o implementacje user interface 
       // $pwd_hashed = $encoder->encodePassword($user,$pwd);             |
     
        $pwd_hashed = password_hash($pwd,PASSWORD_DEFAULT);
        

        $user = new user();
        $user->setLogin($filtered_login);
        $user->setEmail($filtered_email);
        $user->setPass($pwd_hashed);
      

       
        $statement=$this->getDoctrine()->getManager();
        $statement->persist($user);

        $statement->flush();
      
        // return $this->render('Login/Register.html.twig',array(
       // 'err_comm' => $err_comm));
        return new Response('Stworzono nowego użytkownika z id '.$user->getId());
       
        }
        catch(Exception $patronus)
        {
                echo '<span style="color:red;">Bład Serwera! Rejestracja tymczasowo niemożliwa</span>';
            echo '<br/>Informacje techniczne: '.$patronus; // Informacje Developerskie w wersji finalnej usunąć tą linię lub zmienić jej formę 
        }
    }
}
?>