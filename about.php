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

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  
  <!--Timetable-->
  <link href="css/timetable.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
  <script>
	$(document).ready(function() {
        $('.opening-hours li').eq(new Date().getDay()).addClass('today');
    });
  </script>

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
	<span class="site-heading-upper text-primary mb-3"> <?php echo $lang[$language]['title'] ?> </span>
	<span class="site-heading-lower"> <?php echo $lang[$language]['name'] ?> </span>
  </h1>

  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">escape land</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="index.php">  <?php echo $lang[$language]['button_no1'] ?> 
					<span class="sr-only">(current)</span>
					</a>
                </li>
                <li class="nav-item active px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="about.php"> <?php echo $lang[$language]['button_no2'] ?> </a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="products.php"> <?php echo $lang[$language]['button_no3'] ?> </a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="login.php"> <?php echo $lang[$language]['button_no4'] ?> </a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="3b-reserve-slot.php"> <?php echo $lang[$language]['button_no5'] ?> </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

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
  
  <!--Timetable-->
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
					<div class="business-hours">
						<h2 class="title">Opening Hours</h2>
						<ul class="list-unstyled opening-hours">
							<li>Sunday <span class="pull-right">Closed</span></li>
							<li>Monday <span class="pull-right">10:00-18:00</span></li>
							<li>Tuesday <span class="pull-right">10:00-18:00</span></li>
							<li>Wednesday <span class="pull-right">10:00-18:00</span></li>
							<li>Thursday <span class="pull-right">10:00-18:00</span></li>
							<li>Friday <span class="pull-right">10:00-20:00</span></li>
							<li>Saturday <span class="pull-right">10:00-20:00</span></li>
						</ul>
					</div>
          </div>
        </div>
      </div>
    </div>
  </section>  

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
