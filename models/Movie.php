<?php

require_once __DIR__ . '/movies.php';
require_once __DIR__ . '/director.php';
require_once __DIR__ . '/actor.php';

class Movie {
    //instance variables
    public $name;
    public $characters;
    public $year;
    public $director;
    //public $actor;


    //construction
    public function __construct($name, $characters, $year, Director $director){
        $this->name = $name;
        $this->characters = $characters;
        $this->year = $year;
        $this->director = $director;
       //$this->actor = $actor;
    }

    //methods
    public function introduce(){
        echo 'Il film' . ' ' . $this->name . $this->getNameYear();
    }

    public function getNameYear(){
        return  ' ' . 'è uscito nelle grandi sale nel' . ' ' . $this->year;
    }
};

?>