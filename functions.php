<?php add_action('after_setup_theme', 'theme_slug_setup');
function theme_slug_setup() {
  add_theme_support('title-tag');
}
if (! isset($content_width)) {
  $content_width = 800;
}
add_theme_support('automatic-theme-links');

?>
