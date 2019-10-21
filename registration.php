<?php

session_start();
//header('location:login.php');

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration');

$name = $con->real_escape_string($_POST['user']);
$pass = $con->real_escape_string($_POST['password']);

$hash = password_hash($pass, PASSWORD_BCRYPT);

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num==1){
	echo "Username Already Taken";
}
else {
	$reg = "insert into usertable(name, password) values ('$name', '$hash')";
    mysqli_query($con, $reg);
	echo "Registration Successful";
}
?>