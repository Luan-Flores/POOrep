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

        $sql = "INSERT INTO pessoa (nome, idade, sexo) VALUES (?, ?, ?)";
        // query($sql, $params = []) Array opcional dos valores que substituem os placeholders (?) na consulta SQL -> (db.php)
        $db->query($sql, ["{$this->nome}", "{$this->idade}", "Masculino"]);
        return $db;

    }
    public function printar($nome){
        echo "Novo usuário: {$nome} cadastrado com sucesso. ";
    }
    public function aniver(){
        $oldAge = $this->idade;
        $this->idade += 1;
        echo "Parabéns! É seu aniversário. Sua idade de $oldAge anos passou a ser {$this->idade} anos. ";

    }
}