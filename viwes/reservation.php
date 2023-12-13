<?php
session_start();
if (!(isset($_SESSION["id"]))){
   header("location:./login_signup.html");
}
$num = $_GET["id"];
if (isset($_GET["pct"])){
   $prix = $_GET["prix"]-($_GET["prix"] * $_GET["pct"])/100;
}else{
   $prix = $_GET["prix"];
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> -->
      <!-- end loader -->
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
                     <h2>Reservation</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-10">
                  <div class="booking_ocline">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="book_room">
                                 <h1>ONLINE ROOM RESERVATION</h1>
                                 <form class="book_now" action="reserve.php" method="POST">
                                    <div class="raw">
                                       <div class="col-md-12">
                                          <span> N° chamber</span>
                                        
                                          <input class="online_book"  type="text" name="num_chamber" value="<?php echo $num?>" >
                                       </div>
                                       <div class="col-md-12">
                                          <span>Nom Client</span>
                                         
                                          <input class="online_book" value="<?php echo $_SESSION["nom"]." ".$_SESSION["prenom"] ?>" type="text" name="nom" disabled>
                                       </div>
                                       <div class="col-md-12">
                                          <span>Cin</span>
                                         
                                          <input class="online_book" value="<?php echo $_SESSION["cin"] ?>" type="text" name="cin" disabled>
                                       </div>
                                       </div>
                                       <div class="col-md-12">
                                          <span>Email
                                          </span>
                                          
                                          <input class="online_book" value="<?php echo $_SESSION["email"] ?>" type="text" name="email" disabled>
                                       </div>
                                       <div class="col-md-12">
                                          <span>Prix par night
                                          </span>
                                          
                                          <input class="online_book" value="<?php echo $prix ?>" type="text" name="prix" >
                                       </div>
                                       <div class="col-md-12">
                                          <span>Arrival</span>
                                          <img class="date_cua" src="images/date.png">
                                          <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="datedebut" required>
                                       </div>

                                       <div class="col-md-12">
                                          <span>Departure</span>
                                          <img class="date_cua" src="images/date.png">
                                          <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="datefin" required>
                                       </div>
                                       <div class="col-md-12">
                                          <button class="book_btn"  type="submint">Réserve
                                          </button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                      
                        </div>
                     </div>
                   
                     </div>
                     </div>
                     </div>
                     </div>
   
              
               
     
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
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="about.php"> about</a></li>
                        <li class="active"><a href="room.php">Our Room</a></li>
                        <li><a href="offers.php">Offres</a></li>
                     
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
                        © 2023 All Rights Reserved. Design by <a href="https://html.design/"> Hacen aidi</a>
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