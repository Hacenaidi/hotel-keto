<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$id = $_GET["id"];
$controller->updatcontact($id);
header("refresh:0.1;url=listcontact.php");

?>