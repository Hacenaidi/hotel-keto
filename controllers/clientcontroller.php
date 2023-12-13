<?php
include_once('../database/config.php');
include_once('../models/client.php');
class clientController extends Connexion{
    function __construct() 
{
parent::__construct();
 }
function testlogin($email,$mdp){
    $query= "select * from client where email='$email' and mod2passe='$mdp'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;

}
function inserstion(Client $c){
    $query = "INSERT INTO client(cin,nom, prenom, email, city, tel, mod2passe) VALUES (?,?,?,?,?,?,?)";
    $res = $this->pdo->prepare($query);
    $values = array(
        $c->getCin(),
        $c->getNom(),
        $c->getPrenom(),
        $c->getEmail(),
        $c->getCity(),
        $c->getTel(),
        $c->getMod2Passe(),
    );
    
    $res->execute($values);
    return $res;

}
function rechercherClient($email,$mdp){
    $query = "select * from client where email = '$email' and mod2passe = '$mdp'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}

function updateClient(Client $c ,$id){
    $query = "UPDATE client SET cin=?,nom=?,prenom=?,email=?,city=?,tel=?,mod2passe=? WHERE num = $id";
    $res=$this->pdo->prepare($query); 
    $values = array(
        $c->getCin(),
        $c->getNom(),
        $c->getPrenom(),
        $c->getEmail(),
        $c->getCity(),
        $c->getTel(),
        $c->getMod2Passe(),
    );
    
    $res->execute($values);
    return $res;
}
}
?>