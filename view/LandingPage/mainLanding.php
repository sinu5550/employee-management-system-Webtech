<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Landing</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="mainLanding.php">Home</a>
      <a href="features.php">Features</a>
      <a href="testimonials.php">Testimonials</a>
      <a href="#about">About</a>
      <a href="#signup">Signup</a>
    </nav>

    <header>
      <h1>Welcome to the Employee Management System</h1>
      <p>Manage your workforce efficiently and effectively.</p>
      <a href="#signup" class="cta-button">Get Started</a>
    </header>

    <section id="about">
      <h2>About Us</h2>
      <p>We provide modern solutions to simplify HR and workforce management.</p>
    </section>

    <section id="signup">
      <h2>Signup</h2>
      <p>Create your account to get started today!</p>
      <a href="#" class="cta-button">Create Account</a>
    </section>

    <footer>
      &copy; 2025 Employee Management System. All rights reserved.
    </footer>
  </body>

  </html>
<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>