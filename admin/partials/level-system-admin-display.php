<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://sublimelinks.com
 * @since      1.0.0
 *
 * @package    Level_system
 * @subpackage Level_system/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

<form method="post" name="cleanup_options" action="options.php">

<?php  

	$options = get_option($this->plugin_name);

	$body_class_slug = $options['body_class_slug'];
	$jquery_cdn = $options['jquery_cdn'];
	$cdn_provider = $options['cdn_provider']; 
	$login_button_primary_color = $options['login_button_primary_color'];
?>	
	
<?php settings_fields($this->plugin_name); ?>
	
	
	<!-- login buttons and links primary color-->
            <fieldset class="level_system-admin-colors">
                <legend class="screen-reader-text"><span><?php _e('Color of the progress bar', $this->plugin_name);?></span></legend>
                <label for="<?php echo $this->plugin_name;?>-login_button_primary_color">
                    <input type="text" class="<?php echo $this->plugin_name;?>-color-picker" 
						   id="<?php echo $this->plugin_name;?>-login_button_primary_color" 
						   name="<?php echo $this->plugin_name;?>[login_button_primary_color]" value="<?php echo $login_button_primary_color;?>" />
                    <span><?php esc_attr_e('Color of the progress bar', $this->plugin_name);?></span>
                </label>
            </fieldset>
<?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>