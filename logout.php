<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotelmgmt';
$conn = new mysqli($host, $username, $password, $dbname);

header ('location: index.html');