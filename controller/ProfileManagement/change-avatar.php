<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Avatar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="view-profile.php">← Back to Profile</a>
        <h3>Change Avatar</h3>
        <img src="images/sinu11.jpg" alt="Profile Picture" class="profile-avatar">
        <form method="post" action="upload-avatar.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="avatar">Upload New Avatar:</label>
                <input type="file" id="avatar" name="avatar" />
                <p class="error">Please upload a valid image file.</p>
            </div>

            <div class="form-group">
                <input type="submit" value="Upload and Crop" />
            </div>
        </form>
    </div>
</body>

</html>