<?php
class Panela{
    public $tipo;
    public $material;
    public $tamanho;
    public $cabo;

    public function __construct($tipo,$material,$tamanho,$cabo){
        $this->tipo = $tipo;
        $this->material = $material;
        $this->tamanho = $tamanho;
        $this->cabo = $cabo;
    }
    public function fritar($alimento){
        $this->alimento = $alimento;
        echo "a panela  está fritando $this->alimento !";
    }
    public function lavar($sabao){
        $this->sabao = $sabao;
        echo "a panela está sendo lavada com o sabao de $this->sabao !";
        if ($this->material == 'aderente'){
            echo "a panela está em perigo! ";
        }
        else{
            echo "Ok limpando";
        }
    }
}

// $p1 = new Panela('frigideira','aderente','grande','madeira');
// $p1->fritar('ovo');
// $p1->lavar('coco');