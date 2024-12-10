<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Banco</title>
</head>
<body>
    <h1>Cadastro de Conta</h1>
    <form action="../pratico/page.php?acao=cadastrar" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label>Tipo de conta:</label><br>
        <input type="radio" name="tipoConta" value="Corrente" id="corrente" required>
        <label for="corrente">Corrente</label><br>
        <input type="radio" name="tipoConta" value="Poupança" id="poupanca">
        <label for="poupanca">Poupança</label><br><br>

        <label for="numConta">Número da Conta:</label>
        <input type="text" name="numConta" id="numConta" required><br><br>

        <label for="saldo">Saldo:</label>
        <input type="number" name="saldo" id="saldo" step="0.01" required><br><br>

        <label for="statusConta">Status:</label>
        <select name="statusConta" id="statusConta" required>
            <option value="Ativa">Ativa</option>
            <option value="Inativa">Inativa</option>
        </select><br><br>

        <input type="submit" value="Abrir Conta">
    </form>
</body>
</html>
