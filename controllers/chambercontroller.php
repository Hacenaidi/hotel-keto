<?php
include_once("../database/config.php");
include_once("../models/chamber.php");
class chambercontroller extends Connexion{
    function __construct() 
{
parent::__construct();
 }
function rechercherparvaleur($colonne, $valeur) {
        // Utilisation de requête préparée pour éviter les injections SQL
        if ($colonne == "prix"){
        $query = "SELECT * FROM chamber WHERE $colonne <= $valeur ";
        }else{
        $query = "SELECT * FROM chamber WHERE $colonne like '%$valeur%' ";
        }
        $res = $this->pdo->prepare($query);

        // Liaison des paramètres
        // $res->bindParam(':valeur', $valeur);

        // Exécution de la requête
        $res->execute();

        // Retourner le résultat
        return $res;
}
function getnum($num){
    $query = "select id from chamber where numero_chamber = $num";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function getnom($num){
    $query = "select nom from chamber where id = $num";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function getPrix($num){
    $query = "select prix from chamber where id = $num";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function list(){
    $query = "select * from chamber where disponibilite = 1 ";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
}

?>