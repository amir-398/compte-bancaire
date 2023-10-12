<?php
require("src/compteBancaire.php"); 
$name = "Dupont";
$solde = 1000;

$compte1 = new CompteBancaire("Duchmol", 800);
$compte2 = new CompteBancaire($name, $solde);
$compte1->depot(350);
$compte1->retrait(200);
$compte2->depot(25);
$compte1->affiche();
echo "<br/>";
$compte2->affiche();
?>