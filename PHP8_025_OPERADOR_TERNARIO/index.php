<?php
    // OPERADOR TERNARIO

    // E UM OPERADOR CONDICIONAL QUE PODE SUBSTITUIR UMA ESTRUTURA SIMPLES IF ELSE 
    // O OPERADOR NECESSITA DE TRES EXPRESSOES OU AREAS:
    
    // 1. A EXPRESSAO QUE SERA AVALIADA COMO VERDADEIRA 
    // 2. A EXPRESSAO QUE SERA EXECUTADA COMO O TRUE  
    // 3. A EXPRESSAO QUE SERA EXECUTADA COMO O FALSE

    $opcao = 0;

    $nome = $opcao == 1 ? 'Joao' : 'Antonio';

    // podemos tambem usar da seguinte forma:

    $opcao == 1 ? $nome = 'Joao' : $nome = 'Antonio';

    // podemos usar o operador terenario em varias situações distintas 
    // por exemplo, pra apresentar um determinado texto.

    echo $opcao == 1 ? 'Sim' : 'Nao';

?>

    <!-- Com instrução condicional if -->
    <?php if($opcao == 1): ?>
        <h2>SIM</h2>
    <?php else: ?>
        <h2>NÃO</h2>
    <?php endif; ?>

    <!-- Com o operador ternario -->

    <h2><? $opcao == 1 ?  'sim' : 'nao' ?></h2>

    <!-- Por exemplo, para controlar CSS -->
    <h2 style="color: <? $opcao == 1 ?  'red' : 'blue' ?> ">Este texto tem a cor definida pelo PHP</h2>
