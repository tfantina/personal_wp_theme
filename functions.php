<?php add_action('after_setup_theme', 'theme_slug_setup');
function theme_slug_setup() {
  add_theme_support('title-tag');
}
if (! isset($content_width)) {
  $content_width = 800;
}
add_theme_support('automatic-theme-links');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
