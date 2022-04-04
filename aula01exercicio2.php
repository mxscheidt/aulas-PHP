<?php
$a =3;
$b =5;
$resultado=($a+$b); ;
echo "O valor da variável A é $a <br>O valor d variável B é $b<br>A soma é $resultado";
/*Para abrir o programa é preciso abrir o xampp, iniciar uma porta de host e abrir ela no navegador pelo localhost*/

/*////////////EXERCÍCIO 2//////////////*/

$resultado=($a-$b); 
echo "<br>O valor da subtração é $resultado";
/*Não é preciso criar outra variável, porque é só mudar o valor de resultado*/

/*////////////EXERCÍCIO 3//////////////*/

$c=10;
echo "<br>O valor da multiplicação é: ",($a*$b*$c);
/*Não é preciso criar outra variável para mostrar o resultado da multiplicação porqeu podemos apenas escrever o valor da multiplicação na tela usando o echo.
Também seria possível reescrever o valor de $resultado como no exercício anterior*/

/*////////////EXERCÍCIO 4//////////////*/

$C=24; /*não foi especificado o valor de C então coloquei 24 */
echo "<br>Soma de todas as variáveis: ",($a+$b+$c+$C);
/*Para o programa não gera nenhum problema existirem as variáveis C e c porque php é case sentive.
Nomear as variáveis como C e c não é uma boa prática pois podemos confundir as duas.
Como já tínhamos as variáveis a, b e c, a variável C poderia ser nomeada d.
Não são permitidas variáveis que comecem com número, possuem caracter especial ou que sejam palavras reservadas da linguagem.*/
?>