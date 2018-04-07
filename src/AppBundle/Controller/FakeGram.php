<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FakeGram extends Controller
{
    /**
     * @Route("/FakeGram")
     */
    public function FakeGram()
    {
        $number=0;

        return $this->render('index.html', array(
            'number' => $number));
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        $number=0;

        return $this->render('image_upload.html', array(
            'number' => $number));
    }
}
?>