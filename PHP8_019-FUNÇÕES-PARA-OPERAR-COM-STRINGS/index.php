<?php

# STRINGS SÃO VARIVEIS MUITO ESPECIAIS DENTRO DO PHP.
# EXISTEM DEZENAS DE FUNÇÃO PARA TRATAMENTO DE STRINGS
# (VEREMEOS MAIS PODEMOS APRESENTAR UM DETERMINANDO)

# POR EXEMPLOS, PODEMOS APRENSENTAR UM DETERMINADO CARACTER DE UMA STRING 
# DA SEGUINTE FORMA

$frase = 'Esta frase tem 29 caracteres.';
$n = '<br>';

// apresenta o primeiro caracter da frase 

echo $frase[0];
echo $n;

// apresenta o sexto caracter da frase

echo $frase[5];

// podemos comparar strings da seguinte forma;

$a ='Joao';
$b ='Carlos';

$c = ($a == $b); // false
$d = ($a != $b); // true 

# EXISTEM MUITAS FUNÇÕES NATIVAS NO PHP PARA OPERAR COM STRINGS 

// EXEMPLOS:

$frase = 'Esta frase tem 29 caracteres.';

// RETORNA O NUMERO DE CARACTERES DA STINGS

$numero_caracteres_total = strlen($frase);

// RETORNA AS LETRAS A PARTIR DA POSIÇÃO 0 E DURANTE 4 CARACTERES 

$primeira_palavra = substr($frase, 0, 4);

// CONVERTE TODA A STIRNG EM LETRA MAIUSCULAS

$todas_maiusculas = strtoupper($frase);

// CONVERTE TODAS AS STRINGS EM MINUSCULAS

$todas_minusculas = strtolower($frase);

//  SUBSTITUIR UMA LETRA POR OUTRA 

$nova_frase = str_replace('a', 'x', $frase);

// VEJRIFICA QUAL A POSIÇÃO DE UM CARACTER DENTRO DA STRING 

$posicao = strpos($frase, 'a');

// https://www.php.net/manual/pt_BR/ref.strigs.php

# NO PHP 8 FORAM INTRODUZIDOS MAIS ALGUMAS FUNÇÕES PARA STRINGS 

// str_contains()
$nome = "Ana Maria Silva Cardoso";
$x = str_contains($nome, 'Silva');    // true

// str_starts_with()
$x = str_starts_with($nome, 'Ana');   // true
$x = str_starts_with($nome, 'ana');   // false

// str_ends_with()
$x = str_ends_with($nome, 'oso');    // true
$x = str_ends_with($nome, ' oso');   // false


