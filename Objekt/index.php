<?php
include 'klassbibliotek.php';

/*
steg 1 med objekt
$marcus = new person();
 $marcus->setNamn("Marcus Weiderstål");
 echo "Marcus heter " . $marcus->namn;
*/

//Steg 2 med konstruktor
$marcus = new person("Marcus Weiderstål");
echo $marcus->namn;

 ?>
