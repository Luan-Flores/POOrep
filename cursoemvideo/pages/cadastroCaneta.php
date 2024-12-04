<?php

require_once '../controller/canetaController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        $canetaController = new LivroController();
        $canetaController->cadastrar($_POST['modelo'], $_POST['cor'], $_POST['ponta'],$_POST['carga'],$_POST['tampada']);
        break;
    default:
        include '../views/formCadastro.php';
}