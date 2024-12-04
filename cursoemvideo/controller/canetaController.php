<?php
require_once '../config/conexao.php';
require_once '../Caneta.php';

class CanetaController{

    public function cadastrar($modelo, $cor, $ponta, $carga, $tampada){
            
        $database = new Banco();
        $bd = $database->conectar();

        $caneta = new Caneta($bd);
        $caneta->modelo = $modelo;
        $caneta->cor = $cor;
        $caneta->ponta = $ponta;
        $caneta->carga = $carga;
        $caneta->tampada = $tampada;

        
        if($livro->cadastrar())
        {
                $bd->close();
        
            }else
            {
                echo "Erro ao cadastrar livro";
            }
        }

}