<?php

class DB
{
    private $konexioa;
    private $user;
    private $host;
    private $pass;
    private $db;

    /**
     * Eraikitzailea.
     */
    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "admin";
        $this->db = "e2ariketa1";
    }

    /**
     * Konexioa ireki eta gorde atributu moduan.
     */
    public function konektatu()
    {
        // Saiatu konexioa irekitzen.
        $this->konexioa = new mysqli($this->host, $this->user, $this->pass, $this->db);
        // Errore bat egon bada, bukatu aplikazioa.   
        if ($this->konexioa->connect_errno) {
            printf("Konexio errorea: %s\n", $this->konexioa->connect_error);
            die();
        } else {
            return $this->konexioa;
        }
    }

    /**
     * Destruktorea.
     */
    public function __destruct()
    {
        if ($this->konexioa) {
            $this->konexioa->close();
        }
    }

    public function insert($userName, $pasahitza)
    {
        $stmt = $this->konexioa->prepare("INSERT INTO erabiltzaileak (email, pasahitza) VALUES (?,?)");
        $stmt->bind_param("ss", $userName, $pasahitza);
        $emaitza = $stmt->execute();
        $stmt->close();
        return $emaitza;
    }

    public function select($email)
    {
        $stmt = $this->konexioa->prepare("SELECT * FROM erabiltzaileak WHERE email LIKE ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $emaitza = $stmt->get_result();

        $row = $emaitza->fetch_assoc();

        return $row;
    }

    public function getID($id)
    {
        $stmt = $this->konexioa->prepare("SELECT * FROM erabiltzaileak WHERE id LIKE ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $emaitza = $stmt->get_result();

        $row = $emaitza->fetch_assoc();

        return $row;
    }
}
