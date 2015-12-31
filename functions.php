<?php

  function theme_scripts(){
   wp_enqueue_style("styles", get_stylesheet_uri());
   wp_enqueue_script("scripts", get_template_directory_uri() . "/app.js");
  }
  add_action("wp_enqueue_scripts", "theme_scripts");
  function add_my_script() {
      wp_register_script('my_script', home_url() . '/wp-content/themes/mia_grodsky_com/app.js', array( 'jquery' ));
      wp_enqueue_script('my_script');
  }


  add_action( 'wp_enqueue_scripts', 'add_my_script' );

 ?>
