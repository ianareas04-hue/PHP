<?php

# OPERADORES LÓGICOS

# OS OPERADORES LOGICOS SAO FREQUENTES USDADOS COM OS OPERADORES DE COMPARAÇÃO 
# ELES PERMITEM 'LIGAR' VARIAS COMPARAÇÕES AVALIAÇÃO SE SÃO VERDADEIRAS OU FALSAS 

# PHP A CONSTRUÇÃO CORRETA DE INSTRUÇOES CONDICIONAIS DEPENDE DESTES OPERADORES 
# INSTRUÇÕES CONDICIONAIS VERIFICAM SE A SITUAÇÃO É VERDADEIRA(TRUE) OU FALSA(FALSE) 

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000);  # AND -> TRUE
$x = ($a > $b) || ($a > 1000);  # OR -> FALSE
$x = ($a < 150) && ($a > 300);  # false
$x = ($a > 10) || ($b > 500);   # true 
$x = ($a === 100) && ($b < $a); # true

# MAIS EXEMPLOS 

$x = (10 > 5) && (20 > 30);   
$x = (true && false);   # false 

$x = (2 > 1) && (3 > 2); 
$x = (true && true);    # true 

$x = (2 < 4) || (4 > 10);
$x = (true || false);   # false

$x = (2 == 3) || (3 > 1);
$x = (false || true);   # true 

#  OPERADOR NOT 

$a = false; # not --> e a auteração de uma verificação contraria ao valor de variavel boolean 

$x = !$a; # not --> false > true // true >> false 

# OPERAFDORES LOGICOS 

# &&  --> e 
# ||  --> ou
# and --> e 
# or  --> ou 
# xor --> professor ribeiro vai explicar mais pra frente no curso 

# EXISTEM OS OPERADORES BITWISE 
# SERVEM PARA ANALISAR VALORES BINARIOS DE NUEMEROS
#N EXISTEM PRECEDENCIA DE OPERADORES. VAMOS VER AO LOGO DO CURSO ALGUNS EXEMPLOS 

