<?php
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/calculadora-de-maratona.php";

echo "Bem-vindo(a) ao Screen-Match!\n";

$vingadores = new Filme("Vingadores", 2012, Genero::SuperHeroi, 180);

$vingadores->avalia(10);
$vingadores->avalia(7);
$vingadores->avalia(8.2);
$vingadores->avalia(6.7);

$breakingBad = new Serie("Breaking Bad", 2008, Genero::Drama, 13, 5, 70);

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($breakingBad);
$calculadora->inclui($vingadores);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";