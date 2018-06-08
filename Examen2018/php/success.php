<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Success</title>
     <?php include '../includes/links.html' ?>
   </head>
   <body>
     <div class="form">
       <h1><?= 'Success'; ?></h1>
       <p>
         <?php
          if (isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
            echo $_SESSION['message'];
          else:
            header( "location: ../index.php");
          endif;
          ?>
       </p>
       <a href="../examen2018/index.php"> <button class="button button-block">Home</button> </a>
     </div>

   </body>
 </html>
