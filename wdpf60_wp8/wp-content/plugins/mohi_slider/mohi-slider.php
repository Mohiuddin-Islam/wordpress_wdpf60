<?php

/**
 * @package Mohiuddin Slider
 * @version 1.0
 */
/*
Plugin Name: Mohiuddin Slider
Plugin URI: http://wordpress.org/plugins/mohi-slider/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Mohiuddin Islam
Version: 1.0
Author URI: http://mohiuddin.wdpf60.com/
*/

function mohiuddin_slider_setup()
{

    $args = array(
        'public' => true,
        'label'     => __('Slider', 'textdomain'),
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('slider_post', $args);
}
add_action('init', 'mohiuddin_slider_setup');

add_shortcode('mohiuddin-slider-list', 'mohiuddin_slider_listing');

function mohiuddin_slider_listing()
{
    
    echo '<div class="featured">
        <div class="wrap-featured zerogrid">
            <div class="slider">
                <div class="rslides_container">
                    <ul class="rslides" id="slider">';

    $query = new WP_Query(array(
        'post_type' => 'slider_post',
    ));

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
            '<li>';
            the_post_thumbnail();
            '</li>';

        endwhile;
    endif;

    echo '</ul>
                </div>
            </div>
        </div>
    </div>';
}
