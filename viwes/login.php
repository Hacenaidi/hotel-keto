<?php
include_once("../controllers/clientcontroller.php");
$clientcontroller = new clientController();
$email = $_POST["email"];
$mdp = $_POST["mdp"];
session_start();
$res = $clientcontroller->testlogin($email,$mdp);
if ($res->rowCount() == 1 ){
    $l = $res->fetch();
    $_SESSION["id"] = $l[0];
    $_SESSION["cin"] = $l[1];
    $_SESSION["nom"] = $l[2];
    $_SESSION["prenom"] = $l[3];
    $_SESSION["email"] = $l[4];
    $_SESSION["city"] = $l[5];
    $_SESSION["tel"] = $l[6];
    $_SESSION["mod2passe"] = $l[7];
    header("location:index.php");
}
else{
    header("refresh:0.1;url=login_signup.html");

    echo "<script>alert('Wrong! Username/Password is invalid.')</script>";
}
?>
