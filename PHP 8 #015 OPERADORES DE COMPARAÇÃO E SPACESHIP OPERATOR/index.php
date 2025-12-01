<?php

# OPERADORES DE COMPARAÇÃO 
# PERMITEM EFETUAR UMA COMPARAÇÃO ENTRE VALORES 
# VERIFICARM SE OS VALORES SÃO IGUAIS, DIFERENTES, MAIORES OU MENORES, OU DO MESMO TIPO 

# RESULTADO DA COMPARAÇÃO SERA SEMPRE O VALOR VERDADEIRO(TRUE) OU 
# FALSO (FALSE)

# VALORES SÃO IGUAIS ? 

$a = (2 == 3); # false
$a = (100 == 100); # true
$a = (50 == '50'); # true => '==' so verifica o valor 
$a = (50 === '50'); # false => '===' verifica o valor e tipo 

# VALORES SÃO DIFERENTES ? 

$a = (2 != 3); # true 
$a = (2 <> 3); # true (alternativo)
$a = (50 != 50); # false
$a = (50 != '50'); # false 
$a = (50 !== '50'); # true

# OPERADORES DE COMPARÇÃO COM 3 SIMBOLOS, CAMPARAM O VALOR E O TIPO DE VALOR 
# ===
# !==

# VALORES MAIORES OU MENORES ?

$a = (2 > 3); # false
$a = (2 < 3); # true 
$a = (50 >= 50); # true 
$a = (50 <= 50); # true 
$a = (50 < 50); # false

# NO PHP 7 FOI ADICIONADO UM NOVO OPERADOR DE COMPARAÇÃO 
# DESIGNANDO POR SPACESHIP OPERADOR (Tie Fighters do Star Wars)

# <=>

$x = 1 <=> 1; # 0 (1 == 1) '0' NEUTRO / IGUAIS  
$x = 3 <=> 2; # 1 (3 > 2) se o valor da esquerda for maior que o da direita '1' TRUE 
$x = 1 <=> 2; # -1 (1 < 2) se o valor da esquerda for menor que o da direita '-1' FALSE