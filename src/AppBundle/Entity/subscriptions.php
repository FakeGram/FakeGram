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
     * @ORM\Column(type="string", length=64)
     */
     private $idsubscriber;
     /**
     * @ORM\Column(type="string", length=64)
     */
     private $idsub2;
    
    



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
     * @param string $idSubscriber
     *
     * @return subscriptions
     */
    public function setIdSubscriber($idSubscriber)
    {
        $this->idsubscriber = $idSubscriber;
    
        return $this;
    }

    /**
     * Get idSubscriber
     *
     * @return string
     */
    public function getIdSubscriber()
    {
        return $this->idsubscriber;
    }

    /**
     * Set idSub2
     *
     * @param string $idSub2
     *
     * @return subscriptions
     */
    public function setIdSub2(string $idSub2)
    {
        $this->idsub2 = $idSub2;
    
        return $this;
    }

    /**
     * Get idSub2
     *
     * @return string
     */
    public function getIdSub2()
    {
        return $this->idsub2;
    }
}
