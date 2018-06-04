<?php
/* Registration process, inserts user info into the database
   and sends account confirmation email message
 */

 $_SESSION['email'] = $_POST['email'];
 $_SESSION['first_name'] = $_POST['firstname'];
 $_SESSION['last_name'] = $_POST['lastname'];

 $first_name = $mysqli->escape_string($_POST['firstname']);
 $last_name = $mysqli->escape_string($_POST['lastname']);
 $email = $mysqli->escape_string($_POST['email']);
 $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
 $hash = $mysqli->escape_string( md5( rand(0,1000) ) );

 $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

 if ($result->num_rows > 0 ) {
   $_SESSION['message'] = 'User with this email already exists!';
   header("location: error.php");
 }
 else {
   $sql = "INSERT INTO users (first_name, last_name, email, password, hash) " . "VALUES ('$first_name','$last_name','$email','$password','$hash')";

   if ($mysqli->query($sql)) {
     $_SESSION['active'] = 0;
     $_SESION['logged_in'] = true;
     $_SESSION['message'] =

              "Confirmation link has been sent to $email, please verify
              your account by clicking on the link in the message!";

    $to       = $email;
    $subject  = 'Account Verification ( clevertechie.com )';
    $message_body = '
    Hello '.$first_name.',

    Thank you for signing up!

    Please click this link to activate your account:

    http://localhost/AppExamen2018/Examen2018/php/verify.php?email='.$email.'&hash='.$hash;

    mail( $to, $subject, $message_body );

    header("location: profile.php");

    }
    else {
      $_SESSION['message'] = 'Registration failed!';
      header("location: error.php");
    }
 }
