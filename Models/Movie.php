<?php

// includo Cast.php
include_once __DIR__ . '/Cast.php';

// includo Genres.php
include_once __DIR__ . '/Genres.php';

// classe Movie
class Movie {

    // variabili
    public $title;

    public $description;
 
    public $releaseDate;
    public $image;
    public $video;

    public $stars;
    public $popular;


    // variabili appartenenti ad altre classi
    public $cast;
    public $genres;


    // struttura della classe Movie
    function __construct(String $_title, Genres $_genres, String $_description = null, $_releaseDate, String $_image = null, String $_video = null, $_stars, Cast $_cast) 
    {
        $this->title = $_title;

        $this->description = $_description;
        $this->releaseDate = $_releaseDate;
        $this->image = $_image;
        $this->video = $_video;
        $this->stars = $_stars;
        
        $this->cast = $_cast;
        $this->genres = $_genres;
        
        // richiamo funzione popular
        $this->setPopular();
    }




    // in base alle stelle il film è popolare
    public function setPopular() {
        if($this->stars > 3) {
            $this->popular = 'Popolare';
        } else {
            $this->popular = 'Non popolare';
        }
    }
}





?>