<?php
class Cliente {
    // Propriedades/Atributos

    public string $nome;
    public string $email;
    public string $senha = ""; // Valor inicial padrão
    public array $telefones;

    public function exibirDados() {
        echo "<h3> $this->nome </h3>";
        echo "<ul>";
        echo "<li> $this->email</li>";
        echo "<li>". implode(', ', $this->telefones)."</li>";
        echo "</ul>";
    }

//     // Método construtor
//     public function __construct( string $nome, string $email)
//     {
//         //$this é uma variável especial, sempre apontando para a referência da classe atualmente manipulada
//         $this->nome = $nome;
//         $this->email = $email;
//     }
}