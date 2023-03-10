<?php
require_once('Controlador.php');
class ControleRemoto implements Controlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos Especiais
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // Métodos
    public function ligar(){
        $this->setLigado(true);
    }

    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        echo "---------- MENU ----------";
        echo "<p>Está ligado? ". ($this->getLigado()?"SIM</p>":"NÃO</p>");
        echo "<p>Está tocando? ". ($this->getTocando()?"SIM</p>":"NÃO</p>");
        echo "<p>Volume: ".$this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo " | ";
        }
        echo "</p>";
    }

    public function fecharMenu(){
        echo "<p>Fechando menu. . .</p>";
    }

    public function maisVolume(){
        if($this->getLigado()) {
            if($this->getVolume() == 100) {
                echo "<p>Volume máximo atingido.</p>";
            } else {
                $this->setVolume($this->getVolume() + 10);
            }
        } elseif ($this->getLigado() == false) {
            echo "<p>TV Desligada.</p>";
        }
    }

    public function menosVolume(){
        if($this->getLigado()) {
            if($this->getVolume() == 0) {
                echo "<p>Volume mínimo atingido.</p>";
            } else {
                $this->setVolume($this->getVolume() - 10);
            }
        } elseif ($this->getLigado() == false) {
            echo "<p>TV Desligada.</p>";
        }
    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0) {
            echo "<p>TV já está com volume mudo.</p>";
        } elseif(!$this->getLigado()()) {
            echo "<p>TV Desligada.</p>";
        } else {
            $this->setVolume(0);
        }
    }


    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        } elseif($this->getLigado() == false) {
            echo "<p>TV Desligada.</p>";
        }
    }

    public function play(){
        if($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        } else {
            echo "<p>TV já está tocando.</p>";
        }
    }

    public function pause(){
        if($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        } else {
            echo "<p>TV já está pausada.</p>";
        }
    }

    // Getters and Setters
    
    private function getVolume() {
        return $this->volume;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
        return $this;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
        return $this;
    }
}