<?php
include_once '../pratico/page.php';
require_once '../pratico/conexao.php';
require_once '../pratico/model.php';


$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch($acao)
{
    case 'cadastrar':
        $conexao = new Database();
        $contaBanco = new Banco($conexao);
        $contaBanco->abrirConta($_POST['nome'], $_POST['numConta'], $_POST['tipoConta'],$_POST['saldo'],$_POST['statusConta']);
        // var_dump($contaBanco);
        
        default:
        include '../pratico/form.php';
    }
    
