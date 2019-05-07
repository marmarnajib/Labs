<?php
/**
 * Plugin Name: Labs
 * Author: plugin Author
 * Text Domain: Labs
 * Domain Path: /languages
 */

namespace App\Features\PostTypes;

class ServicePostType{
    public static $slug = 'service';
    public static function register(){
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Services'),
                    'singular_name' => __('Service'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajoute le service'),
                    'edit_item' => __('Modifier le service'),
                    'new_item' => __('Nouvelle recette'),
                    'view_item' => __('Voir le service'),
                    'view_items' => __('Voir les services'),
                    'search_items' => __('Rechercher des services'),
                    'not_found' => __('Pas de service trouvée.'),
                    'not_fount_in_trash' => __('Pas de service dans la corbeille.'),
                    'all_items' => __('Tous les services'),
                    'archives' => __('Services archivées'),
                    'filter_items_list' => __('Filtre de service'),
                    'items_list_navigation' => __('Nvigation de service'),
                    'items_list' => __('Liste service'),
                    'item_published' => __('Service publiée.'),
                    'item_published_privately' =>__('Service publiée en privé.'),
                    'item_reverted_to_draft' => __('Le service est retournée au brouillon.'),
                    'item_scheduled' => __('Service planifiée.'),
                    'items_undated' => __('Service mise a jour.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'service',
                    
                ],

                'taxonomies' => ['category', 'post_tag'],
                'menu_icon' => 'dashicons-smartphone',
                'support' => ['title', 'editor', 'excerpt', 'thumbnail'],
            ]
            );
    }
}