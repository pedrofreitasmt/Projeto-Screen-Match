<?php

use src\Calculos\CalculadoraDeMaratona;
use src\Calculos\ConversorNotaEstrela;
use src\Modelo\Episodio;
use src\Modelo\Filme;
use src\Modelo\Genero;
use src\Modelo\Serie;

require "autoload.php";

echo "Bem-vindo(a) ao Screen-Match!\n";

//Avaliando um filme
$vingadores = new Filme("Vingadores", 2012, Genero::SuperHeroi, 180);
$vingadores->avalia(10);
$vingadores->avalia(7);
$vingadores->avalia(8.2);
echo "A média do filme Vingadores é: " . $vingadores->media() . "\n";

//Avaliando um episódio de uma série 
$breakingBad = new Serie("Breaking Bad", 2008, Genero::Drama, 13, 5, 70);
$episodio = new Episodio($breakingBad, "Piloto", 1);
$episodio->avalia(7);
$episodio->avalia(9);
$episodio->avalia(10);

echo "A média do episódio é: " . $episodio->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($breakingBad);
$calculadora->inclui($vingadores);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos.\n";

$conversor = new ConversorNotaEstrela();

echo $conversor->converte($vingadores) . " estrelas" . "\n";
