<?php

class Cast {

    // variabili per ogni persona del cast
    public $name;
    public $surname;
    public $yearsOld;
    public $role;
    public $image;
    public $nationality;


    // funzione della classe Cast
    function __construct(String $_name, String $_surname, $_yearsOld, String $_role, String $_image = null, String $_nationality)
    {
        $this->name = $_name;
        $this->name = $_yearsOld;
        $this->name = $_role;
        $this->name = $_image;
        $this->name = $_nationality;
    }


}


?>