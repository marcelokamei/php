<?php

function mensagem($txt){
    echo $txt;
}

function salariominimo(){
    return 945.00;
}

function soma(int ...$valores){
    return array_sum($valores);
}

?>