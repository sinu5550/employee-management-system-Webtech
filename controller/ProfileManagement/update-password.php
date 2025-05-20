<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="view-profile.php">← Back to Profile</a>
        <h3>Update Password</h3>

        <form method="post" action="update-password.php">
            <div class="form-group">
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword" name="currentPassword" />
            </div>

            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" />
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" />
            </div>

            <div class="form-group">
                <input type="submit" value="Update Password" />
            </div>
        </form>
    </div>
</body>

</html>