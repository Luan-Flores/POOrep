<?php
include_once '../pratico/banco.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch($acao)
{
    case 'cadastrar':
        $contaBanco = new Banco();
        $contaBanco->abrirConta($_POST['numConta'], $_POST['tipo'], $_POST['nome'],$_POST['saldo'],$_POST['status']);
        var_dump($contaBanco);
        
        default:
        include '../pratico/form.php';
    }
    
