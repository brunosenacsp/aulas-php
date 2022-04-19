<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h1>Exercicio 2 (Arrays)</h1>

<?php 

    $user1 = [
        "nome" => "Bruno",
        "senha" => 2802,
        "idade" => 37,
        "sexo" => "Masculino",
        "Cidade" => "São Paulo",
        "e-mail" => "user1@user.com"
    ];  

    $user2 = [
        "nome" => "Zezinha",
        "senha" => 1234,
        "idade" => 17,
        "sexo" => "Feminino",
        "Cidade" => "Campinas",
        "e-mail" => "user2@user.com"
    ]
?>

<section>

   <div class="us1">     
        <h2>User 1</h2>

<p><b>Nome do usuário:</b> <?=$user1["nome"]?></p>
<p><b>E-mail:</b> <?=$user1["e-mail"]?></p>
<p><b>Idade:</b> <?=$user1["idade"]?></p>
<p><b>Sexo:</b> <?=$user1["sexo"]?></p>
    </div>

    <div>

    </div>
    
    <div class="us2">    
        <h2>User 2</h2>

<p><b>Nome do usuário:</b> <?=$user2["nome"]?></p>
<p><b>E-mail:</b> <?=$user2["e-mail"]?></p>
<p><b>Idade:</b> <?=$user2["idade"]?></p>
<p><b>Sexo:</b> <?=$user2["sexo"]?></p>
    </div>
</section>

</body>
</html>