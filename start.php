<?php
/**
 * Plugin for creating web pages for your site
 */

elgg_register_event_handler('init', 'system', 'pageparts_init');

function pageparts_init() {

	// Register a page handler, so we can have nice URLs
	elgg_register_page_handler('about', 'pageparts_page_handler');
	elgg_register_page_handler('terms', 'pageparts_page_handler');
	elgg_register_page_handler('privacy', 'pageparts_page_handler');
	elgg_register_page_handler('expages', 'pageparts_page_handler');

        // hack plugin pages
	elgg_register_page_handler('pages', 'pageparts_pages_page_handler');
	// Register public external pages
//	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'pageparts_public');

	// add a menu item for the admin edit page
	elgg_register_admin_menu_item('configure', 'pageparts', 'appearance');

	// mark users as visible only for Logged-In-Access
	elgg_register_plugin_hook_handler('create', 'user', 'pageparts_new_user');
	// add footer links
//	expages_setup_footer_menu();

	// register action
//	$actions_base = elgg_get_plugins_path() . 'pageparts/actions';
//	elgg_register_action("expages/edit", "$actions_base/edit.php", 'admin');
}

/**
 * Disables a user upon registration.
 *
 * @param string $hook
 * @param string $type
 * @param bool   $value
 * @param array  $params
 * @return bool
 */
function pageparts_new_user($params) {
die('pageparts_new_user'.print_r($params, true));	
    $user = elgg_extract('user', $params);

	// no clue what's going on, so don't react.
	if (!$user instanceof ElggUser) {
		return;
	}
        // set visibility to logged_in by default
        if ($user->access_id == 2)
            $user->access_id = 1;
	return $value;
}

/**
 * Extend the public pages range
 *
function pageparts_public($hook, $handler, $return, $params){
	$pages = array('about', 'terms', 'privacy');
	return array_merge($pages, $return);
}
 */
function pageparts_pages_page_handler($page, $handler){
	elgg_load_library('elgg:pages');
	
	if (!isset($page[0])) {
		$page[0] = 'all';
	}

	elgg_push_breadcrumb(elgg_echo('pages'), 'pages/all');

	$base_dir = elgg_get_plugins_path() . 'pages/pages/pages';

	$page_type = $page[0];
	switch ($page_type) {
		case 'owner':
			include "$base_dir/owner.php";
			break;
		case 'friends':
			include "$base_dir/friends.php";
			break;
		case 'view':
			set_input('guid', $page[1]);
			include elgg_get_plugins_path() . 'pageparts/pages/pages'.'/view.php';
			break;
		case 'add':
			set_input('guid', $page[1]);
			include "$base_dir/new.php";
			break;
		case 'edit':
			set_input('guid', $page[1]);
			include "$base_dir/edit.php";
			break;
		case 'group':
			include "$base_dir/owner.php";
			break;
		case 'history':
			set_input('guid', $page[1]);
			include "$base_dir/history.php";
			break;
		case 'revision':
			set_input('id', $page[1]);
			include "$base_dir/revision.php";
			break;
		case 'all':
			include "$base_dir/world.php";
			break;
		default:
			return false;
	}
	return true;
}

/**
 * Setup the links to site pages
 */
function pageparts_setup_footer_menu() {
	$pages = array('about', 'terms', 'privacy');
	foreach ($pages as $page) {
		$url = "$page";
		$wg_item = new ElggMenuItem($page, elgg_echo("expages:$page"), $url);
		elgg_register_menu_item('walled_garden', $wg_item);

		$footer_item = clone $wg_item;
		elgg_register_menu_item('footer', $footer_item);
	}
}

/**
 * External pages page handler
 *
 * @param array  $page    URL segements
 * @param string $handler Handler identifier
 * @return bool
 */
function pageparts_page_handler($page, $handler) {
	if ($handler == 'expages') {
		expages_url_forwarder($page[1]);
	}
	$type = strtolower($handler);

	$title = elgg_echo("expages:$type");
	$header = elgg_view_title($title);

	$object = elgg_get_entities(array(
		'type' => 'object',
		'subtype' => $type,
		'limit' => 1,
	));
	if ($object) {
		$content .= elgg_view('output/longtext', array('value' => $object[0]->description));
	} else {
		$content .= elgg_echo("expages:notset");
	}
	$content = elgg_view('expages/wrapper', array('content' => $content));

	if (elgg_is_logged_in() || !elgg_get_config('walled_garden')) {
		$body = elgg_view_layout('one_sidebar', array('title' => $title, 'content' => $content));
		echo elgg_view_page($title, $body);
	} else {
		elgg_load_css('elgg.walled_garden');
		$body = elgg_view_layout('walled_garden', array('content' => $header . $content));
		echo elgg_view_page($title, $body, 'walled_garden');
	}
	return true;
}

/**
 * Forward to the new style of URLs
 *
 * @param string $page
 */
function pageparts_url_forwarder($page) {
	global $CONFIG;
	$url = "{$CONFIG->wwwroot}{$page}";
	forward($url);
}
