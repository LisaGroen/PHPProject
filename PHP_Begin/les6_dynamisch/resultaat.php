<?php

include("form.html");

if (strlen($_GET["naam"]) == 0 || strlen($_GET["adres"]) == 0 || strlen($_GET["email"]) == 0 || strlen($_GET["wachtwoord"]) == 0) {

    echo "<br>";
    echo "Je moet eerst het formelier invullen";
}
else {
    echo "<br>";
    echo "Naam: " . $_GET["naam"] . "<br>";
    echo "Adres: " . $_GET["adres"] . "<br>";
    echo "Email: " . $_GET["email"] . "<br>";
}

