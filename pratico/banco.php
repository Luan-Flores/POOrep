<?php

class Banco{

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($numConta,$tipoConta,$dono,$saldo,$status)
    {
        $this->numConta = $numConta;
        $this->tipo = $tipoConta;
        $this->dono = $dono;
        $this->saldo = $saldo;
        $this->status = $status;
    }

    public function depositar($v){
        $this->saldo += $v;
    }
    public function sacar($v){
        $this->saldo -= $v;
    }
    public function mensal(){
        $this->saldo -= 3.99;
    }
    public function getNumConta(){
        echo "O número da conta é: {$this->numConta}";
    }
    public function setNumConta($new){
        return $this->numConta = $new;
    }
    public function getSaldo(){
        echo "Saldo da conta de {$this->dono}: {$this->saldo}";
    }
}
