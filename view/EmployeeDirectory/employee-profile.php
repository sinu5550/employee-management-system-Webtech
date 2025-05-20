<?php
    session_start();
    if(isset($_COOKIE['status'])){
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Employee Profile</h2>
        <p><strong>ID:</strong> E001</p>
        <p><strong>Name:</strong> Alice Johnson</p>
        <p><strong>Skill:</strong> JavaScript</p>
        <p><strong>Contact:</strong> alice@example.com</p>
        <a href="employee-list.php" class="btn">Back to Directory</a>
    </div>
</body>

</html>

<?php
    }else{
        header('location: ../userAuthentication/login.php');
    }

?>