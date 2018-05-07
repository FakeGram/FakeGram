<?php

namespace AppBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  *	@ORM\Table(name="subscriptions")
  */
class subscriptions
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
     private $id_subscriber;
     /**
     * @ORM\Column(type="ineger")
     */
     private $id_sub2;
    
    



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
     * Set idSubscriber
     *
     * @param integer $idSubscriber
     *
     * @return subscriptions
     */
    public function setIdSubscriber($idSubscriber)
    {
        $this->id_subscriber = $idSubscriber;
    
        return $this;
    }

    /**
     * Get idSubscriber
     *
     * @return integer
     */
    public function getIdSubscriber()
    {
        return $this->id_subscriber;
    }

    /**
     * Set idSub2
     *
     * @param \ineger $idSub2
     *
     * @return subscriptions
     */
    public function setIdSub2(\ineger $idSub2)
    {
        $this->id_sub2 = $idSub2;
    
        return $this;
    }

    /**
     * Get idSub2
     *
     * @return \ineger
     */
    public function getIdSub2()
    {
        return $this->id_sub2;
    }
}
