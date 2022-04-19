<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 07</title>
</head>
<body>
    <h1>Exercício - 07</h1>
    <hr>

    <?php 
    $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $descricao = $_POST["descricao"];

   
    ?>
    <section>
        <p>Produto: <?=$produto?></p>
        <p>Fabricante: <?=$fabricante?></p>
        <p>Preço: R$<?=number_format($preco, 2,",", ".")?></p>
        <p>Descrição: <?=nl2br($descricao)?></p>
    </section>

    <!-- <ul>
        <li>Produto: <?=$produto?></li>
        <li>Fabricante: <?=$fabricante?></li>
        <li>Preço: R$<?=number_format($preco, 2,",", ".")?></li>
        <li>Descrição: <?=$descricao?></li>
    </ul> -->
</body>
</html>