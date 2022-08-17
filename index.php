<?php 

ini_set('display_errors','On'); // permet d'afficher les vrai erreurs

$lien = $_SERVER['REQUEST_URI']; // recupere le lien demandé dans le navigateur

$fichier = __DIR__ . '/views/' . $lien . '.html'; // chemin du fichier

if(file_exists($fichier)){
    require $fichier;
} else {
    echo 'Cette page est introuvable';
}

?>