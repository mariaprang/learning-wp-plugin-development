<?php
//
///*
// Plugin Name: Plugin Development Sandbox
// Description: This plugin is used for testing out and learning some features of plugin development
// */
//
//function cc_comment()
//{
//    global $_REQUEST;
//
//    $to = "test@somewhere.com";
//    $subject = "New comment posted @ yourblog " . $_REQUEST['subject'];
//    $message = "Message from " . $_REQUEST['name'] . " at email " . $_REQUEST['email'] .
//        ": \n" . $_REQUEST['comments'];
//    mail($to, $subject, $message);
//}
//
//add_action('comment_post', 'cc_comment');
//
//function add_contributor_to_post($content)
//{
//    if (is_feed()) {
//        return $content . ' Created by XYZ at ' . date . ' all rights reserved.';
//    } else {
//        return $content;
//    }
//}
//
//add_filter('the_content', 'add_contributor_to_post');
//
//function cc_comm_option_page()
//{
//
//    if (wp_verify_nonce('cccomm_admin_options_update')) {
//        update_option('cccomm_cc_email', $_POST['cc_email']);
//        ?>
<!--        <div id="message" class="updated"> Email was saved/updated</div>-->
<!--        --><?php
//    }
//
//    ?>
<!--    <div class="wrap">-->
<!--        <h2>Admin Settings for Plugin</h2>-->
<!--        <p>Welcome to Admin Settings for Plugin</p>-->
<!--        <form action="#" method="post" id="cc_form-comment-section">-->
<!--            <input type="text" placeholder="Enter your email: " name="cc_email"-->
<!--                   value="--><?php //echo esc_attr(get_option('cccomm_cc_email')); ?><!--">-->
<!--            <input type="submit" name="submit" value="Save email">-->
<!--            --><?php //wp_nonce_field('cccomm_admin_options_update'); ?>
<!--        </form>-->
<!--    </div>-->
<!--    --><?php
//}
//
//function cccomm_plugin_menu()
//{
//    add_menu_page("Admin Settings C", "CC Admin Comment", "manage_options",
//        "cc_comments_plugin", "cc_comm_option_page");
//}
//
//add_action("admin_menu", "cccomm_plugin_menu");
