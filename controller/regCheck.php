<?php

require_once("../model/userModel.php");

if (
    isset($_POST['name']) && isset($_POST['email']) &&
    isset($_POST['confirmPassword']) && isset($_POST['password'])
) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    $atIndex = strpos($email, "@");
    $dotIndex = strpos($email, ".");
    if ($email == "" || $password == "" || $confirmPassword == "" || $name == "") {
        echo "<p style='color:red; font-size:24px;'>Input field can not be Empty!</p>";
    } else if ($atIndex < 1 || $dotIndex < $atIndex + 2 || $dotIndex + 2 >= strlen($email)) {
        echo "<p style='color:red; font-size:24px;'>Enter a valid email address (e.g., anything@example.com).</p>";
    } else if (strlen($password) < 8) {
        echo "<p style='color:red; font-size:24px;'>Password must be at least 8 characters long.</p>";
    } else if ($password != $confirmPassword) {
        echo "<p style='color:red; font-size:24px;'>Password doesn't match.</p>";
    } else {
        $user = ['name' => $name, 'email' => $email, 'password' => $password];
        $status = addUser($user);
        if ($status) {

            header("Location: ../view/UserAuthentication/login.php");
        } else {
            header("Location: ../view/UserAuthentication/reg-form.php");
        }
    }
} else {
    echo "Invalid request! Please submit form!";
}
