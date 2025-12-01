<?php

// EXPRESSÃO MATcH 
// NO PHP 8 FOI INTRODUZIDA UMA NOVA EXPRESSÃO CONDICIONAL DESIGNADA POR MATH
// E MUITO SEMELHANTE AO SWITCH, MAS COM UMA SINTAXE MAIS CONCISA

// COM SWITCH

$x = 10;
switch ($x) {
    case 5:
        echo 'parou no 5';
        break;

    case 10:
        echo 'parou no 10';
        break;

    case 15:
        echo 'parou no 15';
        break;

    default:
        echo 'e uma numero diferente de 5, 10 ou 15';
        break;
}

echo '<hr>';

// COM MATcH

echo match($x) {
    5 => 'parou no 5',
    10 => 'parou no 10',
    15 => 'parou no 15',
    default => 'e uma numero diferente de 5, 10 ou 15'
};

// No caso do math uma expressão é valida por condição
// e é possivel executar a mesma operação para varias condições 

$x = 10;
$opcao = match($x) {
    2 => 'e 2',
    4 | 5 | 6 => '4, 5 e ou 6', // Isso ainda está errado!
    default => 'outro valor'
};

$x = 10;
switch ($x) {
    case 2: 
        $opcao = 'e 2';
        break;
    case 4:
    case 5:
    case 6:
        $opcao = '4, 5 e ou 6';
        break;
    default:
        $opcao = 'e o valor';
        break;
}

// IMPORTANTE
// no Switch, as comparações podem ser feitas só por valor (==)
// no caso do match, sao sempre feitas por varios e tipo (===)

echo '<hr>';

$x = '1';
switch ($x ) { // INTEIRO
    case 1:
        echo 'interior'; break;
    case '1':
        echo 'string';
}

echo '<hr>';

echo match($x) { // STRING
    1 => 'inteiro',
    '1' => 'string'
};