<?php 
  $team_titre = get_theme_mod('title_team', __('Texte un'));
?>
  <!-- Team Section -->
  <div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2><?= $team_titre?></h2>
      </div>
      <div class="row">
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?php echo get_template_directory_uri()?>/img/team/1.jpg" alt="">
            <h2>Christinne Williams</h2>
            <h3>Project Manager</h3>
          </div>
        </div>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?php echo get_template_directory_uri()?>/img/team/2.jpg" alt="">
            <h2>Christinne Williams</h2>
            <h3>Junior developer</h3>
          </div>
        </div>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?php echo get_template_directory_uri()?>/img/team/3.jpg" alt="">
            <h2>Christinne Williams</h2>
            <h3>Digital designer</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Section end-->