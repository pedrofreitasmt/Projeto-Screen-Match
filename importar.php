<?php

$caminhoArquivo = __DIR__ . '/filme.json';

$conteudoArquivo_Filme = file_get_contents($caminhoArquivo);

$filme_armazenado = json_decode($conteudoArquivo_Filme, true);

var_dump($filme_armazenado);