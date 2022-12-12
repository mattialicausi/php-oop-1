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
        $this->surname = $_surname;
        $this->yearsOld = $_yearsOld;
        $this->role = $_role;
        $this->image = $_image;
        $this->nationality = $_nationality;
    }


}


?>