<?php

// break, continue e goto

// existem duas funções especiais dentro dos loops: break e continue 

// break
// serve para interromper a execução de um loop

for($i = 0; $i < 20; $i++) {
    echo $i. '<br>';
    if($i == 10) {
        break; // interrompe o loop
    }
}

// Explicação super simples:

// O for iria contar de 0 até 19

// Mas quando $i chega em 10

// O break fala: "acabou! para tudo!"

// O loop é interrompido na hora

// Ele não mostra 11, 12, 13...
// Porque o loop morreu ali.

echo '<hr>';

$nomes = ['joao', 'ana', 'ian'];
foreach($nomes as $nome) {
    echo $nome . '<br>';
    if($nome == 'ana') {
        break; 
    }
}

// Explicação:

// vai imprimir: joao

// depois ana

// quando encontra ana, para o loop

// ian nunca aparece

echo '<hr>';

// Continue 
// permite avançar uma volta no ciclo ignorando o codigo que deveria ser executado

for($i = 0; $i < 20; $i++) {
    if($i == 10) {
        continue; // volta a linha do loop 
    }
    echo $i. '<br>';
}

// Explicação simples:

// o loop vai de 0 até 19

// mas quando $i é 10

// continue diz: "não faz mais nada nessa rodada"

// e pula para a próxima

echo '<hr>';

$nomes = ['joao', 'ana', 'carlos'];
foreach($nomes as $nome) {
    if($nome == 'ana') {
        continue; 
    }
    echo $nome. '<br>';
}

// Explicação simples:

// o loop vai de joao até carlos

// mas quando $i é ana

// continue diz: "não faz mais nada nessa rodada"

// e pula para a próxima

echo '<hr>';

// goto 
// e muito pouco usado torna a leitura do codigo mais complexa
// foi introduzido no PHP 5.3 e permite sair do loop e ir para uma linha de codigo 
// definida por label (nome seguinte de :)

for($i = 0; $i < 20; $i++) {
    if($i == 10) {
        goto teste; // saltar para o label 
    }
    echo $i. '<br>';
}

echo 'Fim do loop';

teste: //    <--     isso e um label  
echo 'AQUI!';

// Explicação simples:

// loop começa normal

// quando $i chega em 10

// goto teste manda o código pular direto para o rótulo (teste:)

// tudo no meio é ignorado
