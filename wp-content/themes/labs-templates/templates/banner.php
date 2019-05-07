 <?php
 $modif1 = get_theme_mod('personnalisez_back');
 $modif2 = get_theme_mod('personnalisez_back2');

 ?>



 <!-- Intro Section -->
  <div class="hero-section">
    <div class="hero-content">
      <div class="hero-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/big-logo.png" alt="">
        <p><?php echo get_bloginfo('name'); ?></p>
      </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
      <div class="item  hero-item" data-bg="<?= $modif1; ?>"></div>
      <div class="item  hero-item" data-bg="<?= $modif2; ?>"></div>
    </div>
  </div>
  <!-- Intro Section -->