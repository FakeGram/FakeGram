<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Login extends Controller
{
    /**
     * @Route("/Login")
     */
    public function Register()
    {
        $number = mt_rand(0, 100); // narazie nie wywalać bo zmienna ta musi istnieć,żeby ją wysłać 

        return $this->render('Login/Login.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'number' => $number));
    }

    /**
     * @Route("/execute_login")
     */
    public function Login()
    {
    	$number = $_POST['pwd'];
    	  return $this->render('Login/Login.html.twig', array(   // Tablica do wysyłania zmiennych do widoku 
            'number' => $number));
    }
}
?>