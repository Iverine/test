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
 
 private $vorname, $name, $strasse, $ort, $telefon, $email;

 public function adresse($name,$vorname, $handy) {
      $this->vorname = $vorname;
      $this->name = $name;
      $this->strasse = $strasse;
      $this->ort = $ort;
      $this->telefon = $telefon;
      $this->email = $email;
	echo "test";
 }
 private function db_setAdress(){
  $anix_query = "INSERT INTO adressliste (vorname, nachname, strasse, ort, telefon, email) VALUES ('$vorname', '$nachname', '$strasse', '$ort', '$telefon', '$email')";
  $anix_result = mysqli_query($db, $aniox_query);
 }
}


$neuerKunde1 = new adresse($vorname, $nachname, $strasse, $ort, $telefon, $email);


?>
