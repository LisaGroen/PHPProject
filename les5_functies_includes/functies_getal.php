<?php

function checkgetal() {
    $i = 5;

    if ($i % 3 == 0) {
        $check = true;
    } else {
        $check = false;
    }
    return $check;
}

if (checkgetal()) {
    echo "getal is deelbaar door 3";
} else {
    echo "getal is niet deelbaar door 3";
}