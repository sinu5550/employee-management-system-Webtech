<?php

require_once('userdb.php');

function login($user)
{
    $con = getConnection();
    $sql = "select * from users where email='{$user['email']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }
}

function addUser($user)
{
    $con = getConnection();
    $sql = "insert into users values(null, '{$user['name']}', '{$user['email']}','{$user['password']}')";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllEmployees()
{
    $con = getConnection();
    $sql = "SELECT id, name, email FROM users ORDER BY name ASC";

    $result = mysqli_query($con, $sql);
    $employees = [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }

    return $employees;
}
