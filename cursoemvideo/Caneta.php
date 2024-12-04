<?php

class Caneta{
    private $conexao;
    private $table = 'canetas';
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    public function __construct($bd){
        $this->conexao = $bd;
    }
    }
    function cadastrar(){
        $query = "INSERT INTO {$this->table}(modelo,cor,ponta,carga,tampada) VALUES();";
    }

    function tampar(){
        echo $this->tampada = True;
    }
    
    function destampar(){}

