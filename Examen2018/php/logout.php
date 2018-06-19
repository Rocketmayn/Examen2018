<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error</title>
    <?php include '../includes/links.html' ?>
  </head>
  <body>
    <div class="form-wrapper">

    <div class="form">
      <h1>Doei!</h1>
      <p><?= 'You have been logged out!'; ?></p>

      <a href="index.php"> <button class="button button-block">Home</button> </a>
    </div>
  </div>
  </body>
</html>
