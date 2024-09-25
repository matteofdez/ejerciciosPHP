<?php

class Kalkulagailua {
    public $balioa;

    public function __construct($balioa = 0) {
        $this->balioa = $balioa;
    }

    public function batu($zenbakia) {
        $this->balioa += $zenbakia;
    }

    public function kendu($zenbakia) {
        $this->balioa -= $zenbakia;
    }

    public function biderkatu($zenbakia) {
        $this->balioa *= $zenbakia;
    }

    public function lortuEmaitza() {
        return $this->balioa;
    }
}
?>
