?<?php
/*oefening 1
$klas = array ("Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck");
var_dump($klas);
*/

/*oefening 2
$klas = array ("Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck");

for ($i=0; $i < 4; $i++) {
  echo ($klas)[$i],PHP_EOL
;}
*/

/*oefening 3
$klas = array ("Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck");
foreach ($klas as $i) {
  echo $i, PHP_EOL;}
*/

//oefening combinatie
$Bucket_list = array();
$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan je bucket list? ");

for ($i=0; $i < $hoeveelheid_activiteiten ; $i++) {
  $activiteit = readline("Welke activiteiten wil je toevoegen? ");
}

var_dump($Bucket_list);

foreach ($Bucket_list as $x) {
  echo $x, PHP_EOL
  ;}
?>
