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

        if ($pessoa->cadastro()){
            echo "Cadastrado. ";
            $conexao->closeDb();
            header('Location: ../livro/menu.php?msg=Cadastro feito com sucesso');
        }
    }
    // public function consultaPessoa(){
    //     $conexao = new BancoDados();
    //     $bd = $conexao;
    //     $pessoa = new Pessoa($bd);
    //     echo "Ok here.!@!";
    //     $pessoa->consultar();

    // }
}