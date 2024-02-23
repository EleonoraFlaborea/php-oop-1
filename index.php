<?php
/*
Creare un layout html per stampare a schermo una lista di movies.
*/

require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/movies.php';
require_once __DIR__ . '/models/director.php';
require_once __DIR__ . '/models/actor.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section>
        <h1>Actors</h1>
        <div>
            <ul>
              <?php foreach ($actors as $actor): ?>
                <li> <?php echo $actor->first_name?> <?php echo $actor->last_name?></li>
              <?php endforeach ?>
            </ul>
        </div>
    </section>
</body>
</html>