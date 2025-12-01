<?php

# STRINGS 

# E UMA STRING E UMA SERIE DE CARACTERISTICAS QUE PODEM SER GUARDADOS NUMA VARIAVEL 
# PODEMOS DEFINIR UMA STRING COMO SENDO UMA CONJUNÇÃO DE LETRAS, ESPAÇOS, SIMBOLOS, E ALGARISMOS QUE NORMALMENTE DESIGNADOS POR TEXTO.

# EM PHP, AS STRINGS PODEM SER DELIMITADAS POR 
# ASPAS '' 
# ASPAS ""

$a = 'Está e uma string';
$b = "Está é uma string";

echo $a;
echo '<br>';
echo $b;

# Na PSRs não existe uma orientação definida. ser consistentes ao nosso codigo.     

# CONCATENAÇÃO DE STRINGS 
# É O PROCESSO QUE, ATRAVES DO CODIGO, PERMITE JUNTAR VARIAS, STRINGS. 
# EXISTEM DOIS APERADORES DE CONCATENAÇÃO:

# . 
# .= 

$a = 'Joao'.' '.'Ribeiro'; # ponto liga as diferentes strings 

$b = 'Joao';
$b .= ''.'Ribeiro';    # '.=' faz a concatenação com o valor já existente na string 

echo $b;


# OUTRO EXEMPLO DE COMO USAR 

$nome = 'Joao';
$apelido = 'Ribeiro';
$nome_completo = $nome . ' ' . $apelido;
echo $nome_completo;


# A DIFERENÇA ENTRE STRINGS DELIMITADAS POR '' E POR "" É QUE, NO SEGUINTE CASO
# PODEMOS FAZER O SEGUINTES:

$nome = 'Joao';
$apelido = 'Ribeiro';
$nome_completo = "$nome_completo"; # PROGRAMA INTERPRETA COMO VARIAVEL, E SUBATITUI O VALOR  

echo $nome_completo;

#  AO CONTRARIO DAS "", NAS STRINGS '' AS VARIAVEIS NÃO SAO INTERPRETADAS
# RELATIVAMENTE AO SEU VALOR (PARSE)

# OUTRO EXEMPLOS

# HEREDOC E NOWDOC (OUTRAS FORMAS DE DELIMITAÇÃO)
# APESAR DE NÃO SEREM MUITO COMUNS, PODEM SER USADAS PARA TRATAMENTO DE MAIORES BLOCOS DE TEXTO.

# HEREDOC - PERMITE FAZER O PARCE DE VARIAVEIS 

$cliente = 'Joao Ribeiro';
$email = 'joao_ribeiro2gmail.com';

$texto = <<<label
Olá, sr $cliente.
Serve a presente mensagem para informar que se encontra inscrito no proximo concurso.
Enviaremos o regulamento para o seu email $email
Obrigado pela simpatia. 
label;

echo $texto;

# NOWDOC - NAO PERMITE PARSE DE VARIAVEIS 

$texto = <<<'LABEL'
Olá, sr $cliente.
Serve a presente mensagem para informar que se encontra inscrito no proximo concurso.
Enviaremos o regulamento para o seu email $email
Obrigado pela simpatia. 
LABEL;

echo $texto;
