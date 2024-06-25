<?php
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes-screen-match.php";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Bem-vindo(a) ao screen match!\n";
echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok"=> "super-herói",
    "Se beber não case"=> "comédia",
    default => "Gênero não encontrado.",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(nome:"Thor: Ragnarok", anoLancamento: 2021, nota: 7.8, genero:"super-herói");

echo $filme -> anoLancamento;

$posicaoDoisPontos = strpos($filme -> nome, ':');

$filmeComoStringJson = json_encode($filme);

file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);