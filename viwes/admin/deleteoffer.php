<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$id = $_GET["id"];
$controller->deleteoffer($id);
header("refresh:0.1;url=offer.php");
?>