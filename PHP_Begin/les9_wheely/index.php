<?php

    include_once('Autooverzicht.php');
    include_once('Auto.php');

    $ao = new Autooverzicht();
    $ao->voegAutoToe(new Auto("Audi", "1", "102500.00", "img/audi1.jpg"));
    $ao->voegAutoToe(new Auto("Audi", "2", "108250.00", "img/audi1.jpg"));
    $ao->voegAutoToe(new Auto("Ferrari", "1", "99500.00", "img/ferrari1.jpg"));
    $ao->voegAutoToe(new Auto("Ferrari", "2", "122500.00", "img/ferrari2.jpg"));
    $ao->voegAutoToe(new Auto("Ferrari", "3", "152500.00", "img/ferrari3.jpg"));
    $ao->voegAutoToe(new Auto("Fiat", "1", "10500.00", "img/fiat1.jpg"));
    $ao->voegAutoToe(new Auto("Fiat", "2", "11500.00", "img/fiat2.jpg"));
    $ao->voegAutoToe(new Auto("Mercedes", "1", "82500.00", "img/mercedes1.jpg"));
    $ao->voegAutoToe(new Auto("Mercedes", "2", "132700.00", "img/mercedes2.jpg"));
    $ao->voegAutoToe(new Auto("Mercedes", "3", "87500.00", "img/mercedes3.jpg"));
    $ao->voegAutoToe(new Auto("Mercedes", "4", "222650.00", "img/mercedes4.jpg"));
    $ao->voegAutoToe(new Auto("Opel", "1", "13500.00", "img/opel1.jpg"));
    $ao->voegAutoToe(new Auto("Opel", "2", "9500.00", "img/opel2.jpg"));
    $ao->voegAutoToe(new Auto("Opel", "3", "19500.00", "img/opel3.jpg"));
    $ao->voegAutoToe(new Auto("Volkswagen", "1", "16340.00", "img/vw1.jpg"));
    $ao->voegAutoToe(new Auto("Volkswagen", "2", "18340.00", "img/vw2.jpg"));
    $ao->voegAutoToe(new Auto("Volkswagen", "3", "21670.00", "img/vw3.jpg"));




?>

<html>
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <title>PHP Cursus</title>

    <!-- Modifications -->
    <style>
        .wheely {
            background-image: url('img/wheely_header.jpg');
            background-position: center center;
            background-size: cover;
            background-color:black;
            width:100%;
            height:124px;
            margin-bottom: 50px;
        }

        div.wheely-img {
            display:inline-block;
            height:170px;
            width:300px;
            margin:20px;
            border-radius: 10px;
            padding:0;
            text-shadow: 1px 1px 8px #ffffff;
        }

        h5 {
            background-color: rgba(255, 255, 255, 0.6);;
            padding:5px;
        }

    </style>

</head>
<body>
<div class="row">
    <header>
        <div class="container wheely">

        </div>
    </header>
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <form action="/PHP_Begin/les9_wheely/index.php" method="post">
                <div class="form-group">
                    <label for="sel1">Merk:</label>
                    <select class="form-control" id="merk" name="merk">
                        <option value="">--Alle merken--</option>
                        <option value='Audi' >Audi</option>
                        <option value='Ferrari' >Ferrari</option>
                        <option value='Fiat' >Fiat</option>
                        <option value='Mercedes' >Mercedes</option>
                        <option value='Opel' >Opel</option>
                        <option value='Volkswagen' >Volkswagen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Minimale prijs:</label>
                    <input type="text" class="form-control" id="type" name="minprijs" value="">
                </div>
                <div class="form-group">
                    <label for="prijs">Maximale prijs:</label>
                    <input type="text" class="form-control" id="prijs" name="maxprijs" value="">
                </div>
                <button type="submit" name="knop" value="submit" class="btn btn-default">Submit</button>
            </form>
            <div class="row">
                <div class="col-sm-10">

                    <?php
                    foreach ($ao->getAutoLijst() as $auto) { ?>

                    <div class='wheely-img' style='background-image:url("<?php echo $auto->getUrl(); ?>"); background-position:center center; background-size:cover;'>
                        <h5>Merk: <?php echo $auto->getMerk(); ?><br>Prijs : &euro; <?php echo $auto->getPrijs(); ?></h5>
                    </div>

                    <?php } ?>

                </div>
            </div>

        </div><!--column-->
    </div><!-- row-->
    <div class="col-xs-1"></div>
</div>

</body>
</html>
