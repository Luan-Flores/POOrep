<?php
include "../livro/view.php";
require_once "../livro/db.php";
require_once "../livro/controller.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST['nome'] ?? null;
    $idade = $_POST['idade'] ?? null;
    $sexo = $_POST['sexo'] ?? null;
    $pessoaController = new PessoaController();
    $pessoaController->cadastrar($_POST['nome'], $_POST['idade'], $_POST['sexo']);
    echo "{$nome}";
}else {
    echo "Método de requisição inválido.";
}



