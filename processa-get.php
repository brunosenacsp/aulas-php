<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    
<h1>Processamento de dados usando GET</h1>
<hr>

<?php
    //capturando os dados transmitidos
    $nome = $_GET['nome'];
    $email = $_GET['E-mail'];
    $mensagem = $_GET['mensagem'];
?>

    <h2>dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
</html>
</body>