<?php
session_start();
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
<section class="container mt-5" id="profile">
<div class="row justify-content-center">
<div class="col-md-6">
<h2>
      Personal Information
     </h2>
<form id="profileForm" action="updateClient.php" method="post">
<div class="form-group">
<label for="phone">
        CIN:
       </label>
<input class="form-control"  required="" name="cin" type="text" value="<?php echo $_SESSION["cin"] ?>" disabled />
</div>
<div class="form-group">
<label for="fullName">
        Nom :
       </label>
<input class="form-control"   required=""  name="nom" type="text" value="<?php echo $_SESSION["nom"] ?>"/>
</div>
<div class="form-group">
<label for="email">
        Prenom:
       </label>
<input class="form-control"   required=""  name="prenom" type="text" value="<?php echo $_SESSION["prenom"] ?>"/>
</div>

<div class="form-group">
<label for="phone">
        City:
       </label>
<input class="form-control" id="phone"   name="city" required="" type="text" value="<?php echo $_SESSION["city"] ?>"/>
</div>
<div class="form-group">
<label for="phone">
        Telephone:
       </label>
<input class="form-control" id="phone"  name="tel" required="" type="text" value="<?php echo $_SESSION["tel"] ?>"/>
</div>
<div class="form-group">
<label for="phone">
        Email:
       </label>
<input class="form-control"  required="" name="email" type="email" value="<?php echo $_SESSION["email"] ?>"/>
</div>
<div class="form-group">
<label for="phone">
        Mode de passe:
       </label>
<input class="form-control"  required="" name="mdp" type="password" value="<?php echo $_SESSION["mod2passe"] ?>"/>
</div>
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
