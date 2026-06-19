<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../src/Controller/Web/AuthController.php";
require_once __DIR__ . "/../src/Controller/Web/AdminController.php";

$auth = new AuthController();
$admin = new AdminController();

if (isset($_GET['login'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $auth->login();
    } else {
        $auth->loginForm();
    }
    exit;
}

if (isset($_GET['logout'])) {
    $auth->logout();
    exit;
}

if (!isset($_SESSION['user'])) {
    header("Location: index.php?login=1");
    exit;
}

if (isset($_GET['api']) && $_GET['api'] === 'stock_add') {
    require_once __DIR__ . '/../src/Controller/Api/ApiStockController.php';
    $api = new ApiStockController();
    $api->addStock();
    exit;
}

if (isset($_GET['api']) && $_GET['api'] === 'lot_add') {
    require_once __DIR__ . '/../src/Controller/Api/ApiLotController.php';
    $api = new ApiLotController();
    $api->addLot();
    exit;
}

$role = $_SESSION['user']['role'];

if ($role === 'ADMIN') {
    $admin->dashboard();
} else {
    echo "Bienvenue, rôle: " . $role;
}