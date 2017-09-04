<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS & Jquery & Normalize-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo esc_url( get_template_directory_uri() );?>/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 why do we still need this? -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body>
    <!-- start page wrapper -->
    <div class="wrapper">
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid">

        <div class="navbar-header navbar">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only"> Toggle Navigation </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <nav class="navbar-brand"> <a href="#"><img src="/images/layout/logo-mini.png" alt="logo" height="50px" width="50px" class="brand-icon"></a>
            <a href="<?php echo esc_url( site_url() ) ;?>" class="site-title">
                <?php echo get_bloginfo('name'); ?>
                <?php if ( is_home() && ! is_front_page() ) : ?>
                | <?php single_post_title(); ?>
                <?php endif; ?></a>
          </nav>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php/portfolio">Work</a></li>
              <li><a href="index.php/resources">Projects</a></li>
              <li><a href="index.php/blog">Blog</a></li>
              <li><a href="index.php/photos">Photos</a><li>

          </ul>

      </div>
    </div>
    </nav>
    <!-- end navbar -->
    <!-- container for website -->
        <!-- page header -->
        <div class="row">
          <div class="col-sm-10">
            <div class="blog-header">

            </div>
          </div>
        </div>
      <!-- end page header -->


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
        <img src="/images/layout/logo-color.png" width="100%" alt="a logo for the sidebar!"/>
      </div>
      </div>
      <!-- end sidebar -->
