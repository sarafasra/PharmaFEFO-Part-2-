<?php


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

$role = $_SESSION['user']['role'];

if ($role === 'ADMIN') {
    $admin->dashboard();
}