<?php
/**
 * Plugin for creating web pages for your site
 */

elgg_register_event_handler('init', 'system', 'pageparts_init');

function pageparts_init() {

    // expand plugin pages
	elgg_register_page_handler('pages', 'pageparts_pages_page_handler');
	// Register public external pages
//	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'pageparts_public');

	// add a menu item for the admin edit page
	elgg_register_admin_menu_item('configure', 'pageparts', 'appearance');

	// add footer links
	pageparts_setup_footer_menu();

	// register action
//	$actions_base = elgg_get_plugins_path() . 'pageparts/actions';
//	elgg_register_action("expages/edit", "$actions_base/edit.php", 'admin');

	// Extend system CSS with our own styles
	elgg_extend_view('css/elgg', 'custom_index/css');

	// Replace the default index page
	elgg_register_page_handler('', 'pageparts_index');
}

/**
 * Serve the front page
 * 
 * @return bool Whether the page was sent.
 */
function pageparts_index() {
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	return true;
}

/**
 * Extension for pages_page_handler().
 * URLs take the form of
 *  View page:        pages/view/<guid>/<title>
 *
 * Title is ignored
 *
 * @param array $page
 * @return bool
 */
function pageparts_pages_page_handler($page, $handler){
	if (!isset($page[0]) || $page[0] != 'view') {
		return pages_page_handler($page, $handler);
	} else {
	    //$base_dir = elgg_get_plugins_path() . 'pages/pages/pages';
	    elgg_load_library('elgg:pages');
        elgg_push_breadcrumb(elgg_echo('pages'), 'pages/all');
	    set_input('guid', $page[1]);
	    include elgg_get_plugins_path() . 'pageparts/pages/pages/view.php';
		return true;
    }
}

/**
 * Setup the links to site pages
 */
function pageparts_setup_footer_menu() {
	$pages = array(71 => 'about', 70 => 'terms', 72 => 'privacy');
	foreach ($pages as $view => $page) {
		$wg_item = new ElggMenuItem($page, elgg_echo("expages:$page"), '/pages/view/'.$view.'/'.$page);
		elgg_register_menu_item('walled_garden', $wg_item);

		$footer_item = clone $wg_item;
		elgg_register_menu_item('footer', $footer_item);
	}
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
