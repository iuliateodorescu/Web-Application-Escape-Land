<?php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration');

$name = mysqli_real_escape_string($con, $_POST['user']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$hash = md5($pass);

$s = " SELECT * FROM usertable WHERE name = '$name' && password = '$hash'";
$result = mysqli_query($con, $s);
$row = mysqli_fetch_assoc($result);

$num = mysqli_num_rows($result);
if ( $num == 1 ){
	$_SESSION['username'] = $name;
	$_SESSION['isAdmin']=$row['isAdmin'];
	header('location:home.php');
}
else {
	header('location:index.php');
}
?>
