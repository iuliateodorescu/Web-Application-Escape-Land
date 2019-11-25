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

  <title>Escape Land</title>
  
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
                    <a class="nav-link text-uppercase text-expanded" href="home.php">  <?php echo $lang[$language]['button_no1'] ?> 
					<span class="sr-only">(current)</span>
					</a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="contact.php"> <?php echo $lang[$language]['button_no2'] ?> </a>
                </li>
                <li class="nav-item px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="rooms.php"> <?php echo $lang[$language]['button_no3'] ?> </a>
                </li>
                <li class="nav-item active px-lg-5">
                    <a class="nav-link text-uppercase text-expanded" href="booking.php"> <?php echo $lang[$language]['button_no5'] ?> </a>
                </li>
				
								<?php
								  if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1) {
										echo '<li class="nav-item px-lg-5">
			                     <a class="nav-link text-uppercase text-expanded" href="adminPage.php">'.$lang[$language]['button_no6'].'</a>
			                   </li>';
								  }
								?>

            </ul>
        </div>
    </div>
</nav>
	
	
	<div class="container">
	   <div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> <?php echo $lang[$language]['booking_title'] ?> </h2>
				<form action="bookingResult.php" method="post">
		
	    <div class="form-group">
		 <label> <?php echo $lang[$language]['name_field'] ?> </label>
		 <input type="text" name="name" class="form-control" required>
		</div>
		
		<div class="form-group">
		 <label> <?php echo $lang[$language]['email_field'] ?> </label>
		 <input type="text" name="email" class="form-control" required>
		</div>
		
		<div class="form-group">
		 <label> <?php echo $lang[$language]['phone_field'] ?> </label>
		 <input type="text" name="tel" class="form-control" required>
		</div>
		
		<!--<div class="container">
		 <label> <?php //echo $lang[$language]['room_field'] ?> </label>
		 <div class ="dropdown dropright">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#" name="room"> <?php //echo $lang[$language]['room_no1_name'] ?> </a>
				<a class="dropdown-item" href="#" name="room"> <?php //echo $lang[$language]['room_no2_name'] ?> </a>
				<a class="dropdown-item" href="#" name="room"> <?php //echo $lang[$language]['room_no3_name'] ?> </a>
				<a class="dropdown-item" href="#" name="room"> <?php //echo $lang[$language]['room_no4_name'] ?> </a>
			</div>
		 </div>
		</div>-->
		
		<div class="form-group">
		 <label> <?php echo $lang[$language]['room_field'] ?> </label>
		 <input type="text" name="room" class="form-control" required>
		</div>
		
		<div class="form-group">
		 <label> <?php echo $lang[$language]['pers_field'] ?> </label>
		 <input type="integer" name="pers" class="form-control" required>
		</div>
		
		<div class="form-group">
		 <label> <?php echo $lang[$language]['date_field'] ?> </label>
		 <input type="date" name="date" class="form-control" required>
		</div>
		
		<div class="form-group">
		 <label> <?php echo $lang[$language]['hour_field'] ?></label>
		 <input type="text" name="hour" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary" name="res_go"> <?php echo $lang[$language]['button_no5'] ?> </button>
		
				</form>
				</div>
				
			<div class="col-md-6 login-right">
			<h2> <?php echo $lang[$language]['price'] ?> <br><br></h2>
			<form action="registration.php" method="post">
		
	    <div class="form-group">
		 <p> <?php echo $lang[$language]['participants'] ?> </p>
		 <p> <?php echo $lang[$language]['discount'] ?> <br> <?php echo $lang[$language]['price_no1'] ?> </p>
		 <p> <?php echo $lang[$language]['usual'] ?> <br> <?php echo $lang[$language]['price_no2'] ?> </p>
		 <p> <?php echo $lang[$language]['when'] ?> <br> <?php echo $lang[$language]['when_ans'] ?> </p>
		 <p> <?php echo $lang[$language]['what'] ?> <br> <?php echo $lang[$language]['what_ans'] ?> </p>
		</div>
		
			</form>
	
	</div>
	</div>
	</div>
	</div>
	

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small"> <a href="booking.php?local=en">English</a> | <a href="booking.php?local=ro">Romana</a></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>