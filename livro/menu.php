<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobby</title>
</head>
<body>
    <h1>November Rain</h1>
    <section id="main-box">
        
        <h2>Opções</h2>
        <button><a href="../livro/view.php">Cadastrar Usuário</a></button>
        <button><a href="../livro/consulta.php">Ver Usuários</a></button>
        <?php if (!empty($_GET['msg'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET['msg']; ?>
                            </div>
                        <?php } ?>
        
    </section>
</body>
</html>