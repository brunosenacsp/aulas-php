<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Exercício - 07</h1>
    <hr>
    
<?php
    $fabricante = ["Sony", "Samsung", "LG", ""];
?>

    <form action="exercicio-07.php" method="post">
        <p>
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
        </p>
        <p>
            <label for="fabricante">Escolha o fabricante:</label>
                <select name="fabricante">
                    <?php foreach ($fabricante as $f) { ?>
                        <option value="<?=$F;?>"> <?=$f;?></option>
                        <?php } ?>
                </select>        
        </p>
        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco">
        </p>
        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>