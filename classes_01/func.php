<?php

class Funcionario {
    public $nome;
    public $salario;

    function mostrar() {
        echo $this->nome;
        echo "<br>";
        echo $this->salario * 12;
    }
}

$f = new Funcionario();
$f->nome = "Ana";
$f->salario = 2000;

$f->mostrar();

?>