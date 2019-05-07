<!DOCTYPE html>
<html lang="en">

<head>
  <title>Labs - Design Studio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Labs - Design Studio">
  <meta name="keywords" content="lab, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->

<?php  wp_head(); ?>




  <!-- Stylesheets -->





  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

  <?php
  $navlogo = get_theme_mod('personnalisaton_log');
  ?>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader">
      <img src="<?= $navlogo; ?>" alt="">
      <h2>Loading.....</h2>
    </div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="logo">
      <img src="<?= $navlogo; ?>" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
      <ul class="menu-list">
      <?php
        wp_nav_menu([
          'menu_class' => '',
          'theme-location' => 'main-menu',
        ]);
        ?>
      </ul>
    </nav>
  </header>
  <!-- Header section end -->

  <!-- FIN HEADER
    ============================================ -->
