<?php

function graden() {

    $celsius  = 5;
    $fahrenheit = $celsius * 9 / 5 + 32;

    echo "$celsius Celsius = $fahrenheit Fahrenheit";
}

echo "<h3>". "Opdracht functies_graden" ."</h3>";

graden();