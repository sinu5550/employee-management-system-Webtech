<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certification Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="TrainingCatalog.php">Catalog</a>
    <a href="Transcripts.php">Transcripts</a>
    <a href="CertificationsTracker.php">Certifications</a>
  </nav>

  <header>
    <h1>Certification Tracker</h1>
  </header>

  <section class="certification-item">
    <h4>Excel Mastery Certification</h4>
    <p>Expires: 2025-09-30</p>
    <p class="alert">Expiry Alert: Renew within 30 days!</p>
  </section>

  <section class="certification-item">
    <h4>Communication Skills Badge</h4>
    <p>Expires: 2026-02-15</p>
  </section>

  <footer>&copy; 2025 Company Name</footer>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>