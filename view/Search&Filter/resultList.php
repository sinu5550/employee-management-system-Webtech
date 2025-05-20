<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Results List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="searchBar.php">Search</a>
    <a href="filterPanel.php">Filters</a>
    <a href="resultList.php">Results</a>
  </nav>

  <header>
    <h1>Employee Results</h1>
  </header>

  <section>
    <div class="result-item">Alice - HR</div>
    <div class="result-item">Bob - Finance</div>
    <div class="result-item">Charlie - IT</div>
    <div class="result-item">Diana - Marketing</div>
  </section>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>