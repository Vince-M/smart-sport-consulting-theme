<?php

function smartsport_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Roboto:wght@400;700;900&display=swap');
  wp_enqueue_style('smartsport_main_styles', get_theme_file_uri('main.css'));
}

add_action('wp_enqueue_scripts', 'smartsport_files');