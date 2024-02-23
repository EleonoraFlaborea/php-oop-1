<?php
require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/movies.php';



//composition
class Director {
    //instance variables
    public $first_name;
    public $last_name;
    public $age;

    //construction
    public function __construct($first_name, $last_name, $age){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
};

?>