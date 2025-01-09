<?php
// require_once "../livro/sql.sql";
class BancoDados{
        // Configurações do banco de dados
    const host = "localhost"; // Endereço do servidor (normalmente localhost)
    const usuario = "root";   // Nome de usuário do MySQL
    const senha = "";         // Senha do MySQL (vazia por padrão no XAMPP)
    const banco = "livro"; // Nome do banco de dados
    private $conexao;

    public function openDb(){
        $this->conexao = new mysqli(self::host,self::usuario,self::senha,self::banco);
        if (!$this->conexao){
            echo "Não conectou ! ! ! ";
        }else{
            echo "abriu";
            return $this->conexao;
        }
    }
    public function closeDb(){
        echo "Conexão fechada. ";
        return !$this->conexao;
    }
    
    public function query($sql, $params = []) {
        try {
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Erro na consulta: " . $e->getMessage());
        }
    }
    
}
?>