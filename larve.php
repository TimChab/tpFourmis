<?php


class larve
{
    private $age=0;
    protected static $nextUnidId = 1;
    protected $id;

    public function __construct($temps)
    {
        $this->id = self::$nextUnidId;
        self::$nextUnidId++;

    }
    public function veillir()
    {
        if ($this->age !== 2){
            $this->age++;
            //TODO : mange => sinon meurt
        } else {
            //TODO : supprimer larve actuelle et créer nouvelle instance de fourmi
            /*if (($key = array_search($this->id, fourmiliere::getformis())) !== false) {
                unset(fourmiliere::fourmis[$key]);
            }*/
            self::eclore();


        }

    }

    private static function eclore(){
        return $fourmi = new fourmi();
    }

}