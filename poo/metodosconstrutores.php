<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    //metodo construtor
    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    //metodo destrutor
    public function __destruct()
    {
         var_dump("Destruir");
    }

    //medoto toString para exibir quando solicitado
    public function __toString()
    {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}
$rua = "Rua Opala";
$num = 4867;
$cidade = "Porto Velho";
$meuend = new Endereco($rua, $num, $cidade);

var_dump($meuend);
echo "<br><br><hr><br><br>";

echo $meuend;
echo "<br><br><hr><br><br>";

unset($meuend);
echo "<br>";


?>