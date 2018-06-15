<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);*/
    
        if(isset($_SESSION))
        {
                    $err_comm="";
                    $PlaceHolder="Wyszukaj po nazwie użytkownika "; // dodać tagi jak będą gotowe
                    $Repository = $this->getDoctrine()->getRepository('AppBundle:pic');
                    
                    $query = $Repository->createQueryBuilder('p')
                    ->orderBy('p.date','DESC')
                    ->setMaxResults(20) // Tutaj można zmieniać ilość wyświetlanych zdjęć. 
                    ->getQuery();
                    $pics = $query->getResult();
                    $i = 0 ; 
                    foreach($pics as $pi)
                    {
                         
                         $pictures[$i]['id']=$pi->getId();
                         $pictures[$i]['login']=$pi->getLogin();
                         $pictures[$i]['pic']=$pi->getPic();
                         $pictures[$i]['date']=$pi->getDate();
                         $pictures[$i]['tag_id']=$pi->getTagId();
                         $kwerenda='SELECT login FROM likes WHERE picid='.$pictures[$i]['id'].';';
                         $dm=$this->getDoctrine()->getManager();
                         $connection = $dm->getConnection();
                         $statement=$connection->prepare($kwerenda);
                         $statement->execute();
                         $logins = $statement->fetchAll();
                         //var_dump($logins);
                         $polajkowane=0;
                         $like=0;
                         foreach ($logins as $login)
                         {
                            $like++;
                            if($login['login']==$_SESSION['CurrentUser']->getLogin()) $polajkowany=1;
                         }
                         $kwerenda='SELECT avatar FROM user WHERE login="'.$pictures[$i]['login'].'";';
                         $statement=$connection->prepare($kwerenda);
                         $statement->execute();
                         $user=$statement->fetchAll();
                         $usr['login']=$pictures[$i]['login'];
                         // $usr['name_and_surrname']=$user->getN
                         //var_dump($user);
                         if(isset($user['avatar']))
                         {
                             $usr['avatar']=base64_encode(stream_get_contents($user['avatar']));
                             
                         }
                         
                         else
                        {
                            
                            $usr['avatar']="Brak Avatara";
                            
                        }
                        
                        $kwerenda='SELECT * FROM comment WHERE picid='.$pictures[$i]['id'].' ORDER BY date DESC LIMIT 3;';
                        $statement=$connection->prepare($kwerenda);
                        $statement->execute();
                        $comms=$statement->fetchAll();
                        $comm=array();
                        $x=0;
                        
                        foreach ($comms as $com)
                        {
                            
                        $comm[$x]['login']=$com["login"];
                        $comm[$x]['date']=$com['date'];
                        $comm[$x]['content']=$com['commentscontent'];
                        $x++;
                        }
                        $pic[$i]['pic']=$pictures[$i]['pic'];
                        $pic[$i]['id']=$pictures[$i]['id'];
                        $pic[$i]['date']=$pictures[$i]['date'];
                        $pic[$i]['comm']=$comm;
                        $pic[$i]['usr']=$usr;
                        $pic[$i]['likes']=$like;
                        $pic[$i]['liked']=$polajkowane;
                         $i++;
                    }
                    $Repository = $this->getDoctrine()->getRepository('AppBundle:tags');
                    
                    if(isset($pictures))
                     return $this->render('SearchPanel/Explore.html.twig', array( 
                        'pictures'=> $pictures,'placeholder'=>$PlaceHolder,'pic'=>$pic  // Tablica do wysyłania zmiennych do widoku 
                            ));
                    else
                    {
                        $pictures='';
                        return $this->render('SearchPanel/Explore.html.twig', array( 
                        'pictures'=> $pictures,'placeholder'=>$PlaceHolder,'pic'=>$pic)); // Tablica do wysyłania zmiennych do widoku 
                    if(!isset($pictures))
                    {
                        $pictures='';
                    }
                    if(!isset($users))
                    {
                        $users='';
                    }
                     return $this->render('SearchPanel/Results.html.twig', array( 
                        'pictures'=> $pictures,'placeholder'=>$PlaceHolder,
                        'users'=>$users,'pic'=>$pic   // Tablica do wysyłania zmiennych do widoku 
                            ));
                 }
        }
        else
        {
            return $this->render('SearchPanel/Login.html.twig');
        }
    }
}

