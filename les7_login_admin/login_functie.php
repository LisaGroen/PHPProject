<?php

$bericht = "Inloggen";

if (isset($_POST['knop'])) {
    function inLoggen()
    {
        $login = false;

        $users = array(
            "piet@worldonline.nl" => "doetje123",
            "klaas@carpets.nl" => "snoepje777",
            "truushendriks@wegweg.nl" => "arkiearkie201",
        );

        if (isset($_POST['knop'])
            && isset($users[$_POST["email"]])
            && $users[$_POST["email"]] == $_POST['ww']
        ) {
            $login = true;
        } elseif (isset($_POST['knop'])) {
            $login = false;
        }
        return $login;
    }

    if (inLoggen() == true) {
        $bericht = "Welkom!";
    } else {
        $bericht = "Sorry, geen toegang";
    }
}
?>

<html>
<body>
<h1><?php echo $bericht; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" value="">
    </div>
    <div class="form-group">
        <label for="ww">Wachtwoord:</label>
        <input type="password" name="ww" value="">
    </div>
    <input type="submit" name="knop">
</form>
</body>
</html>
