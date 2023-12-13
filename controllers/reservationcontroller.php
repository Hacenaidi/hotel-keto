<?php
include_once('../database/config.php');
include_once('../models/reservation.php');
class reservationController extends Connexion{
    function __construct() 
{
parent::__construct();
 }

 function insertion(Reservation $r) {
    $value = array(
    $r->getDateDebut(),
    $r->getDateFin(),
    $r->getPrixTotal(),
   $r->getIdClient(),
    $r->getIdChamber(),
$r->getconfirmation());

    // Prévenir les attaques par injection SQL en utilisant des requêtes préparées
    $res = $this->pdo->prepare("INSERT INTO reservation (date_debut, date_fin, prix_total, id_client, id_chamber,confirmation) VALUES (?, ?, ?, ?, ?,?)");

    // Exécution de la requête
    $res->execute($value);
    return $res;
    
}
function getreservation($num){
    $query = "select * from reservation where numero = $num";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function list($id){
    $query = "select * from reservation where id_client = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function updatereservation(Reservation $r , $id){
    $value = array(
        $r->getDateDebut(),
        $r->getDateFin(),
        $r->getPrixTotal()   
);
$qeury = "UPDATE reservation SET date_debut=?,date_fin=?,prix_total=? where numero=$id ";
$res = $this->pdo->prepare($qeury);
$res->execute($value); 
return $res;
}
function delete($id){
    $qeury = "DELETE FROM reservation WHERE numero = $id";
    $res = $this->pdo->prepare($qeury);
    $res->execute(); 
    return $res;
}
}
?>