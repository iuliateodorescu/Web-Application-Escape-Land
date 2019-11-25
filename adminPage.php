
<?php
session_start();
if (isset($_SESSION['isAdmin'])&&$_SESSION['isAdmin']==1)
{?>
<html>
<head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<div id="leftMenu">
   <div id="logoAdmin"></div>
   <ul>
        <li ><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
        <li onclick="selectOptionAdmin(1)"><a href="#"><i class="fas fa-plus-square"></i> Add Room</a></li>
        <li onclick="selectOptionAdmin(2)"><a href="#"><i class="far fa-trash-alt"></i> Delete User</a></li>
        <li onclick="selectOptionAdmin(3)"><a href="#"><i class="far fa-eye"></i> Show Reservations</a></li>
        <li onclick="selectOptionAdmin(4)"><a href="#"><i class="far fa-trash-alt"></i> Delete Room</a></li>
   </ul>
</div>

<div id="rigthArea">

<div id="wrap-serviciiAdmin">
   <div id="optionAdmin1">
   <h2>Adauga Camera</h2>
      <form enctype="multipart/form-data" onsubmit="return validateForm()"  action="addRoom.php" method="post">
          <b>EN</b>
         <input onchange="validateForm()" type="text" id="EnNameRoom" name="EnNameRoom" placeholder="Room Name" required/>
         <input onchange="validateForm()" type="text" id="EnTitleRoom" name="EnTitleRoom" placeholder="Title" required/>
         <input onchange="validateForm()" type="text" id="EnDescription" name="EnDescription" placeholder="Description" required/>
         <b>RO</b>
         <input onchange="validateForm()" type="text" id="RoNameRoom" name="RoNameRoom" placeholder="Nume Camera" required/>
         <input onchange="validateForm()" type="text" id="RoTitleRoom" name="RoTitleRoom" placeholder="Titlu" required/>
         <input onchange="validateForm()" type="text" id="RoDescription" name="RoDescription" placeholder="Descriere" required/>

             <div id="wrap-upload-newPlaylist">
 						     <div id="btnUploadImgPlaylist" onclick="UploadClick()">UpLoad Image !</div>
 						     <label for="PhotoUP">
 							  <input type="file" hidden accept="image/*" name="PhotoUP" id="PhotoUP" onchange="validation(1);"/>
 							</label>

 							<table id="TablePhotoUP">
 							  <tr>
 								<th>Image</th>
 								<th>Name</th>
 								<th>Size</th>
 								<th>Height</th>
 								<th>Wight</th>
 								<th>Status</th>
 							  </tr>
 							  <tr>
 								<td><div id="AreaUploadPhoto"><img id="ig" src=""/></div></td>
 								<td><p id="NamePhotoUP"></p></td>
 								<td><p id="SizePhotoUP"></p></td>
 								<td><p id="HeightPhotoUP"></p></td>
 								<td><p id="WidthPhotoUP"></p></td>
 								<td><p id="StatusPhotoUP"></p></td>
 							  </tr>
 							</table>
 						</div>
            <input style="visibility:hidden;height: 0px;margin: 0px;padding: 0px;border: 0px;" name="imageModul" id="imageModul" type="text" value=""/>
            <input type="submit" id="submitServici" value="Send"/>

      </form>
   </div>
   <div id="optionAdmin2">
      <h2>Lista Utilizatori : </h2>
      <?php include "selectDelUsers.php"; ?>
   </div>
   <div id="optionAdmin3">

   <h2>Lista Rezervari : </h2>
   <?php include "showRezervarii.php"; ?>
   </div>

   <div id="optionAdmin4">

   <h2>List Camere  : </h2>
   <?php include "showRoom.php"; ?>
   </div>

</div>



</div>
<script src="vendor/js/script.js"></script>
</body>
</html>
<?php }else{
  header('Location:index.php');
}?>
