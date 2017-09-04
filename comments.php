<?php if (post_password_required()) {
  return;
} ?>


  <?php if(have_comments()) : ?>




    <ul class="comment-list">
      <?php wp_list_comments( array(
                  'style' => 'ul',
                  'reply_text' => 'Reply',
                  'per_page' => 20,
                  'format' => 'html5',
                  'short_ping' => true,
                  'avatar_size' => 45,
      ));
      ?>
    </ul>
  <?php endif; ?>


  <?php comment_form(); ?>
