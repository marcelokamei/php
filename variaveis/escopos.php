<?php
// escopos de variáveis
$nome = "Marcelo";

function teste(){
    if(isset($nome)){
        echo $nome;
    } else {
        echo "variável não pertence a esse escopo.";
    }
    
}


function teste2(){
    global $nome; //global faz com que a variável seja lida nesse escopo.
    echo $nome;
    
}

teste();
echo "</br>";
echo "</br>";

teste2();



?>