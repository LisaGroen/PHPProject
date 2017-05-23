<?php
    session_start();

    if(isset($_SESSION["user"])) {
        echo "<h1>Welkom ".$_SESSION["user"]["naam"]." op de website</h1>";
        echo "<p><a href='admin.php'>login</a></p>";
    } else {
        header('location: admin.php');
        //terug naar inlogscherm
}