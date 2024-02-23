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
    //variabili d'istanza
    public $name;
    public $cast;
    public $year;
}

$movie1 = new Movie();
var_dump($movie1)

?>