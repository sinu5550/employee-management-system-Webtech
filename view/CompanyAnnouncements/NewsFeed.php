<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="NewsFeed.php">News Feed</a>
      <a href="PriorityAlert.php">Priority Alerts</a>
    </nav>

    <header>
      <h1>Company Announcements</h1>
    </header>

    <section class="announcement">
      <h3>Team Outing Scheduled</h3>
      <p>HR: We are planning a team outing next Friday. Please confirm attendance by Tuesday.</p>
      <div class="reactions">
        <button onclick="alert('You liked this post.')">👍 Like</button>
        <button onclick="alert('You found this informative.')">💡 Informative</button>
      </div>
      <div class="comments">
        <textarea placeholder="Add a comment..."></textarea>
        <br><button onclick="alert('Comment submitted')">Comment</button>
      </div>
    </section>

    <section class="announcement">
      <h3>Policy Update</h3>
      <p>HR: New remote work policy effective from next month. Check internal mail for full details.</p>
      <div class="reactions">
        <button onclick="alert('You liked this post.')">👍 Like</button>
        <button onclick="alert('You found this helpful.')">✅ Helpful</button>
      </div>
      <div class="comments">
        <textarea placeholder="Add a comment..."></textarea>
        <br><button onclick="alert('Comment submitted')">Comment</button>
      </div>
    </section>
    <footer>
      &copy; 2025 Company Name. All rights reserved.
    </footer>
  </body>

  </html>

<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>