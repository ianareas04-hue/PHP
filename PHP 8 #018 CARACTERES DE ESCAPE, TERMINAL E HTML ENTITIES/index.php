<?php

# CARACTERISTICAS de escape

echo '<p>Este é um paragrafo de HTML </p>';
echo '<br>';

# OS CARACTERES DE ESCAPE SAO USADOS PARA ESCREVER CARACTERES ESPEKCIAIS,
# COMO E O CASO DE ALGUNS SIMBOLOS QUE PODEM ENTRAR EM CONFLITO COM O CODIGO

# $frase_1 = 'I'm going to jhon's Party!';
# $frase_2 = "I'm going to jhon's Party !";

# $frase_3 = "I'm not sure jhon "the great" will win this fight.";

# a '\' é o simbolos para definir um caracter de escape

$frase_1 = 'I\'m going to jhon\'s Party!';

$frase_3 = 'I\'m not sure jhon "the great\" will win this fight.';
$frase_3 = "I'm not sure jhon \"the great\" will win this fight.";

# APENAS TEM O COMPORTAMENTO DESEJADO NO TERMINAL.

echo 'Joao Ribeiro\n\rTeste'; # SO FUNCIONA NO TERMINAL 
echo "Joao Ribeiro\n\rTeste";

# NO PHP 7 FOI INTRODUZIDO O CARACTER DE ESCAPE UNICODE 
# PERMITE APRENDER CARACTERES A PARTIR DO SEU CODIGO, HEXODECIMAL

# https://www.utf8-chartable.de/

echo "\u{A9}"; # copyright
echo "\u{BC}"; # 1/4
echo "\u{AE}"; # registered trademark

# COM HTML ENTITIES 

# https://dev.w3.org/html5/html-author/charref

echo '<br>';
echo '&copy';
echo '&frac14';
echo '&reg';





