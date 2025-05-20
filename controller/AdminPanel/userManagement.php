<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<html>
<head>
  <title>User Management</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>User Management</header>
  <nav>
    <a href="userManagement.html">Users</a>
    <a href="Contentmoderator.html">Content Moderation</a>
    <a href="SystemSettings.html">System Settings</a>
  </nav>
  <div class="container">
    <div class="filters">
      <input type="text" placeholder="Search users..." id="searchInput">
      <select id="statusSelect">
        <option>Status</option>
        <option>Active</option>
        <option>Inactive</option>
      </select>
      <button onclick="applyFilter()">Apply Filter</button>
    </div>

    <button onclick="deleteSelected()">Delete Selected</button>

    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)"></th>
          <th>User ID</th>
          <th>Name</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" class="userCheckbox"></td>
          <td>001</td>
          <td>Alice Smith</td>
          <td>Active</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="userCheckbox"></td>
          <td>002</td>
          <td>Bob Johnson</td>
          <td>Inactive</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function deleteSelected() {
      const checkboxes = document.querySelectorAll(".userCheckbox:checked");
      if (checkboxes.length === 0) {
        alert("Please select at least one user to delete.");
        return false;
      }
      alert("Selected user(s) deleted successfully!");
      return true;
    }

    function toggleAll(masterCheckbox) {
      const checkboxes = document.querySelectorAll(".userCheckbox");
      checkboxes.forEach(cb => cb.checked = masterCheckbox.checked);
    }

    function applyFilter() {
      const input = document.getElementById("searchInput").value.trim();
      const status = document.getElementById("statusSelect").value;
      if (!input && status === "Status") {
        alert("Please enter a search term or select a status.");
        return false;
      }
      alert(`Filter applied: ${input ? input : ''} ${status !== "Status" ? "(" + status + ")" : ''}`);
      return true;
    }
  </script>
</body>
</html>

<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>