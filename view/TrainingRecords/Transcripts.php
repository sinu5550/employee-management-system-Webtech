<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transcripts</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="TrainingCatalog.html">Catalog</a>
    <a href="Transcripts.html">Transcripts</a>
    <a href="CertificationsTracker.html">Certifications</a>
  </nav>

  <header>
    <h1>Your Training Transcripts</h1>
  </header>

  <section class="transcript-entry">
    <h4>Effective Communication</h4>
    <p>Status: Completed</p>
    <div class="progress-bar">
      <div class="progress" style="width: 100%">100%</div>
    </div>
  </section>

  <section class="transcript-entry">
    <h4>Advanced Excel</h4>
    <p>Status: In Progress</p>
    <div class="progress-bar">
      <div class="progress" style="width: 50%">50%</div>
    </div>
  </section>

  <footer>&copy; 2025 Company Name</footer>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>