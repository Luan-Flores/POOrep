<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Panelas</title>
</head>
<body>
    <form action="../exercicio/recebaForm.php" method="post">

        <h1>Cadastrar panela</h1>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo">

        <label for="material">Material:</label>
        <input type="text" name="material">

        <label for="tamanho">Tamanho:</label>
        <input type="text" name="tamanho">

        <label for="cabo">Cabo:</label>
        <input type="text" name="cabo">
        <input type="submit" value="Cadastrar panela">
        
    </form>
</body>
</html>