<?php
//CONSTANTES
define("SERVIDOR", "127.0.0.1");
echo SERVIDOR;

echo "<br><br><hr>";


//ARRAY CONSTANTE
define("BANCO_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r(BANCO_DADOS);
?>