
<?php get_header(); ?>
 
<!-- content start -->
  <?php if (have_posts()) : ?>

    <div class="row">


      <?php while(have_posts()) : the_post();
          get_template_part('content', get_post_format());
      endwhile; ?>




      <div class="col-xs-5 col-sx-offset-4">

        <?php the_posts_pagination( array(
          'prev_text'  => __('Previous page ', 'T Fantina'),
          'next_text' => __('| Next page', 'T Fantina'),
          'before_page_number' => '<span class="meta-nav">'. __('Page', 'T Fantina') . ' </span> ',
        ));
        else :
          get_template_part('content');
        endif;  ?>

      </div>


  </div>




  <!-- this is the index -->



<?php get_footer(); ?>
