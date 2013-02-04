<?php

namespace BCloud\SpoKuWaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BCloud\SpoKuWaBundle\Entity\Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean $sex
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex;

    /**
     * @var string $fName
     *
     * @ORM\Column(name="f_name", type="string", length=255, nullable=false)
     */
    private $fName;

    /**
     * @var string $lName
     *
     * @ORM\Column(name="l_name", type="string", length=255, nullable=false)
     */
    private $lName;

    /**
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string $street
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var integer $zip
     *
     * @ORM\Column(name="zip", type="integer", nullable=true)
     */
    private $zip;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var \DateTime $lastChanged
     *
     * @ORM\Column(name="last_changed", type="datetime", nullable=false)
     */
    private $lastChanged;



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
     * Set sex
     *
     * @param boolean $sex
     * @return Address
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set fName
     *
     * @param string $fName
     * @return Address
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    
        return $this;
    }

    /**
     * Get fName
     *
     * @return string 
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * Set lName
     *
     * @param string $lName
     * @return Address
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    
        return $this;
    }

    /**
     * Get lName
     *
     * @return string 
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Address
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     * @return Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip
     *
     * @return integer 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set lastChanged
     *
     * @param \DateTime $lastChanged
     * @return Address
     */
    public function setLastChanged($lastChanged)
    {
        $this->lastChanged = $lastChanged;
    
        return $this;
    }

    /**
     * Get lastChanged
     *
     * @return \DateTime 
     */
    public function getLastChanged()
    {
        return $this->lastChanged;
    }
}