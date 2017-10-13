<!-- post start-->
 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="panel panel-info">
  <div class="panel-heading">

    <div class="col-xs-10 col-xs-offset-1">

    <h2 class="blog-post-title">

      <?php if (is_single()) : the_title();
        else : the_title(sprintf('<a href="%s" class="blog-post-title">', esc_url(get_permalink())), '</a>');
        endif; ?>
   </h2>

  </div>
  </div>
  <div class="panel-body">
    <div class="col-xs-10 col-sm-offset-1">

    <?php the_content(); ?>
     <?php wp_link_pages(); ?>
  </div>
</div>
  <div class="panel-footer">
    <div class="row">

      <!-- this may have to be altered if date and comments start showing up on pages-->

      <?php if ( is_home() || is_single() && !is_front_page() ) : ?>
          <div class="col-xs-3 col-sm-offset-1">
            <h3><?php the_date(); ?></h3>

          </div>
          <div class="col-xs-3 col-sm-offset-4">
            <?php if(is_single()): the_tags( 'Tags: ',', '  ); endif; ?> <h3>
              <?php //this will be removed if the theme goes for wider distribution
              if ( class_exists( 'Add_to_Any_Subscribe_Widget' ) ) { Add_to_Any_Subscribe_Widget::display(); } ?>

            <?php if (!is_single()):
             comments_number('no comments', 'one comment', '% comments');
           endif; ?> </h3>
          </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php if (is_single()) :?>
  <!-- only for single posts -->
<div class="panel panel-info">
  <div class="panel-heading">
    <div class="col-xs-10 col-xs-offset-1">
    <h4 class="blog-post-title">
      <?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h4>
  </div>
</div>
  <div class="panel-body">
    <div class="col-xs-10 col-xs-offset-1">
    <?php if (comments_open() || get_comments_number()) :
      comments_template();
    endif; ?>

  </div>
  </div>
</div>
<?php endif; ?>



<!-- post end -->
