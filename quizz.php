<?php

$animal = $_POST['animal'];
$voiture = $_POST['voiture'];
$logo = $_POST['logo'];
$note = 0;

if($animal == 'chat') {
    $note = $note + 1;
}

if($voiture == 'rouge') {
    $note = $note + 1;
}

if($logo == 'youtube') {
    $note = $note + 1;
}

echo $note . '/3';