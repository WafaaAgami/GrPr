<?php
error_reporting(0);
include('./dbconnection.php');
session_start();                           
$f_name = "";
$email = "";
$pw = "";
$msg = "";

if(isset($_POST['Login'])){
  $name = $_POST['UserName'];
  $Password = $_POST['Password'];
  if($name != "" && $Password != "")
  {
    echo 'Yes';
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE user_name = 'Wafaa1'";
    // $sql = "SELECT * FROM users WHERE user_name like '$name' and password = '$hashed_password'";
    echo $sql;
    try{
      $result = $conn->query($sql);
      
echo 'Yes 2';
	$DbName = '';
	foreach ($result as $row) {
    echo 'L';
   $DbName = $row['full_name'];
  } 
}
catch (PDOException $e) {
    // Handle database query errors
    echo "Error executing query: " . $e->getMessage();
}
	}
  echo $DbName ;
  echo 'Wafaa';
  if($DbName != ""){
        $expire_date = time() + (86400 * 30);                    
        setcookie('user_name', $f_name, $expire_date, '/');
        $msg = "Welcome from cookie: " . $_COOKIE['user_name'];
    echo "Ol";
    header("Location: Users.php");
    exit;	
  }
  
  echo 'Invalid Username or password';  
    }

if(isset($_POST['Login1'])){
  $name = $_POST['UserName'];
  $Password = $_POST['Password'];
  if($name != "" && $Password != "")
  {
		$expire_date = time() + (86400 * 30);                    
        setcookie('user_name', $name, $expire_date, '/');
        $msg = "Welcome from cookie: " . $_COOKIE['user_name'];
    echo "Ol";
    header("Location: Users.php");
    exit;	
  }
  
  echo 'Invalid Username or password';  
}
//if ($_SERVER['REQUEST_METHOD'] = 'POST') {
if (isset($_POST['signup'])) {
    $f_name = $_POST['full_name'];
    $email = $_POST['email'];
    $pw = $_POST['pwd'];
    if (!empty($f_name) && !empty($email) && !empty($pw)) {
        //$_SESSION['user_name'] = $f_name;                
        //$_SESSION['email'] = $email
        //$msg = "Welcome " . $_SESSION['user_name'];
        $expire_date = time() + (86400 * 30);                    
        setcookie('user_name', $f_name, $expire_date, '/');
        $msg = "Welcome from cookie: " . $_COOKIE['user_name'];
        header('location: Users.php');
    }

}
/*error_reporting(0);
include('./dbconnection.php');
if (isset($_POST[login_user])) {
  $username = mysqli_real_escape_string ($db, $_POST['username']);
  $password = li_real_escape_string ($db, $_POST['password']);

  if (empty($username)) {
    array_push ($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username= '$username' AND
    password= '$password";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows ($results) == 1) {
      $_SESSION['userna,e'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }

    }
      
      
  }*/
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
                <button class="btn btn-default submit" type="submit" name="Login1">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
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
