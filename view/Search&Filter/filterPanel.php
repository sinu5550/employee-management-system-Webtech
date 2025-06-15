<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Panel</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="searchBar.php">Search</a>
      <a href="filterPanel.php">Filters</a>
      <a href="resultList.php">Results</a>
    </nav>

    <header>
      <h1>Filter Employees</h1>
    </header>

    <section>
      <label for="departmentSelect">Select Department:</label><br>
      <select id="departmentSelect" onchange="applyFilter()">
        <option value="">All</option>
        <option value="HR">HR</option>
        <option value="Finance">Finance</option>
        <option value="IT">IT</option>
        <option value="Marketing">Marketing</option>
      </select>
      <div id="filterResults"></div>
    </section>

    <footer>
      &copy; 2025 Employee Management System. All rights reserved.
    </footer>

    <script>
      const data = ["Alice - HR", "Bob - Finance", "Charlie - IT", "Diana - Marketing"];
      const filterResults = document.getElementById("filterResults");

      function applyFilter() {
        const selected = document.getElementById("departmentSelect").value;
        filterResults.innerHTML = "";
        data.filter(item => selected === "" || item.includes(selected)).forEach(item => {
          const div = document.createElement("div");
          div.className = "result-item";
          div.textContent = item;
          filterResults.appendChild(div);
        });
      }

      window.onload = applyFilter;
    </script>
  </body>

  </html>
<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>