<?php
class Panela{
    public $tipo;
    private $material;
    public $tamanho;
    private $cabo;

    public function __construct($tipo,$material,$tamanho,$cabo){
        $this->tipo = $tipo;
        $this->material = $material;
        $this->tamanho = $tamanho;
        $this->cabo = $cabo;
    }
    public function fritar($alimento){

        echo "a panela  está fritando $alimento !";
    }
    public function lavar($sabao){
        
        echo "a panela está sendo lavada com o sabao de $sabao !";
        if ($this->material == 'aderente'){
            echo "a panela está em perigo! ";
        }
        else{
            echo "Ok limpando";
        }
    }
    public function

}

$p1 = new Panela('frigideira','aderente','grande','madeira');

$p1->$cabo = "é de pedra agora";

