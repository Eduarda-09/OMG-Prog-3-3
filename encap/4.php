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
        if(!isset($this->salario) && $s > 0)
            $this->salario = $s;
        else echo "Salário inválido<br>";
    }

    function aumentarSalario($v){
        if($v > 0) $this->salario += $v;
        else echo "Aumento inválido<br>";
    }

    function getNome(){ return $this->nome; }
    function getIdade(){ return $this->idade; }
    function getSalario(){ return $this->salario; }

    function mostrar(){
        echo $this->getNome()."<br>".$this->getIdade()."<br>".$this->getSalario();
    }
}
$f = new Funcionario();
$f->setNome("Ana");
$f->setIdade(25);
$f->setSalario(2000);

$f->mostrar();

?>