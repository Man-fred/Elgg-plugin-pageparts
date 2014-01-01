<?php
/**
 * External pages menu
 *
 * @uses $vars['type']
 */

$type = $vars['type'];

//set the url
$url = elgg_get_site_url() . "admin/site/pageparts";
 
//$pages = array('about', 'terms', 'privacy', 'contact', 'guests', 'members');
//$tabs = array();
foreach ($pages as $page) {
	$tabs[] = array(
		'title' => elgg_echo("pageparts:$page"),
		'url' => "admin/appearance/pageparts?type=$page",
		'selected' => $page == $type,
	);
}

echo elgg_view('navigation/tabs', array('tabs' => $tabs, 'class' => 'elgg-form-settings'));
