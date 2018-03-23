<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class test extends Controller
{
    /**
     * @Route("/test")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('test.html', array(
            'number' => $number));
    }
}
?>