<?php
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao Screen-Match!\n";

$filme = new Filme("Vingadores", 2012, Genero::SuperHeroi, 180);

$filme->avalia(10);
$filme->avalia(7);
$filme->avalia(8.2);
$filme->avalia(6.7);

$breakingBad = new Serie("Breaking Bad", 2008, Genero::Drama, 13, 5, 70);

print_r($breakingBad->anoLancamento);
