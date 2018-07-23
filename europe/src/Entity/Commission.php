<?php
namespace Entity;

use Person\President;
use Person\Human;
use Person\Commissionner;
use Person\VicePresident;

class Commission implements WorkInterface
{
    private $employees = [];
    
    private $president;
    
    private $commissionners = [];
    
    private $vicePresident = [];
    
    public function getEmployees() : array
    {
        return $this->employees;
    }

    public function getPresident() : President
    {
        return $this->president;
    }

    public function getCommissionners() : array
    {
        return $this->commissionners;
    }

    public function getVicePresident() : array
    {
        return $this->vicePresident;
    }
    
    public function setEmployees(array $employees)
    {
        $this->employees = [];
        foreach ($employees as $employee) {
            $this->addEmployee($employee);
        }
    }
    
    public function addEmployee(Human $employee)
    {
        $employee->setWork($this);
        array_push($this->employees, $employee);
    }
    
    public function setPresident(President $president)
    {
        $president->setWork($this);
        $this->president = $president;
    }

    public function setCommissionners(array $commissionners)
    {
        $this->commissionners = [];
        foreach ($commissionners as $commissionner) {
            $this->addCommissionner($commissionner);
        }
    }
    
    public function addCommissionner(Commissionner $commissionner)
    {
        $commissionner->setWork($this);
        array_push($this->commissionners, $commissionner);
    }

    public function setVicePresident(array $vicePresidents)
    {
        $this->vicePresident = [];
        foreach ($vicePresidents as $vicePresident) {
            $this->addVicePresident($vicePresident);
        }
    }
    
    public function addVicePresident(VicePresident $vicePresident)
    {
        $vicePresident->setWork($this);
        array_push($this->vicePresident, $vicePresident);
    }
    
    public function pay()
    {
        throw new \LogicException('I will pay in 90 days. With luck...');
    }
}















