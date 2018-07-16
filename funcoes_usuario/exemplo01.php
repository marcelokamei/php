<?php
require_once("funcoes.php");

mensagem("Olá Mundo doido!");
echo "<br>";

echo "Joséres recebeu 4 salários mínimos, totalizando o valor de R$ ".(salariominimo()*4);
echo "<br>";

echo var_dump(soma(45,85,75,42));
echo "<br>";
echo soma(15,12,140);
echo "<br>";
echo soma(15,15);
echo "<br>";

echo "<br>";
echo "<hr>";
echo "<br>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucfirst(strftime("Hoje é %A, dia %d de %B de %Y."));

echo "<br>";
echo "<hr>";
echo "<br>";

//classe DateTime()
$dt = new DateTime();
$periodo = new DateInterval("P15D");
$dt->add($periodo); //adicionar 15 dias a data atual
echo $dt->format("d/m/Y H:i:s");


?>