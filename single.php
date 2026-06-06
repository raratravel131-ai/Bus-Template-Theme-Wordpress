<?php
get_header();
?>

<main id="primary" class="section single-post">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="section-heading">
          <p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p>
          <?php the_title('<h1>', '</h1>'); ?>
          <p><?php esc_html_e('Published by', 'rara-travel-tour'); ?> <?php the_author_posts_link(); ?></p>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content">
          <?php
          the_content();
          wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'rara-travel-tour'),
            'after'  => '</div>',
          ));
          ?>
        </div>

        <footer class="entry-footer">
          <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
        </footer>
      </article>

      <?php
      the_post_navigation();
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
