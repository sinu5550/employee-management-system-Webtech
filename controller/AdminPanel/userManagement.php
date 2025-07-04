<?php
session_start();
if (isset($_COOKIE['status'])) {
    require_once __DIR__ . '/../../model/userModel.php';
    $users = getAllEmployees();
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include '../../navbar.php'; ?>
    <header>User Management</header>
    <nav>
        <a href="userManagement.php">Users</a>
        <a href="Contentmoderator.php">Content Moderation</a>
        <a href="SystemSettings.php">System Settings</a>
    </nav>

    <div class="container">
        <div class="filters">
            <input type="text" placeholder="Search users..." id="searchInput">
            <select id="statusSelect">
                <option>Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <button onclick="applyFilter()">Apply Filter</button>
        </div>

        <button onclick="deleteSelected()">Delete Selected</button>

        <table>
            <thead>
                <tr>
                    <th><input type="checkbox" onclick="toggleAll(this)"></th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><input type="checkbox" class="userCheckbox"></td>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td>Active</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        function deleteSelected() {
            const checkboxes = document.querySelectorAll(".userCheckbox:checked");
            if (checkboxes.length === 0) {
                alert("Please select at least one user to delete.");
                return false;
            }
            alert("Selected user(s) deleted successfully!");
            return true;
        }

        function toggleAll(masterCheckbox) {
            const checkboxes = document.querySelectorAll(".userCheckbox");
            checkboxes.forEach(cb => cb.checked = masterCheckbox.checked);
        }

        function applyFilter() {
            const input = document.getElementById("searchInput").value.trim();
            const status = document.getElementById("statusSelect").value;
            if (!input && status === "Status") {
                alert("Please enter a search term or select a status.");
                return false;
            }
            alert(`Filter applied: ${input ? input : ''} ${status !== "Status" ? "(" + status + ")" : ''}`);
            return true;
        }
    </script>
</body>

</html>
<?php
} else {
    header('location: ../../view/userAuthentication/login.php');
}
?>
