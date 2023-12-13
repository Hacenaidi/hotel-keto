<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$id = $_GET["id"];
$val = $_GET["val"];
$reservation = $controller->updatereservation($id,$val);
if ($val == 1){
    $l = $controller->Reservation($id)->fetch();
    $res = $controller->updtatetousreservation($id,$l[5]);
}
header("refresh:0.1;url=listreservation.php");


?>