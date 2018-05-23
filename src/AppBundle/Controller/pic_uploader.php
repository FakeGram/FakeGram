<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\user;
use AppBundle\Entity\pic;
use AppBundle\Entity\tags;
class pic_uploader extends Controller
{
    /**
     * @Route("/upload")
     */
    public function pic_upload()
    {
        if(isset($_SESSION))
        {
        $number=0;
        return $this->render('ImgOperations/image_upload.html', array(
            'number' => $number));
        }
        else
        {
            return $this->render('login/login.html.twig', array(
            'err_comm' => 'nie jesteś zalogowany kolego'));
        }
    }

    /**
     * @Route("/pic_upload")
     */
    public function execute_pic_upload()
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
            $desc=$_POST['desc'];

            $DoctrineManager = $this->getDoctrine()->getManager();
            //$Login=$DoctrineManager->getRepository('AppBundle:user')->findOneBylogin($_SESSION["CurrentUser"]->getLogin());
            $Login=$_SESSION["CurrentUser"]->getLogin();
            $pic = new pic();
            $pic->setLogin($Login);
            $pic->setPic($target_file);
            $pic->setDescription($desc);
        
            $statement=$this->getDoctrine()->getManager();
            $statement->persist($pic);
            $statement->flush();

            /*
            $words=explode(' ', $desc);
            $tags=array();
            foreach ($words as $word)
            {
                if($word[0]='#') array_push($tags, $word);
            }
            foreach ($tags as $tag)
            {
                if($tag[strlen($tag)-1]==','||$tag[strlen($tag)-1]=='.') $tag=substr($tag, 0, strlen($tag)-2);
            }

            $PicId=$DoctrineManager->getRepository('AppBundle:pic')->findOneBypic();
            $PicId=$PicId->getId();*/

                return $this->render('ImgOperations/image_edit.html.twig', array(
            'err' => 'success', 'pic_name' => $target_file));
            }
            else
            {
                return $this->render('ImgOperations/image_upload.html', array(
                'err' => 'Wystąpiły pewne problemy z obrazem'));
            }
        }

    }

    /**
     * @Route("/save_edited")
     */
    public function save_edited()
    {
        $pic = $_POST['pic'];
        $pic = substr($pic,strpos($pic,",")+1);
        $pic = base64_decode($pic);
        $pic_name=$_POST['name'];

        $user=$_SESSION['CurrentUser']->getLogin();
        $DoctrineManager = $this->getDoctrine()->getManager();
        $picNameToCompare = $this->getDoctrine()->getRepository('AppBundle:pic')->findOneByPic($pic_name)->getPic();
        if($picNameToCompare!=$pic_name||!isset($_SESSION))
        {
            return new Response("o ty ty niedobry");
        }
        else
        {
            //move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            //$fp = fopen($pic_name, 'w');
            //fwrite($fp, $file);
            file_put_contents($pic_name, $pic);
            return $this->render('Profile/Profile.html');
        }


/*
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
            $desc=$_POST['desc'];

            $DoctrineManager = $this->getDoctrine()->getManager();
            //$Login=$DoctrineManager->getRepository('AppBundle:user')->findOneBylogin($_SESSION["CurrentUser"]->getLogin());
            $Login=$_SESSION["CurrentUser"]->getLogin();
            $pic = new pic();
            $pic->setLogin($Login);
            $pic->setPic($target_file);
            $pic->setDescription($desc);
        
            $statement=$this->getDoctrine()->getManager();
            $statement->persist($pic);
            $statement->flush();

                return $this->render('ImgOperations/image_edit.html.twig', array(
            'err' => 'success', 'pic_name' => $target_file));
            }
            else
            {
                return $this->render('ImgOperations/image_upload.html', array(
                'err' => 'Wystąpiły pewne problemy z obrazem'));
            }
        }*/

    }
}
?>