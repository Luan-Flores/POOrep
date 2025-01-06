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
    private $chanceWin;

    public function __construct($no,$na,$age,$hei,$wei)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $age;
        $this->altura = $hei;
        $this->vitorias = 0;
        $this->derrotas = 0;
        $this->empates = 0;
        $this->chanceWin = 5;
        $this->setPeso($wei);
    }
    public function setCategoria(){
        // if ($this->peso < 52.2){
        //     $this->categoria = "Inválido";}

        // else if ($this->peso <= 70.3){
        //     $this->categoria = "Leve";}
        // else if ($this->peso <= 83.9){
        //     $this->categoria = "Médio";}
        // else if ($this->peso <= 120.2){
        //     $this->categoria = "Pesado";}
        // else{
        //     $this->categoria = "Inválido";}
        
        $peso = $this->peso;
        switch (true) {
            case ($peso < 52.2):
                $this->categoria = "Inválido";
                break;
            case ($peso <= 70.3):
                $this->categoria = "Leve";;
                break;
            case ($peso <= 83.9):
                $this->categoria = "Médio";
                break;
            case ($peso <= 120.2):
                $this->categoria = "Pesado";
            default:
                $this->categoria = "Inválido";
                break;
        }
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria($peso);
    }
    
    public function apresentar(){
        echo "Lutador {$this->nacionalidade} {$this->nome} ({$this->peso}kg), competirá hoje pela categoria de peso \"{$this->categoria}\"";
    }
    public function status(){
        echo "Nome: {$this->nome} \nVitórias: {$this->vitorias}\nDerrotas: {$this->derrotas}\nEmpates: {$this->empates}";
    }
    public function ganharLuta(){
        echo "Lutador {$this->nome} ganhou a última luta. ";
        $this->vitorias = $this->getVitorias() + 1;
    }
    public function perderLuta(){
        echo "Lutador {$this->nome} perdeu a última luta. ";
        $this->derrotas = $this->getDerrotas() + 1;
    }
    public function empatarLuta(){
        echo "Lutador {$this->nome} empatou a última luta. ";
        $this->empates = $this->getEmpates() + 1;
    }
    public function getVitorias(){
        echo "Vitórias de {$this->nome}: {$this->vitorias}";
        return $this->vitorias;
    }
    public function getChance(){
        $chanceWin = 10*$this->chanceWin;
        echo "Probabilidade de vitória do lutador {$this->nome}: $chanceWin%";
    }
    public function setChanceWin(){

    }
    public function getDerrotas(){
        echo "Derrotas de {$this->nome}: {$this->derrotas}";
        return $this->derrotas;
    }
    public function getEmpates(){
        echo "Empates de {$this->nome}: {$this->empates}";
        return $this->empates;
    }
}