
<html>
	<head>
		<meta charset="utf8" >
		<title>LOGIN</title>
	</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();

$username = $_POST ['username'];
$password = $_POST ['password'];
$con=mysqli_connect('127.0.0.1','root','','world');

if(isset($_POST['submit']))
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$query = "SELECT username, password FROM admins WHERE username='$username' 
AND password='$password'";
}
$mysqli = new mysqli($username, $password);


$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['userid']=$row['userid'];
 header("Location: admin.php");
 echo 'hi there';
 exit;
  }
  else
     {
 echo 'ERROR';
  }
 

