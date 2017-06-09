<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MVC L01</title>
</head>
<body>

    <form>
    <label>Naam:<input type="text" name="naam" value=""></label>
    <label>Adres:<input type="text" name="adres" value=""></label>
    <label>Email:<input type="email" name="email" value=""></label>
    <label>Mobiel:<input type="text" name="mobiel" value=""></label>
    <label>Land:<input type="text" name="land" value=""></label>
    <input type="submit" name="knop">
    </form>

</body>
</html>

<?php
    if(isset($_GET['knop'])) {
        echo "Mijn naam is " . $_GET['naam'] . ". Ik woon in " . $_GET['land'] . " op de straat " . $_GET['adres'] . ". Mijn contact gegevens zijn: " . $_GET['email'] . " en " . $_GET['mobiel'];
    }
?>