<?php

session_start();




require_once("../model/userModel.php");

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email === "" || $password === "") {
        echo "Null email/password!";
    } else {
        $user = ['email' => $email, 'password' => $password];
        $status = login($user);
        if ($status) {
            setcookie('status', 'true', time() + 3000, '/');
            header('location: ../view/CompanyAnnouncements/NewsFeed.php');
            exit();
        } else {
            echo "Invalid email or password!";
        }
    }
} else {
    echo "Invalid request! Please submit the form!";
}
