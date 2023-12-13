<?php


$id = $_GET["id"];
include_once("../controllers/reservationcontroller.php");
$controller = new reservationController();
$res = $controller->delete($id);
header("refresh:0.1;url=historique.php");
?>