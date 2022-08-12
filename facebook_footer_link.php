<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Adds social media link to the footer of the page
 * Version: 1.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit();
}

class WP_Facebook_Footer_Link
{

    private static $instance;

    /**
     * Plugin version number
     *
     * @since 1.0.3
     * @var string $version Plugin version number.
     */
    public $version = '1.0.10';


    /**
     * Plugin file.
     *
     * @since 1.0.0
     * @var string $file Plugin file path.
     */
    public $file = __FILE__;

    public function init()
    {
        // References our plugin folder by locating the facebook-link-folder and then concatenating with the includes folder
        require_once plugin_dir_path(__FILE__) . 'includes/facebook_footer_link_scripts.php';

    }

    public static function instance()
    {

        if (is_null(self::$instance)) :
            self::$instance = new self();
        endif;

        return self::$instance;

    }


}

/**
 * The main function responsible for returning the WP_Facebook_Footer_Link object.
 * Use this function like you would a global variable, except without needing to declare the global.
 * Example: <?php WP_Facebook_Footer_Link()->method_name(); ?>
 * @return object WP_Facebook_Footer_Link class object.
 */
if (!function_exists('WP_Facebook_Footer_Link')) :

    function WP_Facebook_Footer_Link()
    {

        return WP_Facebook_Footer_Link::instance();

    }


endif;

WP_Facebook_Footer_Link();

$GLOBALS['wp_facebook_footer_link'] = WP_Facebook_Footer_Link();
