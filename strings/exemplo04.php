<?php

$texto = "A repetição é a mãe da repetição.";
echo "$texto<br>";

$palavra = "mãe";

$q = strpos($texto, $palavra);
var_dump($q);

echo "<br>";

$txt = substr($texto, 0, $q);
var_dump($txt);

echo "<br>";

$txt2 = substr($texto, $q+strlen($palavra), strlen($texto));
var_dump($txt2);

//existem outras dezenas de funcoes para manipulação de strings, vale a pena ver na documentação do php.
?>