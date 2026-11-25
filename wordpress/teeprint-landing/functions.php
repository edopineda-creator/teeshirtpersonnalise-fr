<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function () { add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('html5', ['search-form','gallery','caption','style','script']); });
add_action('wp_enqueue_scripts', function () { wp_enqueue_style('teeprint-style', get_stylesheet_uri(), [], '0.2.0'); });
add_action('customize_register', function($wp_customize) {
  $wp_customize->add_section('teeprint_contact', ['title' => 'Teeprint — Devis']);
  $wp_customize->add_setting('teeprint_form_shortcode', ['sanitize_callback' => 'sanitize_text_field', 'default' => '']);
  $wp_customize->add_control('teeprint_form_shortcode', ['section'=>'teeprint_contact', 'label'=>'Shortcode du formulaire de devis', 'type'=>'text']);
});

add_filter('pre_get_document_title', function($title) {
  if (is_front_page() && !defined('WPSEO_VERSION') && !defined('RANK_MATH_VERSION') && !defined('AIOSEO_VERSION')) return 'Personnalisation de tee-shirts dès 5 pièces | TSHIRTEE';
  return $title;
});
add_action('wp_head', function() {
  if (is_front_page() && !defined('WPSEO_VERSION') && !defined('RANK_MATH_VERSION') && !defined('AIOSEO_VERSION')) echo '<meta name="description" content="Personnalisation de tee-shirts avec votre logo dès 5 pièces. Sérigraphie et impression DTF pour entreprises, clubs et associations. Demandez votre devis.">' . "\n";
}, 2);
