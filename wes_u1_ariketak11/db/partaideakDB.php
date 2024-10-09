<?php
    class PartaideakDB {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }
        public function getAll($taldea_id) {
              $emaitza = $this->db->getKonexioa()->query("SELECT * FROM partaideak WHERE taldea_id = ".$taldea_id);
             if (!$emaitza) {
                echo 'ERROR: Ezin izan dira datuak eskuratu.';
                die();
            }
            
              $partaideak = [];
            if ($emaitza->num_rows > 0) {
                while ($row = $emaitza->fetch_assoc()) {
                    $partaideak[] = $row;
                }
            }
               return $partaideak;
        }

        public function create($izena, $herrialdea, $taldea_id) {
            echo "---------------- $taldea_id";
                $stmt = $this->db->getKonexioa()->prepare("INSERT INTO partaideak (izena, herrialdea, taldea_id) VALUES (?, ?, ?)");
             $stmt->bind_param("ssi", $izena, $herrialdea, $taldea_id);
            $emaitza = $stmt->execute();
             $stmt->close();
             return $emaitza;
        }

        public function delete($id) {
             $stmt = $this->db->getKonexioa()->prepare("DELETE FROM partaideak WHERE id = ?");
             $stmt->bind_param("i", $id);
            $emaitza = $stmt->execute();
               $stmt->close();
             return $emaitza;
        }

    }
?>