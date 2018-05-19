<?php

namespace AppBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  *	@ORM\Table(name="comment")
  */

class comment
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
     /**
     * @ORM\Column(type="string", length=255)
     */
     private $commentscontent;
     /**
     * @ORM\Column(type="integer")
     */
     private $picid;
     /**
     * @ORM\Column(type="datetime")
     */
     private $date;
     /**
     * @ORM\Column(type="string", length=64)
     */
     private $login;
     /**
     * @ORM\Column(type="integer")
     */
     private $tagid;
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
     * Set login
     *
     * @param string $login
     *
     * @return comment
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
    /**
     * Set date
     *
     * @param string $date
     *
     * @return comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set picid
     *
     * @param \DateTime $picid
     *
     * @return comment
     */
    public function setpicid($picid)
    {
        $this->picid = $picid;

        return $this;
    }
    /**
     * Get picid
     *
     * @return integer
     */
    public function getpicid()
    {
        return $this->picid;
    }
     /**
     * Set commentscontent
     *
     * @param string $commentscontent
     *
     * @return comment
     */
    public function setCommentsContent($commentscontent)
    {
        $this->commentscontent = $commentscontent;

        return $this;
    }
    /**
     * Get comments_content
     *
     * @return string
     */
    public function getCommentsContent()
    {
        return $this->commentscontent;
    }
    /**
     * Set tag_id
     *
     * @param integer $tag_id
     *
     * @return comment
     */
    public function setTagId($tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }
    /**
     * Get tag_id
     *
     * @return integer
     */
    public function getTagId()
    {
        return $this->tagid;
    }
}