<?php
include_once("../controllers/reservationcontroller.php");
include_once("../controllers/chambercontroller.php");
include_once("../models/reservation.php");
$controller = new reservationController();
$controllerchamber = new chambercontroller();
$id = $_POST["id"];
$datedeb = $_POST["datedeb"];
$datefin = $_POST["datefin"];
$res = $controller->getreservation($id);
$datedcon = new DateTime($datedeb);
$datefincon = new DateTime($datefin);
$prix = $controllerchamber->getPrix($res[5])[0];

$prixtotale = ($prix *  (int)($datedcon->diff($datefincon)->days));
$reservation = new Reservation($datedeb,$datefin,$prixtotale,$id,$res[5],$res[6]);
$res1 = $controller->updatereservation($reservation,$id);
if ($res){
echo "<script>alert('update is done')</script>";
header("refresh:0.1;url=historique.php");
}
?>