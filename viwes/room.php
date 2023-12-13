<?php
session_start();
include_once('../controllers/chambercontroller.php');
$controllerchamber = new chambercontroller();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $attributs = isset($_POST["att"]) ? $_POST["att"] : null;
    $value = isset($_POST["rechercher"]) ? $_POST["rechercher"] : null;

    if (isset($value) && $value != "") {
        $res = $controllerchamber->rechercherparvaleur($attributs, $value);
    } else {
        $res = $controllerchamber->list();
    }
} else {
    // Set default values or perform any other actions if needed
    $attributs = null;
    $value = null;
    $res = $controllerchamber->list();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>keto</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link " href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" href="room.php">Rooms</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="offers.php">Offers</a>
                              </li>
                              
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <?php
                              if (isset($_SESSION["id"])){
                                 ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="./log_out.php">log Out</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="editProfil.php"><?php echo $_SESSION["nom"]." ".$_SESSION["prenom"]?></a>
                              </li>

                              <?php }else{?>
                              <li class="nav-item">
                                 <a class="nav-link" href="./login_signup.html">Sign Up</a>
                              </li>
                              <?php }?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Rooms</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                    <?php
echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method='post'>";
?>
                     <p>
                        <input type="text" name="rechercher" class="form-control-sm" >
                        <select name="att" id="" class="form-select form-select-lg mb-3">
                        <option value="nom">par nom</option>
                        <option value="prix">par trafis</option>
                     </select>
                    </p>
                     <p><input type="submit" value="Recherhcer" class="primary-btn" style="background-color: red;" ></p>
                     </form>
                  </div>
               </div>
               
            </div>
            </div>
            </div>
            <section class="hp-room-section">
               <div class="container-fluid">
                   <div class="hp-room-items">
                       <div class="row">
                        <?php
                        while ($l = $res->fetch()){
                        
                          echo " <div class='col-lg-3 col-md-6'>
                               <div class='hp-room-item set-bg' style='background-image: url($l[4]);opacity: 0.9;'>
                                   <div class='hr-text'>
                                       <h3>$l[1]</h3>
                                       <h2 class='text-danger'>$l[2]DT<span>/Pernight</span></h2>
                                       <table>
                                           <tbody>
                                               <tr>
                                                   <td class='r-o'>Numero:</td>
                                                   <td  >$l[6]</td>
                                               </tr>
                                               <tr>
                                                   <td class='r-o'>Capacity:</td>
                                                   <td >Max persion $l[3]</td>
                                               </tr>
                                               <tr>
                                                   <td class='r-o '>Bed:</td>
                                                   <td  >King Beds</td>
                                               </tr>
                                               <tr>
                                                   <td class='r-o'>Services:</td>
                                                   <td  >Wifi, Television, Bathroom,...</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                       <a href='./reservation.php?id=$l[6]&prix=$l[2]' class='book_btn' align='center'>Reserve</a>
                                   </div>
                               </div>
                           </div>";
                        }
                        ?>
                           
                      </div>
                  </div>
              </div>
          </section>
                    
                           
                          
                           
          
      <!-- end our_room -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +216 28 389 204</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> hacenaidi4455@gmail.com</a></li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                     
               
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php"> about</a></li>
                        <li  class="active"><a href="room.php">Our Room</a></li>
                        <li><a href="offers.php">Offers</a></li>
                       
                        <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
                 
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Hacen aidi</a>
                        <br>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>