<?php

$berichten = array();
include("beasties.html");

if(isset($_GET['kat'])) {
    $berichten[] = "<img src='kat.jpg'>";
}
if(isset($_GET['hond'])) {
    $berichten[] = "<img src='hond.jpg'>";
}
if(isset($_GET['muis'])) {
    $berichten[] = "<img src='muis.jpg'>";
}
if(isset($_GET['konijn'])) {
    $berichten[] = "<img src='konijn.jpg'>";
}

if (!count($berichten) == 0) {
    foreach ($berichten as $bericht) {
        echo $bericht;
    }
}
