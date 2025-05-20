<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Bar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="searchBar.php">Search</a>
    <a href="filterPanel.php">Filters</a>
    <a href="resultList.php">Results</a>
  </nav>

  <header>
    <h1>Search Employees</h1>
  </header>

  <section>
    <input type="text" id="searchInput" placeholder="Search by name or department..." oninput="searchItems()">
    <div id="resultsContainer"></div>
  </section>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>

  <script>
    const data = ["Alice - HR", "Bob - Finance", "Charlie - IT", "Diana - Marketing"];
    const resultsContainer = document.getElementById("resultsContainer");

    function searchItems() {
      const query = document.getElementById("searchInput").value.toLowerCase();
      resultsContainer.innerHTML = "";
      data.filter(item => item.toLowerCase().includes(query)).forEach(item => {
        const div = document.createElement("div");
        div.className = "result-item";
        div.textContent = item;
        resultsContainer.appendChild(div);
      });
    }
  </script>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>