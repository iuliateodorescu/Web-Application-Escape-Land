<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'roomlist');

 $idRoom= mysqli_real_escape_string($con,$_POST['idRoomToDelete']);
 $sql = "DELETE FROM roomtable WHERE EnNameRoom='$idRoom'";
 if (mysqli_query($con, $sql)) {
      echo "Record deleted successfully";
      header('Location:adminPage.php?rez=succes');
 } else {
  header('Location:adminPage.php?rez=error');
 }

mysqli_close($con);
?>
