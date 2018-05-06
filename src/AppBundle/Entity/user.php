<?php

namespace AppBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  *	@ORM\Table(name="user")
  */
class user // uważać może powodować błędy ze względu na keyword DB USER 
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
     private $login;

     /**
     * @ORM\Column(type="string", length=128)
     */
     private $pass;
     /**
     * @ORM\Column(type="string", length=64)
     */
     private $email;
     /**
     * @ORM\Column(type="string", length=128)
     */
     private $name_and_surrname;
      /**
     * @ORM\Column(type="integer", length=128)
     */
     private $activation_code;
     /**
     * @ORM\Column(type="string", length=64)
     */
     private $country;
     /**
     * @ORM\Column(type="datetime")
     */
     private $registration_date;
     /**
     * @ORM\Column(type="blob")
     */
     private $avatar;
      /**
     * @ORM\Column(type="text")
     */
     private $role;
      /**
     * @ORM\Column(type="string", length=255)
     */
     private $about;
      /**
     * @ORM\Column(type="boolean")
     */

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
     * @return user
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
     * Set pass
     *
     * @param string $pass
     *
     * @return user
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return user
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nameAndSurrname
     *
     * @param string $nameAndSurrname
     *
     * @return user
     */
    public function setNameAndSurrname($nameAndSurrname)
    {
        $this->name_and_surrname = $nameAndSurrname;

        return $this;
    }

    /**
     * Get nameAndSurrname
     *
     * @return string
     */
    public function getNameAndSurrname()
    {
        return $this->name_and_surrname;
    }

    /**
     * Set activationCode
     *
     * @param integer $activationCode
     *
     * @return user
     */
    public function setActivationCode($activationCode)
    {
        $this->activation_code = $activationCode;

        return $this;
    }

    /**
     * Get activationCode
     *
     * @return integer
     */
    public function getActivationCode()
    {
        return $this->activation_code;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return user
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return user
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registration_date = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return user
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return blob
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return user
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return user
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }
}
