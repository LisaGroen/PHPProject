<?php
session_start();

$users = array(
    "bryan" => array("ww" => "7410", "rol" => "Admin"),
    "thom" => array("ww" => "8520", "rol" => "Gebruiker"),
    "lisa" => array("ww" => "9630", "rol" => "Admin")
);

if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if(isset($_POST['knop'])
      && isset($users[$_POST["login"]])
      && $users[$_POST["login"]]["ww"] == $_POST['ww']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                              "ww" => $users[$_POST["login"]]['ww'],
                              "rol" => $users[$_POST["login"]]['rol']);
    $bericht = "Welkom ".$_SESSION["user"]["naam"]." met de rol "
                        .$_SESSION["user"]["rol"];
} else {
    $bericht = "Inloggen";
}

?>

<html>
<body>
<h1><?php echo $bericht; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="ww">Wachtwoord:</label>
        <input type="password" name="ww" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="website.php">Website</a></p>
<p><a href="adminwebsite.php">Admingedeelte</a></p>
<p><a href="admin.php?loguit">Uitloggen</a></p>
</body>
</html>
