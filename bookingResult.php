<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'roombooking');

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$tel = mysqli_real_escape_string($con, $_POST['tel']);
$room = mysqli_real_escape_string($con, $_POST['room']);
$pers_no = mysqli_real_escape_string($con, $_POST['pers']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$hour = mysqli_real_escape_string($con, $_POST['hour']);

//name validation
if( !preg_match("/^([a-zA-Z' ]+)$/",$name) ){
	echo '<script>alert("Invalid name!")</script>';
}else{
	
//email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
   echo '<script>alert("Invalid email!")</script>';
}else{
	
//validate phone number
if( strlen($tel)!=10 || !preg_match("/^([0-9]+)$/",$tel) ){
	echo '<script>alert("Invalid telephone number!")</script>';
}else{

$s = " SELECT * FROM bookingtable WHERE res_room = '$room' && res_date = '$date' && res_hour = '$hour' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num==1){
	echo '<script>alert("Unavailable time slot!")</script>';
}
else {
	$reg = "INSERT INTO bookingtable(res_name, res_email, res_tel, res_room, res_date, res_hour) VALUES ('$name', '$email', '$tel', '$room', '$date', '$hour')";
    mysqli_query($con, $reg);
    if( strcmp( $hour, "17:00")<0 )
		$_SESSION['success'] = strval(40*$pers_no);
	else
		$_SESSION['success'] = strval(50*$pers_no);
	header('location: home.php');
}
}
}
}
?>