<?php
require_once '../uec/lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function __construct($d,$da)
    {
        $this->desafiado = $d;
        $this->desafiante = $da;
    }

    public function marcarLuta(){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        echo "A luta foi marcada. ";
    }
    
    public function lutar(){
        $this->desafiado->getChance();
        $this->desafiante->getChance();
        if ($this->desafiado->getChance() > $this->desafiante->getChance()){
            echo "desafiado ganhou";
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            
        }
        
        else if ($this->desafiado->getChance() < $this->desafiante->getChance()){
            echo "desafiado perdeu";
            $this->desafiante->ganharLuta();
            $this->desafiado->perderLuta();
        }
        else{
            echo "caiu no else.";
        }
    }
}