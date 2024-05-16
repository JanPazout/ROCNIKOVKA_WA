<?php

$servername = "localhost";
$username = "uzivatel.jmeno";
$password = "heslo";
$database = "jmeno_databaze";




$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    ?>
