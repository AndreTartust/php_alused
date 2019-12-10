<?php
require_once 'config.php';
require_once 'db_fnc.php';

$ikt = connection('localhost', 'laukandr_php', '123Olenlahe', 'laukandr_php');
$slq = 'RENAME TABLE `laukandr_php`,`koolid2015` to `laukandr_php`.`koolid`';
$result = query($slq, $ikt);