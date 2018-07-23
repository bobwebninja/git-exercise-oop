<?php
namespace Person;

use Place\Address;

class Commissionner extends Human
{
    private $workAdress;
    
    private $bodyGuard;
    
    private $team = [];
    
    public function getWorkAdress() : Address
    {
        return $this->workAdress;
    }

    public function getBodyGuard() : Bodyguard
    {
        return $this->bodyGuard;
    }

    public function getTeam() : array
    {
        return $this->team;
    }

    public function setWorkAdress(Address $workAdress)
    {
        $this->workAdress = $workAdress;
    }

    public function setBodyGuard(Bodyguard $bodyGuard)
    {
        $this->bodyGuard = $bodyGuard;
    }

    public function setTeam(array $team)
    {
        $this->team = [];
        foreach ($team as $human) {
            $this->addToTeam($human);
        }
    }

    public function addToTeam(Human $human)
    {
        array_push($this->team, $human);
    }
}

