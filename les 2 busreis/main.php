<?php
$leeftijd = 12;


if ($leeftijd >= 65) {
    echo "Je moet 5 euro betalen";
}
else if ($leeftijd <= 12 && $leeftijd > 3) {
    echo "Je moet 5 euro betalen";
}
else if ($leeftijd <= 3) {
    echo "Je hoeft niks te betalen";
}
else {
    echo "Je moet 10 euro betalen";
}