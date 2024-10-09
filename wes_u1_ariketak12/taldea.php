<?php
    //Taldeen klasea
    class Taldea {
        private $id;
        private $izena;
        private $puntuak;

        //Konstruktorea
        function __construct($id, $izena, $puntuak){
            $this->id = $id;
            $this->izena = $izena;
            $this->puntuak = $puntuak;
        }

        //Getters and setters
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

        public function getPuntuak(){
            return $this->puntuak;
        }
        
        public function setPuntuak($puntuak){
            $this->puntuak = $puntuak;
        }
    }
?>