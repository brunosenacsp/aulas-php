<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <style>
        /* formatando as linhas de forma alternada */
        tr:nth-child(even) {
            background: yellow;
        } 
    </style>
</head>
<body>
    <h1>Exercício 4</h1>
    <hr>
    <h2>Versão 1 (usando vetor array)</h2>
    
  
    <?php
    $linguagens = [
        "HTML" => "Estruturação",
        "CSS" => "Estilos",
        "JS" => "Comportamento",
        "PHP" => "Back-End",
    ]            
    ?>

    <table>
    <caption>Versão 1</caption>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>

    <tbody>
        <?php 
        $id =1;
        foreach ( $linguagens as $linguagem => $descricao ) { ?>
            <tr>
                <td> <?=$id++?> </td>
                <td> <?=$linguagem?> </td>
                <td> <?=$descricao?> </td>
            </tr>
        <?php 
        // $id++;
        } 
        ?>
    </tbody>
    </table>
        <hr>
    <h2>Versão 2: usando matriz (array dntro de array)</h2>

        <?php
        $linguagens2 = [ 
            [   
                "id" => 1,
                "linguagem" => "HTML",
                "descricao" => "Estruturação"
            ],
            [   
                "id" => 2,
                "linguagem" => "CSS",
                "descricao" => "estilos"
            ],
            [   
                "id" => 3,
                "linguagem" => "JS",
                "descricao" => "Comportamentos"
            ],
            [   
                "id" => 4,
                "linguagem" => "PHP",
                "descricao" => "Back-End"
            ]                    
        ]; 
        ?>

            <table>
                <caption>Versão 2</caption>
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>
                </tr>

                <?php foreach( $linguagens2 as $linguagem ) { ?>
                    <tr>
                        <td> <?=$linguagem['id']?> </td>
                        <td> <?=$linguagem['linguagem']?> </td>
                        <td> <?=$linguagem['descricao']?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>

   


   
    


</body>
</html>