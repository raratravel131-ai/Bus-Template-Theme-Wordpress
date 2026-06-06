<?php
get_header();
?>

<main id="primary" class="section archive-page">
  <header class="section-heading">
    <p class="eyebrow"><?php esc_html_e('Archive', 'rara-travel-tour'); ?></p>
    <?php the_archive_title('<h1>', '</h1>'); ?>
    <?php the_archive_description('<p>', '</p>'); ?>
  </header>

  <?php if (have_posts()) : ?>
    <div class="route-grid">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('route-card'); ?>>
          <span><?php echo esc_html(get_the_date('d M')); ?></span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p>
          <a class="btn btn-secondary" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'rara-travel-tour'); ?></a>
        </article>
      <?php endwhile; ?>
    </div>

    <?php the_posts_pagination(array(
      'mid_size' => 2,
      'prev_text' => esc_html__('Previous', 'rara-travel-tour'),
      'next_text' => esc_html__('Next', 'rara-travel-tour'),
    )); ?>
  <?php else : ?>
    <p><?php esc_html_e('No archive content found.', 'rara-travel-tour'); ?></p>
  <?php endif; ?>
</main>

<?php
get_footer();
?>
