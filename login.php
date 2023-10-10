<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <div class="img">
        <img src="img/home.jpg">
      </div>
        <div class="wrapper">
    <div class="form-wrapper sign-in">
    <form action="login.php" method="post">
        <h2>Login Form</h2>
        <div class="input-group">
          <input type="text" name="email"  required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" name="password"  required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit"  value="Login" name="login">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="registration.php" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
      </div>
      </div>
  
    
    <script src="script.js"></script>
</body>
</html>