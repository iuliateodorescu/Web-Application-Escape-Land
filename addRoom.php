<?php


     $EnName=$_POST['EnNameRoom'];
     $EnTitle=$_POST['EnTitleRoom'];
     $EnDescriere=$_POST['EnDescription'];

     $RoName=$_POST['RoNameRoom'];
     $RoTitle=$_POST['RoTitleRoom'];
     $RoDescriere=$_POST['RoDescription'];

if (strlen($EnName)<3 && strlen($EnTitle)<3 && strlen($EnDescriere)<3 && strlen($RoName)<3 && strlen($RoTitle)<3 && strlen($RoDescriere)<3) {

  header('Location:adminPage.php?status=empty');
}

$file = $_FILES['PhotoUP'];
if(isset($_FILES['PhotoUP']))
{
  $image_info = getimagesize($_FILES["PhotoUP"]["tmp_name"]);
  $image_width = $image_info[0];
  $image_height = $image_info[1];
}


$fileName=$_FILES['PhotoUP']['name'];
$fileTmpName=$_FILES['PhotoUP']['tmp_name'];
$fileSize=$_FILES['PhotoUP']['size'];
$fileError=$_FILES['PhotoUP']['error'];
$fileType=$_FILES['PhotoUP']['type'];
$fileExt=explode('.',$fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png','ico','gif');
if(in_array($fileActualExt,$allowed))
  {
        if($fileSize<1000000) //2000KB
        {
                //Creat directory for all users
                $dir='img/room';
                if (!file_exists($dir)) {
                  mkdir("img/room", 0700);
                }
                $fileDestination='img/room/'. $EnName.".".$fileActualExt;
                move_uploaded_file($fileTmpName,$fileDestination);

                //Verif if photo was uploaded
                if(file_exists ($fileDestination))
                {
                  $imageModul=$fileDestination;
                }else{
                    header('Location:adminPage.php?status=NoUploadImg');
                }

        }else{
            header('Location:../index.php?status=ImageIsTooBig');
            exit();
        }
    }else{
            header('Location:../index.php?status=ImageFormatIsNotAllowed');
            exit();
    }


      $con = mysqli_connect('localhost', 'root');
      mysqli_select_db($con, 'roomlist');
      $SQL="INSERT INTO roomtable (EnNameRoom,EnTitleRoom,EnDescription,RoNameRoom,RoTitleRoom,RoDescription,Img) VALUES ('$EnName','$EnTitle','$EnDescriere','$RoName','$RoTitle','$RoDescriere','$imageModul')";


      $result = mysqli_query($con, $SQL);
      if ($result)
      {
             mysqli_close($con);
             header('Location:adminPage.php?status=Succes');
      }else{
           $errorFunctionality=mysqli_error($con);
           mysqli_close($con);
           header('Location:adminPage.php?status=eroare');
      }

?>
