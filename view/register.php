<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3606fe9745.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Bad News Eagles</title>
    <link rel="stylesheet" href="../WebStyle.css">
</head>
<body>
    <?php 
    session_start();
    include 'header.php'
    ?>
<?php

include('../database/databaseConnection.php');

if (isset($_POST['email'])) {
    $conn = (new DBConnection())->startConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email=:email AND password=:password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindValue(':password', md5($password), PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $_SESSION['email'] = $email;
        header("Location: http://localhost:6969/ProjektiWEB/ProjektiWEB/Home.php");
        exit();
} else {
        // echo "<div class='form'><h3>Email/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
}
}
?>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Home.php" method="post" name="login">
                    <div class="input-field">
					<input type="text" name="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
					<input type="password" name="password" placeholder="Enter your password" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button" id="input-field">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Sign Up</a>
                    </span>
                </div>
            </div>

            <!--Registration Form -->
              <div class="form signup">
                <span class="title">Sign Up</span>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <div class="input-field">
                    <input type="text" name="name" placeholder="Enter your name">
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                    <input type="text" name="surname" placeholder="Enter your surname">
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                    <input type="text" name="email" placeholder="Enter your email">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                    <input type="password" name="password" placeholder="Enter your password">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon" required>
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button" id="input-field">
                         <input type="submit" name="registerBtn" value="Sign Up">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="../Login.js"></script>
   <?php include_once '../controller/registerController.php'?>
</body>
</html>        