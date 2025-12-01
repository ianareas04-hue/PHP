<?php
// continução da aula -  3:43

// DECLARAÇÕES E INSTRUÇÕES CONDICIONAIS 

// Sao instrucao utilizadas para controlar o fluxo da aplicação de acordo com determinadas condições 

// Para a verificação das condições destas declaração, recorremos ao uso da operadores de comparação combinados com os operadores logicos 

// O php contem varias estruturas condicionais, como iremos ver, e php 8 foi indroduzida uma estrutura que tambem iremos ver 

// A delcaração if - define blocos de codigo que so são executados se a condição for verdadeira (true)

$nome = 'joao';
if ($nome == 'joao') {
    echo 'Foi identificado o nome do autor do video';
}

// if e else

$idade = 18;
if ($idade <= 18) {
    echo 'Adolecente';
} else {
    echo 'Adulto';
}

// if, elseif, else

$nota = 5;
if ($nota <= 2) {
    echo 'Reprovou de ano';
} elseif ($nota => 4) {
    echo 'Estude mais';
} elseif ($nota <= 6) {
    echo 'Esta na media';
} elseif ($nota <= 8) {
    echo 'Sua nota esta muito boa';
} else {
    echo 'Sua nota e Excelente!'; 
}

// podemos deixar de usar as chaves, se só existir uma instrução no bloco

if ($nota <= 2)
    echo 'Nota muito baixa';
elseif ($nota <= 4)
    echo 'Nota esta baixa';
elseif ($nota <= 6)
    echo 'Nota esta na media';
elseif ($nota <= 8)
    echo 'Nota esta acima da media';
else 
    echo 'Nota esta excelente!!!';

// DECLARAÇÕES / INSTRUÇÕES CONDICIONAIS 

$numero = 20;
if($numero > 10 && $numero != 30) {
    // executar codigo
} else {
    // executar codigo 
}

// CONDIÇÕES DENTRO DE CONNDIÇÕES

$numero = 10;
if($numero >= 0) {
    if ($numero >= 100) {
        echo 'O numero e igual ou maior que 100';
    } else {
        echo 'O numero e positivo, mas inferior a 100';
    }
} else {
    echo 'O numero e negativo.';
}