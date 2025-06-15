<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 5px 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .menu {
            list-style: none;
            display: flex;
            gap: 20px;
            margin-left: auto;
            padding: 0;
        }

        .menu li {
            display: inline;
        }

        ul li {
            background: #e9ecef;
            padding: 10px;
            border-radius: 6px;
        }

        .menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .menu a:hover {
            color: #007BFF;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">Employee Management System</div>
        <ul class="menu">
            <li><a href="/webtech/view/CompanyAnnouncements/NewsFeed.php">Home</a></li>
            <li><a href="/webtech/view/Timesheets/WeeklyTimesheet.php">Timesheet</a></li>
            <li><a href="/webtech/view/DepartmentStructure/department-editor.php">Departments_Structure</a></li>
            <li><a href="/webtech/view/EmployeeDirectory/employee-list.php">Employee List</a></li>
            <li><a href="/webtech/controller/AdminPanel/userManagement.php">Manage User</a></li>
            <li><a href="/webtech/view/ContactForm/contact.php">Contact</a></li>
            <li><a href="/webtech/view/UserAuthentication/logout.php">Logout</a></li>
        </ul>
        <div>

        </div>
    </div>
</body>

</html>