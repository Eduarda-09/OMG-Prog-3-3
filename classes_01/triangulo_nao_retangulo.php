<?php

class Retangulo {
    public $base;
    public $altura;

    function area() {
        echo $this->base * $this->altura;
    }
}

$r = new Retangulo();
$r->base = 10;
$r->altura = 5;

$r->area();

?>