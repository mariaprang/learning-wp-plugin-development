<?php

function ffl_add_footer($content)
{
    global $ffl_options;

    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span>
    Find me on <a style="color: ' . isset($ffl_options['color_link']) . ' " target="_blank" href="' . isset($ffl_options['facebook_url']) . '">Facebook</a>';
    $footer_output .= '</div>';


    if ($ffl_options) {
        if (is_single() || is_home() && isset($ffl_options['enable'])) {
            return $content . $footer_output;
        } else {
            if (is_single() && isset($ffl_options['enable'])) {
                return $content . $footer_output;
            }
        }
    }


    return $content . $footer_output;

}

add_filter('the_content', 'ffl_add_footer');