<?php

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarluta($lutador1, $lutador2){
        if($lutador1 != $lutador2 && $lutador1->getCategoria() === $lutador2->getCategoria()) {
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            //
            switch($vencedor) {
                case 0: // empatou
                    echo "<p>A luta empatou para ".$this->desafiado->getNome() ." e " .$this->desafiante->getNome() ."!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // ganhou desafiado
                    echo "<p>".$this->desafiado->getNome() ." GANHOU!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // ganhou desafiante
                    echo "<p>".$this->desafiante->getNome() ." GANHOU!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                default:
                    echo "Luta não pode acontecer.";
            }
        }
    }

    // Getter and Setters
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        return $this;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
        return $this;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
        return $this;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada($aprovada) {
        if($this->getDesafiado() != $this->getDesafiante() && $this->getDesafiado()->getCategoria() == $this->getDesafiante()->getCategoria) {
            $this->aprovada = true;
        } else {
            $this->aprovada = false;
        }
    }
}