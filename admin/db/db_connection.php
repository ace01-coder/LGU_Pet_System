<?php

$sname = "localhost";
$uname = "root";
$password = "root";
$db_name = "lgu_pet_system";


$conn = mysqli_connect("$sname","$uname","$password","$db_name");

if (!$conn) {
    echo"Connection field";
}


function login($uname,$pass){
    global $conn;
    $query = "SELECT  * FROM ACCOUNT_MGT WHERE acc_uname = '$uname' AND  acc_pass = '$pass'";
}