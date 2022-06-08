<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>PHP POO</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de objetos</li>
        <li>Uso do método construtor</li>
        <li>Uso do <code>$this</code> para acessar as </li>
    </ul>

<?php
// Importando a classe
require_once "src/Cliente.php";
$clienteA = new Cliente;
$clienteB = new Cliente;

// Criação dos objetos
$clienteA->nome = "Antonio";
$clienteA->email = "antonio@gmail";
$clienteA->telefones = ["(11) 98888-5555", "(11) 97777-2222"];


$clienteB->nome = 'Alex turner';
$clienteB->email = "alex@gmail";
$clienteB->telefones = array ("(11) 57155-1457");

?>

<h2>Dados dos objetos (leitura)</h2>
<h3> <?=$clienteA->nome?> </h3>
<p>E-mail: <?=$clienteA->email?> </p>
<p>Telefones: <?=implode(", ", $clienteA->telefones)?> </p>
<p>Senha: <?=$clienteA->senha?> </p>

<h3> <?=$clienteB->nome?> </h3>
<p>E-mail: <?=$clienteB->email?> </p>
<p>Telefones: <?=implode(", ", $clienteB->telefones)?> </p>
<p>Senha: <?=$clienteB->senha?> </p>

<pre> <?=var_dump($clienteA, $clienteB)?> </pre>

<h2>Chamando function exibirDados</h2>
<?= $clienteA->exibirDados(); ?>
<?= $clienteA->exibirDados(); ?>

</body>
</html>