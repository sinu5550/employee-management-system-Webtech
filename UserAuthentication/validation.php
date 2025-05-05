<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];


$atIndex = strpos($email, "@");
$dotIndex = strpos($email, ".");

if ($email == "" || $password == "" || $confirmPassword == "" || $name == "") {
    echo "<p style='color:red; font-size:24px;'>Input field can not be Empty!</p>";
} else if ($atIndex < 1 || $dotIndex < $atIndex + 2 || $dotIndex + 2 >= strlen($email)) {
    echo "<p style='color:red; font-size:24px;'>Enter a valid email address (e.g., anything@example.com).</p>";

} else if (strlen($password) < 8) {
    echo "<p style='color:red; font-size:24px;'>Password must be at least 8 characters long.</p>";
} else if ($password !== $confirmPassword) {
    echo "<p style='color:red; font-size:24px;'>Password do not matched.</p>";
} else {
    echo "<p style='color:green; font-size:24px;'>Success.</p>";
}


?>