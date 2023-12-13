<?php
include_once("../../controllers/admincontroller.php");
$adr = $_POST["adress"];
$mdp = $_POST["mdp"];
session_start();
$controller = new controllerAdmin();
$res= $controller->rechercheradmin($adr,$mdp);
if ($res->rowCount() == 1 ){
    header("location:dashboard.php");
    $_SESSION["idadmin"] = $res->fetch()[0];
}else{
    header("refresh:0.1;url=index.php");

    echo "<script>alert('Wrong! Username/Password is invalid.')</script>";
}

?>