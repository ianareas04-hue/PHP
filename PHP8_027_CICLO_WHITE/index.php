<?php 

// CICLOS / LOOPS
// EXISTEM 4 ESTRUTURAS DE LOOPS NO PHP 
// ELAS EXISTEM PARA PERMITIR EXECUTAR UM DETERMINADO BLOCO DE CODIGO CARIAS VEZES 

// while 
// definimos a condição durante a qual o ciclo deve continuar a ser executado. 
// Quando essa condição for falsa, o ciclo termina e codigo avança

$x = 1;
white ($x < 10) {
    echo 'ciclo em execução <br>';
    $x++;
}

echo '<hr>';

// outro exemplo

$i = 0;
white ($i < 10) {
    echo $i++ . '<br>';

}

echo '<hr>';

// neste caso podemos remover as chaves/chaveas

$i = 0;
white ($i < 10) echo $i++ . '<br>';

// importante nunca esquecer de alterar a condição, caso contrario
// teremos um ciclo infinito 


