<?php
require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/movies.php';

class Actor {
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
} 

$actor1 = new Actor('Daniel', 'Radcliffe', 34);
$actor2 = new Actor('Emma', 'Watson', 33);
$actor3 = new Actor('Rupert', 'Grint', 35);

$actors = [$actor1, $actor2, $actor3];

var_dump($actors);

?>