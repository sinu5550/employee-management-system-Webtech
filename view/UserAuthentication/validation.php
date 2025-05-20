<?php

session_start();






    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $atIndex = strpos($email, "@");
        $dotIndex = strpos($email, ".");
        if ($email == "" || $password == "" ) {
            echo "<p style='color:red; font-size:24px;'>Input field can not be Empty!</p>";
        } else if ($atIndex < 1 || $dotIndex < $atIndex + 2 || $dotIndex + 2 >= strlen($email)) {
            echo "<p style='color:red; font-size:24px;'>Enter a valid email address (e.g., anything@example.com).</p>";
        
        } else if (strlen($password) < 8) {
            echo "<p style='color:red; font-size:24px;'>Password must be at least 8 characters long.</p>";
        } else {
            setcookie('status', 'true', time()+3000, '/');
                    header('location: ../../controller/AdminPanel/userManagement.php');
        }
        
    }else{
        echo "Invalid request! Please submit form!";
    }




?>