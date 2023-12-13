<?php
session_start();
include_once("../controllers/clientcontroller.php");
include_once("../models/client.php");
$controllerclient = new clientController();
$cin = $_SESSION["cin"];
$id = $_SESSION["id"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$prenom = $_POST["prenom"];
$mdp = $_POST["mdp"];
$city = $_POST["city"];
$client = new Client($cin,$nom,$prenom,$tel,$email,$city,$mdp);
$res = $controllerclient->updateClient($client , $id);
$_SESSION["cin"] = $cin;
$_SESSION["nom"] = $client->getNom();
$_SESSION["prenom"] = $client->getPrenom();
$_SESSION["email"] = $client->getEmail();
$_SESSION["city"] = $client->getCity();
$_SESSION["tel"] = $client->getTel();
$_SESSION["mod2passe"] = $client->getMod2passe();
header("location:index.php");
?>