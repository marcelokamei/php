<?php

$frutas = array("Abacate", "Morango", "Uva", "Laranja", "Melancia"); //este é um vetor pois só tem uma dimensão.
print_r($frutas);

echo "<br><br><hr><br><br>";

$carro[0][0] = "GM";
$carro[0][1] = "Prisma";
$carro[0][2] = "Onix";
$carro[0][3] = "Camaro";

$carro[1][0] = "Toyota";
$carro[1][1] = "Corolla";
$carro[1][2] = "Hillux";
$carro[1][3] = "Etios";

echo $carro[0][3]."<br>";
echo end($carro[1]);
    
echo "<br><br><hr><br><br>";

$pessoa = array();
array_push($pessoa, array('nome'=>'Marcelo', 'idade'=>39));
array_push($pessoa, array('nome'=>'Adriana', 'idade'=>32));
print_r($pessoa);

echo "<br><br><hr><br><br>";


//JSON -- formato de arquivo para melhorar interoperabilidade de sistemas.

?>