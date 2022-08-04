<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "funswipe";

$conn = mysqli_connect($servername, $username, $password ,$database);

if (!$conn){
    echo "Connection was not successful<br>";
}
?>