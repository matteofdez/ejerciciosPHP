<?php

class Ikaslea {
    public $izena;
    public $notak = [];

    public function __construct($izena, $notak) {
        $this->izena = $izena;
        $this->notak = $notak; 
    }

    public function bataz_bestekoa() {
        $guztira = 0;
        foreach ($this->notak as $ikasgaia => $nota) {
            $guztira += $nota;
        }
        return $guztira / count($this->notak);
    }

    public function erakutsi_notak() {
        echo "Ikaslea: " . $this->izena . "<br>";
        echo "<br>";
        echo "Notak:<br>";
        foreach ($this->notak as $ikasgaia => $nota) {
            echo $ikasgaia . ": " . $nota . "<br>";
        }
    }
}
?>
