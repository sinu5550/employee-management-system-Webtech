<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="view-profile.php">← Back to Profile</a>
        <h3>Edit Profile</h3>

        <form method="post" action="save-profile.php">
            <img src="images/sinu11.jpg" alt="Profile Picture" class="profile-avatar">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="Ahmed Siyan" />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="ahmedsiyan@gmail.com" />
            </div>

            <div class="form-group">
                <input type="submit" value="Save Changes" />
            </div>
        </form>
    </div>
</body>

</html>