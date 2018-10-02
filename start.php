<?php
/**
 * This is a proof-of-concept implementation of embedding Java applets in Elgg.
 * It includes a sample applet and game.
 * (C) iionly 2012
 * GNU General Public License version 2
 */

elgg_register_event_handler('init', 'system', 'jpatchwork_init');

function jpatchwork_init() {
	// Add a menu item to the main site menu
	if (elgg_is_logged_in()) {
		elgg_register_menu_item('site', [
			'name' => elgg_echo('jpatchwork:menu'),
			'text' => elgg_echo('jpatchwork:menu'),
			'href' => elgg_get_site_url() . 'jpatchwork/sample',
		]);
	}

	elgg_register_menu_item('page', [
		'name' => elgg_echo('jpatchwork:sample_menu'),
		'text' => elgg_echo('jpatchwork:sample_menu'),
		'href' => elgg_get_site_url() . 'jpatchwork/sample',
		'context' => 'jpatchwork',
		'section' => 'default',
	]);

	elgg_register_menu_item('page', [
		'name' => elgg_echo('jpatchwork:frozenbubble_menu'),
		'text' => elgg_echo('jpatchwork:frozenbubble_menu'),
		'href' => elgg_get_site_url() . 'jpatchwork/frozenbubble',
		'context' => 'jpatchwork',
		'section' => 'default',
	]);

	// routing of urls
	elgg_register_page_handler('jpatchwork', 'jpatchwork_page_handler');
}

function jpatchwork_page_handler($page) {
	if (!isset($page[0])) {
		$page[0] = 'sample';
	}

	switch ($page[0]) {
		case 'sample':
			echo elgg_view_resource('jpatchwork/sample');
			break;
		case 'frozenbubble':
			echo elgg_view_resource('jpatchwork/frozenbubble');
			break;
		default:
			return false;
	}

	return true;
}
