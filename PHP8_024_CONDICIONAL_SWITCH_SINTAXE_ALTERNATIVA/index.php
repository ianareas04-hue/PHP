<?php

// DELCARAÇÃO / INSTRUÇÃO CONDICIONAIS 

// SWITCH - UMA ALTERNATIVA DO IF 

$nome = 'joao';
switch($nome) {
    case 'joao':
        
        # codigo 1
        
        break;
    case 'ana':
        
        # codigo 2

        break;
    default:

        # codigo 3

        break;
}

switch ($nome) {
    case 'joao':
        echo '1';
        echo '1';
        echo '1';
        echo '1';
        echo '1';
        break;
    case 'ana':
        echo '2';
        echo '2';
        echo '2';
        echo '2';
        echo '2';
        break;
    default:
        echo '3';
        echo '3';
        echo '3';
        echo '3';
        echo '3';
        break;
}

// SITAXE ALTERNATIVA 

// NOMRAL 
$valor = 5;
if ($valor == 10) {
    // codigo 1
} else {
    // codigo 2
}

// alternativa
if($valor == 10):
    // codigo 1
else:
    // codigo 2
endif;

// switch
switch ($variavel):
    case 'value':

        // codigo 1

        break;
    default:

        // codigo 2

        break;
    endswitch;

