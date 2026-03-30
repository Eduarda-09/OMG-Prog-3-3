<?php

class Circulo {
    public $raio;

    function area() {
        echo 3.14 * $this->raio * $this->raio;
    }
}

$c = new Circulo();
$c->raio = 5;

$c->area();

?>