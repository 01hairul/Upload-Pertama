<?php

$dbhost = "localhost";
$dbuser = "root";
$dbname = "dbhairul";
$dbpass = "";
$koneksi = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . "", $dbuser, $dbpass);

$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);