<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Timesheet</title>
    <link rel="stylesheet" href="style.css">
    <script>
      function clockInOut(status) {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(pos => {
            alert(`${status} at Lat: ${pos.coords.latitude}, Lon: ${pos.coords.longitude}`);
          });
        } else {
          alert("Geolocation is not supported by this browser.");
        }
      }

      function checkOvertime(input) {
        if (parseFloat(input.value) > 8) {
          alert("Overtime alert! More than 8 hours recorded.");
        }
      }
    </script>
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="WeeklyTimesheet.php">Timesheet</a>
      <a href="ApprovalQueue.php">Approvals</a>
    </nav>

    <header>
      <h1>Weekly Timesheet</h1>
      <button onclick="clockInOut('Clocked In')">Clock In</button>
      <button onclick="clockInOut('Clocked Out')">Clock Out</button>
    </header>

    <section>
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Hours</th>
            <th>Project Code</th>
            <th>Task</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mon</td>
            <td><input type="text" onblur="checkOvertime(this)" /></td>
            <td><input type="text" placeholder="e.g., PRJ001" /></td>
            <td><input type="text" placeholder="Development" /></td>
          </tr>
          <!-- Repeat rows for Tue-Fri -->
        </tbody>
      </table>
    </section>

    <footer>&copy; 2025 Company Timesheet System</footer>
  </body>

  </html>
<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>