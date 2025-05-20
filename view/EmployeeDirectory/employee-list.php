<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Directory</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <h2>Employee Directory</h2>

        <input type="text" id="searchInput" placeholder="Search by name or skill..." />
        <button onclick="exportCSV()">Export CSV</button>

        <ul id="employeeList">
            <li>
                <strong>Alice Johnson</strong> (JavaScript) <a href="employee-profile.php">View Profile</a>
            </li>
            <li>
                <strong>Bob Smith</strong> (Python) <a href="employee-profile.php">View Profile</a>
            </li>
        </ul>
    </div>
</body>

</html>