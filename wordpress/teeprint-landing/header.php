<?php if (!defined('ABSPATH')) exit; ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#contenu">Aller au contenu</a>
<header class="site-header">
  <div class="wrap header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="TEESHIRT. Personnalisé, accueil">
      <span class="brand-name">TEESHIRT<span class="brand-dot">.</span></span>
      <span class="brand-tagline">PERSONNALISÉ <i aria-hidden="true">—</i> BY TSHIRTEE</span>
    </a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Ouvrir le menu"><span></span><span></span></button>
    <nav class="main-nav" id="main-nav" aria-label="Navigation principale">
      <a href="#textiles">Textiles</a><a href="#techniques">Impression</a><a href="#atelier">L’atelier</a>
      <a class="btn btn-small" href="#devis">Demander un devis <span aria-hidden="true">↗</span></a>
    </nav>
  </div>
</header>
