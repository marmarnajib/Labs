<?php
namespace App\Features\MetaBoxes;
use App\Features\PostTypes\ServicePostType;
class ServiceDetailsMetaBox
{
    public static $slug = 'service_details_metabox';

    /**
     * 
     * @return void
     * 
     */
    public static function add_meta_box()
    {
        $screen = [ServicePostType::$slug];
            add_meta_box(
                self::$slug,        //Unique ID
                __("Details de la cette"),  //Box title
                [self::class, 'render'],  //Content callback, must be of type callable
                $screen         //Post type
            );
    }

    /**
     *
     * @return void
     */
    public static function render()
    {
        view('metaboxes/service-detail');
    }

    /**
     * 
     * @param
     * @return void
     */

     public static function save($post_id)
     {


        if (count($_POST) != 0) {

            $type_service = sanitize_text_field($_POST['labs_type_service']);

            update_post_meta($post_id, 'labs_type_service', $type_service);
        }
    }
}