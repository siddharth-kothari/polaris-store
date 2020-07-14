<?php

$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'Polaris';

$db = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$db) {
    die("Connection failed: ".mysqli_connect_error());
}