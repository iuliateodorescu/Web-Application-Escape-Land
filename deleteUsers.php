<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'userregistration');

 $idUser = mysqli_real_escape_string($con,$_POST['idUserToDelete']);
 $sql = "DELETE FROM usertable WHERE name='$idUser'";
 if (mysqli_query($con, $sql)) {
      echo "Record deleted successfully";
      header('Location:adminPage.php?rez=succes');
 } else {
  header('Location:adminPage.php?rez=error');
 }

mysqli_close($con);
?>
