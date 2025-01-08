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
        $this->chanceWin = 50;
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

        $this->setChanceWin();
        echo "Vitórias de {$this->nome}: {$this->vitorias}";
    }
    public function perderLuta(){
        echo "Lutador {$this->nome} perdeu a última luta. ";
        $this->derrotas = $this->getDerrotas() + 1;
        echo "Derrotas de {$this->nome}: {$this->derrotas}";
    }
    public function empatarLuta(){
        echo "Lutador {$this->nome} empatou a última luta. ";
        $this->empates = $this->getEmpates() + 1;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function getChance(){
        $chanceWin = $this->chanceWin;
        // echo "Probabilidade de vitória do lutador {$this->nome}: $chanceWin%";
        return $chanceWin;
    }
    public function setChanceWin(){
        $oldWins = $this->getChance();
        // $conta = $this->getVitorias();
        $result = $this->chanceWin += 1;
        echo "A probabilidade de vitória de {$this->nome} ($oldWins%) passou a ser de {$this->chanceWin}%";
        return $result;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
}