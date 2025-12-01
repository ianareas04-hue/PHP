<?php

# 'a' e igual a 100
# apresentado o valor de 'a'

$a = 100;
echo $a;
echo '<br>'; 

# EX001
# 'a' e igual a 1000 e 'b' e 'a' metade de 'a'
# apresente o valor de 'b'

$a = 1000;
$b = $a / 2;

echo $b;

echo '<br>';

# EX002
# 'a' é igual a 100 e 'b' é igual  3 vezes o valor de 'a'
# aprensente o valor de 'b'

$a = 100;
$b = $a * 3;

echo $b;

echo '<br>';

# EX003
# 'a' é iniciado e apresentado com o valor 20.
# na seguinte, 'a' deverá ser apresentado com o valor 21.

echo $a = 20;
echo '<br>';
# $b = $a++; => PRIMIERO ELE EXECUTA A OPERAÇÃO, DEPOIS FAZ A ADIÇÃO
$b = ++$a;

echo $b;

# echo $a = 20;
# echo '<br>';
# echo ++$a;

echo '<br>';

# EX004
# 'a' é igual a 100
# 'b' é igual a 250 
# 'c' é igual a 'a' mais 'b'
# acrecente mais uma unidade a 'c' 
# apresente 'c'

$a = 100;
$b = 250;
$c = $a + $b;
echo ++$c; # => PRIMEIRO ELE FAZ A ADICIÇÃO, DEPOIS A OPERAÇÃO