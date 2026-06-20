<?php

class AuthService
{
    public static function checkRole($role)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?login=1");
            exit;
        }

        if ($_SESSION['user']['role'] !== $role) {
            echo "403 - Accès interdit";
            exit;
        }
    }
}