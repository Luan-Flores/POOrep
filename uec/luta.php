<?php
require_once '../POOrep/uec/lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta(){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
    }

    public function lutar(){

    }
}