<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	function validateemail(){
  		var a = document.getElementById('email').value;
  		var regex = /^[a-z@.]+$/;
  		var isvalid = regex.test(document.getElementById('email').value);
  		if(!isvalid){
  			document.getElementById('emails').style.color = 'red';
  			document.getElementById('emails').innerHTML = 'UpperCase or space not allowed';
  		}else{
  	  		document.getElementById('emails').innerHTML = '';
  		}
  	}
  </script>
  <style>
  	.container{
  		height: 300px;
  		width: 350px;
  		border: 1px;
  		box-shadow: 0px 0px 2px rgb( 0 0 0 /50%);
  		padding: 20px;
  	}
  </style>
</head>
<body>
<h3 style="text-align: center;">Jigs Clothing</h3>
	<div class="container">
		<?php
include 'conn.php';

if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];
$hash_pass = md5($pass);
date_default_timezone_set("Asia/Calcutta");
$login_date = date("Y-m-d H:i:sa");
echo $login_date;

$sql = "SELECT `email`,`password` FROM users WHERE email = '$email' AND password= '$hash_pass'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	$sql = "UPDATE users SET last_login_date_time='$login_date' WHERE `email`='$email' AND password='$hash_pass'";
	$res = mysqli_query($conn,$sql);	
	$_SESSION["email"] = $email;
	 echo "<div class='alert alert-success'>Login Successful !!!</div>";
  header("refresh:3;url=Home.php");
}else{
  echo "<div class='alert alert-danger'>Incorrect Username or Password</div>"; 
}
}

?>
		<form action="login.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label><span id="emails"></span>
    <input type="email" class="form-control" id="email" name="email" required onkeyup="validateemail()">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass" required minlength="3">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Sign In</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<a href="signup.php" class="btn btn-primary">Sign Up</a>
</form>
	</div>
</body>
</html>
