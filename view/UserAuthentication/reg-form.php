<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <a href="home.php">Back to home</a>
        <h3>Please Register</h3>

        <form method="POST" action="../../controller/regCheck.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="name">Employee Name:</label></td>
                    <td><input type="text" id="name" name="name" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="nameError"></p>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" id="email" name="email" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="emailError"></p>
                    </td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="passError"></p>
                    </td>
                </tr>

                <tr>
                    <td><label for="confirmPassword">Confirm Password:</label></td>
                    <td><input type="password" id="confirmPassword" name="confirmPassword" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="confirmPassError"></p>
                    </td>
                </tr>

                <tr>
                    <td><label for="profilePic">Image:</label></td>
                    <td><input type="file" id="profilePic" name="profilePic" /></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Register" /></td>
                    <td><a href="login.php">Already have an account? Please Login</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>