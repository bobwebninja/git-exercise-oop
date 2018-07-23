<?php
namespace Place;

use Date\Date;

class Venue
{
    private $date;
    
    private $address;
    
    public function getDate() : Date
    {
        return $this->date;
    }

    public function getAddress() : Address
    {
        return $this->address;
    }

    public function setDate(Date $date)
    {
        $this->date = $date;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
}

