<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    public function __construct()
    {
        $this->setSituacao("normal");
    }

    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<ul>";
        echo "<li>Ano de Fundação: ".$this->getSituacao()."</li>";
        echo "<p>Situação: ".$this->situacao."</p>";
        </ul>
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }
}
