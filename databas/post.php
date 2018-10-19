<?php

/*
Alternativ 1:
include med databas connection
*/
include 'conn.php';

/*
//
Alternativ 2
Databas connection direkt i koden
*/

/*
$server = "localhost";
$username = "root";
$password = "";
$database = "tfyra18";

$conn = new mysqli($server, $username, $password, $database);
*/

//Kod som kör om submit-knapp klickas

if (isset($_POST['submit'])){
//vill man så kan man ta post-variabler och lägga i ocibindbyname
$namn = $_POST['namn'];
$mailadress = $_POST['mail'];

//gör en sträng med SQL-koden + php variablerna.
$sql = "INSERT INTO larare (namn, mailadress) VALUES ('" . $namn . "','". $mailadress ."')";


//kod för att testa att $sql verkligen innehåller rätt värden
//echo $sql;


//kör metoden query med $conn som innehåller våra databasuppfiter på $sql
$conn->query($sql) === TRUE

/*
Medans du bygger och testar SQL-queryn kan du lägga den i en if-sats för att få fram vad för fel du gör
if ($conn->query($sql) === TRUE) {
    echo "datan skickades in";
} else {
    echo "Du fick error: " . $sql . "<br>" . $conn->error;
}

*/
}
 ?>


 <form action="post.php" method="post">
  Lärarens namn:<br>
  <input name="namn" type="text"><br>
  Lärarens mailadress: <br>
  <input name="mail" type="text">
<input name="submit" type="submit" value="Submit">
</form>
