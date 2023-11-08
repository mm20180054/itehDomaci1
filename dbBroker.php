<?php

$host = "localhost";
$database = "vinyl";
$username = "root";
$password = "";

$connection = new mysqli($host, $username, $password, $database);

if($connection->connect_errno){
    exit("Konekcija neuspesna: " . $connection->connect_errno);
}
?>