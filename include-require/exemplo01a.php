<?php
//include "exemplo01.php"; //tenta rodar, mesmo que o arquivo não existe ou haja algum problema
//require "exemplo01.php"; //exige que o arquivo exista e esteja funcionando corretamente, senão, dá erro fatal.
require_once "exemplo01.php"; //traz somente uma vez o arquivo, existindo e estando correto.

$resultado1 = somar(15,19);
echo $resultado1;
echo "<br>";
echo "<br>";

$resultado2 = multiplicar(45, 85);
echo $resultado2;
echo "<br>";
echo "<br>";

$resultado3 = dividir(430.50, 8);
echo $resultado3;

?>