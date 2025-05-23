<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="home.php">Back to home</a>
        <h3>Please Login</h3>

        <form method="post" action="validation.php">
            <table>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" id="email" name="email" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="emailError" class="error"></p>
                    </td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="passError" class="error"></p>
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Login" /></td>
                    <td><a href="forget-pass.php">Forgot your password?</a></td>
                </tr>
            </table>
            <a href="reg-form.php">Don't have an account? Please Register</a>
        </form>
    </div>
</body>

</html>