<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

        //Propriedade estática (não depende de um objeto)
    public static string $cidade;

        //Método estático (não depende de um objeto)
    public static function verificaIdade(int $idade):string {
        return $idade >= 60 ? "preferencial" : "normal";
    }

    public function __construct()
    {
        $this->setSituacao("normal");
    }

    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<ul>";
        echo "<li>Ano de Fundação: ".$this->getSituacao()."</li>";
        echo "<p>Situação: ".$this->situacao."</p>";
        echo "</ul>";
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
