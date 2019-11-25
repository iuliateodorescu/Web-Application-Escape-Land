<?php
	include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Escape Land</title>

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
                <li class="nav-item active px-lg-5">
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
                <li class="nav-item px-lg-5">
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


    <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/home.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower">
				<?php  if (isset($_SESSION['username'])){
							echo $lang[$language]['greeting'];
							echo ", ";
							echo $_SESSION['username'];
						}?>
			</span>
          </h2>
          <p class="mb-3"> <?php if( isset($_SESSION['success']) ){
									echo $lang[$language]['booking_ok']; ?>
									<br>
							<?php	echo $lang[$language]['total_price'];
									echo $_SESSION['success'];
									unset($_SESSION['success']);
								}else
									echo $lang[$language]['content_no1'] ?> </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="logout.php?logout='1'"> <?php echo $lang[$language]['logout_button'] ?> </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper"> <?php echo $lang[$language]['title_no2'] ?> </span>
              <span class="section-heading-lower"> <?php echo $lang[$language]['title_no3'] ?> </span>
            </h2>
            <p class="mb-0"> <?php echo $lang[$language]['content_no2'] ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small"> <a href="home.php?local=en">English</a> | <a href="home.php?local=ro">Romana</a></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
