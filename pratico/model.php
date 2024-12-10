<?php

require_once '../pratico/conexao.php';
require_once '../pratico/page.php';

class Banco{
    private $table = 'usuario';
    private $conexao;
    public $numConta;
    protected $tipoConta;
    private $nome;
    private $saldo;
    private $statusConta;
    private $id;
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function abrirConta(){
        $query = "INSERT INTO '{$this->table}'(nome,numConta,tipoConta,saldo,statusConta) VALUES ('{$this->nome}','{$this->numConta}','{$this->tipoConta}','{$this->saldo}','{$this->statusConta}');";
        return $this->conexao->query($query);
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
    public function setNome($new){
        return $this->nome = $new;
    }
    public function setTipoConta($new){
        return $this->tipoConta = $new;
    }
    public function setSaldo($new){
        return $this->saldo = $new;
    }
    public function setStatusConta($new){
        return $this->statusConta = $new;
    }
    public function getSaldo(){
        echo "Saldo da conta de {$this->nome}: {$this->saldo}";
    }
}
