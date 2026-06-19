<?php  
require_once __DIR__ .'/../../../config/Database.php';
class ApiStockController{
    public function addStock(){
        header('content-Type: application/json');
        session_start();
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'PREPARATEUR'){
            http_response_code(403);
            echo json_encode(["error" => "Unauthorized"]);
            exit;
        }
        echo json_encode([
            "success" => true,
            "message" => "Lot ajouté avec succés"
        ]);
    }
}



?>