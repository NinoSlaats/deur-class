<?php
include "deur.php";

$mijnDeur = new Deur("Voordeur");

// Test of gebruik van de deur (pas aan naar wens om verschillende outputs te testen)
echo $mijnDeur->sleutelGebruiken("links") . "<br>\n";
echo $mijnDeur->deurOpenen() . "<br>\n";
echo $mijnDeur->doorDeurLopen() . "<br>\n";
?>