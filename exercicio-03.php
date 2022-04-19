<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <hr>

    <?php

    $salario = 10000;   

    if($salario < 500) {
        $reajuste = $salario * 1.15;
    }
    elseif($salario <= 1000) {
        $reajuste = $salario * 1.10;
    }
    else {
        $reajuste = $salario * 1.05;
    }
           
    ?>
    <p><b>Salário anterior:</b> R$<?=number_format($salario, 2)?></p>
    <p><b>Reajuste:</b> R$<?=number_format($reajuste, 2)?></p>
   
    
</body>
</html>