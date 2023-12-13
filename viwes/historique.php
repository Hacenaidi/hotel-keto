<?php
session_start();
include_once("../controllers/reservationcontroller.php");
include_once("../controllers/chambercontroller.php");
$controllerchamber = new chambercontroller() ;
$controllereservation = new reservationController();
$id = $_SESSION["id"];
$res = $controllereservation->list($id);
$i = 0;
?>
<!DOCTYPE html>
<html lang="en">
       <head>
              <meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>
   Profile
  </title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<meta content="noindex, nofollow" name="robots"/>
</head>
<body>

  <div class="bg-grid text-white text-center p-4">
  <div class="row">
   
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="./index.php" style="color: white; text-decoration : none;">
  <button class="btn btn-primary me-md-2" type="button" >Home</button></a>
  <a href="./editProfil.php" style="color: white; text-decoration : none;">
  <button class="btn btn-primary me-md-2" type="button" >Information presonel</button></a>
  <a href="./historique.php" style="color: white;text-decoration : none;">
  <button class="btn btn-primary me-md-2" type="button" >Historique reservation </button></a>
</div>
  </div>
  </div>
<!-- Profile Form -->
<table class="table table-dm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name chamber</th>
      <th scope="col">day Reserve</th>
      <th scope="col">Prix Total</th>
      <th scope="col">Confirmation</th>
      <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
       <?php
       while($l = $res->fetch()){
              $nom = $controllerchamber->getnom($l[5])[0];
              $datedcon = new DateTime($l[1]);
              $datefincon =new DateTime($l[2]);
              $day = $datedcon->diff($datefincon)->days;
              $_SESSION["day"] = $day;
       ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $nom ?></td>
      <td><?php echo $day ?></td>
      <td><?php echo $l[3] ?></td>

     <?php 
     if ($l[6] == 0){
       echo "<td style='color : red;'>waiting ...</td>";
       echo "<td><a href='modifyreservation.php?id=$l[0]&i=$i&nom=$nom' style='text-decoration:none;color : black;'>";
       echo "<button type='button'  style='background-color : blue;margin-right : 5px' >Modify</button></a>";
       echo "<a href='anuulerreservation.php?id=$l[0]' style='text-decoration:none;color : black;'><button type='button'  style='background-color : red;' >Anuuler</button></a>
       </td>";
     }else{
       if ($l[6] == 2){
       echo "<td style='color : red;'>denied</td>";    
       
       }
       else{
        echo "<td style='color : green;'>accepted</td>";
       
       }
     }
     ?>
       
    </tr>
    <?php 
    $i++;}?>
  </tbody>
</table>
<!-- Bootstrap & jQuery JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
