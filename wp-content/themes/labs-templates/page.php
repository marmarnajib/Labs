<?php
get_header();
?>
<div class="page-top-section">
   <div class="overlay"></div>
   <div class="container text-right">
       <div class="page-info">
           <h2><?php the_title(); ?></h2>
           <div class="page-links">
               <a href="#">Home</a>
               <span><?php the_title(); ?></span>
           </div>
       </div>
   </div>
</div>

<div class="container single-post-container">
   <div class="post-content">
       <?php wp_reset_query(); ?>
       <?php while (have_posts()) : the_post(); ?>
           <?php the_content(); ?>
       <?php endwhile; ?>
   </div>
</div>
<?php get_template_part('templates/contact');

get_footer();
?>
