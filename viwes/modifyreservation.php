<?php
session_start();
include_once("../controllers/reservationcontroller.php");
$controller = new reservationController();
$id = $_GET["id"];
$res = $controller->getreservation($id);
$i = $_GET["i"];


$nom = $_GET["nom"];
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

  <a href="./historique.php" style="color: white;text-decoration : none;">
  <button class="btn btn-primary me-md-2" type="button" >Go Back </button></a>
</div>
  </div>
  </div>
<!-- Profile Form -->
<section class="container mt-5" id="profile">
<div class="row justify-content-center">
<div class="col-md-6">
<h2>
    Modify Reservation
     </h2>
<form id="profileForm" action="updatereservation.php" method="post">
<div class="form-group">
<label for="phone">
        id
       </label>
<input class="form-control"  required="" name="idref" type="text" value="<?php echo $i?>" disabled />
</div>
<div class="form-group">
<label for="fullName">
        Nom chamber:
       </label>
<input class="form-control"   required=""  name="nom" type="text" value="<?php echo $nom ?>" disabled/>
</div>
<div class="form-group">
<label for="date_debut">
       date_dabut
       </label>
<input class="form-control"   required=""  name="datedeb" type="date" value="<?php echo $res[1] ?>"/>
</div>
<div class="form-group">
<label for="date_fin">
       date_fin
       </label>
<input class="form-control"   required=""  name="datefin" type="date" value="<?php echo $res[2] ?>"/>
</div>

<input type="hidden" name="id" value="<?php echo $id?>">

<br>
<button class="btn btn-primary w-100" type="submit">
       Save
      </button>
</form>
</div>
</div>
</section>
<!-- Bootstrap & jQuery JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
