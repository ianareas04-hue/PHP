<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 003</title>
</head>
<body>
    <?php
        // 1 - Crie uma ficheiro index.php
        // 2 - defina duas variaveis nome e apelido 
        //      (ambas devem ter letras minusnculas)
        // 3 - numa pagina html simples, apresente o seguinte texto dentro de um paragrafo:
        //      (meu nome é NOME e meu apelido é APELIDO)
    
        $nome = mb_strtolower('Ian');
        $apelido = mb_strtolower('DuGrau');

    ?>
    <p>O meu nome é <?php echo $nome; ?>, e meu apelido é <?php echo $apelido; ?></p>
</body>
</html>