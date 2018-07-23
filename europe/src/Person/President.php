<?php
namespace Person;

use Entity\Commission;

class President extends VicePresident
{
    public function represent() : Commission
    {
        return $this->getWork();
    }


}

