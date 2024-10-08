<?php

$sname = "localhost";
$uname = "root";
$password = "root";
$db_name = "lgu_pet_system";


$conn = mysqli_connect("$sname","$uname","$password","$db_name");

if (!$conn) {
    die("Connection failed:" .mysql_connection_error());
}

