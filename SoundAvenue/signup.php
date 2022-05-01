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
  function validatepassword(){
    var pass = document.getElementById('pwd').value;
    var c_pass = document.getElementById('cpwd').value;
    if(pass!==c_pass){
      //alert("Password Does Not Matches");
      document.getElementById('message').style.color = 'red'
      document.getElementById('message').innerHTML = "Password Does Not Matches";
    }else{
      document.getElementById('message').style.color = 'green'
      document.getElementById('message').innerHTML = "Password Matches";
    }
  }

  function validatename(){
    var regex = /^[A-Za-z]+$/;
 
    var isvalid = regex.test(document.getElementById('f_name').value);
    if(!isvalid){
            document.getElementById('name').style.color = 'red'
      document.getElementById('name').innerHTML = "No Special Characters or Numbers allowed";
    }else{
            document.getElementById('name').innerHTML = "";
    }
  }

  function validatelastname(){
   var regex = /^[A-Za-z]+$/;
    var isvalid = regex.test(document.getElementById('l_name').value);
    if(!isvalid){
      document.getElementById('lname').style.color = 'red'
      document.getElementById('lname').innerHTML = "No Special Characters or Numbers allowed";
    }else{
            document.getElementById('lname').innerHTML = "";
    } 
  }

  function validateemail(){
    var regex = /^[a-z@.]+$/;
    var isvalid = regex.test(document.getElementById('email').value); 
    if(!isvalid){
      document.getElementById('emails').style.color = 'red'
      document.getElementById('emails').innerHTML = "Upper Case or space is not allowed";      
    }else{
          document.getElementById('emails').innerHTML = " "; 
    }
  }
</script>
  <style>
  	.container{
  		height: 550px;
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

if(isset($_POST['submit'])){
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpw = $_POST['cpw'];
$hash_pass = md5($pass);

if($pass == $cpw){
$sql = "SELECT `email` FROM users WHERE email = '$email'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
  echo "<div class='alert alert-danger'> This email id is already registered use some another email id </div>";
}else{
  $sql = "INSERT INTO users (first_name,last_name,email,password) VALUES ('$fname','$lname','$email','$hash_pass')";

if(mysqli_query($conn,$sql)){
  echo "<div class='alert alert-success'>User Registered Successfully</div>"; 
}else{
  echo 'Error'.$sql.mysqli_error($conn);
}
}
}
else{
  echo "<div class='alert alert-danger'>Password and Confirm Password Does not Matches</div>";
}
}
?>
		<form action="signup.php" method="POST">
       <div class="form-group">
    <label for="f_nam">First Name:</label><span id='name'></span>
    <input type="text" class="form-control" id="f_name" name="f_name" required onchange="validatename()">
  </div>
   <div class="form-group">
    <label for="l_name">Last Name:</label><span id='lname'></span>
    <input type="text" class="form-control" id="l_name" name="l_name" onchange="validatelastname()">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label><span id="emails"></span>
    <input type="email" class="form-control" id="email" name="email" required onkeyup="validateemail()"> 
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass" required minlength="3" onkeyup="validatepassword()">
  </div> 
    <div class="form-group">
    <label for="pwd">Confirm Password:</label> <span id='message'></span>
    <input type="password" class="form-control" id="cpwd" name="cpw" required minlength="3" onkeyup="validatepassword()">
  </div>
  <button type="submit"   class="btn btn-primary" name="submit">Sign-Up</button>
</form>
	</div>
</body>
</html>