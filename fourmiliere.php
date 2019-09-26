<?php

class fourmiliere implements oldable
{
    const NB_MAX_FOURMIS = 1000;
    const NB_MAX_GRENIER = 1000;
    const NB_MAX_LARVES = 1000;
    private $fourmis = array('fourmi 1');
    private $larves = array();
    private $quantite_nouriture;
    private $age = 0;


    public function getAge($temps)
    {
        $this->age = $temps;
    }

    public function veillir()
    {
        $this->age++;
        //TODO : répartir larve ouvrière / guerrière
        //TODO : répartir ouvrière > 10 -> chasse / nettoyage
    }

    /**
     * @return array$fourmis = liste des fourmis existantes
     */
    public function getFourmis()
    {
        return $this->fourmis;
    }

    /**
     * @param string $key
     * @return array $larves = liste desz larves existantes
     */
    public function getLarves($key = 'undefined')
    {
        if ($key === 'undefined') {
            return $this->larves;
        } else {
            return $this->larves[$key];
        }
    }

    /**
     * @param array $larves
     */
    public function addLarves($newLarve)
    {
        array_push($this->larves, $newLarve);
    }

    /**
     * @param array $fourmis
     */
    public function addFourmis($newFourmi)
    {
        array_push($this->fourmis, $newFourmi);
    }


}