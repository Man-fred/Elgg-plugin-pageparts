<?php
/**
 * Elgg custom index page
 * 
 */

elgg_push_context('front');

elgg_push_context('widgets');

$list_params = array(
	'type' => 'object',
	'limit' => 4,
	'full_view' => false,
	'list_type_toggle' => false,
	'pagination' => false,
);

//grab the latest 4 blog posts
$list_params['subtype'] = 'blog';
$blogs = elgg_list_entities($list_params);

//grab the latest bookmarks
$list_params['subtype'] = 'bookmarks';
$bookmarks = elgg_list_entities($list_params);

//grab the latest files
$list_params['subtype'] = 'file';
$files = elgg_list_entities($list_params);

//grab the latest events
$list_params['subtype'] = 'event';
$event_manager = elgg_list_entities($list_params);

//grab the startpageinfos and latest pages
$pageparts = unserialize(datalist_get('pageparts'));

if (elgg_is_logged_in()) {
	$startpage = "<h2>" . elgg_echo("welcome") . " ". elgg_get_logged_in_user_entity()->name."</h2>";
	if (isset($pageparts['welcome_members'])) {
		$startpage .= elgg_view_entity(get_entity($pageparts['welcome_members']), array('full_view' => true));
	}
} else {
	if (isset($pageparts['welcome_guests'])) {
		$startpage = elgg_view_entity(get_entity($pageparts['welcome_guests']), array('full_view' => true));
	}
}
$pages = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'page',
	'limit' => 1,
	'full_view' => true,
	'list_type_toggle' => false,
	'pagination' => false,
));

//get the newest members who have an avatar
$newest_members = elgg_list_entities_from_metadata(array(
	'metadata_names' => 'icontime',
	'type' => 'user',
	'limit' => 10,
	'full_view' => false,
	'pagination' => false,
	'list_type' => 'gallery',
	'gallery_class' => 'elgg-gallery-users',
	'size' => 'small',
));

//newest groups
$list_params['type'] = 'group';
unset($list_params['subtype']);
$groups = elgg_list_entities($list_params);

//grab the login form
$login = elgg_view("core/account/login_box");

elgg_pop_context();

// lay out the content
$params = array(
	'blogs' => $blogs,
	'bookmarks' => $bookmarks,
	'files' => $files,
	'groups' => $groups,
	'login' => $login,
	'members' => $newest_members,
	'event_manager' => $event_manager,
	'startpage' => $startpage,
	'pages' => $pages
);
$body = elgg_view_layout('custom_index', $params);

// no RSS feed with a "widget" front page
global $autofeed;
$autofeed = FALSE;

echo elgg_view_page('', $body);
