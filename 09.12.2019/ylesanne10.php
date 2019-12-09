<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="ylesanne10.php">Esileht</a>
<a href="ylesanne10.php?leht=lehekylg2">Lehekülg 2</a>
<a href="ylesanne10.php?leht=lehekylg3">Lehekülg 3</a>
<a href="ylesanne10.php?leht=lehekylg4">Lehekülg 4</a>
<br>
</body>
</html>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    } else {
        echo '<p>Valitud lehte ei eksisteeri!</p>';
    }
} else {
    echo 'Vali lehekülg';
}
?>
