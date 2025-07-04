<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Org Chart</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="InteractiveChart.php">Org Chart</a>
      <a href="ProfileCards.php">Profiles</a>
    </nav>

    <header>
      <h1>Company Organizational Chart</h1>
    </header>

    <button id="printBtn" onclick="window.print()">Print Wall-Sized Version</button>

    <section class="org-chart">
      <div class="profile-card" onclick="showProfile('Alice Johnson', 'CEO', 'alice.jpg')">
        <img src="alice.jpg" alt="Alice Johnson">
        <h4>Alice Johnson</h4>
        <p>CEO</p>
      </div>
      <div class="profile-card" onclick="showProfile('Bob Smith', 'CTO', 'bob.jpg')">
        <img src="bob.jpg" alt="Bob Smith">
        <h4>Bob Smith</h4>
        <p>CTO</p>
      </div>
      <div class="profile-card" onclick="showProfile('Carol White', 'CFO', 'carol.jpg')">
        <img src="carol.jpg" alt="Carol White">
        <h4>Carol White</h4>
        <p>CFO</p>
      </div>
    </section>

    <div id="profileModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 id="modalName"></h2>
        <p id="modalRole"></p>
        <img id="modalImage" src="" alt="" style="width:120px;border-radius:50%;">
      </div>
    </div>

    <footer>
      &copy; 2025 Company Org Chart
    </footer>

    <script>
      function showProfile(name, role, img) {
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalRole').textContent = role;
        document.getElementById('modalImage').src = img;
        document.getElementById('profileModal').style.display = 'block';
      }

      function closeModal() {
        document.getElementById('profileModal').style.display = 'none';
      }
    </script>
  </body>

  </html>
<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>