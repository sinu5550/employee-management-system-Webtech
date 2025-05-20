<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adaptive Layout</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
    <div class="nav-links" id="navLinks">
      <a href="#">Home</a>
      <a href="#">Services</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>
  </nav>

  <header>
    <h1>Welcome to Employee Management System</h1>
  </header>

  <section>
    <p>This layout adapts based on the screen size. Resize your browser to test responsiveness.</p>
  </section>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>

  <script>
    function toggleMenu() {
      document.getElementById('navLinks').classList.toggle('active');
    }
  </script>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>