<?php
if (! is_active_sidebar('woocommerce-sidebar')) {
  return;
}
?>

<aside id="secondary" class="sidebar woocommerce-sidebar section" aria-label="<?php esc_attr_e('WooCommerce Sidebar', 'rara-travel-tour'); ?>">
  <?php dynamic_sidebar('woocommerce-sidebar'); ?>
</aside>
