<?php

// Verbindung zur Datenbank aufbauen
include "db.inc.php";

/* Korrekturvorschlag Sabrina
// Daten aus der Eingabemaske holen
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$strasse = $_POST["strasse"];
$ort = $_POST["ort"];
$telefon = $_POST["telefon"];
$email = $_POST["email"];
*/

// Vorschlag
// Ein neues Adresse Objekt wird angelegt (Solltest du in eine eigenes file auslagern und dann adresse_anlegen.php einbinden)
// Konstruktor wird aufgerufen und bekommt automatisch die Daten
$neuereintrag = new adresse($_POST["vorname"], $_POST["nachname"], $_POST["strasse"], $_POST["ort"], $_POST["telefon"], $_POST["email"]);

class adresse {
 
 private $vorname, $nachname, $strasse, $ort, $telefon, $email;

 public function adresse($vorname, $nachname, $strasse, $ort, $telefon, $email) {
      $this->vorname = $vorname;
      $this->nachname = $nachname;
      $this->strasse = $strasse;
      $this->ort = $ort;
      $this->telefon = $telefon;
      $this->email = $email;
      
      // Du brauchst nicht die Parameter übergeben alle Funktionen in der Klasse können auf die Varialen oben zugreifen
      // Und du Hast die Variablen ja hier in der Funktion gesetzt
      //$ergebnis = db_setAdress($vorname, $nachname, $strasse, $ort, $telefon, $email);
      
      //Also nur:
      db_setAdress();
      //echo $ergebnis;
 }
 private function db_setAdress(){
 echo "Funktion setAdress";
  $anix_query = "INSERT INTO adressliste (vorname, nachname, strasse, ort, telefon, email) VALUES ('$vorname', '$nachname', '$strasse', '$ort', '$telefon', '$email')";
  $anix_result = mysqli_query($db, $anix_query);
 return;
 }
}


$neuerKunde1 = new adresse($vorname, $nachname, $strasse, $ort, $telefon, $email);


?>
