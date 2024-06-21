<?php

$textoJson = '{"nome": "Pedro", "anoNascimento":2001, "profissao":"Dev"}';

$objeto = json_decode($textoJson);

if ($objeto) {
    echo "Nome: $objeto->nome\n";
    echo "Ano de nascimento: $objeto->anoNascimento\n";
    echo "Profissão: $objeto->profissao\n";
} else {
    echo "Não foi possível converter a string .json em um objeto.";
}