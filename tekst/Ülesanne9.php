<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ülesanne 9</title>
</head>
<body>
    <form action="Ülesanne9.php">
        <label>Sisesta oma nimi: </label>
        <input type="text" name="nimi">
    </form>
    <?php
    $nimi = ucfirst(strtolower($_GET["nimi"]));
    if ($nimi) {
        print "Tere, ".$nimi;
    }
    ?>
    <hr>
    <form action="Ülesanne9.php">
        <label>Sisesta sisend:</label>
        <input type="text" name="sisend">
    </form>
    <?php
    $sisend = strtoupper($_GET["sisend"]);
    for($nr=0;$nr<strlen($sisend);$nr++){
        echo $sisend[$nr].'.';
    }
    ?>
    <hr>
    <form action="Ülesanne9.php">
        <label>Sisesta tekst:</label>
        <input type="text" name="tekst">
    </form>
    <?php
    $tekst = $_GET["tekst"];
    $otsi = array('lehm', 'noob');
    $asenda = "****";
    echo str_replace($otsi, $asenda, $tekst);
    ?>
    <hr>
    <form action="Ülesanne9.php">
        <label>Sisesta oma eesnimi</label>
        <input type="text" name="eesnimi">
        <label>Sisesta oma perenimi</label>
        <input type="text" name="perenimi">
        <button type="submit">Saada</button>
    </form>
    <?php
    $eesnimi = $_GET["eesnimi"];
    $perenimi = $_GET["perenimi"];

    if ($eesnimi && $perenimi) {
        $raw_email = $eesnimi.".".$perenimi."@hkhk.edu.ee";

        $otsi = array('ä', 'ö', 'ü', 'õ', 'Ä', 'Ö', 'Ü', 'Õ');
        $asenda = array('a', 'o', 'y', 'o','a', 'o', 'y', 'o');

        print str_replace($otsi, $asenda, $raw_email);
    }
    ?>
</body>
</html>

