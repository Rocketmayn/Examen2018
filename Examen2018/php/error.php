<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error</title>
    <?php include '../includes/links.html' ?>
  </head>
  <body>
    <div class="contain">

    <div class="form">
        <h1>Error</h1>
        <p>
        <?php
        if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
            echo $_SESSION['message'];
        else:
          //  echo "test error.php style";
            header( "location: ../index.php" );
        endif;
        ?>
        </p>
        <a href="index.php"><button class="button button-block"/>Home</button></a>
    </div>
  </div>
  </body>
</html>
