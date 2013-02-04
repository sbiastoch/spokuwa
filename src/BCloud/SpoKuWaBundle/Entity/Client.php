<?php

namespace BCloud\SpoKuWaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BCloud\SpoKuWaBundle\Entity\Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @var integer $fees
     *
     * @ORM\Column(name="fees", type="integer", nullable=false)
     */
    private $fees;

    /**
     * @var string $notes
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var System
     *
     * @ORM\OneToOne(targetEntity="System", inversedBy="client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="id")
     * })
     */
    private $system;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var School
     *
     * @ORM\ManyToOne(targetEntity="School")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="school_id", referencedColumnName="id")
     * })
     */
    private $school;

    /**
     * @var User
     *
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set fees
     *
     * @param integer $fees
     * @return Client
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
    
        return $this;
    }

    /**
     * Get fees
     *
     * @return integer 
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Client
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set system
     *
     * @param BCloud\SpoKuWaBundle\Entity\System $system
     * @return Client
     */
    public function setSystem(\BCloud\SpoKuWaBundle\Entity\System $system = null)
    {
        $this->system = $system;
    
        return $this;
    }

    /**
     * Get system
     *
     * @return BCloud\SpoKuWaBundle\Entity\System 
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set address
     *
     * @param BCloud\SpoKuWaBundle\Entity\Address $address
     * @return Client
     */
    public function setAddress(\BCloud\SpoKuWaBundle\Entity\Address $address = null)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return BCloud\SpoKuWaBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set school
     *
     * @param BCloud\SpoKuWaBundle\Entity\School $school
     * @return Client
     */
    public function setSchool(\BCloud\SpoKuWaBundle\Entity\School $school = null)
    {
        $this->school = $school;
    
        return $this;
    }

    /**
     * Get school
     *
     * @return BCloud\SpoKuWaBundle\Entity\School 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set user
     *
     * @param BCloud\SpoKuWaBundle\Entity\User $user
     * @return Client
     */
    public function setUser(\BCloud\SpoKuWaBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return BCloud\SpoKuWaBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}