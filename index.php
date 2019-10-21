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

  <title>Business Casual - Start Bootstrap Theme</title>

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


  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/home.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower"> <?php echo $lang[$language]['title_no1'] ?> </span>
          </h2>
          <p class="mb-3"> <?php echo $lang[$language]['content_no1'] ?> </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="products.html">BOOK NOW</a>
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
              <span class="section-heading-upper">About us</span>
              <span class="section-heading-lower">what we offer</span>
            </h2>
            <p class="mb-0">Escape Land is a fun,new, team building real-life escape game entertainment concept, designed for small groups of 2-6 people. Your goal is simple:work together as a team and test your skills, to escape a locked room.
            Escapers must be observing and use their critical thinking skills to escape the rooms. Communication with your team members is the most important if you want to get out in time. See if you can keep cool and escape the room in under 60 minutes.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">English | Romanian</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>