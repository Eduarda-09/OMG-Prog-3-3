<?php 

class Funcionario {
    private $salario;

    function __construct($s){
        if($s > 0) $this->salario = $s;
        else echo "Salário inválido<br>";
    }

    function aumentarSalario($v){
        if($v > 0) $this->salario += $v;
        else echo "Aumento inválido<br>";
    }

    function getSalario(){
        return $this->salario;
    }
}


$f = new Funcionario(1000);
$f->aumentarSalario(200);

echo $f->getSalario();

?>