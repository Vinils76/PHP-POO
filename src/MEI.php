<?php
require_once "PessoaJuridica.php";
Class MEI extends PessoaJuridica {
    private string $areaDeAtuacao; 

    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao): self
    {
        $this->areaDeAtuacao = $areaDeAtuacao;

        return $this;
    }
}