<?php

class Genres {
    public $genres1;
    public $genres2;
    public $genres3;
    public $genres4;
    public $genres5;


    function __construct(String $_genres1, String $_genres2 = null, String $_genres3 = null, String $_genres4 = null, String $_genres5 = null) 
    {
        $this->genres1 = $_genres1;
        $this->genres2 = $_genres2;
        $this->genres3 = $_genres3;
        $this->genres4 = $_genres4;
        $this->genres5 = $_genres5;
    }

}

?>