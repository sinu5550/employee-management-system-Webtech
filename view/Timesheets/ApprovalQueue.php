<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Approval Queue</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="WeeklyTimesheet.html">Timesheet</a>
    <a href="ApprovalQueue.html">Approvals</a>
  </nav>

  <header>
    <h1>Approval Queue</h1>
  </header>

  <section>
    <table>
      <thead>
        <tr>
          <th>Employee</th>
          <th>Date Range</th>
          <th>Hours</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>May 13 - May 17</td>
          <td>42</td>
          <td>Pending</td>
          <td>
            <button onclick="alert('Approved')">Approve</button>
            <button onclick="alert('Rejected')">Reject</button>
          </td>
        </tr>
        <!-- More entries -->
      </tbody>
    </table>
  </section>

  <footer>&copy; 2025 Company Timesheet System</footer>
</body>
</html>
<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>