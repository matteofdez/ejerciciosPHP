<?php

/**
 * Erabiltzaileak taula kudeatzen duen klasea.
 */
class Erabiltzailea {
    private $db;

    /**
     * Datu-base objektu bat pasatzen zaio eraikitzailean.
     */
    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Erabiltzaie danak bueltatzen ditu array asoziatibo baten.
     */
    public function getAll() {
        // SELECT kontsulta exekutatu.
        $emaitza = $this->db->getKonexioa()->query("SELECT * FROM erabiltzaileak");
        
        // Erroreren bat geratu bada, bota errorea.
        if (!$emaitza) {
            echo 'ERROREA: Ezin izan dira datuak eskuratu.';
            die();
        }
        
        // Arakatu emaitza eta gorde datuak gero bueltatzeko.
        $erabiltzaileak = [];
        if ($emaitza->num_rows > 0) {
            while ($row = $emaitza->fetch_assoc()) {
                $erabiltzaileak[] = $row;
            }
        }
        //  Bueltatu erabiltzaileak.
        return $erabiltzaileak;
    }

    /**
     * Lortu erabiltzaile bakar bat bere id atributuaren arabera.
     */
    public function get($userId) {
        // Sortu PreparedStatement objektu bat.
        $stmt = $this->db->getKonexioa()->prepare("SELECT * FROM erabiltzaileak WHERE id = ?");
        // Kudeatu kontsultaren argumentuak.
        $i = $userId;
        $stmt->bind_param("i", $i);
        // Exekutatu sententzia.
        $stmt->execute();
        // Bueltatu emaitza.
        $emaitza = $stmt->get_result();
        // Itxi statement konexioa.
        $stmt->close();

        // Bueltatu erregistroa, existitzen bada.
        $e = NULL;
        if($emaitza->num_rows > 0) {
            $e = $emaitza->fetch_assoc();
        }
        return $e;
    }

    /**
     * Erabiltzaile berri bat sortzen du.
     */
    public function create($izena) {
        // Sortu PreparedStatement objektu bat.
        $stmt = $this->db->getKonexioa()->prepare("INSERT INTO erabiltzaileak (izena) VALUES (?)");
        // Kudeatu kontsultaren argumentuak eta exekutatu.
        $i = $izena;
        $stmt->bind_param("s", $i);
        $emaitza = $stmt->execute();
        // Itxi statement konexioa.
        $stmt->close();
        // Bueltatu emaitza.
        return $emaitza;
    }

    /**
     * Eazabatu erabiltzailea.
     */
    public function delete($id) {
        // Sortu PreparedStatement objektu bat.
        $stmt = $this->db->getKonexioa()->prepare("DELETE FROM erabiltzaileak WHERE id = ?");
        // Kudeatu kontsultaren argumentuak eta exekutatu.
        $i = $id;
        $stmt->bind_param("i", $i);
        $emaitza = $stmt->execute();
        $stmt->close();
        // Bueltatu emaitza.
        return $emaitza;
    }
}
