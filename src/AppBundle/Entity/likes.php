<?php

namespace AppBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  *	@ORM\Table(name="likes")
  */
class likes
{
	 /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
      /**
     * @ORM\Column(type="integer")
     */
     private $pic_id;
     /**
     * @ORM\Column(type="string", length=64)
     */
     private $login;
    
    



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set picId
     *
     * @param integer $picId
     *
     * @return likes
     */
    public function setPicId($picId)
    {
        $this->pic_id = $picId;
    
        return $this;
    }

    /**
     * Get picId
     *
     * @return integer
     */
    public function getPicId()
    {
        return $this->pic_id;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return likes
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
}
