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
    <p class="custommargin custompadding">In dit document kun je al de documentatie vinden die hoort bij de casus van het examen. Dit gaat om een inschrijfformulier met achterliggende database. Doormiddel van SQL en PHP is er een dynamische verbinding tussen dit formulier en database. We zullen alle templates langs gaan in dit document en de code verantwoorden die in de templates te vinden zijn.</p>
    <section class="custompadding custommargin">


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
    <h2>Index.php</h2>
    <p>De index.php is onze homepagina. Hier vind je alle informatie en documenten terug m.b.t. het examen.<br />
      Het hoofdmenu bestaat uit HTML, CSS en Javascript. </p>
    <div class="col12">
      <img src="../examen2018/img/image001.png" style="margin: 0 auto; display: block;" alt="">
    </div>
    <div class="col12">
      <img src="../examen2018/img/image002.png" style="margin: 0 auto; display: block;" alt="">
    </div><br />
    <p>

      De 4 pagina’s die te vinden zijn, zijn de homepagina, de documentatie pagina, bronnen pagina en een link naar ons login systeem wat doormiddel van een pop-up verschijnt.
      De effecten worden uit verschillende javascript bestanden gehaald die weer in de footer worden ingeladen.
      Dit gaat om:
      Index.js
      Overlay.js

      Verder vind je op deze pagina een intro tekst en verder niks spannends.

    </p><br />

    <h2>Account_data.php</h2>
    <p>

      Dit bestand haalt de gegevens op als je ingelogd ben in het registratie formulier. Dit kun je zien door middel van de functie $_SESSION.
      Door het gebruiken van session maak je bepaalde informatie alleen zichtbaar als de gebruiker ingelogd is op de website en geef je eventueel toestemming om bepaalde handelingen te mogen doen.
      In ons geval kun je dan je eigen account in zien. Je kunt deze informatie niet inzien als je geen account hebt gemaakt. Met $_SESSION geef je dus aan dat deze informatie zichtbaar word / mag worden als je bent ingelogd.

    </p>
    <div class="col12">
      <img src="../examen2018/img/image004.png" style="margin: 0 auto; display: block;" alt="">
    </div>

<div class="col6">
  <h2>Error.php</h2>
  <p>

    Dit bestand geeft eigenlijk al in de titel aan wat het doet. Dit is wat naar voren komt als je inlogt met bijvoorbeeld verkeerde inloggegevens. Je krijgt een foutmelding als ongeldige inloggegevens gebruikt worden.
    Doormiddel van isset kijkt het bestand of deze velden niet leeggelaten zijn. Ook dan krijg je een foutmelding namelijk. Deze velden moeten altijd ingevuld zijn.

  </p>
</div>

    <div class="col6">
      <img src="../examen2018/img/image006.png" style="margin: 0 auto; display: block;" alt="">
    </div>

    <h2>Forgot.php</h2>
    <p>
      Dit bestand bestaat eigenlijk uit 2 delen. Ik begin met het gedeelte van de code om je wachtwoord te resetten. Bovenaan het bestand gebruiker we een require. Deze hebben we nodig omdat we bij de database moeten zijn. Door middel van een SQL statement:
      <br />
      <img src="../examen2018/img/image008.png" alt=""/><br />
    </p>
    <p>
      Hier word gekeken of je e-mail adres wel bestaat in de database.<br />
      Anders krijg je de melding:<br />
      Gebruiker met deze mail bestaat niet!<br />
      En ga je terug naar de error pagina.<br />
      Als deze wel bestaat word er een array gemaakt met gebruikersdata: email, hash en eerste naam. Het e-mailadres wat hier staat daar word de link naar verstuurd.<br />
      Vervolgens word er een sessie gestart en krijg je de melding: Bekijk je e-mail voor de link om je wachtwoord re resetten.<br />
      Vervolgend word deze mail verstuurt naar je e-mailadres met de link daarin om je wachtwoord te resetten.<br />
      Verder is dit bestand gekoppeld aan de reset.php, hier kom ik nog op terug.
      <img src="../examen2018/img/image009.png" style="margin: 0 auto; display: block;" alt=""/><br />
    </p>

    <h2>Login.php</h2>
    <p>

      Dit is de code om in te loggen in ons systeem. Hier word gekeken of je gebruikers naam en wachtwoord bestaan en of deze wel matchen aan elkaar. <br />
      De code begint met een escape, dit hebben we zo gedaan om SQL injecties te voorkomen. <br />
      Verder worden de resultaten opgehaald vanuit het statement:
    </p>
    <img src="../examen2018/img/image011.png" alt=""/><br />
    <p>

      Als hier geen resultaten uitkomen betekent dat de gebruiker niet in de database zit en dus ook niet bestaat. <br />
      Als de gebruiker wel bestaat verifieerd hij de post en zet hij de gebruiker op active. <br />
      Dit gebeurt door middel van: <img src="../examen2018/img/image012.png" style="inline-block" alt=""/><br />
      Als het wachtwoord niet klopt krijg je de error.php voor je met een melding.
      Dit gebeurt allemaal doormiddel 2 if else statement.

    </p>
    <p><img src="../examen2018/img/image013.png" style="margin: 0 auto; display: block;" alt=""/><br /></p>

    <h2>Logout.php</h2>
    <p>

      Hier gebeurt niet heel veel bijzonders gedaan. De sessie word aangemaakt vervolgens onklaar gemaakt en vernietigd. Je bent daarna uitgelogd. Session unset vernietigd een bepaalde sessie en destroy vernietigd ze allemaal. Dit is beetje ter extra veiligheid.

    </p>
    <img src="../examen2018/img/image014.png" style="margin: 0 auto; display: block;" alt=""/><br />

    <h2>Profile.php</h2>
    <p>Deze pagina is alleen zichtbaar als je ingelogd bent en dus een account hebt. Hier kun je de informatie inzien die je hebt gemaakt bij het inloggen.<br />
    Als je niet ingelogd bent en toch op de pagina te komen krijg je de melding dat je eerst moet inloggen op de pagina te komen.<br />
    Als je wel ingelogd bent haalt hij de gegevens op die bij je account horen en word de sessie op actief gezet zodat je de pagina en je gegevens kan inzien.<br />
    Ook word er gecheckt of je account wel geactiveerd is, als dit nog niet gebeurd is zal je eerst nog je account moeten verifiëren om de pagina te bereiken.</p>
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
