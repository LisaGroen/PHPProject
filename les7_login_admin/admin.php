<?php

$bericht = "Inloggen";


if (isset($_POST['knop'])) {

    function inLoggenAdmin()
    {
        $loginAdmin = false;

        $admin = array(
            "lisa" => "bryan",
            "bryan" => "lisa",
        );

        if (isset($_POST['knop'])
            && isset($admin[$_POST["naam"]])
            && $admin[$_POST["naam"]] == $_POST['ww'])
        {
            $loginAdmin = true;
        } elseif (isset($_POST['knop'])) {
            $loginAdmin = false;
        }
        return $loginAdmin;
    }

    function inLoggenGebruiker()
    {
        $loginGebruiker = false;

        $gebruiker = array(
            "mick" => "hoi",
            "corne" => "oy",
            "thom" => "hallo",
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

    if (inLoggenAdmin() == true) {
        $bericht = "Hallo admin";
    }
    elseif (inLoggenGebruiker() == true) {
        $bericht = "Hallo gebruiker";
    }
    else {
        $bericht = "Naam of wachtwoord klopt niet";
    }
}

?>

<html>
<body>
<h1><?php echo $bericht; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" value="" title="">
    </div>
    <div class="form-group">
        <label for="ww">Wachtwoord:</label>
        <input type="password" name="ww" value="" title="">
    </div>
    <input type="submit" name="knop">
</form>
</body>
</html>
