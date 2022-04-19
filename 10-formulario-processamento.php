<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 10</title>
</head>
<body>
    <h1>Form 10</h1>
    <hr>
    <!-- deixe o action vazio -->


<?php
// detectar quando o formulario é acionado
if( isset($_POST["enviar"] ) ){

  //validando se os campos foram preenchidos
  if(empty($_POST['nome']) || empty($_POST['email'])){
?>
    <p>Preencha os campos!</p>
    <p><a href="10-formulario-processamento.php">Voltar</a></p>
<?php
  } else {
  
  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
  
?>
    
    <section>
        <h1>Dados</h1>
        <p>Nome: <?=$nome?></p>
        <p>E-mail: <?=$email?></p>
    </section>

<?php
}
} else {
?>

<form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
        </p>
        <!-- importante dar um nome ao botão -->
        <button type="submit" name="enviar">Enviar dados</button>
</form>
<?php
}
?>

</body>
</html>