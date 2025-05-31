<?php

$host = "127.0.0.1";
$dbName = "employee_management_system";
$dbUser = "root";
$dbPass = "";

function getConnection()
{
    global $host, $dbUser, $dbPass, $dbName;
    $con = mysqli_connect($host, $dbUser, $dbPass, $dbName);
    return $con;
}
