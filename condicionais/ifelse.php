<?php
$suaidade = 9;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($suaidade < $idadeCrianca){
    echo "Criança.";
} else if($suaidade<$idadeMaior){
    echo "Aborrecente.";
} else if($suaidade<$idadeMelhor){
    echo "Adulto.";
} else {
    echo "Melhor idade.";
}

echo "<br><br>";

//operador ternario
echo ($suaidade < $idadeMaior)?"Menor de Idade":"Maior de Idade"; //utilizado em condições simples


?>