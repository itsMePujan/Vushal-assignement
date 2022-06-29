
<?php
require $_SERVER["DOCUMENT_ROOT"] . "/VUSHAL ASSIGNEMENT" . "/config/init.php";
if(isset($_SESSION, $_SESSION['token']) && !empty($_SESSION['token'])){
    redirect(Dash,'success', 'You are already logged in.');
            }
    if(isset($_COOKIE, $_COOKIE['_au']) && !empty($_COOKIE['_au'])){
    redirect(Dash,'success', 'Welcome back to admin panel.');
      }
 ?>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./assets/style.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
<?php  flash();  ?>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="process/login_process.php" method = "POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name = "email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name = "password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>
                <form  >
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" id="name" name="full_name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Enter your email"  id="email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" onKeyUp="passwordChanged();" id="password" class="password" placeholder="Confirm a password"  name="password"  required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <br>
                    <div class="progress" id = "progress">  </div>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6Lc65QEgAAAAANAbD05VyIO4UoD3QsrXkIeCt_nU" data-callback='doSomething'></div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon" required>
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>
                    <div class="input-field button register_btn">
                        <input type="submit" id="register_btn" value="Register">
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

    
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="./assets/script.js"></script>
</body>
</html>
