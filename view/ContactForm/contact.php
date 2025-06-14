<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include '../../navbar.php'; ?>
    <div class="container">
        <a href="../CompanyAnnouncements/NewsFeed.php">← Back to Home</a>
        <h3>Contact Us</h3>

        <form onsubmit="return contactValidate()">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>CAPTCHA:</label>
                <input type="text" placeholder="Enter 5 + 2 =" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Send Message">
            </div>
        </form>
    </div>

    <script>
        function contactValidate() {
            window.location.href = "submit-contact.php";
            return false;
        }
    </script>
</body>

</html>