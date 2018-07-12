<?php

    /*
    $nome = "Marcelo Kamei";
    $num1 = 12;
    $num2 = 3;

    $soma = $num1 + $num2;

    echo "<h4>Olá ".$nome.", a soma dos números contidos nas variáveis é: ".$soma."</h4>";
    */

    $nome = "Marcelo";
    $sobrenome = "Menezes Kamei";
    $nomeCompleto = $nome." ".$sobrenome;
    
    echo "<h2>".$nomeCompleto."</h2>";
    echo "<br/>";
    
    if(isset($nome))
        echo "Nome: ".$nome;
        echo "<br/>";

    if(isset($sobrenome))
        echo "Sobrenome: ".$sobrenome;

    unset($nome, $sobrenome, $nomeCompleto);

?>
