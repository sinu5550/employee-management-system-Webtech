<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exit Interview Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
  <a href="ExitForm.php">Exit Form</a>
  <a href="KnowledgeTransfer.php">Knowledge Transfer</a>
</nav>

<header>
  <h1>Exit Interview Form</h1>
</header>

<section>
  <form onsubmit="return validateExitForm();">
    <label for="reason">Reason for Leaving</label>
    <textarea id="reason" rows="4"></textarea>

    <label for="feedback">Feedback on Experience</label>
    <textarea id="feedback" rows="4"></textarea>

    <label>Company Asset Checklist</label>
    <input type="checkbox" id="laptop"> <label for="laptop">Laptop Returned</label><br>
    <input type="checkbox" id="idbadge"> <label for="idbadge">ID Badge Returned</label><br>
    <input type="checkbox" id="access"> <label for="access">Building Access Revoked</label><br>

    <label for="alumni">
      <input type="checkbox" id="alumni"> I wish to join the Alumni Network
    </label>

    <button type="submit">Submit Exit Form</button>
  </form>
</section>

<footer>&copy; 2025 Company Exit System</footer>

<script>
  function validateExitForm() {
    const reason = document.getElementById("reason").value.trim();
    const feedback = document.getElementById("feedback").value.trim();
    const laptop = document.getElementById("laptop").checked;
    const idbadge = document.getElementById("idbadge").checked;
    const access = document.getElementById("access").checked;

    if (reason === "" || feedback === "") {
      alert("Please fill in both the reason and feedback fields.");
      return false;
    }

    if (!laptop || !idbadge || !access) {
      const confirmContinue = confirm("Some assets are not marked as returned. Are you sure you want to continue?");
      if (!confirmContinue) return false;
    }

    alert("Exit form submitted successfully!");
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