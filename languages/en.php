<?php
/**
 * External pages English language file
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'admin:appearance:pageparts' => "Special Pages",
	'pageparts' => "Special pages",
	'pageparts:about' => "About",
	'pageparts:terms' => "Terms",
	'pageparts:privacy' => "Privacy",
	'pageparts:contact' => "Contact",
	'pageparts:welcome_guests' => "Not logged in",
	'pageparts:welcome_members' => "Logged in",
	'pageparts:blank' => "Menuitem invisible/blank page",

	'pageparts:notset' => "This page has not been set up yet.",
	'pageparts:legend:pages' => "Special Pages in Footermenu",
	'pageparts:description:pages' => "The page must have public access to show them before login.",
	'pageparts:legend:welcome' => "Pages to show on Startpage",
	'pageparts:description:welcome_guests' => "Page for visitors without login. The page must have public access.",
	'pageparts:description:welcome_members' => "Page for logged-in users",
	/**
	 * Status messages
	 */
	'pageparts:posted' => "Your page was successfully updated.",
	'pageparts:error' => "Unable to save this page.",
    'pageparts:not_logged_in' => "Most of the content is not visible for guests. Please log in or register."
);

add_translation("en", $english);
