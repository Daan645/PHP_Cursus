<?php

//verbind de files met elkaar
require 'mysqlenphp.php';
// als ik email en wachtwoord intyp

if(isset($_POST['email']) && isset($_POST['wachtwoord'])){

   //variabelen email en wachtwoord zijn gelijk aan wat de gebruiker in het vak typt
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    //kijk naar alles uit de tabel inloggegevens waar de naam gelijk is aan wat de gebruiker in email heeft ingevoerd en bij wachtwoord
    $query = "SELECT * FROM inloggegevens2 WHERE  naam = '$email' AND wachtwoord = '$wachtwoord'";

   // maak de query klaar
    $stmt = $conn->prepare($query) or die('Error1');
  // voer de query uit en als het niet werkt stop de hele code
    $stmt->execute( ) or die ('Error 2');
    // kijk naar de aantal matches
    $rows = $stmt->rowCount();
    echo 'Aantal matches: ' . $rows;
// als er een match is zeg welkom als het anders is ga weg!
    if ($rows == 1){
        echo 'Welkom!';
    } else {
        echo 'Ga weg!';
    }
}



