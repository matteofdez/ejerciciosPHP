<?php
class autoa {
    
    public $marka;
    public $modelo;

    public function __construct($marka, $modelo) {
        $this->marka = $marka;
        $this->modelo = $modelo;
    }

    public function getCoche() {
        return "Autoa: " . $this->marka . " " . $this->modelo;
    }
}
?>