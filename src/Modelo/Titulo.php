<?php

abstract class Titulo implements Avaliavel
{
    private array $notas;
    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $quantidadeDeNotas = count($this->notas);
        if ($quantidadeDeNotas === 0) {
            return 0; // Retorne 0 ou um valor padrão
        }

        $somaNotas = array_sum($this->notas);
        return $somaNotas / $quantidadeDeNotas;
    }

    abstract public function duracaoEmMinutos(): int;
}
