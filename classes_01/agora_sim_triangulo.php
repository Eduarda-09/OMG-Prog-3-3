<?php

class Triangulo {
    public $base;
    public $altura;

    function area() {
        echo ($this->base * $this->altura) / 2;
    }
}

$t = new Triangulo();
$t->base = 10;
$t->altura = 5;

$t->area();

?>