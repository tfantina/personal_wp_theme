<?php get_header(); ?>
<!-- page layout -->

<div class="row">
    <?php if(have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
      endwhile; endif;
      ?>
</div>

<!-- end pagelayout -->
  <?php get_footer(); ?>
