/**
 * 	Remove Dashboard Wigets Action
 *	WordPress Version Version 4.6+
 *	der weissraum
 */
 
	add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );
 
	function remove_dashboard_widgets() {
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); 	// Right Now - Auf einen Blick
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal'); 		// Activity / Aktivität - since 3.8
	 	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); 	// Quick Press
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); 		// WordPress blog - WordPress-Nachrichten
 
	/**
	 * 	Remove Multisite Dashboard Widgets 
	 *	WordPress Version Version 4.6+
	 *	Use this as the second parameter to remove widgets from a network dashboard.
	 */
		// remove_meta_box( 'dashboard-network', 'dashboard', 'normal' );
 
	/**
	 * 	Plugin Dashboard Widgets
	 */
		// remove_meta_box( 'wordfence_activity_report_widget', 'dashboard', 'normal'); // Plugin Wordfence: Report Widget
 
	/**
	 *	WordPress Version Version 4.6-
	 */
		// remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' ); 	// Recent Comments
		// remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );  	// Incoming Links
		// remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );   		// Plugins
		// remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );  		// Recent Drafts
		// remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );   		// Other WordPress News
	}
/**
 *	END Remove Dashboard Wigets Action
 */
