<?php
class Database {
    private $conexao; // Torne private para encapsulamento
    const HOST = "localhost";
    const USUARIO = "root";
    const SENHA = ""; 
    const BANCO = "braseco";
    
    public function __construct() {
        $this->conectar(); // Inicializa a conexão automaticamente ao instanciar
    }

    public function conectar() {
        $this->conexao = new mysqli(self::HOST, self::USUARIO, self::SENHA, self::BANCO);

        if ($this->conexao->connect_error) {
            throw new Exception("Erro na conexão: " . $this->conexao->connect_error);
        }
    }

    public function query($sql) {
        if (!$this->conexao) {
            throw new Exception("Erro: conexão não estabelecida.");
        }

        $resultado = $this->conexao->query($sql);

        if ($this->conexao->error) {
            throw new Exception("Erro na consulta: " . $this->conexao->error);
        }

        return $resultado;
    }

    public function prepare($sql) {
        if (!$this->conexao) {
            throw new Exception("Erro: conexão não estabelecida.");
        }

        $stmt = $this->conexao->prepare($sql);

        if (!$stmt) {
            throw new Exception("Erro ao preparar a consulta: " . $this->conexao->error);
        }

        return $stmt;
    }

    public function fechar() {
        if ($this->conexao) {
            $this->conexao->close();
            echo "<script>alert('Conexão fechada.')</script>";
        }
    }
}
