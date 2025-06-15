<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Transfer</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php include '../../navbar.php'; ?>
    <nav>
      <a href="ExitForm.php">Exit Form</a>
      <a href="KnowledgeTransfer.php">Knowledge Transfer</a>
    </nav>

    <header>
      <h1>Knowledge Transfer Form</h1>
    </header>

    <section>
      <form onsubmit="return validateKnowledgeTransfer();">
        <label for="projects">Ongoing Projects</label>
        <textarea id="projects" rows="3" placeholder="List current responsibilities and projects..."></textarea>

        <label for="handover">Handover Instructions</label>
        <textarea id="handover" rows="3" placeholder="Detail procedures or knowledge to pass on..."></textarea>

        <label for="documents">Important Documents/Links</label>
        <textarea id="documents" rows="2" placeholder="Include any relevant links or paths..."></textarea>

        <button type="submit">Submit Knowledge Transfer</button>
      </form>
    </section>

    <footer>&copy; 2025 Company Exit System</footer>

    <script>
      function validateKnowledgeTransfer() {
        const projects = document.getElementById("projects").value.trim();
        const handover = document.getElementById("handover").value.trim();
        const documents = document.getElementById("documents").value.trim();

        if (!projects || !handover || !documents) {
          alert("Please complete all fields before submitting.");
          return false;
        }

        alert("Knowledge transfer submitted. Thank you!");
        return true;
      }
    </script>
  </body>

  </html>

<?php
} else {
  header('location: ../userAuthentication/login.php');
}

?>