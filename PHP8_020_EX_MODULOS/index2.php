<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
        1 - CRIE UM ARQUIVO INDEX.PHP
        2 - DEFINA VARIAVEIS NOME E APELIDO COM OS RESPECTIVOS VALORES
        3 - APRESENTE O NOME COMPLETO UM PARAGRAFO DE HTML
        4 - NO SEGUNDO PARAGRAFO PRESENTE O SEGUINTE:
            - O MEU NOME TEM X CARACTERES.
            - SENDO CALCULO DO TOTAL DE CARACTERES DO SEU NOME. 
    
    */

    $nome = 'Ian Vitor';
    $apelido = 'IanzinhoDoGrau';
    $nome_completo = $nome . ' ' . $apelido;
    $total_strings_nome = mb_strlen($nome_completome)
    ?>
    <h3>O meu nome é: </h3>
    <h1><?php echo $nome_completo = $nome . ' ' . $apelido; ?></h1>
    <p>O total de strings no seu nome é: <?php echo $total_strings_nome; ?></p>


</body>
</html>