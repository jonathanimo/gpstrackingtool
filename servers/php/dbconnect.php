<?php

$dbuser = 'floattracking';
$dbpass = 'floatTrack';
$params = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$pdo = new PDO('mysql:host=localhost;dbname=gpstracker;charset=utf8;port=3306', $dbuser, $dbpass, $params);

?>