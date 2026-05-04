<?php 

class Funcionario {
    private $nome, $idade, $salario;

    function setNome($n){
        if(empty($n)) echo "Nome inválido<br>";
        else $this->nome = $n;
    }

    function setIdade($i){
        if($i < 0 || $i > 120) echo "Idade inválida<br>";
        else $this->idade = $i;
    }

    function setSalario($s){
        if($s <= 0) echo "Salário inválido<br>";
        else $this->salario = $s;
    }
}


$f = new Funcionario();
$f->setNome("");
$f->setIdade(-1);
$f->setSalario(0);
?>