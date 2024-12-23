<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        require_once '../pratico/conexao.php';
        require_once '../pratico/model.php';
        require_once '../pratico/controller.php';
        
        $conexao = new Database();
        $banco = new Banco($conexao->conectar());
        
        // Configurando os dados da conta
        echo "teste";
        
        
        // Tentando abrir a conta
       
        

    ?>
    
</body>
</html>