<?php
    //Partaideen clasea
    class Partaideak {
        private $id;
        private $izena;
        private $herrialdea;
        private $taldea_id;

        //Konstruktorea
        function __construct($id, $izena, $herrialdea, $taldea_id){
            $this->id = $id;
            $this->izena = $izena;
            $this->herrialdea = $herrialdea;
            $this->taldea_id = $taldea_id;
        }
        
        // Getters eta setters
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getIzena(){
            return $this->izena;
        }

        public function setIzena($izena){
            $this->izena = $izena;
        }

        public function getHerrialde(){
            return $this->herrialdea;
        }

        public function setHerrialde($herrialdea){
            $this->herrialdea = $herrialdea;
        }

        public function getTaldea(){
            return $this->taldea_id;
        }

        public function setTaldea($taldea){
            $this->taldea_id = $taldea;
        }
    }
?>