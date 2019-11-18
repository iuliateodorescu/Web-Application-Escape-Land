<?php

session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'userregistration');

$name = mysqli_real_escape_string($con, $_POST['user']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$hash = md5($pass);

$s = " SELECT * FROM usertable WHERE name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num==1){
	echo '<script>alert("Username already taken!")</script>';
	header('location: index.php');
}
else {
	$reg = "INSERT INTO usertable(name, password) VALUES ('$name', '$hash')";
    mysqli_query($con, $reg);
	$_SESSION['username'] = $name;
  	header('location: home.php');
}
?>