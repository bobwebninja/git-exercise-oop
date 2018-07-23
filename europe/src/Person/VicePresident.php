<?php
namespace Person;

use Place\Address;

class VicePresident extends Commissionner
{
    private $department;
    
    public function getWorkAdress() : Address
    {
        return parent::getWorkAdress();
    }
    
    public function getDepartment() : string
    {
        return $this->department;
    }

    public function setDepartment(string $department)
    {
        $this->department = $department;
    }

}

