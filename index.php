<?php

class Movie {
    public $nome;
    public $anno;
    public $regista;

    function __construct($nome, $anno, $regista = NULL) {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getAnno(){
        return $this->anno;
    }
    public function getRegista(){
        return $this->regista;
    }
}

$primoFilm = new Movie("Fast and Furious", 2001, "Rob Cohen");
$secondoFilm = new Movie("Avengers", 2012);

?>