<?php
if (! is_active_sidebar('primary-sidebar')) {
  return;
}
?>

<aside id="secondary" class="sidebar primary-sidebar section" aria-label="<?php esc_attr_e('Primary Sidebar', 'rara-travel-tour'); ?>">
  <?php dynamic_sidebar('primary-sidebar'); ?>
</aside>
