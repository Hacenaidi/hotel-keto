<?php
include_once("../controllers/clientcontroller.php");
include_once("../models/client.php");
$controller = new clientController();
session_start();
$cin = $_POST["cin"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$prenom = $_POST["prenom"];
$mdp = $_POST["mdp"];
$city = $_POST["city"];
$client = new Client($cin,$nom,$prenom,$tel,$email,$city,$mdp);

if ($controller->rechercherClient($email,$mdp)->rowCount() == 1 ){
    echo "<script>alert('Wrong! user already exists.')</script>";
    header("refresh:0.1;url=login_signup.html");
}else{
$res = $controller->inserstion($client);
$l = $controller->rechercherClient($email,$mdp)->fetch();
$_SESSION["id"] = $l[0]; 
$_SESSION["cin"] =$client->getCin();
$_SESSION["nom"] = $client->getNom();
$_SESSION["prenom"] = $client->getPrenom();
$_SESSION["email"] = $client->getEmail();
$_SESSION["city"] = $client->getCity();
$_SESSION["tel"] = $client->getTel();
$_SESSION["mod2passe"] = $client->getMod2passe();

header("location:index.php");
}
?>