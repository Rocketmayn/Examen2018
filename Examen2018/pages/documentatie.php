<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    session_start();
    include("../includes/links.html"); ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include("../php/header.php"); ?>
    <?php include('../includes/content.html') ?>
    <h1 class="text-center pt-4">Documentatie</h1>
    <section class="p-5 mr-5">


    <div class="tab2">
  <button class="tablinks active" onclick="openDoc(event, 'Webstructuur')">Webstructuur</button>
  <button class="tablinks" onclick="openDoc(event, 'Styling')">Style</button>
  <button class="tablinks" onclick="openDoc(event, 'Registratie')">Registratie</button>
  <button class="tablinks" onclick="openDoc(event, 'Database')">Database</button>
<!--  <button class="tablinks" onclick="openDoc(event, 'test')">Test</button>-->
</div>

<div id="Webstructuur" class="tabcontent">
  <div class="p-4 mr-5">
  <h2>Web/Directory structuur</h2>

  <p>De structuur van de website is objectief opgebouwd om het bewerken en toevoegen van eigenschappen zo makkelijk mogelijk te kunnen maken.
  De standaard pagina op de site bestaat uit standaard HTML, CSS en is opgebouwd vanuit 4 verschillende bestanden die opgeroepen worden via een <strong>"< ?php include (‘ ’)? >"</strong>.
  Deze bestanden staan in een map genaamd includes, deze map bestaat uit de volgende bestanden:</p>

  <strong>Header.php</strong> <br />
  <img src="../examen2018/img/header.png">
  <p>Hier word het hoofdmenu ingeladen.</p>

  <strong>Content.html</strong> <br />
  <img src="../examen2018/img/contentcode.png">
  <p>Hier word de openingstag van de container en content box ingeladen samen met een linker goot voor eventuele side content.</p>

  <strong>Footer.html</strong> <br />
  <div class="col6">
    <img src="../examen2018/img/footercode.png">
  </div>
  <div class="col6">
  <img src="../examen2018/img/footercode1.png">
  </div>
  <p style="clear: both;">In de footer word de container en content box gesloten.
  De HTML van het registratieformulier is hierin in de rechtergoot ingeladen. <br />
  Het bestand sluit elke pagina af met het inladen van Javascript.
  </p>

  <strong>Links.html</strong> <br />
  <img src="../examen2018/img/links.png">
  <p>Links.html laad alle externe bestanden in die nodig zijn voor style en functionaliteit. </p>
  <p>Er word een <strong>base directory</strong> ingesteld om het voor het ontwikkelteam zo makkelijk mogelijk te maken met het bewerken en updaten van de applicatie.</p>
  <p>Ook word er hier een eigen stylesheet (x2) ingeladen samen met een Bootstrap css template.</p>
  </p>

  <p>De standaard pagina op de website bestaat dus uit deze 4 bestanden.<br />
  Hier is een template van de standaard pagina:
  </p>
  <img src="../examen2018/img/paginatemplatecode.png">
  <p>Hierin worden de 4 bestanden ingeladen en komt er een pagina uitgedraaid waarin er heel gemakkelijk content kan worden geplaatst.</p>

  <img src="../examen2018/img/webtemplate.png" alt="">

  </div>
</div>

<div id="Styling" class="tabcontent">
  <div class="mr-5 p-4">
  <h2>Styling</h2>
  <p>Voor de algehele opbouw van een standaard content pagina word er voor de styling gebruik gemaakt van custom classes met ieder      unieke eigenschappen. <br />
    Één van deze classes zorgen ervoor dat je pagina word opgebouwd uit horizontale kolommen, dit noemen we colspans. </p>
  <div class="codereview">
  <p> .row::after { <br />
          content: "";<br />
          clear: both;<br />
          display: table;<br />
      }<br />
      [class*="col"] {<br />
          float: left;<br />
          padding: 15px;<br />
      }<br />
      .col1 {width: 8.33%;}<br />
      .col2 {width: 16.66%;}<br />
      .col3 {width: 25%;}<br />
      .col4 {width: 33.33%;}<br />
      .col5 {width: 41,66%;}<br />
      .col6 {width: 50%;}<br />
      .col7 {width: 58.33%;}<br />
      .col8 {width: 66.66%;}<br />
      .col9 {width: 75%;}<br />
      .col10 {width: 83.33%;}<br />
      .col11 {width: 91.66%;}<br />
      .col12 {width: 100%;}<br />
      * {<br />
        box-sizing: border-box;<br />
      }
      </p>
    </div>
    <p>Deze zogeheten colspans zorgen ervoor dat content in rijen naast elkaar geplaatst kan worden zonder dat het teveel invloed zal   hebben op de andere rijen. Dit zorgt ervoor dat standaard tekstuele of visuele content erg makkelijk geplaatst kan worden.</p>

  </div>
