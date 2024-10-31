<?php
/*
Plugin Name: Prop-ed
Plugin URI: http://prop-ed.com
Description: Lets you embed an article on the fly
Author: Abu Ashraf Masnun
Version: 1.1
Author URI: http://masnun.me
*/
function proped_js_shortcode($atts)
{
    extract(shortcode_atts(array(
        'url' => '',
    ), $atts));

            if (!empty($url)) {
        $html = "<script type=\"text/javascript\" src=\"{$url}embed\"></script>";
        return $html;
    }
}

add_shortcode('proped', 'proped_js_shortcode');