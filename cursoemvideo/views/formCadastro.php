<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../pages/cadastroCaneta.php" method="post">
        <h2>Cadastrar Caneta</h2>
        <br><br>

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">
    
        <label for="cor">Cor</label>
        <input type="text" name="cor" id="cor">
    
        <label for="ponta">Ponta</label>
        <input type="number" name="ponta" id="ponta">

        <label for="carga">Carga</label>
        <input type="text" name="carga" id="carga">
    
        <label for="tampada">Tampada?</label>
        <input type="bool" name="tampada" id="tampada">

        <input type="submit" value="Cadastrar Caneta">
    </form>
</body>
</html>