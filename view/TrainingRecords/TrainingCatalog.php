<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Catalog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="TrainingCatalog.php">Catalog</a>
    <a href="Transcripts.php">Transcripts</a>
    <a href="CertificationsTracker.php">Certifications</a>
  </nav>

  <header>
    <h1>Training Catalog</h1>
  </header>

  <section class="catalog-item">
    <h3>Effective Communication</h3>
    <p>Duration: 3 hours</p>
    <button onclick="alert('Registered for Effective Communication!')">Register</button>
  </section>

  <section class="catalog-item">
    <h3>Advanced Excel</h3>
    <p>Duration: 5 hours</p>
    <button onclick="alert('Registered for Advanced Excel!')">Register</button>
  </section>

  <footer>&copy; 2025 Company Name</footer>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>