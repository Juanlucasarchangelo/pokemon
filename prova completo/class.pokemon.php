<?php
class Pokemon{
    private $id;
    private $nome;
    private $peso;
    private $altura;
    private $hp;
    private $especie;
    private $imagem;

    public function setId($valor){
        $this->id=$valor;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($valor){
        $this->nome=$valor;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setPeso($valor){
        $this->peso=$valor;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setAltura($valor){
        $this->altura=$valor;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setHp($valor){
        $this->hp=$valor;
    }
    public function getHp(){
        return $this->hp;
    }
    public function setEspecie($valor){
        $this->especie=$valor;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function setImagem($valor){
        $this->imagem=$valor;
    }
    public function getImagem(){
        return $this->imagem;
    }
}
?>