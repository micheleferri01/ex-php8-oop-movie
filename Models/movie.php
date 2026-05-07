<?php

    class Movie {
        public $title;
        public $director;
        public $year;
        public $genres;

        public function __construct($title,$director,$year,array $genres) {
            $this-> title = $title;
            $this-> director = $director;
            $this-> year = $year;
            $this-> genres = $genres;
        }

        public function getMovieInfos () {
            $movieGenres = array_map(fn ($g) => $g->name, $this->genres);
            $movieGenresString = implode(", ", $movieGenres);
            return "{$this->title} diretto da {$this->director} ({$this->year}) - Generi: {$movieGenresString}";
        }
    }