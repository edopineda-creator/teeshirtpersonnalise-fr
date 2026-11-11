<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function () { add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('html5', ['search-form','gallery','caption','style','script']); });
add_action('wp_enqueue_scripts', function () { wp_enqueue_style('teeprint-style', get_stylesheet_uri(), [], '0.1.0'); });
add_action('customize_register', function($wp_customize) {
  $wp_customize->add_section('teeprint_contact', ['title' => 'Teeprint — Devis']);
  $wp_customize->add_setting('teeprint_form_shortcode', ['sanitize_callback' => 'sanitize_text_field', 'default' => '']);
  $wp_customize->add_control('teeprint_form_shortcode', ['section'=>'teeprint_contact', 'label'=>'Shortcode du formulaire de devis', 'type'=>'text']);
});
