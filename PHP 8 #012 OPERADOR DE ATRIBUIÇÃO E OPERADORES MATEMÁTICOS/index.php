<?php

# OPERADORES 
# ======================
# SÃO SIMBOLOS QUE PERMITEM EXECUTAR OPERAÇÕES MATEMATICAS 
# OPERADORES LOGICAS / COMPARATIVAS 

# OPERADORES DE ATRIBUIÇÃO (ASSIGNMENT)

$variavel = 100;
$variavel = "joao";

# OPERADORES ARITIMETICOS (PARA EXECUÇÃO DE CALCULOS)

$x = 4 + 2; # adicação
$x = 4 - 2; # sbtração
$x = 4 * 2; # multiplicação
$x = 4 / 2; # divisão
$x = 4 % 2; # modulus (restante da divisão)

# modulus
$x = 100 % 3; # 33.3...1
$x = 60 % 3;  # 20...0
$x = 13 % 3;  # 6.5...1

echo 3462 / 7;
echo '<br>';
echo 3462 % 7;

$a = 10;
$b = 20;
$c = $d = $h = 100;
$resultado = $a + $b;  # 30
$resultado = $a + 100; # 110
$resultado = $a * $b;  # 200

$resultado = 1000 + $a + 10 + $b;

# desde de o PHP 5.6 existe o componenete que permite calcular a potencia 
$x = 4 ** 2;
echo $x;       # 16 