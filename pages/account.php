<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../registration/login.php');
}
if (isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location: registration/login.php");
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
         <?php include("../php/account_data.php") ?>
     </section>
     <?php include('../includes/footer.html') ?>
   </body>
 </html>
