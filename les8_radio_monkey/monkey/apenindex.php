<?php

    $ao = new AapOverzicht();
    $ao->voegAapToe(new Aap("Baviaan"));
    $ao->voegAapToe(new Aap("Guereza"));
    $ao->voegAapToe(new Aap("Langoer"));
    $ao->voegAapToe(new Aap("Neusaap"));
    $ao->voegAapToe(new Aap("Tamarin"));
    $ao->voegAapToe(new Aap("Brulaap"));
    $ao->voegAapToe(new Aap("Halfaap"));
    $ao->voegAapToe(new Aap("Mandril"));
    $ao->voegAapToe(new Aap("Oeakari"));
    $ao->voegAapToe(new Aap("Faunaap"));
    $ao->voegAapToe(new Aap("Hoelman"));
    $ao->voegAapToe(new Aap("Meerkat"));
    $ao->voegAapToe(new Aap("Oormaki"));
    $ao->voegAapToe(new Aap("Gorilla"));
    $ao->voegAapToe(new Aap("Kuifaap"));
    $ao->voegAapToe(new Aap("Mensaap"));
    $ao->voegAapToe(new Aap("Spinaap"));

?>

<html>
<head>
    <title>Monkey Business</title>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin:auto;
            text-align: center;
            font-family: 'Arial', serif;
            font-weight: bold;
            font-size: 4.5vh;
        }

        .aap {
            font-family: 'Bangers', cursive;
            text-decoration: none;
            color: #ff8400;
            line-height: 6.0vh;
        }

        img {
            margin:auto;
            display:block;
        }

    </style>
</head>
<body>
    <img src="img/monkey-business.jpg">
    <p>select your monkey!</p>
    <img src="img/monkey_swings.png">

    <a class="aap" href="https://www.google.nl/search?q=Baviaan&tbm=isch ">Baviaan</a><br>
</body>