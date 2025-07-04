<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Editor</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php include '../../navbar.php'; ?>
    <div class="editor-container">

        <h2>Edit Department</h2>

        <form>
            <div class="form-group">
                <label for="deptName">Department Name:</label>
                <input type="text" id="deptName" name="deptName" required />
            </div>

            <div class="form-group">
                <label for="deptColor">Color Code:</label>
                <select id="deptColor" name="deptColor">
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                </select>
            </div>

            <div class="form-group">
                <label for="parentDept">Reporting To:</label>
                <input type="text" id="parentDept" name="parentDept" />
            </div>

            <button class="btn" type="submit">Save Changes</button>

        </form>
        <a href="reporting-lines.php"> Go to Reporting Lines</a>
    </div>
</body>

</html>