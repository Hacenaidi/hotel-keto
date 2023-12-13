<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$val = $_POST["validite"];
$pct = $_POST["pct"];
$idc = $_POST["list"];
$id = $_POST['id'];
$controller->updateoffer($val,$pct,$idc,$id);
$controller->updatechamber($idc,1);
header("refresh:0.1;url=offer.php");
 


?>