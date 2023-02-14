<?php
/*
Plugin Name: Hello World
Plugin URI: https://example.com
Description: A simple "Hello World" plugin for WordPress
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
*/

function hello_world() {
    echo "<p>Hello World!</p>";
}

add_action( 'wp_footer', 'hello_world' );
?>
