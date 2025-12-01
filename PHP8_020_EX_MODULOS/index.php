
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>

<body>

    <?php

    /*
    1. CRIE UM SCRIPT index.php
    2. DEFINE DUAS VARIAVEIS: E O SEU APELIDO 
    3. NUMA ESTRUTURA BASICAS DE HTML, APRESENTE UM TITULO ESTATICO DO TIPO H3
       COM UM TEXTO "O MEU NOME E: "
    4. APRESENTE UMA TAG H1 COM O NOME COMPLETO A PARTIR DAS VARIAVEIS INICIADAS NO PRONTO 2 

    */
    $nome = 'Ian Vitor';
    $apelido = 'Ian';
    ?>
    
    <h3>O meu nome é: </h3>
    <h1><?php echo ($nome . ' ' . $apelido);?></h1>

</body>

</html>