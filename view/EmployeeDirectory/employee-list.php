<?php

require_once __DIR__ . '/../../model/userModel.php';
$employees = getAllEmployees();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Directory</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include '../../navbar.php'; ?>

    <div class="container">
        <h2>Employee Directory</h2>

        <input type="text" id="searchInput" placeholder="Search by name or skill…" />

        <ul id="employeeList">
            <?php foreach ($employees as $emp): ?>
                <li>
                    <strong><?= $emp['name'] ?></strong>
                    <a href="employee-profile.php?id=<?= $emp['id'] ?>">View Profile</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
        const search = document.getElementById('searchInput');
        search.addEventListener('keyup', () => {
            const term = search.value.toLowerCase();
            document.querySelectorAll('#employeeList li').forEach(li => {
                li.style.display = li.textContent.toLowerCase().includes(term) ? '' : 'none';
            });
        });
    </script>
</body>

</html>