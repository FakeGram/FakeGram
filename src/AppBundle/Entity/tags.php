<?php

namespace AppBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  *	@ORM\Table(name="tags")
  */
class tags
{
	 /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
     /**
     * @ORM\Column(type="string", length=64)
     */
     private $tag;
     /**
     * @ORM\Column(type="string", length=16)
     */
     private $of;
     /**
     * @ORM\Column(type="integer")
     */
     private $content_id;
    



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
     * Set tag
     *
     * @param string $tag
     *
     * @return tags
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set of
     *
     * @param string $of
     *
     * @return tags
     */
    public function setOf($of)
    {
        $this->of = $of;
    
        return $this;
    }

    /**
     * Get of
     *
     * @return string
     */
    public function getOf()
    {
        return $this->of;
    }

    /**
     * Set contentId
     *
     * @param integer $contentId
     *
     * @return tags
     */
    public function setContentId($contentId)
    {
        $this->content_id = $contentId;
    
        return $this;
    }

    /**
     * Get contentId
     *
     * @return integer
     */
    public function getContentId()
    {
        return $this->content_id;
    }
}
