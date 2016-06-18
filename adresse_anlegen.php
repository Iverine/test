<?php

// Verbindung zur Datenbank aufbauen
include "db.inc.php";

// Daten aus der Eingabemaske holen
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$strasse = $_POST["strasse"];
$ort = $_POST["ort"];
$telefon = $_POST["telefon"];
$email = $_POST["email"];



class adresse {
 
 private $vorname, $nachname, $strasse, $ort, $telefon, $email;

 public function adresse($vorname, $nachname, $strasse, $ort, $telefon, $email) {
      $this->vorname = $vorname;
      $this->nachname = $nachname;
      $this->strasse = $strasse;
      $this->ort = $ort;
      $this->telefon = $telefon;
      $this->email = $email;

      $ergebnis = db_setAdress($vorname, $nachname, $strasse, $ort, $telefon, $email);
      echo $ergebnis;
 }
 private function db_setAdress($vorname, $nachname, $strasse, $ort, $telefon, $email){
 echo "Funktion setAdress";
  $anix_query = "INSERT INTO adressliste (vorname, nachname, strasse, ort, telefon, email) VALUES ('$vorname', '$nachname', '$strasse', '$ort', '$telefon', '$email')";
  $anix_result = mysqli_query($db, $anix_query);
 return;
 }
}


$neuerKunde1 = new adresse($vorname, $nachname, $strasse, $ort, $telefon, $email);


?>
