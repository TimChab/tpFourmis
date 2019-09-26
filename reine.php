<?php


class reine extends fourmi
{
    private $porte = 100000;
    protected $appetit = 50;

    public function veillir()
    {
        $this->age++;
        //TODO : pond des oeufs
        //TODO : mange => sinon meurt

    }


}