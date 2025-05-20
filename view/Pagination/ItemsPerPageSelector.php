<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Items Per Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="paginationControl.php">Pagination</a>
    <a href="ItemsPerPageSelector.php">Items/Page</a>
  </nav>

  <header>
    <h1>Select Items Per Page</h1>
  </header>

  <section>
    <label for="itemSelector">Items per page:</label>
    <select id="itemSelector" onchange="updateItemsPerPage()">
      <option value="10">10</option>
      <option value="25">25</option>
      <option value="50">50</option>
    </select>
    <div id="itemsDisplay"></div>
    <div class="pagination" id="pageSelector"></div>
  </section>

  <footer>
    &copy; 2025 Employee Management System. All rights reserved.
  </footer>

  <script>
    const allEmployees = Array.from({ length: 53 }, (_, i) => `Employee ${i + 1}`);
    let itemsPerPage = 10;
    let currentPage = 1;

    function updateItemsPerPage() {
      itemsPerPage = parseInt(document.getElementById("itemSelector").value);
      currentPage = 1;
      renderPage(currentPage);
    }

    function renderPage(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const currentItems = allEmployees.slice(start, end);

      const display = document.getElementById("itemsDisplay");
      display.innerHTML = currentItems.map(item => `<div class='result-item'>${item}</div>`).join("");

      const totalPages = Math.ceil(allEmployees.length / itemsPerPage);
      const pageSelector = document.getElementById("pageSelector");
      pageSelector.innerHTML = "";

      for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.className = i === page ? "active" : "";
        btn.onclick = () => {
          currentPage = i;
          renderPage(currentPage);
        };
        pageSelector.appendChild(btn);
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