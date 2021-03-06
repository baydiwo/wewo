<?php
/**
 * Events Options Settings
 *
 * @package Theme Options
 * @author Tokopress
 *
 */

function tokopress_event_settings( $options ) {
	$options[] = array(
		'name' 	=> __( 'Events', 'tokopress' ),
		'type' 	=> 'heading'
	);

	$options[] = array(
		'name' => __( 'Events - Catalog Page', 'tokopress' ),
		'type' => 'info'
	);
	
		$options[] = array(
			'name' => __( 'Events Page Title', 'tokopress' ),
			'desc' => __( 'DISABLE page title on events catalog page.', 'tokopress' ),
			'id' => 'tokopress_events_hide_catalog_title',
			'std' => '0',
			'type' => 'checkbox'
		);

		$options[] = array(
			'name' => __( 'Events Sidebar', 'tokopress' ),
			'desc' => __( 'DISABLE sidebar on events catalog page.', 'tokopress' ),
			'id' => 'tokopress_events_hide_catalog_sidebar',
			'std' => '0',
			'type' => 'checkbox'
		);

		$options[] = array(
			'name' => __( 'Custom Text For Events Page Title', 'tokopress' ),
			'desc' => __( 'Default: Events', 'tokopress' ),
			'id' => 'tokopress_events_custom_catalog_title',
			'std' => '',
			'type' => 'text'
		);

		$options[] = array(
			'name' => __( 'Custom Text For "Upcoming Events" Title', 'tokopress' ),
			'desc' => '',
			'id' => 'tokopress_events_custom_upcoming_events',
			'std' => '',
			'type' => 'text'
		);

	$options[] = array(
		'name' => __( 'Events - Single Event Page', 'tokopress' ),
		'type' => 'info'
	);
	
		$options[] = array(
			'name' => __( 'Single Event Page Title', 'tokopress' ),
			'desc' => __( 'DISABLE page title on single event page.', 'tokopress' ),
			'id' => 'tokopress_events_hide_single_title',
			'std' => '0',
			'type' => 'checkbox'
		);

		$options[] = array(
			'name' => __( 'Single Event Sidebar', 'tokopress' ),
			'desc' => __( 'DISABLE sidebar on single event page.', 'tokopress' ),
			'id' => 'tokopress_events_hide_single_sidebar',
			'std' => '0',
			'type' => 'checkbox'
		);

		$options[] = array(
			'name' => __( 'Single Event Comment', 'tokopress' ),
			'desc' => __( 'ENABLE comment on single event page.', 'tokopress' ),
			'id' => 'tokopress_events_show_single_comment',
			'std' => '0',
			'type' => 'checkbox'
		);

		$options[] = array(
			'name' => __( 'Single Venue Link', 'tokopress' ),
			'desc' => __( 'LINK venue name to single venue page.', 'tokopress' ),
			'id' => 'tokopress_events_show_venue_link',
			'std' => '0',
			'type' => 'checkbox'
		);

		$options[] = array(
			'name' => __( 'Single Organizer Link', 'tokopress' ),
			'desc' => __( 'LINK organizer name to single organizer page.', 'tokopress' ),
			'id' => 'tokopress_events_show_organizer_link',
			'std' => '0',
			'type' => 'checkbox'
		);

	$options[] = array(
		'name' => __( 'Events - Change the word Event/Events globally', 'tokopress' ),
		'type' => 'info'
	);

		$options[] = array(
			'name' => __( 'Events Label Singular', 'tokopress' ),
			'desc' => __( 'Default: Event', 'tokopress' ),
			'id' => 'tokopress_events_label_singular',
			'std' => '',
			'type' => 'text'
		);

		$options[] = array(
			'name' => __( 'Events Label Singular Lowercase', 'tokopress' ),
			'desc' => __( 'Default: event', 'tokopress' ),
			'id' => 'tokopress_events_label_singular_lowercase',
			'std' => '',
			'type' => 'text'
		);

		$options[] = array(
			'name' => __( 'Events Label Plural', 'tokopress' ),
			'desc' => __( 'Default: Events', 'tokopress' ),
			'id' => 'tokopress_events_label_plural',
			'std' => '',
			'type' => 'text'
		);

		$options[] = array(
			'name' => __( 'Events Label Plural Lowercase', 'tokopress' ),
			'desc' => __( 'Default: events', 'tokopress' ),
			'id' => 'tokopress_events_label_plural_lowercase',
			'std' => '',
			'type' => 'text'
		);

	return $options;
}
add_filter( 'of_options', 'tokopress_event_settings' );
