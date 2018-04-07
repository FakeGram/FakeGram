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
        $number = mt_rand(0, 100); // narazie nie wywalać bo zmienna ta musi istnieć,żeby ją wysłać 

        return $this->render('Login/Login.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'number' => $number));
    }

    /**
     * @Route("/execute_login")
     */
    public function execute_login()
    {
    	$number = $_POST['pwd'];
    	  return $this->render('Login/Login.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'number' => $number));
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
      
       // $encoder = $this->container->get('security.password_encoder');  | <--- ewentualnie na później jeśli pokusimy sie o implementacje user interface 
       // $pwd_hashed = $encoder->encodePassword($user,$pwd);             |
     
        $pwd_hashed = password_hash($pwd,PASSWORD_DEFAULT);
        

        $user = new user();
        $user->setLogin($filtered_login);
        $user->setEmail($filtered_email);
        $user->setPass($pwd_hashed);
      //  $user->setRegistrationDate()

       
        $statement=$this->getDoctrine()->getManager();
        $statement->persist($user);

        $statement->flush();
      
        // return $this->render('Login/Register.html.twig',array(
       // 'err_comm' => $err_comm));
        return new Response('Saved new product with id '.$user->getId());
       
        }
        catch(Exception $patronus)
        {
                echo '<span style="color:red;">Bład Serwera! Rejestracja tymczasowo niemożliwa</span>';
            echo '<br/>Informacje techniczne: '.$patronus; // Informacje Developerskie w wersji finalnej usunąć tą linię lub zmienić jej formę 
        }
    }
}
?>