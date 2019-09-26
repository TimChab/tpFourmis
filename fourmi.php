<?php


class fourmi implements oldable
{
     protected static $nextUnidId = 1;
     protected $id;
     protected $age = 0;
     protected $appetit = 14;

     public function __construct($temps)
     {
        $this->id = self::$nextUnidId;
        self::$nextUnidId++;


     }


    public function veillir()
    {
        $this->age++;

    }
}