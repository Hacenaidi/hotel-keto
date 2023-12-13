<?php
include_once("../database/config.php");
include_once("../models/contact.php");
class contactcontroller extends Connexion{
    function __construct() 
{
parent::__construct();
 }

function insertion(Contact $c){
    $query = "insert into contact(nom, email, tel, message, reading) values (?,?,?,?,?)";
    $res=$this->pdo->prepare($query); 
    $values = array(
        $c->getNom(),
       $c->getEmail(),
       $c->getTel(),
       $c->getMessage(),
       $c->getReading()
    );
    
    $res->execute($values);
    return $res;
}

}

?>