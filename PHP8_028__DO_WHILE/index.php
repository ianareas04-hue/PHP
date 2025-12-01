<?php 

// DO WHILE
// E MUITO SEMELHANTE AO CILCO WHITE, contudo, neste caso a condição
// e valida apos a execução do ciclo

$x =  0;

do {
    echo $x++ . '<br>';
} while ($x < 10);

echo '<br>';

// igual a modo quando so temos uma expressão a executar, 
// podemos ignorar as chaves 

$x = 0;
do 
    echo $x++.'<br>';
while($x < 10);

echo '<hr>';

$x = 0;
do echo $x++.'<br>'; while($x < 10);
