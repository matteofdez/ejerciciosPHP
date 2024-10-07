<?php

/**
 * MySQL datu-base baten konexioa kudeatzen du mysqli luzapena erabiliz.
 */
class DB {
    private $konexioa;
    private $user ;
    private $host;
    private $pass ;
    private $db;
    
    /**
     * Eraikitzailea.
     */
    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "admin";
        $this->db = "froga";
    }

    /**
     * Konexioa ireki eta gorde atributu moduan.
     */
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