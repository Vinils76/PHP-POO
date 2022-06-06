<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de classe</li>
        <li>Importação de arquivo de classe</li>
        <li>Criação de objetos</li>
    </ul>

<?php
// Importando a classe
require_once "src/Cliente.php";

// Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;
?>

<pre> <?=var_dump($clienteA, $clienteB)?> </pre>
</body>
</html>