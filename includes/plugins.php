<?php

/**
 * Plugins
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

require_once get_template_directory() . '/includes/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

/**
 * Required Plugins
 */
function incredible__register_required_plugins()
{

	$plugins = array(

		array(
			'name'         => 'Advanced Custom Fields Pro',
			'slug'         => 'advanced-custom-fields-pro',
			'source'       => get_template_directory() . '/includes/plugins/advanced-custom-fields-pro.zip',
			'external_url' => 'https://www.advancedcustomfields.com/pro/',
			'required'     => true,
		),

	);

	$config = array(
		'id'           => 'astratheme',       // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                   // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'incredible__register_required_plugins');
