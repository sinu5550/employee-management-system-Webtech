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

        <form method="post" action="../../controller/loginCheck.php" onsubmit="return validate()">
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

    <script>
    function validate() {
      let email = document.getElementById("email").value.trim();
      let pass = document.getElementById("password").value.trim();

      let emsg = document.getElementById("emailError");
      let pmsg = document.getElementById("passError");
      let atIndex = email.indexOf("@");
      let dotIndex = email.lastIndexOf(".");

      emsg.innerHTML = "";
      pmsg.innerHTML = "";

      let isValid = true;

      if (email === "") {
        emsg.innerHTML = "Please fill in email";
        isValid = false;
      } 
      else if (!(email.includes("@") && email.includes("."))) {
                emsg.innerHTML = "Enter a valid email address (e.g., anything@example.com).";
                emsg.style.color = "red";
                return false;
            }

      
      if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= email.length) {
          emsg.innerHTML = "Enter a valid email address (e.g., anything@example.com).";
          emsg.style.color = "red";
          return false;
      }

      if (pass === "") {
        pmsg.innerHTML = "Please fill in password";
        isValid = false;
      }

      return isValid;
    }
  </script>
</body>

</html>