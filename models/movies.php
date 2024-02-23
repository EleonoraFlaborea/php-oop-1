<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/director.php';


$movie1 = new Movie('Harry Potter e la pietra filosofale','Harry, Ron, Hermione...', 2001, new Director('Chris Joseph', 'Columbus', 65));

var_dump($movie1);

$movie1->introduce();
