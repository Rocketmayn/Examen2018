<?php

session_start();

if ($_SESSION['logged_in'] != 1) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
else {
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $email = $_SESSION['email'];
  $active = $_SESSION['active'];
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <?php include("../includes/links.html"); ?>
     <meta charset="utf-8">
     <title>Mijn Account</title>
   </head>
   <body>
     <?php include("../php/header.php"); ?>
     <?php include('../includes/content.html') ?>
     <h2 class="text-left pt-4 ml-5">Mijn Account</h2>
     <section class="p-5 mr-5">
         <div class="form">
           <h1>Welkom</h1>
           <p>
             <?php

              if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];

                unset($_SESSION['message']);
              }
              ?>
           </p>

           <?php

              if ( !$active ){
                echo
                '<div class="info">
                Account is unverified, please confirm your email by clicking on the email link!
                </div>';
              }

            ?>

            <h2><?php echo $first_name.' '.$last_name; ?></h2>
            <p><?= $email ?></p>

            <a href="php/logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
         </div>
     </section>
     <?php include('../includes/footer.html') ?>
   </body>
 </html>
