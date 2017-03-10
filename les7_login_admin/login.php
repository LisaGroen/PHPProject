<?php

include("login.html");

if (strlen($_GET["email"]) == 0 || strlen($_GET["wachtwoord"]) == 0) {

    echo "<br>";
    echo "Je moet eerst het formelier invullen";
}