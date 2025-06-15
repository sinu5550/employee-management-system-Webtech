<?php
session_start();
if (!isset($_COOKIE['status'])) {
    header('location: ../userAuthentication/login.php');
    exit();
}

require_once __DIR__ . '/../../model/userModel.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "No employee ID provided.";
    exit();
}

$id = $_GET['id'];
$con = getConnection();
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) == 1) {
    $employee = mysqli_fetch_assoc($result);
} else {
    echo "Employee not found.";
    exit();
}
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
    <?php include '../../navbar.php'; ?>
    <div class="container">
        <h2>Employee Profile</h2>
        <p><strong>ID:</strong> <?= $employee['id'] ?></p>
        <p><strong>Name:</strong> <?= $employee['name'] ?></p>
        <p><strong>Email:</strong> <?= $employee['email'] ?></p>
        <a href="employee-list.php" class="btn">Back to Directory</a>
    </div>
</body>

</html>