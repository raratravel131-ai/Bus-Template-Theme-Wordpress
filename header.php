<?php
/**
 * Theme header.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Rara Travel & Tour provides safe, comfortable, and reliable bus transportation for city trips, tours, corporate travel, and private charters." />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="top">
  <nav class="navbar" aria-label="Main navigation">
    <a class="brand" href="#top" aria-label="Rara Travel and Tour home">
      <span class="brand-mark">RT</span>
      <span>Rara Travel & Tour</span>
    </a>

    <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="nav-links" id="navLinks">
      <a href="#services">Services</a>
      <a href="#fleet">Fleet</a>
      <a href="#routes">Routes</a>
      <a href="#testimonials">Reviews</a>
      <a href="#contact" class="nav-cta">Book Now</a>
    </div>
  </nav>
</header>