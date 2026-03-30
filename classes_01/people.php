<?php

class Pessoa {
    public $nome;

    function mostrar() {
        echo $this->nome;
    }
}

$p = new Pessoa();
$p->nome = "Maria";

$p->mostrar();

?>