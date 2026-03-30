<?php

class Conta {
    public $saldo;

    function mostrar() {
        echo $this->saldo;
    }
}

$c = new Conta();
$c->saldo = 1000;

$c->mostrar();

?>