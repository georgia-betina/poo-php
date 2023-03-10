<?php

require_once('Pessoa.php');
require_once('Publicacao.php');

class Livro implements Publicacao {
    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // Construtor
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    // Métodos
    public function detalhes() {
        echo "<p>Livro " .$this->titulo ." escrito por " .$this->autor ."</p>";
        //echo "Livro" .$this->getTitulo() ." escrito por " .$this->getAutor();
        echo "<p>Páginas: " .$this->totPaginas .". Atual: " .$this->pagAtual .".</p>";
        echo "<p>Sendo lido por: " .$this->leitor->getNome() ."</p>";
    }

    // Getters and Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
        return $this;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
        return $this;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
        return $this;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

	public function abrir() {
        $this->aberto = true;
	}
	
	/**
	 * @return mixed
	 */
	public function fechar() {
        $this->aberto = false;
	}
	
	public function folhear($p) {
        if($p>$this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
	}
	
	public function avancarPag() {
        $this->pagAtual++;
	}
	
	/**
	 * @return mixed
	 */
	public function voltarPag() {
        if($this->getPagAtual() == 0) {
            echo "Você já está no começo do livro.";
        } else {
            $this->pagAtual--;
        }
	}
}