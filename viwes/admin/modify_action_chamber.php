<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$name = $_POST["name"];
$id = $_POST["id"];
$nbp= $_POST["nb_place"];
$prix = $_POST["prix"];
$num = $_POST["num"];
$img = $_POST["nameimage"];
if (!isset($_POST['file'])){
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($_FILES["file"]['name'], '.')  ,1)  );
if ( !(in_array($extension_upload,$extensions_valides)) ){ 
     header("refresh:0.1;url=modifychamber.php?id=$id");
     echo "<script>alert('lextensions est invalide ')</script>";
    };
$nom = "../images/".$_FILES["file"]['name'];
$nom_url = "images/".$_FILES["file"]['name'];
$resultat = move_uploaded_file($_FILES["file"]['tmp_name'],$nom);
$res = $controller->modifierchamber($name,$nbp,$prix,$num,$nom_url,$id);
}else{
    $res = $controller->modifierchamber($name,$nbp,$prix,$num,$img,$id);

}
header("location: chamber.php");
?>