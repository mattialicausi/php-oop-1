<?php

// includo Cast.php
include_once __DIR__ . '/Cast.php';

// classe Movie
class Movie {

    // variabili
    public $title;
    public $genres;
    public $description;
 
    public $releaseDate;
    public $image;
    public $video;


    // variabili appartenenti ad altre classi
    public $cast;


    // struttura della classe Movie
    function __construct(String $_title, String $_genres, String $_description = null, $_releaseDate, String $_image = null, String $_video = null, Cast $_cast) 
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->description = $_description;
        $this->releaseDate = $_releaseDate;
        $this->image = $_image;
        $this->video = $_video;

        $this->cast = $_cast;
    }
}





?>