<?php

class Database{
    public $conexao;
    const host = "localhost";
    const usuario = "root";
    const senha = ""; 
    const banco = "braseco";
    
    public function conectar(){
        
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::banco);
        
        // Verificando a conexão
        if ($this->conexao->connect_error) {
            echo "<script>alert('erro na conexao')</script>";
        }
        else{
            echo "Conexão bem-sucedida!";
            return $this->conexao;
        }
    }
    public function fechar(){
        echo "<script>alert('FECHOU')</script>";
        return !$this->conexao;
    }
}

?>
