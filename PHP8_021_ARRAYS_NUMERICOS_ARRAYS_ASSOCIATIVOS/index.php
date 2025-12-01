<?php 

# ARRAYS

# UM ARRAY (TRADUZIDO PARA PT E UMA MATRIZ) E NA REALIDADE UMA COLEÇÃO DE VALORES
# FUNCIONA COMO UMA VARIAVEL, MAS QUE PODE CONTER MUITOS VALORES "ARRUMADOS" CADA UM O SEU ESPAÇO 
# ESSE "ESPAÇOS" E DESIGNADO POR INDICE DO ARRAY

# RESUMINDO, UM ARRAY É UMA CONSTITUIÇÃO POR CHAVES/INDICES E VALORES.
# AS CHAVES/INDICES PODEM SER NUMERICOS (ARRAY NUMERICOS) OU STRINGS (ARRAY ASOCIATIVOS)
# E PODEM ATE COEXISTIR OS DOIS TIPOS NUMERICOS NO ARRAY
# OS VALORES PODEM SER QUALQUER TIPO, INCLUINDO SEREM OUTROS ARRAYS 

# EXEMPLOS 

$valores = array(1, 2, 3, 10, 20, 30);
$nomes = array('joao', 'ana', 'carlos');

# A APRTIR DO PHP 5.4, PASSOU A SER POSSIVEL ESCREVER OS ARRAYS DE FORMA MAIS SIMPLIFICADA

$valores = [1, 2, 3, 10, 20, 30];
$nomes = ['joao', 'ana', 'carlos'];

# ESSE ARRAYS SÃO DE INDICES NUMERICO.
# PARA ARPESENTAR UM DOS VALORES, PROCEDIDOS SEGUINTES FORMA:

echo $valores[0];
echo $nomes[1];

# NUNCA ESQUECER QUE OS ARRAYS TEM INDICE DE BASE 0

// NAO TEM OBRIGATORIAMENTE DE TER CHAVES SEQUENCIAIS 

$dados = [
    10 => 1000,
    20 => 2000,
    30 => 3000,
 // 31 => 4000
];

# SE ADICIONARMOS UM NOVO ELEMENTO NO FINAL DE COLEÇAO, ELE VAI ASSUMIR O ULTIMOS INDICES + 1

$dados[] = 4000; # $dados[31];

# ARRAYS 

# SEMRPE QUE QUEREMOS APRESENTAR UM VALORES DE ARRAY, USAMOS O SEU INDICE. 
# DA MESMA FORMA PODEMOS ALTERAR O VALOR DO ARRAY USANDO O SEU INDICE.

$valores = [10, 20, 30];

$valore[1] = 2000; // $valores = [10, 2000, 30]; 

# podemos tambem ignorar o indice para adicionar um novo elemento ao array

$valores[ ] = 3000; // $valores = [10, 2000, 30, 3000];

# OU DE OUTRA FORMA 

array_push($valores, 5000); // $valores = [10, 2000, 30, 3000, 5000];

// PARA APRESENTAR VALORES DE UM ARRAY NUMA STRING FAZER DA SEGUINTE FORMA:

echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1];

// ou

echo "Os valores são $valores[0] e $valores[1]";

# arrays associativos 

// ao contario dos arrays numericos, as chaves sao tipo string

$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60,
];

// ou

$dados = [
    'nome' => 'Joao',
    'email' => 'joao@gmail.com',
    'nascionalidade' => 'Brazil',
    'telefone' => '99999999999999'
];

// da mesma forma que o arrays numericos não devem existir duas cheves iguais,   
// nos associativos tambem nao.
// na apresentação não e gerado nenhum erro. o valor a ser definido é sempre o ultimo.

$dados = [
    'nome' => 'joao'
    'nome' => 'gerson'
];

// COMO EU FAÇO PRA CHAMAR ESSA FUNÇÃO ?

echo $dados['nome'];

