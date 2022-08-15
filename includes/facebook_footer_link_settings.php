<?php

// Create the menu link

function ffl_options_menu_link()
{
    // title of the option, title of the menu link
    add_options_page('Facebook Footer Link Options', 'Facebook Footer link',
        'manage_options', 'ffl-options', 'ffl_options_content');
}

function ffl_options_content()
{
    // init options global
    global $ffl_options;
    // output buffer
    ob_start(); ?>
    <div class="wrap">
        <!-- Localize the string -->
        <h2><?php _e('Facebook Footer Link Settings', 'ffl_domain'); ?> </h2>
        <p><?php _e('Settings for the Facebook Footer Plugin', 'ffl_domain'); ?> </p>
        <form method="post" action="options.php">
            <?php settings_fields('ffl_settings_group'); ?>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="ffl_settings[enable]"><?php _e('Enable', 'ffl_domain'); ?></label>
                    <td>
                        <input type="checkbox" name="ffl_settings[enable]" id="ffl_settings[enable]" value="1">
                        <?php checked('1', isset($ffl_options['enable'])); ?>
                    </td>
                    </th>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="ffl_settings[facebook_url]"><?php _e('Facebook Profile URL', 'ffl_domain'); ?></label>
                    <td>
                        <input type="text" name="ffl_settings[facebook_url]"
                               id="ffl_settings[facebook_url]"
                               value="<?php echo isset($ffl_options['facebook_url']); ?>"
                               class="regular-text">
                        <p class="description">
                            <?php _e('Enter your facebook profile URL', 'ffl_domain'); ?>
                        </p>
                    </td>
                    </th>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="ffl_settings[link_color]"><?php _e('Link Color', 'ffl_domain'); ?></label>
                    <td>
                        <input type="text" name="ffl_settings[link_color]"
                               id="ffl_settings[link_color]"
                               value="<?php echo isset($ffl_options['link_color']); ?>"
                               class="regular-text">
                        <p class="description">
                            <?php _e('Enter a link color or hex value', 'ffl_domain'); ?>
                        </p>
                    </td>
                    </th>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="ffl_settings[show_in_feed]"><?php _e('Show in posts feed', 'ffl_domain'); ?></label>
                    <td>
                        <input type="checkbox" name="ffl_settings[enable]" id="ffl_settings[show_in_feed]" value="1">
                        <?php checked('1', isset($ffl_options['show_in_feed'])); ?>
                    </td>
                    </th>
                </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary"
                       value=" <?php _e('Save changes', 'ffl_domain') ?>">
            </p>
        </form>
    </div>
    <?php
    echo ob_get_clean();
}

add_action('admin_menu', 'ffl_options_menu_link');

function ffl_register_settings()
{
    register_setting('ffl_settings_group', 'ffl_settings');
}

add_action('admin_init', 'ffl_register_settings');