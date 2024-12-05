<?php
// Configurações do banco de dados
$host = "localhost"; // Endereço do servidor (normalmente localhost)
$usuario = "root";   // Nome de usuário do MySQL
$senha = "";         // Senha do MySQL (vazia por padrão no XAMPP)
$banco = "panela"; // Nome do banco de dados

// Cria a conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida!";

?>
