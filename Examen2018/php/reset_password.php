<?php
/* De code om te database te updaten met het nieuwe wachtwoord */
require '../db.php';
session_start();

// Zorg dat je post gebruikt hier, anders werkt het niet.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Wachtwoorden moeten matchen
    if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) {

        $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);


        $email = $mysqli->escape_string($_POST['email']);
        $hash = $mysqli->escape_string($_POST['hash']);

        $sql = "UPDATE users SET password='$new_password', hash='$hash' WHERE email='$email'";

        if ( $mysqli->query($sql) ) {

        $_SESSION['message'] = "Het wachtwoord is succesvol opnieuw ingesteld!";
        header("location: success.php");

        }

    }
    else {
        $_SESSION['message'] = "De wachtwoorden komen niet overeen, ze moeten identiek zijn!";
        header("location: error.php");
    }

}
?>
