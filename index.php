<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>
<h1>PHP POO - Exemplo 7</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Propriedades e Métodos estáticos</li>
     
<?php
require_once "src/PessoaFisica.php";

// Criação dos objetos
 $clientePF = new PessoaFisica;
 $clientePF->setNome('Antonio');
 $clientePF->setIdade(20);

// Acessando uma propriedade estática
PessoaFisica::$cidade = "São Paulo";

// Acessando e lendo uma propriedade estática
echo PessoaFisica::$cidade;

?>

<h3>Pessoa Física</h3>
 <p> <?=$clientePF->getNome()?></p>
<p> <?=$clientePF->getIdade()?></p>
<p> Tipo de atendimento: <?=PessoaFisica::verificaIdade($clientePF->getIdade())?></p>

</body>
</html>