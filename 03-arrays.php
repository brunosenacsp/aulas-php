<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <h1>Trabalhando com Arrays (vetores e matrizes)</h1>
    <hr>

    <H2>Arrays com índices numéricos</H2>

    <?php
    // sintaxe com colchetes
    $bandas = ["Savatage", "Iron Maiden", "Nighwish"];

    //sintaxe com função array()
    $cursos = array("HTML5", "CSS3", "Nodejs", "photoshop");

    //sintaxe indicando indice manualmente
    $comidaDeButeco[0] = "Bolinho de bacalhau";
    $comidaDeButeco[0] = "Pastel";
    $comidaDeButeco[0] = "Esfiha de carne";

    //constante de arrays
    define("UNIDADES_SENAC", ["Penha", "Tatuapé", "Itaquera"]);
    const FRUTAS = ["Morango", "Abacaxi"];
    ?>
    
    <h3>Acessando dados</h3>

    <ol>
        <li>Uma das bandas que mais gosto:
            <?=$bandas[2]?>
        </li>
        <li>Linguagem base da web:
            <?=$cursos[0]?>
        </li>
        <li>Quero comer:
            <?=$comidaDeButeco[0]?>
        </li>
        <li>SENAC <?=UNIDADES_SENAC[1]?></li>
        <li>Fruta: <?=FRUTAS[1]?></li>
    </ol>

    <h2>Arrays associativos</h2>

    <?php 
        $curso = [
            //chave associativa (identificação => valor)
            "nome" => "Gastronomia",
            "cargaHoraria" => 150,
            "unidade" => "Penha"
        ];    
    ?>

    <p>Nome do curso: <?=$curso["nome"]?></p>
    <p>CH: <?=$curso["cargaHoraria"]?></p>
    <p>Unidade: Senac <?=$curso["unidade"]?></p>

    <h2>Matriz (array dentro de array)</h2>

    <?php
        //plano de estudos de front, back e design
        $planoDeEstudos = [ 

                        //0            1          2
            ["JavaScript Avançado", "Node.js", "React"], //0

              //0     1       2         3
            ["PHP", "POO", "MySQL", "Python"], //1

            //       0                1          2
            ["Teoria das cores", "Photoshop", "UX/UI"] //2

            ]
    ?>

    <!-- mini exercicio:
    Crie uma lista não ordenada e mostre nela os seguintes itens:
    React, PHP/MySQL, Photoshop e Teoria das cores-->

    <ol>
        <li><?=$planoDeEstudos[0][2]?></li>
        <li><?=$planoDeEstudos[01][0]?>/<?=$planoDeEstudos[1][2]?></li>
        <li><?=$planoDeEstudos[2][1]?> e <?=$planoDeEstudos[2][0]?></li>
    </ol>

    <h2>Análise de arrays (debug/depuração)</h2>

    <p><?php var_dump($bandas);?></p>
    <pre><?=var_dump($bandas)?></pre>

    <hr>

    <p><?php print_r($bandas);?></p>
    <p><?=print_r($bandas)?></p>

    <hr>

    <pre><?=var_dump($planoDeEstudosExe)?></pre>
    




</body>
</html>