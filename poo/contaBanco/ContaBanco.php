<?php
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos
    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
    }

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Não é possível finalizar a conta. Saldo disponível para saque.</p>";
        } elseif ($this->getSaldo() == 0) {
            $this->setStatus(false);
            echo "<p>Conta encerrada.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito. Resolva as dívidas antes de encerrar.</p>";
        }
    }

    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v realizado com sucesso na conta de " .$this->getDono() .".</p>";
        } elseif ($this->getStatus() == false) {
            echo "<p>Impossível depositar. Abra a conta primeiro.</p>";
        }
    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() == 0) {
                echo "<p>Você não tem o que sacar.</p>";
            } else {
                if ($v > $this->getSaldo()) {
                    echo "<p>Valor inválido.</p>";
                } elseif ($v <= $this->getSaldo()) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v realizado com sucesso na conta de " .$this->getDono() .".</p>";
                }
            }
        } elseif ($this->getStatus() == false) {
            echo "<p>Impossível realizar saque de uma conta que não existe.</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getStatus()) {
            if ($this->getTipo() == "CC") {
                $v = 12;
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$ $v paga com sucesso na conta de ".$this->getDono() .".</p>";
                } elseif ($this->getSaldo() < $v) {
                    echo "<p>Impossível pagar mensalidade. Saldo insuficiente.</p>";
                }
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$ $v paga com sucesso na conta de ".$this->getDono() .".</p>";
                } elseif ($this->getSaldo() < $v) {
                    echo "<p>Impossível pagar mensalidade. Saldo insuficiente.</p>";
                }
            }
        } elseif ($this->getStatus() == false) {
            echo "<p>Conta não existe ou não encontrada.</p>";
        }
    }
    
    // Getters and Setters
    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
        return $this;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
}
