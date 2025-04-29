<?php
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$atIndex = strpos($email, "@");
$dotIndex = strpos($email, ".");

if ($email == "" || $password == "") {
    echo "<p style='color:red; font-size:24px;'>Null data found!</p>";
} else if ($atIndex < 1 || $dotIndex < $atIndex + 2 || $dotIndex + 2 >= strlen($email)) {
    echo "<p style='color:red; font-size:24px;'>Enter a valid email address (e.g., anything@example.com).</p>";

} else if (strlen($password) < 8) {
    echo "<p style='color:red; font-size:24px;'>Password must be at least 8 characters long.</p>";
} else {
    echo "<p style='color:green; font-size:24px;'>The user is Valid.</p>";
}


?>