<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Home Page</h2>
	<h2>Displayin Data in JSON Format</h2>
<?php
include 'conn.php';

session_start();
$email = $_SESSION['email'];
$arr = array();
//echo $email;
$sql = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	while ($row = mysqli_fetch_assoc($res)) {
		# code...
		$arr[]=$row;	
	}
	echo json_encode($arr);

}

?>
</body>
</html>

