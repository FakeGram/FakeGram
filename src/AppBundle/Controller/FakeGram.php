<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FakeGram extends Controller
{
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