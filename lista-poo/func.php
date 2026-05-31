<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario) {

        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;

    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function aumentarSalario($percentual) {

        $this->salario =
            $this->salario * (1 + $percentual / 100);

    }

    public function exibir() {

        echo "Nome: ".$this->nome."<br>";
        echo "Cargo: ".$this->cargo."<br>";
        echo "Salário: R$ ".
        number_format(
            $this->salario,
            2,
            ",",
            "."
        );

    }

}

$f = new Funcionario(
    "Maria",
    "Analista",
    3000
);

echo "ANTES:<br>";

$f->exibir();

$f->aumentarSalario(15);

echo "<br><br>DEPOIS:<br>";

$f->exibir();

?>