<?php
include_once('../database/config.php');
include_once('../models/client.php');
class offerController extends Connexion{
    function __construct() 
{
parent::__construct();
 }

function liste(){
    $query = "SELECT validite,pourcentage,prix,nom,url_image,id_chamber,numero_chamber FROM offer o, chamber c where o.id_chamber = c.id;";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
}