<?php

$nome = (int)$_GET["usuario"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;

//existem várias superglobais, o ideal é testar e estudar cada uma delas.


?>