<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$name = $_POST["name"];
$nbp= $_POST["nb_place"];
$prix = $_POST["prix"];
$num = $_POST["num"];
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($_FILES["fileupload"]['name'], '.')  ,1)  );
if ( !(in_array($extension_upload,$extensions_valides)) ){
    
     header("refresh:0.1;url=chamber.php");
     echo "<script>alert('lextensions est invalide ')</script>";
    };
$nom = "../images/".$_FILES["fileupload"]['name'];
$nom_url = "images/".$_FILES["fileupload"]['name'];
$resultat = move_uploaded_file($_FILES["fileupload"]['tmp_name'],$nom);
$res = $controller->insertionchamber($name,$nbp,$prix,$num,$nom_url);
header("location: chamber.php");
?>