<?php 
// require_once "../livro/db.php";
// require_once "../livro/controller.php";

// function consultarLivro()
// {
//     try {

//         //Iniciando a conexão com o DataBase
//         $conexao = new BancoDados();
//         $conexao->openDb();

//         //sql
//         $sql = "SELECT * FROM  ORDER BY id ASC";

//         //Preparando a sql
//         $stmt = $conexao->prepare($sql);

//         $stmt->execute();

//         //Array com os jogos
//         $result = $stmt->fetchAll();

//         if ($stmt->rowCount() > 0) {

//             return $result;

//         } else {

//             return null;

//         }

//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
}
