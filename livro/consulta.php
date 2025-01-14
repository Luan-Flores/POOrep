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
        echo "interpreta";
        var_dump($consulta);
        echo "interpreta";
        

        if ($consulta->num_rows > 0) {
            // Exibir cada linha da tabela
            while ($linha = $consultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['idade'] . "</td>";
                echo "<td>" . $linha['sexo'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum usuário encontrado.</td></tr>";
        }
        ?>
</body>
</html>