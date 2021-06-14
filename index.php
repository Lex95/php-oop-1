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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $primoFilm->getNome() ?></h1>
    <p><?php echo $primoFilm->getAnno() ?></p>
    <p><?php echo $primoFilm->getRegista() ?></p>

    <h1><?php echo $secondoFilm->getNome() ?></h1>
    <p><?php echo $secondoFilm->getAnno() ?></p>
    <p><?php echo $secondoFilm->getRegista() ?></p>
</body>
</html>