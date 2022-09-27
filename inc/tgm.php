<?php

require_once get_template_directory() . '/lib/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'gymlife_register_required_plugins' );


function gymlife_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		


		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Kirki Customizer',
			'slug'      => 'kirki',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'gymlife',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
