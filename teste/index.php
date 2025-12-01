<?php 

// 1) Escreva um programa que mostre na tela a mensagem "Olá, Mundo!"

echo 'Hello, Word';



// 2) Faça um programa que leia o nome de uma pessoa e mostre uma mensagem de boas-
// vindas para ela:
// Ex:
// Qual é o seu nome? João da Silva
// Olá João da Silva, é um prazer te conhecer!


echo 'Qual seu nome? ';
$nome = trim(fgets(STDIN)); // o fgets(STDIN) o input em do php, porem so funciona via terminal 

echo "Olá $nome, é um prazer te conhecer!"; 

// Calma, vamos quebrar isso:

// $nome =
// estamos guardando alguma coisa dentro da variável chamada $nome
// (variável = caixinha onde o computador guarda informação)

// fgets(STDIN)
// isso quer dizer:
// pega o que a pessoa digitou no teclado

// Ou seja: o computador espera você digitar o nome.

// trim(...)
// limpa espaços sobrando
// (tipo quando você aperta espaço sem querer antes ou depois do nome)



// 3) Crie um programa que leia o nome e o salário de um funcionário, mostrando no
// final uma mensagem.
// Ex:
// Nome do Funcionário: Maria do Carmo
// Salário: 1850,45
// O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho.

echo 'Qual seu nome? ';
$nome = trim(fgets(STDIN)); // 'trim' tira os espaços do input
echo 'Digite seu salário: ';
$salario = floatval(fgets(STDIN)); // transforma o input em float

echo "Nome do Funcionário: $nome \n";
echo "O funcionário Maria do Carmo tem um salário de $salario em Junho.";



// 4) Desenvolva um algoritmo que leia dois números inteiros e mostre o somatório entre eles.
// Ex:
// Digite um valor: 8
// Digite outro valor: 5
// A soma entre 8 e 5 é igual a 13.

echo 'Digite um valor: ';
$n1 = intval(fgets(STDIN)); // transforma o input em inteiro
echo 'Digite outro valor: ';
$n2 = intval(fgets(STDIN)); // transforma o input em inteiro

$soma = $n1 + $n2;

echo "A soma entre $n1 e $n2 é igual $soma";



// 5) Faça um programa que leia as duas notas de um aluno em uma matéria e mostre na tela a sua média na disciplina.
// Ex:
// Nota 1: 4.5
// Nota 2: 8.5
// A média entre 4.5 e 8.5 é igual a 6.5

echo 'Digite sua nota: ';
$nota1 = floatval(fgets(STDIN));
echo 'Digite sua nota: ';
$nota2 = floatval(fgets(STDIN));

$media = ($nota1 + $nota2) / 2;

echo "Nota: $nota1\n";
echo "Nota: $nota2\n";

echo "A média entre $nota1 e $nota2 é igual a $media.";



// 6) Faça um programa que leia um número inteiro e mostre o seu antecessor e seu sucessor.
// Ex:
// Digite um número: 9
// O antecessor de 9 é 8
// O sucessor de 9 é 10

echo 'Digite um número inteiro: ';
$num = intval(fgets(STDIN));

$antecessor = $num = $num - 1;
$sucessor = $num = $num + 1;

echo "O antecessor de $num é $antecessor.\n";
echo "O sucessor de $num é $sucessor.\n";



// 7) Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a sua terça parte.
// Ex:
// Digite um número: 3.5
// O dobro de 3.5 é 7.0
// A terça parte de 3.5 é 1.16666

echo 'Digite um número real: ';
$num = floatval(fgets(STDIN));

$dobro = $num * 2;
$terca_parte = $num / 3;

echo "O dobro de $num é $dobro\n";
echo "A terça parte de $num é $terca_parte\n";


// 8) Desenvolva um programa que leia uma distância em metros e mostre os valores relativos em outras medidas.
// Ex:
// Digite uma distância em metros: 185.72
// A distância de 85.7m corresponde a:
// 0.18572Km
// 1.8572Hm
// 18.572Dam
// 1857.2dm
// 18572.0cm
// 185720.0mm

echo 'Digite a distância em metros: ';
$distancia = floatval(fgets(STDIN));

$km = $distancia / 1000;
$hm = $distancia / 100;
$dam = $distancia / 10; 
$dm = $distancia * 10;
$cm = $distancia * 100;
$mm = $distancia * 1000;

echo "$km\n";
echo "$hm\n";
echo "$dam\n";
echo "$dm\n";
echo "$cm\n";
echo "$mm\n";


// 9) Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$) e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.

echo 'Digite a quantidade de reais na sua conta: ';
$real = floatval(fgets(STDIN));

$dol = 5.50;

$total = $real / $dol;

echo "Sua quantia de $real convertido em dolar é $total$";







