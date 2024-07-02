<?php

class CalculadoraDeMaratona
{
    private int $duracaoDaMaratona;

    public function inclui(Titulo $titulo): void
    {
        $this->duracaoDaMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoDaMaratona;
    }
}