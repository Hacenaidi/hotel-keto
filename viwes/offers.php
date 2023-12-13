<?php
session_start();
include_once("../controllers/offercontroller.php");
$controlleroffer = new offerController();
$res = $controlleroffer->liste()
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
   <body class="main-layout inner_page">
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
                                 <a class="nav-link" href="room.php">Rooms</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link active" href="offers.php">Offers</a>
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
                    <h2>Offers</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- offer -->
      
      <div  class="blog">
         <div class="container">
            <div class="row">
               <?php
               while ($l = $res->fetch()) {
               ?>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                       <figure> <img src="<?php echo $l[4] ?>" alt="#" ></figure>
                     </div>
                     <div class="blog_room">
                        <h3><?php echo $l[3] ?></h3>
                        <span>solde de : <?php echo $l[1] ?>%</span>
                        <p >
                        <h1 ><span style=" text-decoration-line: line-through;size:500px; "><?php echo $l[2] ?>dt</span> => <?php echo $l[2]-($l[2]*$l[1])/100 ?>dt</h1> 
                        </p>
                       <p> validite : <?php echo $l[0] ?> day</p>
                       <br>
                        <?php echo "<a href='./reservation.php?id=$l[6]&pct=$l[1]&prix=$l[2]' class='book_btn' align='center'>Reserve</a>"?>
                     </div>
                  </div>
               </div>
               <?php } ?>  
              
               </div>
            </div>

            
         </div>
      </div>
   
 
      
      <!-- end offer -->
    
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
                        <li><a href="room.php">Our Room</a></li>
                        <li class="active"><a href="offers.php">Offers</a></li>
                    
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