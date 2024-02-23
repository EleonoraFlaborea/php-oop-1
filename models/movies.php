<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/director.php';


$movie1 = new Movie('Harry Potter e la pietra filosofale','Harry, Ron, Hermione...', 2001, new Director('Chris Joseph', 'Columbus', 65));
$movie2 = new Movie('Harry Potter e la camera dei segreti','Harry, Ron, Hermione...', 2002, new Director('Chris Joseph', 'Columbus', 65));
$movie3 = new Movie('Harry Potter e il prigioniero di Azkaban','Harry, Ron, Hermione...', 2004, new Director('Alfonso', 'Cuaron', 62));


var_dump($movie1);
var_dump($movie2);
var_dump($movie3);


$movie1->introduce();
$movie2->introduce();
$movie3->introduce();

