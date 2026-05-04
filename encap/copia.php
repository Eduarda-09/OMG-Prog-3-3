<?php 
class Pessoa { 
private $nome; 
private $idade; 

public function setnome($nome){

if (!empty($novoNome)) { 
            $this->nome = $novoNome; 
        } else { 
            echo "Nome inválido!"; 
        }
$this->nome = $nome;
} else{ echo "O nome não pode ser vazio";
}


public function setIdade($idade) {
    if($idade >= 0 && $idade <- 120) {
$this-> idade = $idade;
    }
else{
    echo "A idade não pode ser negativa ou maior que 120.";
}
 }

} 

$p = new Pessoa(); 
$p ->setnome ($ANA)    
?>