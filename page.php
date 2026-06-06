<?php
get_header();
?>

<main id="primary" class="section page-content">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="section-heading">
          <p class="eyebrow"><?php esc_html_e('Page', 'rara-travel-tour'); ?></p>
          <?php the_title('<h1>', '</h1>'); ?>
        </header>

        <div class="entry-content">
          <?php
          the_content();
          wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'rara-travel-tour'),
            'after'  => '</div>',
          ));
          ?>
        </div>
      </article>

      <?php
      if (comments_open() || get_comments_number()) {
        comments_template();
      }
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php
get_footer();
?>
