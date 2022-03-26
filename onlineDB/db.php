<?php

$dbHost = 'localhost';
$dbUsername = 'expressg_falcon';
$dbPassword = '&8ck$f3!;[-]';
$dbName = 'expressg_falcon';

// Create connection for online database
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName);
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query('SET CHARACTER SET utf8');
?>
