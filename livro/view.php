<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../livro/page.php" method="post">
        <h1>Cadastro do Leitor</h1>
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="idade">Idade:</label>
        <input type="number" name="idade">

        <label for="sexo">Selecione o sexo:</label>
        <select name="sexo" id="sexo" required>
        <option value="" disabled selected>Escolha uma opção</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
    </select>
    <br><br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>