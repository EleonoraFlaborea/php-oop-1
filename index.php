<?php
/*
Bonus 2:
Creare una classe Actor e modificare la classe Movie in modo che accetti piú di un attore
*/

class Movie {
    //instance variables
    public $name;
    public $characters;
    public $year;
    public $director;

    //construction
    public function __construct($name, $characters, $year, Director $director){
        $this->name = $name;
        $this->characters = $characters;
        $this->year = $year;
        $this->director = $director;
    }

    //methods
    public function introduce(){
        echo 'Il film' . ' ' . $this->name . $this->getNameYear();
    }

    public function getNameYear(){
        return  ' ' . 'è uscito nelle grandi sale nel' . ' ' . $this->year;
    }
}

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
}

$movie1 = new Movie('Harry Potter e la pietra filosofale','Harry, Ron, Hermione...', 2001, new Director('Chris Joseph', 'Columbus', 65));



var_dump($movie1);

$movie1->introduce();


?>