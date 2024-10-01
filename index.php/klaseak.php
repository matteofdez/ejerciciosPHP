<?php
abstract class Pertsona {
    protected $izenAbizenak;
    protected $zeregina;

    public function __construct($izenAbizenak, $zeregina) {
        $this->izenAbizenak = $izenAbizenak;
        $this->zeregina = $zeregina;
    }
    abstract public function aurkeztu();
}

// Ikaslea klasea
class Ikaslea extends Pertsona {
    public function aurkeztu() {
        echo "<br>";
        echo "Kaixo, nire izena da {$this->izenAbizenak} eta ikaslea naiz. <br>";
        echo "<br>";
    }
}

// Irakaslea klasea
class Irakaslea extends Pertsona {
    public function aurkeztu() {
        echo "<br>";
        echo "Kaixo, nire izena da {$this->izenAbizenak} eta irakaslea naiz. <br>";
        echo "<br>";
    }
}

class Liburu {
    public $izena;
    public $egilea;

    // Metodo sortzailea
    public function __construct($izena, $egilea) {
        $this->izena = $izena;
        $this->egilea = $egilea;
    }
}

class LiburuKatalogoa {
    private $liburuak = [];

    public function gehituLiburua($liburua) {
        $this->liburuak[] = $liburua;
    }

    public function katalogoaBistaratu() {
        foreach ($this->liburuak as $liburua) {
            echo "<br>";
            echo "Izena: " . $liburua->izena . ", Egilea: " . $liburua->egilea . "\n";
        }
    }
}

interface Figura {
    public function kalkulatuAzalera();
}

class Laukia implements Figura {
    private $zabalera;
    private $altuera;

    public function __construct($zabalera, $altuera) {
        $this->zabalera = $zabalera;
        $this->altuera = $altuera;
    }

    public function kalkulatuAzalera() {
        return $this->zabalera * $this->altuera;
    }
}

class Zirkulua implements Figura {
    private $erradioa;

    public function __construct($erradioa) {
        $this->erradioa = $erradioa;
    }

    public function kalkulatuAzalera() {
        return pi() * pow($this->erradioa, 2);
    }
}

abstract class Animalia {
    abstract public function esan();
}

class Txakurra extends Animalia {
    public function esan() {
        return "GUAU";
    }
}

class Katua extends Animalia {
    public function esan() {
        return "MIAU";
    }
}