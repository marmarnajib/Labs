<?php

define('INCLUDE_DIR', get_template_directory() . "/includes");
require_once(INCLUDE_DIR . '/enqueue-script.php');
require_once(INCLUDE_DIR . '/customizer.php');


function ajout_personnalisation_services($wp_customize)
{
 $wp_customize->add_panel('text-panel-services', [
   'title' => __('Section Services'),
   'Description' => __('Personnalisation de la section services')
 ]);
 $wp_customize->add_section('text-services-section-text', [
   'panel' => 'text-panel-services',
   'title' => __('Personnalisation du texte'),
   'description' => __('Personnalisez le texte')
 ]);
 $wp_customize->add_setting('title-services', [
   'type' => 'theme_mod',
   'sanitize_callback' => 'sanitize_textarea_field'
 ]);
 $wp_customize->add_control('text-services-text-center-title', [
   'section' => 'text-services-section-text',
   'settings' => 'title-services',
   'label' => __('Titre Services'),
   'description' => __('Personnalisez le titre'),
   'type' => 'textarea'
 ]);
}
add_action('customize_register', 'ajout_personnalisation_services');



function ajout_personnalisation_client($wp_customize)
{
  $wp_customize->add_panel('text-panel-client', [
    'title' => __('Section client'),
    'Description' => __('Personnalisation de la section client')
  ]);
  $wp_customize->add_section('modif-titre-client', [
    'panel' => 'text-panel-client',
    "title" => __('Personnalisation de la section client'),
    'description' => __('personnalisez le titre')
  ]);
  $wp_customize->add_setting('title_client', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  $wp_customize->add_control('text-client-titre', [
    'section' => 'modif-titre-client',
    'settings' => 'title_client',
    'label' => __('Titre client'),
    'description' => __('Personnalisez le titre de la section client'),
    'type' => 'textarea'
  ]);  
}
add_action('customize_register', 'ajout_personnalisation_client');


function ajout_personnalisation_team($wp_customize)
{
  $wp_customize->add_panel('text-panel-team' , [
    'title' => __('Section team'),
    'description' => __('Personnalisation de la section team')
  ]);
  $wp_customize->add_section('modif-titre-team', [
    'panel' => 'text-panel-team',
    'title' => __('Personnalisation de la section team'),
    'description' => __('Personnalisez le titre')
  ]);

  $wp_customize->add_setting('title_team', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);

  $wp_customize->add_control('text_team_titre', [
    'section' => 'modif-titre-team',
    'settings' => 'title_team',
    'label' => __('Titre team'),
    'description' => __('Personnalisez le titre de la section team'),
    'type' => 'textarea'
  ]);
}
add_action('customize_register', 'ajout_personnalisation_team');



function  ajout_personnalisation_images($wp_customize)
{
  $wp_customize->add_panel('background-head', [
    'title' => __('Section banner'),
    'description' => __('modifier le background')
  ]);

  $wp_customize->add_section('modif_back', [
    'panel' => 'background-head',
    'title' => __('Personnalisez le background du banner'),
    'description' =>__('Personnalisez le background')
  ]);

  $wp_customize->add_setting('personnalisez_back', [
  ]);

$wp_customize->add_control(new WP_Customize_Upload_Control(
  $wp_customize,
  'modif_banner_back',
  [
    'label' => __('background image'),
    'section' => 'modif_back',
    'settings' => 'personnalisez_back',
  ]
  ));

  $wp_customize->add_setting('personnalisez_back2', [
    ]);
  
  $wp_customize->add_control(new WP_Customize_Upload_Control(
    $wp_customize,
    'modif_banner_back2',
    [
      'label' => __('background image'),
      'section' => 'modif_back',
      'settings' => 'personnalisez_back2',
    ]
    ));
}
add_action('customize_register', 'ajout_personnalisation_images');

function ajout_personnalisation_logo($wp_customize)
{
  $wp_customize->add_panel('modification_logo' ,[
    'title'=> __('section navbar'),
    'description' => __('personnalisez logo')
  ]);

  $wp_customize->add_section('modif_logo', [
    'panel' => 'modification_logo',
    'title' => __('Personnalisaton logo'),
    'description' => __('Personnalisez logo')
  ]);

  $wp_customize->add_setting('personnalisaton_log', [

  ]);

  $wp_customize->add_control(new WP_Customize_Upload_Control(
    $wp_customize,
    'modif_logo',
    [
      'label' => __('background image'),
      'section' => 'modif_logo',
      'settings' => 'personnalisaton_log',
    ]
    ));
}
add_action('customize_register', 'ajout_personnalisation_logo');
