<?php

    include_once('Programma.php');
    include_once('Liedje.php');

    $ditprogramma = new Programma();
    $ditprogramma->setNaam("Het PHP programma");
    $ditprogramma->setOmschijving("PHP liedjes");

    foreach ($ditprogramma->getProgramma() as $p) {
        echo $p."<br>";
    }

    $ditprogramma->voegLiedjeToe(new Liedje("All Time Low", "Jon Bellion"));
    $ditprogramma->voegLiedjeToe(new Liedje("Something Just Like This", "The Chainsmokers & Coldplay"));
    $ditprogramma->voegLiedjeToe(new Liedje("Symphony", "Clean Bandit"));
    $ditprogramma->voegLiedjeToe(new Liedje("Dead To Me", "Sex Whales & Fraxo"));

    foreach ($ditprogramma->getLiedjes() as $liedje) {
        echo "<br>".$liedje->getTitel()." - ".$liedje->getArtiest();
    }