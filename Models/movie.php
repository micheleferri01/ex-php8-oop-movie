<?php

    class Movie {

        use HasDuration;
        public $title;
        public $director;
        public $year;
        public $genres;

        public function __construct($title,$director,$year,array $genres, $duration) {
            $this-> title = $title;
            $this-> director = $director;
            $this-> year = $year;
            $this-> genres = $genres;
            $this-> duration = $duration;
        }

        public function getMovieInfos () {
            $movieGenres = array_map(fn ($g) => $g->name, $this->genres);
            $movieGenresString = implode(", ", $movieGenres);
            return " <h2 class='fs-4'>{$this->title}</h2>
            <ul class='list-unstyled'>
                <li>Regista: {$this->director}</li>
                <li>Anno: {$this->year}</li>
                <li>Generi: {$movieGenresString}</li>
                <li>{$this->getDuration()}</li>
            </ul>";
        }
    }
?>