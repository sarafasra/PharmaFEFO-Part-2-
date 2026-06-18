<?php

require_once __DIR__ . "/../../Service/AuthService.php";

class AdminController
{
  public function dashboard()
{
    AuthService::checkRole('ADMIN');

    require __DIR__ . '/../../../templates/admin/dashboard.php';
}
}