<?php
include_once("../controllers/reservationcontroller.php");
include_once("../controllers/chambercontroller.php");
include_once("../models/reservation.php");
$controller = new reservationController();
$controllerchamber = new chambercontroller();
session_start();
$dated = $_POST["datedebut"];
$datefin = $_POST["datefin"];
$prix = $_POST["prix"];
$idclient = $_SESSION["id"];
$idchamber = $_POST['num_chamber'];

$numchamber = $controllerchamber->getnum($idchamber)[0];
$date = date("Y-n-d"); 

if (strcmp($date,$dated)==1 || strcmp($dated,$datefin)==1){
    echo "<script>alert('Wrong! date invalide !! .')</script>";
    header("refresh:0.1;url=reservation.php?id=$idchamber&prix=$prix");
}else{
 
    $datedcon = new DateTime($dated);
    $datefincon = new DateTime($datefin);
    $prixtoltale = ($prix *  (int)($datedcon->diff($datefincon)->days));
    $reservation = new Reservation($dated,$datefin,$prixtoltale,$idclient,$numchamber,0);
    $controller->insertion($reservation);
    echo "<script>alert('Reservation sent successfully awaiting response')</script>";
    header("refresh:0.1;url=historique.php");

}
?>