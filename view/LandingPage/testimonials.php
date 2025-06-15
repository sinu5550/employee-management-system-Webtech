<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="mainLanding.php">Home</a>
      <a href="features.php">Features</a>
      <a href="testimonials.php">Testimonials</a>
      <a href="mainLanding.php#about">About</a>
      <a href="mainLanding.php#signup">Signup</a>
    </nav>

    <section>
      <h2>What Our Users Say</h2>
      <p>"This system made HR work so much easier." – Sarah, HR Manager</p>
      <p>"Reliable and efficient!" – John, Team Leader</p>
      <a href="mainLanding.php#signup" class="cta-button">Join Now</a>
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