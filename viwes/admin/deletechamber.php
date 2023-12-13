<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$id = $_GET["id"];
$controller->deletechamber($id);
header("refresh:0.1;url=chamber.php");
?>