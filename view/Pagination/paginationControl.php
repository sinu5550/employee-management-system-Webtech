<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagination Controls</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="paginationControl.php">Pagination</a>
    <a href="ItemsPerPageSelector.php">Items/Page</a>
  </nav>

  <header>
    <h1>Employee Pagination</h1>
  </header>

  <section id="paginatedResults"></section>

  <div class="pagination" id="paginationControls"></div>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>

  <script>
    const employees = Array.from({ length: 53 }, (_, i) => `Employee ${i + 1}`);
    let currentPage = 1;
    let itemsPerPage = 10;

    function renderPage(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const currentItems = employees.slice(start, end);

      const container = document.getElementById("paginatedResults");
      container.innerHTML = currentItems.map(item => `<div class='result-item'>${item}</div>`).join("");

      const totalPages = Math.ceil(employees.length / itemsPerPage);
      const pagination = document.getElementById("paginationControls");
      pagination.innerHTML = "";

      for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.className = i === page ? "active" : "";
        btn.onclick = () => {
          currentPage = i;
          renderPage(currentPage);
        };
        pagination.appendChild(btn);
      }
    }

    renderPage(currentPage);
  </script>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>