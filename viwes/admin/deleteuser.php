<?php 
include_once("../../controllers/admincontroller.php");
$id = $_GET["id"];
$controller = new controllerAdmin();
$controller->deleteuser($id);
header("refresh:0.1;url=client.php");

?>