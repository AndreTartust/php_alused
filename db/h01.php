<?php
require_once 'config.php';
require_once 'db_fnc.php';

$ikt = connection('localhost', 'laukandr_php', '123Olenlahe', 'laukandr_php');
$slq = 'SELECT * FROM laukandr_php.koolid2015';
$result = getData($slq, $ikt);

echo '<pre>';
print_r($result);