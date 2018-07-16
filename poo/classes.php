<?php

class Pessoa {
    
    public $nome; //atributo da clase
    public $cpf; //atributo da clase
    
    public function falar(){     //metodo da classe
        return "O meu nome é ".$this->nome;
    }
}

$sujeito = new Pessoa();
$sujeito->nome = "Marcelo Kamei";
echo $sujeito->falar();

echo "<br><br><hr><br><br>";


class Carro {
    //atributos da classe:
    private $modelo;
    private $motor;
    private $ano;
    
    //encapsulamento dos atributos:
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
     public function getMotor(){
        return $this->motor;
    }
    
    public function setMotor($motor){
        $this->motor = $motor;
    }
    
     public function getAno(){
        return $this->ano;
    }
    
    public function setAno($ano){
        $this->ano = $ano;
    }
    
    //metodos da classe:
    public function mostrarCarro(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$carro1 = new Carro();
$carro1->setModelo("Onix");
$carro1->setMotor("2.0");
$carro1->setAno(2018);

print_r($carro1->mostrarCarro());





?>