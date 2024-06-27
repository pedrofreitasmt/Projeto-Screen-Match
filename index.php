<?php
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao Screen-Match!\n";

$filme = new Filme("Vingadores", 2012, Genero::SuperHeroi);

$filme->avalia(10);
$filme->avalia(7);
$filme->avalia(8.2);
$filme->avalia(6.7);

echo $filme->nome;
