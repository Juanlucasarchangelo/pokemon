<?php
require_once("class.pokemon.php");
class Bubassauro extends Pokemon{
    private $ataque;
    private $defesa;
    private $valocidade;
    private $dano;

    public function setAtaque($valor){
        $this->ataque=$valor;
    }
    public function getAtaque(){
        return $this->ataque;
    }
    public function setDefesa($valor){
        $this->defesa=$valor;
    }
    public function getDefesa(){
        return $this->defesa;
    }
    public function setVelocidade($valor){
        $this->velocidade=$valor;
    }
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function setDano($valor){
        $this->dano=$valor;
    }
    public function getDano(){
        return $this->dano;
    }
    public function setDanodefesa($valor){
        $this->danodefesa=$valor;
    }
    public function getDanodefesa(){
        return $this->danodefesa;
    }
}
?>