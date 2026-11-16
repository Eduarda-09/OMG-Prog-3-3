<?php

class AcessoSistema {
    private static $totalAcessos = 0;

    public function __construct() {
        self::$totalAcessos++;
    }

    public static function getAcessos() {
        return self::$totalAcessos;
    }
}

// Criando 4 objetos
$acesso1 = new AcessoSistema();
$acesso2 = new AcessoSistema();
$acesso3 = new AcessoSistema();
$acesso4 = new AcessoSistema();

// Exibindo o total de acessos
echo "Total de acessos: " . AcessoSistema::getAcessos();

?>