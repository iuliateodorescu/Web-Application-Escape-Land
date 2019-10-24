<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Escape Room</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    $(function(){
      $('#navbar').load('reusenav.php');
    });
  </script>

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
	<span class="site-heading-upper text-primary mb-3"> <?php echo $lang[$language]['title'] ?> </span>
	<span class="site-heading-lower"> <?php echo $lang[$language]['name'] ?> </span>
  </h1>

  <div class="container">
    <div id="navbar">
    </div>
  </div>

  <div class="container">
	<div class="login-box">
	  <div class="row">
	    <div class="col-md-6 login-left">
		  <h2> <?php echo $lang[$language]['contact_title'] ?> </h2>
		  <div class="form-group">
		     <label> <?php echo $lang[$language]['phone_no'] ?> </label>
			 <label> <?php echo $lang[$language]['address'] ?> </label>
			 <label> <?php echo $lang[$language]['e-mail'] ?> </label>
		  </div>
	    </div>
	
	    <div class="col-md-6 login-left">
	      <iframe width="100%" height="300px" src="https://maps.google.com/maps?q=constantin%20brancoveanu%20nr%2053&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
	      </iframe>
	    </div>
	  </div>
	</div>
  </div>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small"> <a href="about.php?local=en">English</a> | <a href="about.php?local=ro">Romana</a> </p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
