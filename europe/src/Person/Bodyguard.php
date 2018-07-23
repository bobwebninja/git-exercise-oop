<?php
namespace Person;

class Bodyguard extends Human
{
    private $protect;
    
    public function getProtect() : Commissionner
    {
        return $this->protect;
    }

    public function setProtect(Commissionner $protect)
    {
        $this->protect = $protect;
    }
}

