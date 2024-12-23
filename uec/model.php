<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function __construct($no,$na,$age,$hei,$wei)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $age;
        $this->altura = $hei;
        $this->vitorias = 0;
        $this->derrotas = 0;
        $this->empates = 0;
        $this->setPeso($wei);
    }
    public function setCategoria(){
        if ($this->peso < 52.2){
            $this->categoria = "Inválido";}

        else if ($this->peso <= 70.3){
            $this->categoria = "Leve";}
        else if ($this->peso <= 83.9){
            $this->categoria = "Médio";}
        else if ($this->peso <= 120.2){
            $this->categoria = "Pesado";}
        else{
            $this->categoria = "Inválido";}
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria($peso);
    }
    
    public function apresentar(){
        echo "O lutador {$this->nacionalidade} {$this->nome} ({$this->peso}kg), competirá hoje pela categoria de peso \"{$this->categoria}\"";
    }
    public function status(){
        echo "Nome: {$this->nome} \nVitórias: {$this->vitorias}\nDerrotas: {$this->derrotas}\nEmpates: {$this->empates}";
    }
    public function ganharLuta(){
        echo "Lutador {$this->nome} ganhou a última luta. ";
        $this->vitorias = $this->getVitorias() + 1;
    }
    public function getVitorias(){
        echo "Vitórias de {$this->nome}: {$this->vitorias}";
        return $this->vitorias;
    }
}