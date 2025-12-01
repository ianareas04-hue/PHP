<?php

// ARRAYS MISTOS (MIXED ARRAYS)

// É POSSIVEL CRIAR UM ARRAY QUE COMBINA INDICES NUMERICOS E STRINGS 
// EMBORA NÃO SEJA NECESSIDADE MUITO FREQUENTE, E POSSIVEL DA SEGUINTE FORMA.

$dados = [
    0 => 10,
    'nome' => 'Antionio',
    'apelido' => 'Silva',
    10 => 1000,
    11 => 'rua de lisboa',
    12 => 'Portugal'
];

// um estrutura deste tipo e mais complexa de agir 
// devido a mistura de indices e tipos de dados 

// Para apresentar dados do array, procedemos sempre da mesma forma;

echo $dados[0];         // 10 
echo $dados['apelido']; // silva 

// ARRAYS MULTIDIMENCIONAIS

// Sao arrays, numericos ou associativos, cujo valores sao outros arrays.
// Exemplos:

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
];

// neste caso, para apresentamos outros valores deste arrays:

echo $dados[1][2]; // 300
echo $dados[0][3]; // 40

// podemos ter arrays multidimensionados associativos:

$cidades = [
    'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'brasil' => ['Brasilia', 'Sao Paulo', 'Rio de Janeiro'],
    'espanha' => ['Madrid', 'Barcelona', 'Sevilha']
];

echo $cidades['brasil'][1];   // Sao Paulo
echo $cidades['espanha'][0];  // Madrid
echo $cidades['portugal'][2]; // Coimbra

// OS ARRAYS PODEM TER MAIS DO QUE DUAS DIMENSÕES

// iremos voltar aos arrays mais pra frente para ver algumas
// funções relacionadas com esta materia