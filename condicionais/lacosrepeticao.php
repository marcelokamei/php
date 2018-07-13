<?php

//laço de repetição FOR
for($i = 0; $i <=100; $i++){
    if($i >30 && $i <70) continue;
    
    echo "$i ";
}

echo "<br>";
echo "<br>";
echo "<hr>";

echo "<select>";
    for($i=date("Y"); $i > date("Y")-100; $i--){
        
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
echo "</select>";
echo "<hr>";

for($i = 1; $i<=6; $i++){
    $num = rand(1, 60);
    echo "$num ";
}



// laço repeticao FOREACH

echo "<br>";
echo "<br>";
echo "<hr>";

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril", 
    "Maio", "Junho", "Julho", "Agosto", "Setembro", 
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes){
    
    echo "O mês é <b><i>$mes</i></b><br>";
    
}
    


//laço repetição WHILE
echo "<br>";
echo "<br>";
echo "<hr>";

$i = 100;
while($i >=0){
    echo "$i ";
    $i--;
}

echo "<hr>";

$condicao = true;
while($condicao){
    
    $num = rand(1,60);
    
    if($num == 18){
        echo "Dezoito!!!";
        $condicao = false;
    }
    
    echo $num." ";
}


//laço repetição DO WHILE
echo "<br>";
echo "<br>";
echo "<hr>";

$total = 100;
$desconto = 0.9;

do {
    $total *= $desconto;
    echo $total."<br>";
    
} while ($total > 100);
echo $total;


?>