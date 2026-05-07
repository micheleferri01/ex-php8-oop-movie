<?php 

require_once('./Models/genre.php');

$action = new Genre("Azione", "Film ricchi di combattimenti e adrenalina");
$comedy = new Genre("Commedia", "Film divertenti e leggeri");

require_once('./Models/movie.php');

$movie1 = new Movie("Inception", "Christopher Nolan", 2010, $action);
$movie2 = new Movie("Una notte da leoni", "Todd Phillips", 2009, $comedy);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>
<body>
    <?php
        echo "<p>" . $movie1->getMovieInfos() . "</p>";
        echo "<p>" . $movie2->getMovieInfos() . "</p>";
    ?>
</body>
</html>