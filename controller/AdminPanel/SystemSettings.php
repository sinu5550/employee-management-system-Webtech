<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>System Settings</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <header>System Settings</header>
    <nav>
      <a href="userManagement.php">Users</a>
      <a href="Contentmoderator.php">Content Moderation</a>
      <a href="SystemSettings.php">System Settings</a>
    </nav>
    <div class="container">
      <h2>Configuration Options</h2>
      <form>
        <label for="siteName">Site Name:</label><br>
        <input type="text" id="siteName" name="siteName" value="Employee System"><br><br>

        <label for="emailNotif">Enable Email Notifications:</label>
        <input type="checkbox" id="emailNotif" name="emailNotif" checked><br><br>

        <label for="maxLogin">Max Login Attempts:</label><br>
        <input type="number" id="maxLogin" name="maxLogin" value="5"><br><br>

        <button type="submit">Save Settings</button>
      </form>
    </div>
  </body>

  </html>
<?php
} else {
  header('location: ../../view/userAuthentication/login.php');
}

?>