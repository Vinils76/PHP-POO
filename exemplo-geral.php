<?php
//Atributos ou Propriedades
class Exemplo {

    public string $nome;
    public  string $escola;
    public string $cidade;
}

// objetos/intâncias

$exemploA = new Exemplo;
$exemploB = new Exemplo;

echo "<pre>";
var_dump($exemploA);
var_dump($exemploB);
echo "</pre>";


