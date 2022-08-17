<?php

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$operator = $_POST['operator'];

if($operator == 'addition') {
    echo $nombre1 + $nombre2;
}

if($operator == 'soustraction') {
    echo $nombre1 - $nombre2;
}

if($operator == 'mutliplication') {
    echo $nombre1 * $nombre2;
}

if($operator == 'division') {
    echo $nombre1 / $nombre2;
}
?>