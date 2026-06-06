<?php
get_header();
?>

<main id="primary" class="section woocommerce-page-wrapper">
  <div class="section-heading">
    <p class="eyebrow"><?php esc_html_e('Shop', 'rara-travel-tour'); ?></p>
    <h1><?php woocommerce_page_title(); ?></h1>
  </div>

  <div class="woocommerce-layout">
    <div class="woocommerce-main">
      <?php woocommerce_content(); ?>
    </div>
    <?php get_sidebar('woocommerce'); ?>
  </div>
</main>

<?php
get_footer();
?>
