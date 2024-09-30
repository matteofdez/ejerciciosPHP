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
