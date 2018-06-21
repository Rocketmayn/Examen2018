<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Gebruiker met dit mail adres bestaat niet.";
    header("location: php/error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        if($user['active'] == 1) {
          $_SESSION['email'] = $user['email'];
          $_SESSION['first_name'] = $user['first_name'];
          $_SESSION['last_name'] = $user['last_name'];
          $_SESSION['active'] = $user['active'];

          // This is how we'll know the user is logged in
          $_SESSION['logged_in'] = true;

          header("location: php/profile.php");
        } else {
          $_SESSION['message'] = "Account niet geactiveerd";
          header("location: php/error.php");
        }

    }
    else {
        $_SESSION['message'] = "Verkeerd wachtwoord ingevoerd!";
        header("location: php/error.php");
    }
}
