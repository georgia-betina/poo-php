<?php

require_once('Pessoa');

class Aluno extends Pessoa {
    // Atributos
    private $matricula;
    private $curso;

    // Métodos
    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno </p>" .$this->nome;
    }

    // Getters and Setters
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }
}