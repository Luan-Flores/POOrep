<?php
require_once '../pratico/conexao.php';
echo 'conexao controller sucessum';
require_once '../pratico/model.php';


class UsuarioController{
    
    public function cadastrarUsuario($nome,$numConta,$tipoConta,$saldo,$statusConta){
        
        $conexao = new Database();
        $bd = $conexao->conectar();

        $newConta = new Banco($bd);
        $newConta->__set('nome',$nome);
        $newConta->__set('numConta',$numConta);
        $newConta->__set('saldo',$saldo);
        $newConta->__set('statusConta',$statusConta);
        $newConta->__set('tipoConta',$tipoConta);
        // $newConta->setNumConta($numConta);
        // $newConta->setSaldo($saldo);
        // $newConta->setStatusConta($statusConta);
        // $newConta->setTipoConta($tipoConta);
        
        
        if ($newConta->abrirConta()) {
            $conexao->fechar();
            header('Location: ../pratico/page.php');
            exit; 
        } else {
            echo "Erro ao cadastrar usuario";
        } 
    }


    }
    
