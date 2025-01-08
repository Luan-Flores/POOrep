<?php 
require_once "../livro/model.php";
require_once "../livro/db.php";

class PessoaController{

    public function cadastrar($nome,$idade,$sexo){
        $conexao = new BancoDados();
        $bd = $conexao;
        $pessoa = new Pessoa($bd);
        
        $pessoa->nome = $nome;
        $pessoa->idade = $idade;
        $pessoa->sexo = $sexo;
        $pessoa->printar($nome);
        $pessoa->cadastro();
    }
}