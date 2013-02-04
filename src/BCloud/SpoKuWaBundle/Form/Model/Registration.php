<?php

namespace BCloud\SpoKuWaBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use BCloud\SpoKuWaBundle\Entity\Client;
use BCloud\SpoKuWaBundle\Entity\School;
use BCloud\SpoKuWaBundle\Entity\Address;
use BCloud\SpoKuWaBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="BCloud\SpoKuWaBundle\Entity\Client")
     */
    protected $client;
	
    /**
     * @Assert\Type(type="BCloud\SpoKuWaBundle\Entity\School")
     */
    protected $school;
	
    /**
     * @Assert\Type(type="BCloud\SpoKuWaBundle\Entity\Address")
     */
    protected $address;
	
    /**
     * @Assert\Type(type="BCloud\SpoKuWaBundle\Entity\User")
     */
    protected $user;

    /**
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setSchool(School $school)
    {
        $this->school = $school;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}