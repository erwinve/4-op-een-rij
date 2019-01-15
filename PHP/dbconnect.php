<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "4opeenrij";



$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link) {
    die("Could not connect: " . mysqli_error());
}
?>