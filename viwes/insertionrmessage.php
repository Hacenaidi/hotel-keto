<?php
include_once("../controllers/contactcontroller.php");
include_once("../models/contact.php");
session_start();
if (isset($_POST["Email"])){
    $email = $_POST["Email"];
}else{
    $email = $_SESSION["email"];
}
$nom = $_POST['Name'];
$tel = $_POST["phone"];
$message = $_POST["message"];
$contact = new Contact($nom,$email,$tel,$message,0);
$controller = new contactcontroller();
$res = $controller->insertion($contact);
header("location: contact.php");
?>