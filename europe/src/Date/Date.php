<?php
namespace Date;

class Date
{
    public $day;
    
    public $month;
    
    public $year;
    
    public function getDay() : int
    {
        return $this->day;
    }

    public function getMonth() : int
    {
        return $this->month;
    }

    public function getYear() : int
    {
        return $this->year;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }
}

