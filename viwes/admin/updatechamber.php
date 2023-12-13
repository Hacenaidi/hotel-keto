<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$id = $_GET["id"];
$val = $_GET["val"];
$controller->updatechamber($id,$val);
header("refresh:0.1;url=chamber.php");
?>