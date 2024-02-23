<?php
/*
create un file index.php in cui:
 - è definita una classe Movie
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà
*/

class Movie {
    //instance variables
    public $name;
    public $characters;
    public $year;
    //construction
    public function __construct($name, $characters, $year){
        $this->name = $name;
        $this->characters = $characters;
        $this->year = $year;

    }
}

$movie1 = new Movie('Harry Potter e la pietra filosofale','Harry, Ron, Hermione...', 2001);

var_dump($movie1)

?>