<?php
//JSON -- formato de arquivo para melhorar interoperabilidade de sistemas.

$pessoa = array();
array_push($pessoa, array('nome'=>'Marcelo', 'idade'=>39));
array_push($pessoa, array('nome'=>'Adriana', 'idade'=>32));

echo json_encode($pessoa);

echo "<br><br><hr><br><br>";

$json = '[{"nome":"Marcelo","idade":39},{"nome":"Adriana","idade":32}]';
$dados = json_decode($json, true);
var_dump($dados);


?>