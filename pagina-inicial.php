<?php

$nomeFilme = 'Top Gun - Maverick';
$anoLancamento = 2022;
$somaDeNotas = (9 + 6 + 8 + 7.5 + 5);
$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Bem-vindo(a) ao screen match!\n";
echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";