<?php

class album {
    private $id;
    private $titulo;
    private $banda;
    private $ano;
    private $capa;

    public function __construct($i, $t, $b, $a, $c){
        $this->setId($i);
        $this->setTitulo($t);
        $this->setBanda($b);
        $this->setAno($a);
        $this->setCapa($c);
    }

    public function setId($i){
        $this->id = $i;
    }

    public function getId(){
        return $this->id;
    }

    public function setTitulo($t){
        $this->titulo = $t;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setBanda($b){
        $this->banda = $b;
    }

    public function getBanda(){
        return $this->banda;
    }

    public function setAno($a){
        $this->ano = $a;
    }

    public function getAno(){
        return $this->ano;
    }

    public function setCapa($c){
        $this->capa = $c;
    }

    public function getCapa(){
        return $this->capa;
    }
}

?>