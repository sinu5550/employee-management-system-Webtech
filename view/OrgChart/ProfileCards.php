<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profiles</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="InteractiveChart.php">Org Chart</a>
      <a href="ProfileCards.php">Profiles</a>
    </nav>

    <header>
      <h1>Employee Profile Cards</h1>
    </header>

    <section class="org-chart">
      <div class="profile-card">
        <img src="alice.jpg" alt="Alice Johnson">
        <h4>Alice Johnson</h4>
        <p>CEO</p>
      </div>
      <div class="profile-card">
        <img src="bob.jpg" alt="Bob Smith">
        <h4>Bob Smith</h4>
        <p>CTO</p>
      </div>
      <div class="profile-card">
        <img src="carol.jpg" alt="Carol White">
        <h4>Carol White</h4>
        <p>CFO</p>
      </div>
    </section>

    <footer>
      &copy; 2025 Company Org Chart
    </footer>
  </body>

  </html>
<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>