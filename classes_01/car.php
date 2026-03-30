<?php

class Carro {
    public $marca;
    public $modelo;

    function mostrar() {
        echo $this->marca;
        echo "<br>";
        echo $this->modelo;
    }
}

$c = new Carro();
$c->marca = "Fiat";
$c->modelo = "Uno";

$c->mostrar();

?>