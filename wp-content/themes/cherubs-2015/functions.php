<?php

add_theme_support( 'menus' );
add_action('init', 'register_my_menus');
function register_my_menus(){
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'side-bar-menu' => 'Side Bar Menu'
    )
  );
}

?>
