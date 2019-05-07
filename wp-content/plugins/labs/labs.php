<?php

use App\Features\PostTypes\ServicePostType as ServicePostType;

use App\Features\Taxonomies\ServiceTaxonomy;

use App\Features\MetaBoxes\ServiceDetailsMetaBox;

/**
 * Plugin Name:   Labsn
 * Plugin URI:    PLUGIN SITE HERE
 * Description    PLUGIN DESCRIPTION HERE
 * Author:        YOUR NAME HERE
 * Author:        YOUR SITE HERE
 * Text domaine:  Labs
 * Domaine path:  /languages
 * Version:       0.1.0
 * 
 *  */


require_once('autoload.php');

require_once('env.php');

require_once('helpers.php');

// require_once('App/Features/PostTypes/ServicePostType.php');

add_action('init', [ServicePostType::class, 'register']);
add_action('init', [ServiceTaxonomy::class, 'register']);
add_action('add_meta_boxe_service', [ServiceDetailsMetabox::class, 'add_meta_box']);
add_action('save_post_' . ServicePostType::$slug, [ServiceDetailsMetaBox::class, 'save']);