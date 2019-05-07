<?php
$text_title_services = get_theme_mod('title-services', __('GET IN <span>THE LAB</span> AND SEE THE SERVICES'));

$args = [
    'post_type' => 'service',
    'posts_per_page' => 9,
    'category_name' => 'Services',
    'orderby' => 'rand',
];
$query = new WP_Query($args);
?>
<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2><?= $text_title_services ?></h2>
        </div>
        <div class="row">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="<?php echo get_post_meta(get_the_ID(), 'section_icones', true) ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2><?php the_title() ?></h2>
                            <p><?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        wp_reset_postdata();
        ?>
            <div class="text-center">
                <a href="" class="site-btn">Browse</a>
            </div>
        </div>
    </div>
    <!-- services section end -->