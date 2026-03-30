<?php
class Livro { 
    public $titulo;
    public $autor;
    public $numero;
    public $ano; 
}

$livro = nem livro();
$livro->titulo = "O  Pqueno Príncipe";
$livro->autor = "Antoine de Saint-Exupéry";
$livro->numero = "250 páginas";
$livro->ano = "1943";

echo $livro->titulo . "<br>";
echo $livro->autor;
echo $livro->numero;
echo $livro->ano;
?>