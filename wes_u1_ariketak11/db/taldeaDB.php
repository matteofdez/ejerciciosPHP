<?php
    class TaldeaDB {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getAll() {
            $emaitza = $this->db->getKonexioa()->query("SELECT * FROM taldea");
            if (!$emaitza) {
                echo 'ERROREA: Ezin izan dira datuak eskuratu.';
                die();
            }
            $taldeak = [];
            if ($emaitza->num_rows > 0) {
                while ($row = $emaitza->fetch_assoc()) {
                    $taldeak[] = $row;
                }
            }
            return $taldeak;
        }

        public function get($id) {
            $stmt = $this->db->getKonexioa()->prepare("SELECT * FROM taldea WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $emaitza = $stmt->get_result();
            $stmt->close();
            $e = NULL;
            if($emaitza->num_rows > 0) {
                $e = $emaitza->fetch_assoc();
            }
            return $e;
        }
        
        public function create($izena, $puntuak) {
            $stmt = $this->db->getKonexioa()->prepare("INSERT INTO taldea (izena, puntuak) VALUES (?, ?)");
            $stmt->bind_param("si", $izena, $puntuak);
            $emaitza = $stmt->execute();
            $stmt->close();
            return $emaitza;
        }

        public function delete($id) {
            $stmt = $this->db->getKonexioa()->prepare("DELETE FROM taldea WHERE id = ?");
            $stmt->bind_param("i", $id);
            $emaitza = $stmt->execute();
            $stmt->close();
            return $emaitza;
        }

        public function editPuntuak($id, $puntuak){
            $stmt = $this->db->getKonexioa()->prepare("UPDATE taldea SET puntuak=? WHERE id=?");
            $stmt->bind_param("ii", $puntuak, $id);
            $emaitza = $stmt->execute();
            $stmt->close();
            return $emaitza;
        }
    }
?>