<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Menu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
    <div class="nav-links" id="mobileNavLinks">
      <a href="#">Dashboard</a>
      <a href="#">Employees</a>
      <a href="#">Reports</a>
      <a href="#">Logout</a>
    </div>
  </nav>

  <header>
    <h1>Responsive Mobile Menu</h1>
  </header>

  <section>
    <p>Tap the hamburger icon on smaller screens to toggle the navigation menu.</p>
  </section>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>

  <script>
    function toggleMenu() {
      document.getElementById('mobileNavLinks').classList.toggle('active');
    }
  </script>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>