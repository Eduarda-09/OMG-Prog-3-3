<?php

class Aluno {
    public $nota1;
    public $nota2;

    function media() {
        echo ($this->nota1 + $this->nota2) / 2;
    }
}

$a = new Aluno();
$a->nota1 = 7;
$a->nota2 = 8;

$a->media();

?>