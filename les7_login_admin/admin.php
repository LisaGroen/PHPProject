<?php

$bericht = "Inloggen";


$admin = array(
    "lisa" => "bryan",
    "bryan" => "lisa",
);

if (isset($_POST['knop'])) {
    function inLoggenGebruiker()
    {
        $loginGebruiker = false;

        $gebruiker = array(
            "mick" => "hallo",
            "corne" => "oy",
            "thom" => "hoi",
        );

        if (isset($_POST['knop'])
            && isset($gebruiker[$_POST["naam"]])
            && $gebruiker[$_POST["naam"]] == $_POST['ww'])
        {
            $loginGebruiker = true;
        } elseif (isset($_POST['knop'])) {
            $loginGebruiker = false;
        }
        return $loginGebruiker;
    }
}

if (inLoggenGebruiker() == true) {
    $bericht = "Welkom!";
} else {
    $bericht = "Sorry, geen toegang";
}

?>

<html>
<body>
<h1><?php echo $bericht; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="naam">Naam:</label>
        <input type="text" name="email" value="" title="">
    </div>
    <div class="form-group">
        <label for="ww">Wachtwoord:</label>
        <input type="password" name="ww" value="" title="">
    </div>
    <input type="submit" name="knop">
</form>
</body>
</html>
