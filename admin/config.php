<?php
$SERVER = "localhost";
$username = "root";
$password = "";
$database = "dark";
$hostname = "http://localhost/search_engine_by_php";
$con = mysqli_connect($SERVER, $username, $password, $database);
if (!$con) {
    die("connection  to this database failed due to" . mysqli_connect_error());
}