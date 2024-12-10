<?php
require_once '../pratico/conexao.php';
echo 'conexao controller sucessum';
require_once '../pratico/model.php';


class UsuarioController{
    
    public function cadastrarUsuario($nome,$numConta,$tipoConta,$saldo,$statusConta){
        
        $conexao = new Database();
        $bd = $conexao->conectar();

        $newConta = new Banco($bd);
        $newConta->setNome($nome);
        $newConta->setNumConta($numConta);
        $newConta->setSaldo($saldo);
        $newConta->setStatusConta($statusConta);
        $newConta->setTipoConta($tipoConta);
        
        
        if ($newConta->abrirConta()) {
            $bd->close();
            header('Location: ../pratico/page.php');
            exit; 
        } else {
            echo "Erro ao cadastrar usuario";
        } 
    }


    }
    
