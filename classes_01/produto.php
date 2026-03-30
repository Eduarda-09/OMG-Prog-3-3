<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    function mostrar() {
        echo $this->nome;
        echo "<br>";
        echo $this->preco;
        echo "<br>";
        echo $this->quantidade;
    }
}

$p = new Produto();

$p->nome = "Caderno";
$p->preco = 15;
$p->quantidade = 3;

$p->mostrar();

?>