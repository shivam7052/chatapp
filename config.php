<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mychatapp";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    echo "Database connection error" . mysqli_connect_error();
}
