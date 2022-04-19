<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>

    <h1>Exercício 01</h1>
    <hr>

    <?php

    // $data = "18/03/2022";
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/y H:i");
    $nome = "Bruno";
    const CURSO = "Full Stack";
    $carga = 1000;
    $faltas = .25;
    $limite = $carga*$faltas;
    ?>

    <p><b>Data:</B> <?=$data?></p>
    <p><b>Nome:</b> <?=$nome?></p>
    <p><b>Curso:</b> <?=CURSO?></p>
    <P><b>Carga horária:</b> <?=$carga?> horas</P>
    <p><b>Limite de faltas:</b> <?=$limite?></p>



    
</body>
</html>