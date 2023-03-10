<?php

require_once('Aluno.php');

class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa(){
        echo "<p>Bolsa renovada com sucesso!</p>";
    }

    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }

    // Getters and Setters
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
        return $this;
    }
}