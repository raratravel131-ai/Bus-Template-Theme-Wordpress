<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="section comments-area">
  <?php if (have_comments()) : ?>
    <h2>
      <?php
      printf(
        esc_html(_nx('One comment', '%1$s comments', get_comments_number(), 'comments title', 'rara-travel-tour')),
        number_format_i18n(get_comments_number())
      );
      ?>
    </h2>

    <ol class="comment-list">
      <?php
      wp_list_comments(array(
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size'=> 56,
      ));
      ?>
    </ol>

    <?php the_comments_navigation(); ?>
  <?php endif; ?>

  <?php if (! comments_open() && get_comments_number()) : ?>
    <p class="no-comments"><?php esc_html_e('Comments are closed.', 'rara-travel-tour'); ?></p>
  <?php endif; ?>

  <?php
  comment_form(array(
    'title_reply' => esc_html__('Leave a Reply', 'rara-travel-tour'),
    'class_submit' => 'btn btn-primary',
  ));
  ?>
</section>
