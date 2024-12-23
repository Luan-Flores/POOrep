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
    public function __construct($bd) {
        $this->conexao = $bd;
    }
    public function abrirConta() {
        
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} VALUES ( ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssds', $this->nome, $this->numConta, $this->tipoConta, $this->saldo, $this->statusConta);

        $resultado = $stmt->execute();
    
        if (!$resultado) {
            die("Erro ao executar a consulta: " . $this->conexao->error);
        }
    
        return $resultado;
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
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            throw new Exception("Propriedade $property não existe.");
        }
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            throw new Exception("Propriedade $property não existe.");
        }
    }
    // public function getNumConta(){
    //     echo "O número da conta é: {$this->numConta}";
    // }
    // public function setNumConta($new){
    //     return $this->numConta = $new;
    // }
    // public function setNome($new){
    //     return $this->nome = $new;
    // }
    // public function setar($this,$novoAny){
    //     return $this->any = $novoAny;
    // }
    // public function setTipoConta($new){
    //     return $this->tipoConta = $new;
    // }
    // public function setSaldo($new){
    //     return $this->saldo = $new;
    // }
    // public function setStatusConta($new){
    //     return $this->statusConta = $new;
    // }
    // public function getSaldo(){
    //     echo "Saldo da conta de {$this->nome}: {$this->saldo}";
    // }
}
