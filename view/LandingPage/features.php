<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Features</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="mainLanding.php">Home</a>
    <a href="features.php">Features</a>
    <a href="testimonials.php">Testimonials</a>
    <a href="mainLanding.php#about">About</a>
    <a href="mainLanding.php#signup">Signup</a>
  </nav>

  <section>
    <h2>Key Features</h2>
    <p>Track attendance, manage performance, handle payroll, and much more.</p>
    <a href="mainLanding.php#signup" class="cta-button">Start Now</a>
  </section>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>