</div>

<div id="Registratie" class="tabcontent">
  <div class="mr-5 p-4">
    <h2>Registratieformulier</h2>
    <p>Voor het registratieformulier is er gebruik gemaakt van de volgende codetalen / systemen:</p>
    <ul>
      <li>HTML</li>
      <li>Css</li>
      <li>Javascript</li>
      <li>Php</li>
      <li>MySql</li>
      <li>PhpMyAdmin</li>
    </ul>
    <p>Het registratiesysteem bestaat uit 1 js, 1 css en 12 php bestanden.
      Één van deze bestanden is om een verbinding met de database te leggen. De andere bestanden verwerken vooral gegevens die vanuit het formulier worden meegegeven.
    </p>
    <p>Hier is een flowchart van hoe het systeem in elkaar zit:</p>
    <img src="../examen2018/img/flowchart.png" alt="">
  </div>
</div>

<div id="Database" class="tabcontent">
  <div class="p-4 mr-5">
    <h2>Database</h2>
    <p>Voor het registratie formulier word er gebruik gemaakt van MySql om gebruikers gegevens op te slaan voor het in- uitloggen en voor de verificatie van het account.</p>
    <p>De database bestaat uit 1 table met 7 kolommen voor data. Dit is hoe de database is opgebouwd:</p>
    <div class="col6">
      <img src="../examen2018/img/dbkolom.png" alt="">
    </div>
    <div class="col6">
      <ul class="lijst">
        <li><span>id:</span><br />Het unieke id meegegeven aan de gebruiker</li>
        <li><span>first_name:</span><br />Opgegeven voornaam</li>
        <li><span>last_name:</span><br />Opgegeven achternaam</li>
        <li><span>email:</span><br />Opgegeven emailadres</li>
        <li><span>password:</span><br />Opgegeven wachtwoord</li>
        <li><span>hash:</span><br />Een encryptie voor het wachtwoord</li>
        <li><span>active:</span><br />Bepaalt of het account is geverifiëerd (0 = false, 1 = true)</li>
      </ul>
    </div>
    <img src="../examen2018/img/dbrow.png" alt=""><br />
    <p style="clear: both;">
    CREATE DATABASE accounts;<br />

    CREATE TABLE `accounts`.`users`<br />
    (<br />
        `id` INT NOT NULL AUTO_INCREMENT,<br />
        `first_name` VARCHAR(50) NOT NULL,<br />
         `last_name` VARCHAR(50) NOT NULL,<br />
        `email` VARCHAR(100) NOT NULL,<br />
        `password` VARCHAR(100) NOT NULL,<br />
        `hash` VARCHAR(32) NOT NULL,<br />
        `active` BOOL NOT NULL DEFAULT 0,<br />
    PRIMARY KEY (`id`)
  </p>
    );
    <p style="clear: both;">endline</p>
  </div>
</div>

<!--<div id="test" class="tabcontent">
  <div class="p-4 mr-5">
    <h2>Database</h2>
    <p>Voor het registratie formulier word er gebruik gemaakt van MySql om gebruikers gegevens op te slaan voor het in- uitloggen en voor de verificatie van het account.</p>
    <p>De database bestaat uit 1 table met 7 kolommen voor data. Dit is hoe de database is opgebouwd:</p>
    <div class="col6">
      <img src="../examen2018/img/footercode.png">
    </div>
    <div class="col6">
    <img src="../examen2018/img/footercode1.png">
    </div>
    <p>test</p>
  </div>
</div>-->

<script>
function openDoc(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
    </section>
    <?php include('../includes/footer.html') ?>
  </body>
</html>
