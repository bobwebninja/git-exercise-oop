<?php
namespace Place;

class Address
{
    private $street;
    
    private $zipCode;
    
    private $city;
    
    private $country;
    
    public function getStreet() : string
    {
        return $this->street;
    }

    public function getZipCode() : int
    {
        return $this->zipCode;
    }

    public function getCity() : string
    {
        return $this->city;
    }

    public function getCountry() : string
    {
        return $this->country;
    }

    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    public function setZipCode(int $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}

