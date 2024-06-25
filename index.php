<?php
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes-screen-match.php";

echo "Bem-vindo(a) ao Screen-Match!\n";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
// $filme->nome = "Thor - Ragnarok";
// $filme->anoLancamento = 2021;
// $filme->genero = "Super-herói";

$filme->avalia(10);
$filme->avalia(7);
$filme->avalia(8.2);
$filme->avalia(6.7);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento();