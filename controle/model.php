<?php
require_once '../controle/interface.php';

class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;

    }
    
    function setLigado($bool){
        return $this->ligado = $bool;
    }
    function getLigado(){
        return $this->ligado;
    }

    public function ligar()
    {
        if ($this->getLigado() == true){
            echo "Já está ligado. ";
        }else{
            echo "Ligou";
            return $this->setLigado(true);
        }
    }
    public function desligar()
    {
        if ($this->ligado == false){
            echo "Já está desligado. ";
        }else{
            echo "Desligou";
            return $this->ligado = false;
        }
    }
    public function abrirMenu()
    {
        
    }
    public function fecharMenu()
    {
    }
    public function maisVolume()
    {
        
    }
    public function menosVolume()
    {
        
    }
    public function ligarMudo()
    {
        
    }
    public function desligarMudo()
    {
        
    }
    public function play()
    {
        
    }
    public function pause()
    {
        
    }
}