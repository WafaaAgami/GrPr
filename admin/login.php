<?php
error_reporting(0);
include('../dbconnection.php');
session_start();                           

if(isset($_POST['Login'])){
  $_SESSION["login_msg"] = "";
  $name = $_POST['UserName'];
  $Password = $_POST['Password'];
  if($name == "admin" && $Password == "admin"){
      // for testing purpose as for the first run there is no user in the table
      $expire_date = time() + (86400 * 30);                    
        setcookie('user_name', "Admin", $expire_date, '/');
        $msg = "Welcome from cookie: " . $_COOKIE['user_name'];
        header("Location: users.php");
        exit;
  }
  else if($name != "" && $Password != "")
  {
    $sql = "SELECT * FROM users WHERE user_name like '$name'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $item = $stmt->fetch();
    
    if($item["full_name"]){
      if(password_verify($Password, $item["password"])){
        $expire_date = time() + (86400 * 30);                    
        setcookie('user_name', $item["full_name"], $expire_date, '/');
        $msg = "Welcome from cookie: " . $_COOKIE['user_name'];
        header("Location: users.php");
        exit;
      }  
    }
	}
  $_SESSION["login_msg"] = 'Invalid Username or password';
}

// if (isset($_POST['signup'])) {
//     $f_name = $_POST['full_name'];
//     $email = $_POST['email'];
//     $pw = $_POST['pwd'];
//     if (!empty($f_name) && !empty($email) && !empty($pw)) {
//         //$_SESSION['user_name'] = $f_name;                
//         //$_SESSION['email'] = $email
//         //$msg = "Welcome " . $_SESSION['user_name'];
//         $expire_date = time() + (86400 * 30);                    
//         setcookie('user_name', $f_name, $expire_date, '/');
//         $msg = "Welcome from cookie: " . $_COOKIE['user_name'];
//         header('location: Users.php');
//     }

// }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Images Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <p><?php echo $_SESSION["login_msg"] ?></p>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" id="UserName" name="UserName"  required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="Password" name="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" name="Login">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-file-image-o"></i></i> Images Admin</h1>
                  <p>©2016 All Rights Reserved. Images Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Fullname" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" name="Register">Submit</>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-file-image-o"></i></i> Images Admin</h1>
                  <p>©2016 All Rights Reserved. Images Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
