<?php
include_once("../../controllers/admincontroller.php");
$controller = new controllerAdmin();
$val = $_POST["validite"];
$pct = $_POST["pct"];
$idc = $_POST["list"];
if ($idc == 0){
    header("refresh:0.1;url=offer.php");

    echo "<script>alert('selection chamber !.')</script>";
}else{
    $controller->insertionoffer($val,$pct,$idc);
    $controller->updatechamber($idc,1);
    header("refresh:0.1;url=offer.php");
 

}
?>