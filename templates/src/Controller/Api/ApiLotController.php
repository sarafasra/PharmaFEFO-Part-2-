<?php

require_once __DIR__ . "/../../../config/Database.php";
header('Content-Type: application/json');

class ApiLotController {
    
    public function addLot() {
        $input = json_decode(file_get_contents('php://input'), true);

        if (!empty($input['medicament_id']) && !empty($input['numero_lot']) && !empty($input['quantite']) && !empty($input['date_peremption'])) {
            try {
                $pdo = Database::connect();
                
                $stmt = $pdo->prepare("INSERT INTO lots (medicament_id, numero_lot, quantite, date_peremption, statut) VALUES (?, ?, ?, ?, 'OK')");
                $success = $stmt->execute([
                    $input['medicament_id'], 
                    $input['numero_lot'], 
                    $input['quantite'], 
                    $input['date_peremption']
                ]);
                
                if ($success) {
                    echo json_encode(["success" => true, "message" => "Lot ajouté avec succès !"]);
                } else {
                    echo json_encode(["success" => false, "message" => "Erreur lors de l'enregistrement."]);
                }
            } catch (PDOException $e) {
                echo json_encode(["success" => false, "message" => "Erreur SQL: " . $e->getMessage()]);
            }
        } else {
            echo json_encode(["success" => false, "message" => "Veuillez remplir tous les champs."]);
        }
    }
}