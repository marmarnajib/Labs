<?php 

class MgCustomizer{

    
    
    /**
 *  * //https://developer.wordpress.org/themes/customize-api/customizer-objects/

 * Fonction qui ajoute la posibilité de customiser la partie personnalisation du theme
 * 
 * @param [type] $wp_customize
 * @return void
 */
public static function ajout_personnalisation_about($wp_customize)
{
    
  $wp_customize->add_panel('coding-panel-about', [
    'title' => __('Section About'),
    'Description' => __('Personnalisation de la section about')
  ]);
  $wp_customize->add_section('coding-about-section-text', [
    'panel' => 'coding-panel-about',
    'title' => __('Personnalisation du texte'),
    'description' => __('Personnalisez le texte')
    ]);
    
    // AJOUT VIDEO
  $wp_customize->add_section('coding-about-section-video', [
      'panel' => 'coding-panel-about',
    'title' => __('Personnalisation de la video'),
    'description' => __('Personnalisez la video')
    ]);
    
  $wp_customize->add_setting('coding-about-video', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);

  $wp_customize->add_control('coding-about-video-control', [
    'section' => 'coding-about-section-video',
    'settings' => 'coding-about-video',
    'label' => __('ajout lien video'),
    'description' => __('Personnalisez la video'),
    'type' => 'link'
  ]);
  
  //FIN AJOUT VIDEO
  
  $wp_customize->add_setting('coding-about-text-premier', [
      'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
    ]);
  $wp_customize->add_setting('coding-about-text-deuxieme', [
      'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    

  $wp_customize->add_setting('coding-about-text-dernier', [
      'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    
  
    $wp_customize->add_control('coding-about-text-premier-control', [
    'section' => 'coding-about-section-text',
    'settings' => 'coding-about-text-premier',
    'label' => __('Texte colonne premier'),
    'description' => __('Personnalisez le texte de la colonne gauche'),
    'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-about-text-milieu-control', [
    'section' => 'coding-about-section-text',
    'settings' => 'coding-about-text-deuxieme',
    'label' => __('Texte colonne deuxieme'),
    'description' => __('Personnalisez le texte de la colonne droite'),
    'type' => 'textarea'
  ]);

  $wp_customize->add_control('coding-about-text-dernier-control', [
    'section' => 'coding-about-section-text',
    'settings' => 'coding-about-text-dernier',
    'label' => __('Texte colonne troisieme'),
    'description' => __('Personnalisez le texte de la colonne droite'),
    'type' => 'textarea'
  ]);
}
}
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_about']);
