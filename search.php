<?php
get_header();
?>

<main id="primary" class="section search-page">
  <header class="section-heading">
    <p class="eyebrow"><?php esc_html_e('Search', 'rara-travel-tour'); ?></p>
    <h1>
      <?php
      printf(
        esc_html__('Search results for: %s', 'rara-travel-tour'),
        '<span>' . esc_html(get_search_query()) . '</span>'
      );
      ?>
    </h1>
  </header>

  <?php if (have_posts()) : ?>
    <div class="route-grid">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('route-card'); ?>>
          <span><?php echo esc_html(get_post_type()); ?></span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p>
        </article>
      <?php endwhile; ?>
    </div>

    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <p><?php esc_html_e('No results found. Try another keyword.', 'rara-travel-tour'); ?></p>
    <?php get_search_form(); ?>
  <?php endif; ?>
</main>

<?php
get_footer();
?>
