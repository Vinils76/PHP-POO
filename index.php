<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
<h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe Abstrata</li>
        <li>lasse Final (Não pode ser instaciada)</li>
        <li>Méodos/Propriedades protegidos (acessíveis apenas pelas subclasses)</li>

<?php
// Importando a classe
require_once "src/MEI.php";
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";

// Criação dos objetos
$clientePF = new PessoaFisica;
$clientePF->setNome('Antonio');
$clientePF->setEmail('antonio@gmail');
$clientePF->setSenha('abc123');
$clientePF->setCpf('123.456.789-00');
$clientePF->setIdade(20);

$clientePJ = new PessoaJuridica;
$clientePJ->setNome('Antonio');
$clientePJ->setEmail('antonio@gmail.com');
$clientePJ->setSenha('124556');
$clientePJ->setCnpj('05.055.045/0001-56');
$clientePJ->setAnoFundacao(1950);
$clientePJ->setNomeFantasia('infotec');

$clienteMEI = new MEI;
$clienteMEI->setNome("Jonas brothers");
$clienteMEI->setNomeFantasia('Metallica');
$clienteMEI->setCnpj('21.654.850/0005-62');
$clienteMEI->setAreaDeAtuacao("Música");

?>

<pre> <?=var_dump($clientePF, $clientePJ, $clienteMEI)?> </pre>
</body>
</html>