<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("includes/links.html"); ?>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
  </head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['login'])) { //gebruiker logt in
    require 'php/login.php';
  }
  elseif (isset($_POST['register'])) { //gebruiker registreren
    require 'registration/register.php';
  }
}
 ?>

  <body>
    <?php include("php/header.php"); ?>
    <?php include('includes/content.html') ?>
    <div id="overlay">
      <div class="form">

        <div class="exit" onclick="off()">
          <button name="button" onclick="off()">X</button>
        </div>

          <ul class="tab-group">
            <li class="tab"><a href="#signup">Sign Up</a></li>
            <li class="tab active"><a href="#login">Log In</a></li>
          </ul>

          <div class="tab-content">


             <div id="login">
              <h1>Welcome Back!</h1>

              <form action="index.php" method="post" autocomplete="off">

                <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" name="email"/>
              </div>

              <div class="field-wrap">
                <label>
                  Password<span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" name="password"/>
              </div>

              <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

              <button class="button button-block" name="login" />Log In</button>

              </form>

            </div>

            <div id="signup">
              <h1>Sign Up for Free</h1>

              <form action="index.php" method="post" autocomplete="off">

              <div class="top-row">
                <div class="field-wrap">
                  <label>
                    First Name<span class="req">*</span>
                  </label>
                  <input type="text" required autocomplete="off" name='firstname' />
                </div>

                <div class="field-wrap">
                  <label>
                    Last Name<span class="req">*</span>
                  </label>
                  <input type="text"required autocomplete="off" name='lastname' />
                </div>
              </div>

              <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="email"required autocomplete="off" name='email' />
              </div>

              <div class="field-wrap">
                <label>
                  Set A Password<span class="req">*</span>
                </label>
                <input type="password"required autocomplete="off" name='password'/>
              </div>

              <button type="submit" class="button button-block" name="register" />Register</button>

              </form>

            </div>

          </div>
        </div>
    </div>

    <h2 class="text-center pt-4">Welkom</h2>
    <section class="p-5 mr-2">
      <div class="contentbox">
        <div class="textbox-main col12">
          <em>Welkom op de portfolio site voor het eindexamen Applicatie -en  Media ontwikkeling anno 2018.</em><br />
          <em>Deze website zal dienen als het geldend eindexamen opdracht voor de opleiding van Applicatie -en Media ontwikkeling voor niveau 4, Deltion Zwolle.</em><br />
          <em>Dit project word uitgevoerd door <strong>Angelo van 't Riet</strong> en <strong>Bas Geijtenbeek</strong> op locatie bij Online Marketing bureau / Stagebedrijf, iClicks. </em>
        </div>
        &nbsp;
        <p>Dit project is een vervanging voor het Applicatie & Mediaontwikkeling examen voor Kerntaak 2 en 3 en zal worden uitgevoerd onder de leiding van <strong>dhr. Nasco Lam</strong>, overigens ook werkzaam als stage opleider / ontwikkelaar binnen iClicks.</p>
        <p>Voor het examen opdracht gaan wij een Registratie / Login systeem met SQL koppeling creëren waarin gebruikers kunnen worden aangemaakt, hun daarna kunnen inloggen en vervolgens nieuwe rechten zullen krijgen. Bijvoorbeeld voor pagina’s die voor niet-ingelogde gebruikers geblokkeerd zal zijn.
          Wij zullen binnen dit project gebruik maken van de volgende programmeer talen en systemen:
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Javascript</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>PHPmyAdmin</li>
          </ul>
        </p>
        <p>Wij zullen stapsgewijs documentatie uitschrijven van wat er exact word uitgevoerd, waarvoor het word uitgevoerd en wat de geschreven code betekend.<br />
          Een belangrijk deel van code ontwikkelen zijn back-up ’s, hier zal nadruk op gelegd worden door voor elke nieuwe ontwikkeling een kopie te maken van de bestaande code en database.
          Overigens gaan wij ook gebruik maken van een Trello board om zo taken toe te wijzen en bij te houden.
        </p>
        <p>Alle bronnen, links en referenties worden opgeslagen in een document dat hier op de website te zien zal zijn d.m.v deze link: <a href="#">Bronnen</a></p>
      </div>
    </section>


    <?php include('includes/footer.html') ?>
    <!--<div class="content">
      notification message
      <?php // if (isset($_SESSION['success'])) : ?>
        <div class="error success">
          <h3>
            <?php /*
              echo $_SESSION['success'];
              unset($_SESSION['success']);
             */?>
          </h3>
        </div>
      <?php // endif ?>
    </div>-->

  </body>
</html>
