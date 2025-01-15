<?php
require_once "../livro/model.php";
require_once "../livro/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Todos os usuários</h1>
    <?php
        $conexao = new BancoDados();
        $bd = $conexao;
        $pessoa = new Pessoa($bd);

        
        $consulta = $pessoa->consultar();
        if ($consulta === false) {
            die("Erro ao consultar o banco de dados: ");
        }
        
        

        if (!empty($consulta)) {
            // Exibir cada linha do array
            foreach ($consulta as $linha) {
                echo "<table>";
                echo "<tr>";
                echo "<td> Nome: " . htmlspecialchars($linha['nome']) . "</td>";
                echo "<td> Idade: " . htmlspecialchars($linha['idade']) . "</td>";
                echo "<td> Sexo: " . htmlspecialchars($linha['sexo']) . "</td>";
                echo "<br></tr>";
                echo "</table>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum usuário encontrado.</td></tr>";
        }
        ?>
</body>
</html>