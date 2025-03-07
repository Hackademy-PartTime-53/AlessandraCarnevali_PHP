


<?php


class Car { 
    protected $targa; 
    private $num_telaio; 

    public function __construct($targa, $telaio) { 
        $this->targa = $targa;
        $this->num_telaio = $telaio;
    } 

    public function getTarga() { 
        return $this->targa; 
    } 

    public function getTelaio() {
        return $this->num_telaio;
    }
}



class Fiat extends Car { 
    protected $nome; 
    protected $license; 
    protected $color;

    public function __construct($nome, $targa, $telaio, $license, $color) {
        parent::__construct($targa, $telaio);
        $this->nome = $nome;
        $this->license = $license;
        $this->color = $color;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLicense() {
        return $this->license;
    }

    public function getColor() {
        return $this->color;
    }

    public function stampaFrase() {
        echo "La mia macchina è una {$this->getNome()}, con targa {$this->getTarga()} e numero di Telaio {$this->getTelaio()}.\n";
    }
}


$miaAuto = new Fiat("Panda", "ND 123 OJ", "1234", "AB123CD", "Rosso");
$miaAuto->stampaFrase();