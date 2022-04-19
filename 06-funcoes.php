<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Craiando e usando funções</h1>
    <hr>

    <h2>Funções como sub-rotina ou procedimento</h2>

    <?php
        function dadosAutor() {
            echo "<div>";
            echo "<p> Bruno Fernandes </p>";
            echo "<p> bruno@email.com </p>";
            echo "</div>";
        }
    ?>

    <section>
        <h3>Chamada da sub-rotina</h3>
        <?=dadosAutor()?>

        <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
        </article>
    </section>

    <hr>

        <h2>Função com retorno de dados</h2>

        <?php
        function dadosCurso(){
            return "Técnico em Informática para Internet";
        }
        ?>

        <p>Estamos no curso de <?=dadosCurso()?> </p>
        <p> <?=dadosCurso()?> é ministrado no SENAC Penha</p>

        <hr>

        <h2>Função com parâmetros (ou argumentos)</h2>

        <?php
        //variavel fora da função = global
        //o terceiro parâmetro quando não informado assumirá o valor padrão (no caso, zero)
        function soma( $valor1, $valor2, $valor3 = 0 ){
            // variável dentro da função = local (só funciona dentro da função)
            $total = $valor1 + $valor2 +$valor3;
            return $total;
        }
        ?>

        <p> <?=soma(10, 20, 30)?> </p>
        <p> <?=soma(100, 260, 380)?> </p>
        <p> <?=soma(1, 2)?> </p>

        <!-- variavel global -->
        <?php $total = soma( 1500, 2000, 125 ); ?>
        <p> <?=$total?> </p>

            <?php
            //Passando uma função como condição de uma if
            if( soma (500, 200, 700) > 1000 ){
                echo "Resuldado da função é maior/igual a 1000";
            }

            function verificaNegativo($valor){
                //versão 1: if/else tradicional
                 if( $valor < 0 ){
                     return "negativo";
                 } else {
                     return "não é negativo";
                 }

                //versão 2: if/else usando operador ternário (utilizado em calculos simples)
                return $valor < 0 ? "negativo" : "não é negativo";
            }
            ?>

            <p> <?=verificaNegativo(10)?> </p>
            <p> <?=verificaNegativo(-150)?> </p>
            <p> <?=verificaNegativo(258.99)?> </p>
    
        
    
</body>
</html>