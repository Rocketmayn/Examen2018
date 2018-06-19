<?php
/*
Het wachtwoordherstelformulier, de link naar deze pagina is inbegrepen in het emailbericht forgot.php
*/
require '../db.php';
session_start();

// Zorg dat mail en hash variabelen niet leeg zijn
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    // Zorg dat mail met matchende hash al wel bestaat
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    {
        $_SESSION['message'] = "Verkeerde URL ingevoerd om het wachtwoord te resetten!";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Verificatie mislukt, probeer het opnieuw!";
    header("location: error.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Reset je wachtwoord</title>
  <link rel="stylesheet" href="../style/Registratie.css">
</head>

<body>
  <div class="form-wrapper">

    <div class="form">

          <h1>Kies je nieuwe wachtword</h1>

          <form action="reset_password.php" method="post">

          <div class="field-wrap">
            <label>
              Nieuwe wachtwoord<span class="req">*</span>
            </label>
            <input type="password"required name="newpassword" autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Bevestig nieuwe wachtwoord<span class="req">*</span>
            </label>
            <input type="password"required name="confirmpassword" autocomplete="off"/>
          </div>

          <!-- Dit veld is verplicht, zo krijg je het e-mailadres van de gebruiker -->
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="hidden" name="hash" value="<?= $hash ?>">

          <button class="button button-block"/>Toepassen</button>

          </form>

        </div>
    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
