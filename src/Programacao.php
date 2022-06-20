<?php
namespace Exercicio;

class Programacao extends Tecnico {
    private string $area;

    public function formataTitulo()
    {
         $stra="<em style=color:blue>".$this->getTitulo()."</em>";
         $stra = mb_strtoupper($stra);
         return $stra;
    }
    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area)
    {
        $this->area = $area;
    }
}