<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mudit Associates</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v2.0.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Tax</span>Eazy</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li <?php if($currentPage == "home") echo 'class="active"'; ?>><a href="index.php">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li class="<?php if($currentPage == "gst" || $currentPage == "gst_return") echo 'active';?> drop-down"><a href="#services">GST Portal</a>
            <ul>
              <li <?php if($currentPage == "gst") echo 'class="active"'; ?>><a href="gst_registeration.php">GST Registeration</a></li>
              <li <?php if($currentPage == "gst_return") echo 'class="active"'; ?>><a href="gst_return.php">GST Returns Filling</a></li>
            </ul>
</li>
<li <?php if($currentPage == "itr") echo 'class="active"'; ?>><a href="itr.php">Income Tax Return Filling</a></li>          
<li class="<?php if($currentPage == "iec" || $currentPage == "fssai" || $currentPage == "msme") echo 'active';?> drop-down"><a href="#services">Business Registeration</a>
            <ul>
              <li <?php if($currentPage == "msme") echo 'class="active"'; ?>><a href="msme.php">MSME Registration</a></li>
              <li <?php if($currentPage == "iec") echo 'class="active"'; ?>><a href="iec.php">Import Export Code</a></li>
              <li <?php if($currentPage == "fssai") echo 'class="active"'; ?>><a href="fssai.php">FSSAI Food License</a></li>
            </ul>
          </li>
          
          <li <?php if($currentPage == "contact") echo 'class="active"'; ?>><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
</body>
  </html>