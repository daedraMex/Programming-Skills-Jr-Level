<?php 

require_once __DIR__ . '/../Controllers/UserController.php';

$userController = UserController::getInstance();
$userController->processRequest();
