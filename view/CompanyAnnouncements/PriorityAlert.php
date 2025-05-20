<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Priority Alerts</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="NewsFeed.php">News Feed</a>
    <a href="PriorityAlert.php">Priority Alerts</a>
  </nav>

  <header>
    <h1>Priority Alerts</h1>
  </header>

  <section class="alert">
    <strong>Security Breach Notice:</strong> Please reset your passwords immediately. 
    <div class="read-ack">
      <label><input type="checkbox" onchange="acknowledge(this)"> I acknowledge reading this alert.</label>
    </div>
  </section>

  <section class="alert">
    <strong>Fire Drill Scheduled:</strong> Fire drill will occur tomorrow at 3 PM. Participation is mandatory.
    <div class="read-ack">
      <label><input type="checkbox" onchange="acknowledge(this)"> I acknowledge reading this alert.</label>
    </div>
  </section>

  <footer>
    &copy; 2025 Company Name. All rights reserved.
  </footer>

  <script>
    function acknowledge(box) {
      if (box.checked) {
        alert("Acknowledgment recorded. Thank you.");
      }
    }
  </script>
</body>
</html>

<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>