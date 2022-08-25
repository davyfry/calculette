<?php

// premiere etape : recuperer l'arme que j'ai selectionné dans php.html
$degat_arme = $_POST['degat_arme'];

// deuxieme etape : definir la vie de naruto
$vie_de_naruto = 100;

$vie_de_naruto = $vie_de_naruto - $degat_arme;

if($vie_de_naruto <= 0)
{
	require "./views/naruto_mort.html";
}
else
{
	echo "NARUTO EST VIVANT ! IL A " . $vie_de_naruto . "% DE VIE. ";
	echo "IL A PERDU " . $degat_arme . "% DE VIE";
}
?>
