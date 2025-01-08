<?php
include_once "../livro/view.php";
class Pessoa{
    public $nome;
    public $idade;
    public $sexo;
    public $conexao;
    

    public function __construct($bd)
    {
        $this->conexao = $bd;  
    }

    public function cadastro(){
        $db = $this->conexao;
        $db->openDb();
        // $query = "INSERT INTO pessoa VALUES ('','{$this->nome}','{$this->idade}','{$this->sexo}');";
        // echo "thats me in the corner ";
        // $cry = $banco->query($query);
        // return $cry;


        $sql = "INSERT INTO pessoa (nome, idade, sexo) VALUES (?, ?, ?)";
        $db->query($sql, ["{$this->nome}", "{$this->idade}", "Masculino"]);
        return $db;


    }
    public function printar($nome){
        echo "$nome print function {$this->idade}";
        
    }
}