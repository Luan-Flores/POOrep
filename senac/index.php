<?php
    class Veiculo{
        public $modelo;
        public $marca;
        public $ano;
        public $cor;
        
        public function __construct($modelo, $marca, $ano, $cor){
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->ano = $ano;
            $this->cor = $cor;
        }
        
        public function Acelerar(){
            echo $this->modelo . " Acelerou";
        }
        public function Freiar(){
            echo $this->modelo . " Freiou bruscamente";
        }
        public function Abastecer(){
            echo $this->modelo . " Abasteceu";
        }
    }


    class Carro extends Veiculo{
        public function abrirPorta(){
            echo "abriu a porta";
        }
    } 
        
    
    class Moto extends Veiculo{
        public function darGrau(){
            echo "deu grau";
        }
    }
    $carro = new Carro("Astra","GM",1980,"Verde");
    $carro->Acelerar();
    $moto = new Moto("Lander","Yamaha",2019,"Capitao America");
    $moto->Freiar();
    $moto->darGrau();    