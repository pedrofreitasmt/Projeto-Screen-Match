<?php

namespace ScreenMatch\src\Calculos;

use ScreenMatch\src\Modelo\Titulo;

class CalculadoraDeMaratona
{
    private int $duracaoDaMaratona = 0;

    public function inclui(Titulo $titulo): void
    {
        $this->duracaoDaMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoDaMaratona;
    }
}