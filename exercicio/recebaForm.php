<?php
require_once '../exercicio/code.php';


// $acao = isset($_GET['acao']) ? $_GET['acao'] : '';

// switch($acao)
// {
//     case 'cadastrar':
//         $canetaController = new LivroController();
//         $canetaController->cadastrar($_POST['modelo'], $_POST['cor'], $_POST['ponta'],$_POST['carga'],$_POST['tampada']);
//         break;
//     default:
//         include '../views/formCadastro.php';
// }

// var_dump($_POST);



class CadastroPanela{

    public $tipo;
    public $material;
    public $tamanho;
    public $cabo;
    
    function cadastrar(){
        $tipo = $_POST['tipo'];
        $material = $_POST['material'];
        $tamanho = $_POST['tamanho'];
        $cabo = $_POST['cabo'];

        $novaPanela = new Panela($tipo,$material,$tamanho,$cabo);
        return $novaPanela;

        include '../exercicio/form.php';

    }
}

$cadastro = new CadastroPanela();
$panelaCadastrada = $cadastro->cadastrar();

var_dump($panelaCadastrada); // Exibe o conteúdo do objeto Panela




