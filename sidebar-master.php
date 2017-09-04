<!-- sidebar begins (only on desktop) -->
<div class="sidebar hidden-xs">
  <div class="sidebar-content">
  <?php if ( is_home() && ! is_front_page() ) : ?>
    <?php get_sidebar(); ?>
  <?php else : ?>
    <h2> Recent </h2>
    <ul class="list-unstyled">
    <?php
      $args = array( 'numberposts' => '5',
                   'orderby' => 'post_date',
                   'order' => 'DESC');

      $recent_posts = wp_get_recent_posts($args);
      foreach( $recent_posts as $recent) {
          echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
        }
        wp_reset_query();
      ?>
    </ul>
<?php endif; ?>
</div>
<div class="sidebar-logo">
  <img src="http://localhost/wordpress/wp-content/themes/tfblog-2017/logo-color.png" width="100%" alt="a logo for the sidebar!"/>
</div>
</div>
<!-- end sidebar -->
