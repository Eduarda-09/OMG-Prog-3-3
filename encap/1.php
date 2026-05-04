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

    function getNome(){ return $this->nome; }
    function getIdade(){ return $this->idade; }
    function getSalario(){ return $this->salario; }
}

$f = new Funcionario();
$f->setNome("Ana");
$f->setIdade(25);
$f->setSalario(3000);

echo $f->getNome()."<br>".$f->getIdade()."<br>".$f->getSalario();

?>