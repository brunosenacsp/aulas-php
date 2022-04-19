<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <style>
        
    </style>
</head>
<body>

    <h1>Exercício 5</h1>
    <hr>
    
    <?php
    function soma ( $nota1, $nota2 ){
        $media = ($nota1 + $nota2) / 2;
        return $media;
    }
     $media = soma(8, 7)
    ?>
    
    <p> <?=$media?> </p>

    <?php
    function resultado($media){
        if ( $media >= 7){
            return "aprovado";
        } else {
            return "reprovado";
        }
    }
    ?>

    <p> <?=resultado($media)?> </p>


</body>
</html>