<?php 

// ciclos / loops 

// foreach 

//  e um ciclo especialmente concebidio para fazer interação 
// pelos valores de um array

$nome = ['joao', 'ana', 'carlos'];
foreach($nome as $nome) {
    echo $nome . '<br>';
}

// Explicando como se fosse para uma criança:

// Você tem uma lista com 3 nomes

// O foreach pega um nome por vez

// Coloca esse nome dentro da variável $nome

// E mostra na tela

echo '<hr>';

// existe ainda outra assinatura que permite ir buscar 
// a chave e o valor do array

$capitais = [
    'portugal' => 'lisboa',
    'brasil' => 'brasilia',
    'espanha' => 'Madrid'
];

foreach($capitais as $key => $value) {
    echo "Para o pais $key a capital é $value <br>";
};

// Explicação SUPER simples:

// Esse array tem chave → valor, tipo:

// portugal → lisboa

// brasil → brasilia

// espanha → Madrid

// No foreach:

// $key = o país

// $value = a capital