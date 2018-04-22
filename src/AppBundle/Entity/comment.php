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

class comment // uważać może powodować błędy ze względu na keyword DB USER 
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
     private $comments_content;
     /**
     * @ORM\Column(type="integer")
     */
     private $pic_id;
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
     private $tag_id;
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
     * Set pic_id
     *
     * @param \DateTime $pic_id
     *
     * @return comment
     */
    public function setPic_Id($pic_id)
    {
        $this->pic_id = $pic_id;

        return $this;
    }
    /**
     * Get pic_id
     *
     * @return integer
     */
    public function getPic_Id()
    {
        return $this->pic_id;
    }
     /**
     * Set comments_content
     *
     * @param string $comments_content
     *
     * @return comment
     */
    public function setComments_Content($comments_content)
    {
        $this->comments_content = $comments_content;

        return $this;
    }
    /**
     * Get comments_content
     *
     * @return string
     */
    public function getComments_Content()
    {
        return $this->comments_content;
    }
    /**
     * Set tag_id
     *
     * @param integer $tag_id
     *
     * @return comment
     */
    public function setTag_Id($tag_id)
    {
        $this->tag_id = $tag_id;

        return $this;
    }
    /**
     * Get tag_id
     *
     * @return integer
     */
    public function getTag_Id()
    {
        return $this->tag_id;
    }
}