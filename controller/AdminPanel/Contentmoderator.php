<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Content Moderation</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <header>Content Moderation</header>
    <nav>
      <a href="userManagement.php">Users</a>
      <a href="Contentmoderator.php">Content Moderation</a>
      <a href="SystemSettings.php">System Settings</a>
    </nav>
    <div class="container">
      <div class="filters">
        <input type="text" id="searchInput" placeholder="Search content...">
        <select id="typeSelect">
          <option value="">Type</option>
          <option>Post</option>
          <option>Comment</option>
        </select>
        <button onclick="validateFilter()">Apply Filter</button>
      </div>
      <button onclick="validateDelete()">Delete Selected</button>
      <table>
        <thead>
          <tr>
            <th><input type="checkbox" id="selectAll" onclick="toggleAll(this)"></th>
            <th>Content ID</th>
            <th>Description</th>
            <th>Reported</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" class="rowCheckbox"></td>
            <td>101</td>
            <td>Inappropriate comment</td>
            <td>5 times</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="rowCheckbox"></td>
            <td>102</td>
            <td>Spam post</td>
            <td>2 times</td>
          </tr>
        </tbody>
      </table>
    </div>

    <script>
      function validateFilter() {
        const searchText = document.getElementById('searchInput').value.trim();
        const typeValue = document.getElementById('typeSelect').value;

        if (searchText === '' && typeValue === '') {
          alert('Please enter a keyword or select a type before applying filter.');
        } else {
          alert('Filter applied!');
        }
      }

      function validateDelete() {
        const checkboxes = document.querySelectorAll('.rowCheckbox:checked');
        if (checkboxes.length === 0) {
          alert('Please select at least one content item to delete.');
        } else {
          alert('Selected content deleted!');
        }
      }

      function toggleAll(source) {
        const checkboxes = document.querySelectorAll('.rowCheckbox');
        checkboxes.forEach(cb => cb.checked = source.checked);
      }
    </script>
  </body>

  </html>
<?php
} else {
  header('location: ../../view/userAuthentication/login.php');
}

?>