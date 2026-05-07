<?php

    trait HasDuration {
        public $duration;

        public function getDuration() {
            return "Durata: {$this->duration} minuti";
        }
    }
?>