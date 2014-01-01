<?php
/**
 * Elgg pageparts: create or update datalist
 *
 */

datalist_set('pageparts',serialize(array(
	'about' => get_input('about'),
	'terms' => get_input('terms'),
	'privacy' => get_input('privacy'),
	'contact' => get_input('contact'),
	'welcome_guests' => get_input('welcome_guests'),
	'welcome_members' => get_input('welcome_members'),
	)));

system_message(elgg_echo("pageparts:posted"));
forward(REFERER);
