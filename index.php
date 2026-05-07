<?php 
require_once("./Models/Traits/duration.php");
require_once('./Models/genre.php');
require_once('./Models/movie.php');

// Generi
$action = new Genre("Azione", "Film ricchi di combattimenti e adrenalina");
$comedy = new Genre("Commedia", "Film divertenti e leggeri");
$sciFi = new Genre("Fantascienza", "Film ambientati nel futuro o con tecnologia avanzata");
$thriller = new Genre("Thriller", "Film pieni di suspense");
$adventure = new Genre("Avventura", "Film con viaggi ed esperienze emozionanti");

// Films
$movie1 = new Movie("Inception", "Christopher Nolan", 2010, [$action, $sciFi, $thriller], 148);
$movie2 = new Movie("Una notte da leoni", "Todd Phillips", 2009, [$comedy, $adventure], 100);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>

    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class='bg-dark'>
    <header class='bg-success px-2'>
        <h1>FILMS</h1>
    </header>
    <main class='container'>
        <ul class="list-group mt-3">
            <?php
                echo "<li class='list-group-item'>" . $movie1->getMovieInfos() . "</li>";
                echo "<li class='list-group-item'>" . $movie2->getMovieInfos() . "</li>";
            ?>
        </ul>

    </main>

    <!-- script bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>