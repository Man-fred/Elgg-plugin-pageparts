<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$german = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Seiten",
	'pages:owner' => "Seiten von %s",
	'pages:friends' => "Seiten von Freunden",
	'pages:all' => "Alle Seiten",
	'pages:add' => "Eine Seiten hinzufügen",

	'pages:group' => "Gruppen-Seiten",
	'groups:enablepages' => 'Gruppen-Seiten aktivieren',

	'pages:edit' => "Diese Seite bearbeiten",
	'pages:delete' => "Diese Seite löschen",
	'pages:history' => "Bearbeitungsverlauf",
	'pages:view' => "Seite anzeigen",
	'pages:revision' => "Revision",
        'pages:current_revision' => "Aktuelle Revision",
        'pages:revert' => "Diese Revision wiederherstellen",

	'pages:navigation' => "Navigation",
        'pages:new' => "Eine neue Seite",
        'pages:notification' =>
'%s hat eine neue Seite erstellt:

%s
%s

Schau Dir die neue Seite an und schreibe einen Kommentar:
%s
',
	'item:object:page_top' => 'Haupt-Seiten',
	'item:object:page' => 'Seiten',
	'pages:nogroup' => 'Diese Gruppe hat noch keine Seiten.',
	'pages:more' => 'Weitere Seiten',
	'pages:none' => 'Es wurden noch keine Seiten erstellt.',

	/**
	* River
	**/

	'river:create:object:page' => '%s hat die Seite %s hinzugefügt.',
	'river:create:object:page_top' => '%s hat die Seite %s hinzugefügt.',
	'river:update:object:page' => '%s aktualisierte die Seite %s.',
	'river:update:object:page_top' => '%s aktualisierte die Seite %s.',
	'river:comment:object:page' => '%s schrieb einen Kommentar zur Seite %s.',
	'river:comment:object:page_top' => '%s schrieb einen Kommentar zur Seite %s.',

	/**
	 * Form fields
	 */

	'pages:title' => 'Titel der Seite',
	'pages:description' => 'Seitentext',
	'pages:tags' => 'Tags',
        'pages:parent_guid' => 'Übergeordnete Seite',
	'pages:access_id' => 'Zugangslevel',
	'pages:write_access_id' => 'Schreibberechtigung',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'Keine Zugangsberechtigung für diese Seite.',
	'pages:cantedit' => 'Du kannst diese Seite nicht bearbeiten.',
	'pages:saved' => 'Die Seite wurde gespeichert.',
	'pages:notsaved' => 'Die Seite konnte nicht gespeichert werden.',
	'pages:error:no_title' => 'Du mußt einen Titel für diese Seite eingeben.',
	'pages:delete:success' => 'Die Seite wurde gelöscht.',
	'pages:delete:failure' => 'Die Seite konnte nicht gelöscht werden.',
        'pages:revision:delete:success' => 'Die Revision der Seite wurde gelöscht.',
        'pages:revision:delete:failure' => 'Die Revision der Seite konnte nicht gelöscht werden.',
        'pages:revision:not_found' => 'Diese Revision konnte nicht gefunden werden.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Zuletzt aktualisiert am %s von %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revision erzeugt am %s von %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Anzahl der anzuzeigenden Seiten',
	'pages:widget:description' => "Dies ist eine Liste Deiner Seiten.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Seite anzeigen",
	'pages:label:edit' => "Seite bearbeiten",
	'pages:label:history' => "Bearbeitungsverlauf der Seite",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Diese Seite",
	'pages:sidebar:children' => "Unterseiten",
	'pages:sidebar:parent' => "Übergeordnete Seite",

	'pages:newchild' => "Eine Unterseite erstellen",
	'pages:backtoparent' => "Zurück zu '%s'",
);

add_translation("de", $german);