<?php

class DB {
    private $konexioa;
    private $user ;
    private $host;
    private $pass ;
    private $db;
    
    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "admin";
        $this->db = "hackathon";
    }

    public function konektatu() {
        // Saiatu konexioa irekitzen.
        $this->konexioa = new mysqli($this->host,$this->user,$this->pass,$this->db);
        // Errore bat egon bada, bukatu aplikazioa.   
        if ($this->konexioa->connect_errno) {
            printf("Konexio errorea: %s\n", $this->konexioa->connect_error);
            die();
        }
        else {
            return $this->konexioa;
        }       
    }

    /**
     * Bueltatu konexio atributua.
     */
    public function getKonexioa() {
        return $this->konexioa;
    }

    /**
     * Destruktorea.
     */
    public function __destruct() {
        if ($this->konexioa) {
            $this->konexioa->close();
        }
    }
}