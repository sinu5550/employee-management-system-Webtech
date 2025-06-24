<?php
session_start();
if (isset($_COOKIE['status'])) {
    require_once __DIR__ . '/../../model/userModel.php';
    $orgEmployees = getAllEmployees();
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
    <?php foreach ($orgEmployees as $emp): ?>
      <div class="profile-card">
        <img src="">
        <h4><?= htmlspecialchars($emp['name']) ?></h4>
        <p><?= htmlspecialchars($emp['email']) ?></p>
      </div>
    <?php endforeach; ?>
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
