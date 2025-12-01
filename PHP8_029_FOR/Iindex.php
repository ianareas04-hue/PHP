<?php 

// CICLOS/LOOPS 

// FOR

// PERMITE EXECUTAR UM BLOCO DE COD DERTERMINADO NUMERO DE VEZES 
// 1 - O INICIADOR - INDICA O VALOR INICIAL DO CONTROLADOR 
// 2 - A CONDIÇÃO - INDICA QUAL A CONDIÇÃO PARA QUE O CILCO TERMINE
// 3 - O INCREMENTO - ALTERAR O VALOR DO CONTADOR EM CADA CICLO 

for ($x = 1; $x < 10; $x++) {
    echo $x . '<br>'; 


}

echo '<hr>';

// mais uma vez se for executada apenas uma expressão 
// nao e necessario usar chaves ou chavetas

for ($x = 1; $x < 10; $x++) 
    echo $x . '<br>';

echo '<hr>';

// podemos conter uma assinatura diferente 

$i = 1;
for (; $i < 10;) {
    echo $i++ . '<br>';

}

echo '<hr>';

// o primeiro e ultimo parametro tambem podem ser divididos 
// em varios paramentros usando a virgulas como separador 

for($contador = 1, $x = 10; $contador < 10; $contador++, $x--){
    echo $x . '<br>';
}

echo '<hr>';

// por exemplo podemos apresentar todos os dados de um array 

$nomes= ['joao', 'ana', 'carlos'];
for($i = 0; $i < sizeof($nomes); $i++){
    echo $nomes[$i] . '<br>';


}