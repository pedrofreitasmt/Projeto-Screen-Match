<?php

use src\Calculos\ConversorNotaEstrela;
use src\Exception\NotaInvalidaException;
use src\Modelo\Episodio;
use src\Modelo\Serie;
use src\Modelo\Genero;

require "autoload.php";

$theBoys = new Serie("The Boys", 2020, Genero::Drama, 8, 5, 40);

$novoEpisodio = new Episodio($theBoys, "Piloto", 1);

try {
    $novoEpisodio->avalia(10);
    $novoEpisodio->avalia(-4);

    $conversor = new ConversorNotaEstrela();

    echo $conversor->converte($novoEpisodio);
} catch (NotaInvalidaException $e) {
    echo "Um problema aconteceu: " . $e->getMessage();
}
