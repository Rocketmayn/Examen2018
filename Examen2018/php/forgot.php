<?php
/* Reset your password form, sends reset.php password link */
require '../db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    {
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Controleer uw email <span>$email</span>"
        . " voor een verificatie email om uw wachtwoord opnieuw in te stellen!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Wachtwoord opnieuw instellen';
        $message_body = '
        Hallo '.$first_name.',

        Je hebt recent een aanvraag gedaan voor het opnieuw instellen van jouw wachtwoord.

        Klik op de volgende link om je wachtwoord opnieuw in te stellen.

        http://localhost/AppExamen2018/Examen2018/php/reset.php?email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Wachtwoord opnieuw instellen</title>
  <link rel="stylesheet" href="../style/Registratie.css">
</head>

<body>
<div class="form-wrapper">

  <div class="form">

    <h1>Wachtwoord opnieuw instellen</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Adres<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
