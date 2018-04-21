<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pic_uploader extends Controller
{
    /**
     * @Route("/upload")
     */
    public function pic_upload()
    {
        $number=0;

        return $this->render('image_upload.html', array(
            'number' => $number));
    }

    /**
     * @Route("/pic_edit")
     */
    public function pic_edit()
    {
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            if($check !== false) {
                echo "Plik jest obrazem- " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "Plik nie jest obrazem.";
                $uploadOk = 0;
            }
        }
        $name='';
        for($i=strlen($target_file)-1;$i>1;$i--)
        {
            if($target_file[$i]=='.')
            {
                $name=substr($target_file, 0, $i);
                break;
            }
        }
        $conc=0;
        for(;;)
        {
            if (file_exists($name.$conc.'.'.$imageFileType))
            {
                $conc++;
            } 
            else break;
        }
        $target_file=$name.$conc.'.'.$imageFileType;
        if ($_FILES["img"]["size"] > 5000000) {
            echo "Twój plik jest za duży.";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
        {
            $uploadOk = 0;
        }
        if ($uploadOk == 0)
        {
            return $this->render('image_upload.html', array(
            'err' => 'Wystąpiły pewne problemy z obrazem'));
        } 
        else
        {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) 
            {
                return $this->render('image_upload.html', array(
            'err' => 'success', 'pic_name' => $target_file));
            }
            else
            {
                return $this->render('image_upload.html', array(
                'err' => 'Wystąpiły pewne problemy z obrazem'));
            }
        }

    }
}
?>