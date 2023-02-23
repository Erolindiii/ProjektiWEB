<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="name" placeholder="name..."> <br><br>
        <input type="text" name="surname" placeholder="surname..."> <br><br>
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="username" placeholder="username..."> <br><br>
        <input type="text" name="password" placeholder="password..."> <br><br>
      

        <input type="submit" name="registerBtn" value="register"> <br><br>
    </form>

   <?php //include_once '../controller/registerController.php'?>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3606fe9745.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Login</title>
</head>
<link rel="stylesheet" href="../WebStyle.css">
<body>
    <header class="page-header" >
        <a href="http://127.0.0.1:5500/ProjektiWEB/HomePage.htm"><img src="../bNE_Logo-noBG.png" alt="bNE" style="width: 125px; height: 100px;"></a>
            <ul class="page-header_nav-list-home">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/HomePage.htm" aria-current="page" class="page-header_nav-link-home">
                        <div id="box">HOME</div>
                        <script src="index.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-shop">
                <li>
                    <a href="https://shop.gjirafa.gg/" aria-current="page" class="page-header_nav-link-shop">
                        <div id="box1">SHOP</div>
                        <script src="index2.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-team">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/Team.html" aria-current="page" class="page-header_nav-link-team">
                        <div id="box2">TEAM</div>
                        <script src="index3.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-ranking">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/Ranking.html" aria-current="page" class="page-header_nav-link-ranking">
                        <div id="box3">RANKING</div>
                        <script src="index4.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-games">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/Games.html" aria-current="page" class="page-header_nav-link-games">
                        <div id="box4">GAMES</div>
                        <script src="index5.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-partners">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/Partners.html" aria-current="page" class="page-header_nav-link-partners">
                        <div id="box5">PARTNERS</div>
                        <script src="index6.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-stream">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/Stream.html" aria-current="page" class="page-header_nav-link-stream">
                        <div id="box6">STREAM</div>
                        <script src="index7.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-aboutus">
                <li>
                    <a href="http://127.0.0.1:5500.ProjektiWEB/About Us.html" aria-current="page" class="page-header_nav-link-aboutus">
                        <div id="box7">ABOUT&nbsp;US</div>
                        <script src="index8.js"></script>
                    </a>
                </li>
            </ul>
            <ul class="page-header_nav-list-login">
                <li>
                    <a href="http://127.0.0.1:5500/ProjektiWEB/Login.htm" aria-current="page" class="page-header_nav-link-login">
                        <i class="fa-regular fa-user"></i>
                    </a>
                </li>
            </ul>
    </header>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="handle_form.php" method="post">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" required>
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

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Sign Up</span>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <div class="input-field">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="surname" placeholder="Enter your surname" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirmpassword" class="password" placeholder="Confirm a password" required>
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
                        <input type="submit" value="Signup" name="registerBtn">
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