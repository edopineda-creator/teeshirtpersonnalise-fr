<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','gallery','caption','style','script']);
});
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('teeprint-style', get_stylesheet_uri(), [], '0.3.0');
  wp_enqueue_script('teeprint-interactions', get_theme_file_uri('/assets/site.js'), [], '0.3.0', true);
});
add_action('customize_register', function($wp_customize) {
  $wp_customize->add_section('teeprint_contact', ['title' => 'Teeprint — Devis']);
  $wp_customize->add_setting('teeprint_form_shortcode', ['sanitize_callback' => 'sanitize_text_field', 'default' => '']);
  $wp_customize->add_control('teeprint_form_shortcode', ['section'=>'teeprint_contact', 'label'=>'Shortcode du formulaire de devis', 'type'=>'text']);
});
add_filter('pre_get_document_title', function($title) {
  if (is_front_page() && !defined('WPSEO_VERSION') && !defined('RANK_MATH_VERSION') && !defined('AIOSEO_VERSION')) return 'Personnalisation de tee-shirt dès 5 pièces | TSHIRTEE';
  return $title;
});
add_action('wp_head', function() {
  if (!is_front_page() || defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || defined('AIOSEO_VERSION')) return;
  echo '<meta name="description" content="Personnalisation de tee-shirt avec logo dès 5 pièces. Sérigraphie et impression DTF pour entreprises, commerces, cafés, clubs et associations. Atelier à Carcassonne.">' . "\n";
  echo '<meta property="og:type" content="website">' . "\n";
  echo '<meta property="og:title" content="Personnalisation de tee-shirt dès 5 pièces | TSHIRTEE">' . "\n";
  echo '<meta property="og:description" content="Tee-shirts, sweats et polos personnalisés. Sérigraphie et impression DTF par votre atelier à Carcassonne.">' . "\n";
  echo '<meta property="og:image" content="' . esc_url(get_theme_file_uri('/assets/textile-og.webp')) . '">' . "\n";
  echo '<meta property="og:image:alt" content="Visuel d’illustration de textiles personnalisés en studio.">' . "\n";
  echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}, 2);
add_action('wp_head', function() {
  if (!is_front_page() || defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || defined('AIOSEO_VERSION')) return;
  $faq = [
    ['q' => 'Quelle est la quantité minimale ?', 'a' => 'Nous étudions les demandes à partir de 5 pièces.'],
    ['q' => 'Quel fichier fournir pour mon logo ?', 'a' => 'Vous pouvez joindre un fichier PDF, JPG ou PNG de 5 Mo maximum au formulaire de devis.'],
    ['q' => 'Quel est le prix d’un tee-shirt personnalisé ?', 'a' => 'Le prix dépend du textile, de la quantité, du visuel et de la technique choisie. Demandez un devis adapté à votre projet.'],
    ['q' => 'Sérigraphie ou DTF : quelle différence ?', 'a' => 'La sérigraphie convient notamment aux séries et aux visuels aux couleurs définies. Le DTF permet de reproduire des motifs détaillés et multicolores. Nous vous conseillons selon votre projet.'],
  ];
  $schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
  foreach ($faq as $item) $schema['mainEntity'][] = ['@type' => 'Question', 'name' => $item['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['a']]];
  echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}, 3);
