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

<?php settings_fields($this->plugin_name); ?>