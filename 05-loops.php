<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <hr>
    <h2>while (enquanto)</h2>

    <?php
    $i = 1; //muito comum ver como i, j ou k

    while($i <= 5){
        echo "<p>$i</p>";
        //$contador = $contador +1;
        $i++;
    }
    ?>

    <h2>while (enquanto) refatoração</h2>
    <!-- versao simpificada -->
    <?php
    $i = 1;
    while($i <= 5){
    ?>
        <p><?=$i?></p>
    <?php
        $i++;
    }
    ?>  

    <hr>
    <h2>do/while (repita)</h2>

    <?php
    $j = 1;
    do {
    ?>
        <div><h3>Olá</h3></div>
    <?php
        $j++;
    } while ($j <= 3);
    ?>

    <hr>
    <h2>for (para)</h2>

    <?php
    //para i de 1 até 10 faça
    for( $i = 1; $i <= 10; $i++){
        echo $i." ";
    }

    /* Exercicios
    1) crie uma array com meses do ano
    2) usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada*/    

    ?>
    <hr>
    <h2>Exercício</h2>

    <?php
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"]; 
    ?>

    <h3>Meses</h3>

    <ol>
        <?php
        $quantidade = count($meses);
        for($i = 0; $i < $quantidade; $i++){
        ?>
            <li><?=$meses[$i]?></li>
        <?php
        }
        ?>
        
    </ol>

    <hr>
    <h2>foreach (para cada...)</h2>

    <ol>
        <?php foreach( $meses as $mes  ) { ?>
            <li><?=$mes?></li>
        <?php } ?>
        
    </ol>

    <hr>
    <?php
    //array associativo
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe"
    ];

    // foreach( $clubes as $clube ) {
    foreach( $clubes as $clube => $apelido) {
        ?>
        <p><?=$clube ." é conhecido como ". $apelido?></p>
    <?php
    }
    //matriz (array dentro de array)
    $alunos = [
        [
            "nome" => "Chaves",
            "idade" => 8
        ],
        [
            "nome" => "Chapolin",
            "idade" => 28
        ],
        [
            "nome" => "Chiquinha",
            "idade" => 10
        ]
        ];

    foreach( $alunos as $aluno) {
    ?>
        <p> Nome: <?=$aluno['nome']?></p>
        <p> Idade: <?=$aluno['idade']?></p>
        <hr>
    <?php
    }
    ?>
    
</body>
</html>