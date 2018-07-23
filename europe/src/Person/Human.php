<?php
namespace Person;

use Date\Date;
use Place\Address;
use Entity\WorkInterface;

class Human
{
    /**
     * @var string
     */
    private $firstname;
    
    /**
     * @var string
     */
    private $lastname;
    
    /**
     * @var string
     */
    private $gender;
    
    /**
     * @var Date
     */
    private $birthdate;
    
    /**
     * @var Human
     */
    private $significantOther;
    
    /**
     * @var Address
     */
    private $address;
    
    /**
     * @var WorkInterface
     */
    private $work;
    
    public function getFirstname() : string
    {
        return $this->firstname;
    }

    public function getLastname() : string
    {
        return $this->lastname;
    }

    public function getGender() : string
    {
        return $this->gender;
    }

    public function getBirthdate() : Date
    {
        return $this->birthdate;
    }

    public function getSignificantOther() : ?Human
    {
        return $this->significantOther;
    }

    public function getAddress() : Address
    {
        return $this->address;
    }

    public function getWork() : WorkInterface
    {
        return $this->work;
    }

    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    public function setGender(string $gender)
    {
        if (!in_array($gender, ['m','f','o'])) {
            throw new \RuntimeException('Gender not allowed');
        }
        
        $this->gender = $gender;
    }

    public function setBirthdate(Date $birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function setSignificantOther(Human $significantOther)
    {
        $this->significantOther = $significantOther;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function setWork(WorkInterface $work)
    {
        $this->work = $work;
    }

}

