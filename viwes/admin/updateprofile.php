<?php
include_once("../../controllers/admincontroller.php");
include_once("../../models/admin.php");

$controller = new controllerAdmin();
$name = $_POST["name"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$lastname = $_POST["lastname"];
$admin = new Admin($email,$mdp,$name,$lastname);
$controller->updateadmin($admin);
header("refresh:0.1;url=dashboard.php");


?>