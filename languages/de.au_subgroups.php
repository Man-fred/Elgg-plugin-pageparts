<?php

$german = array(
    'au_subgroups' => "Untergruppen",
    'au_subgroups:subgroup' => "Untergruppe",
    'au_subgroups:subgroups' => "Untergruppen",
    'au_subgroups:parent' => "übergeordnete Gruppe",
    'au_subgroups:add:subgroup' => 'Erstelle eine Untergruppe',
    'au_subgroups:nogroups' => 'Es wurden keine Untergruppen erstellt',
    'au_subgroups:error:notparentmember' => "Nutzer können keiner Gruppe beitreten, wenn sie nicht Mitglied in der übergeordneten Gruppe sind",
    'au_subtypes:error:create:disabled' => "In dieser Grupe können keine Untergruppen angelegt werden",
    'au_subgroups:noedit' => "Diese Gruppe kann nicht bearbeitet werden",
    'au_subgroups:subgroups:delete' => "Gruppe löschen",
    'au_subgroups:delete:label' => "Was soll mit dem Inhalt dieser Gruppe geschehen? Die gewählte Option wird auch auch alle Untergruppen angewendet, die gelöscht werden.",
    'au_subgroups:deleteoption:delete' => 'Den gesamten Inhalt dieser Gruppe löschen',
    'au_subgroups:deleteoption:owner' => 'Den gesamten Inhalt dieser Gruppe den jeweiligen Autoren übertragen',
    'au_subgroups:deleteoption:parent' => 'Den gesamten Inhalt dieser Gruppe der übergeordneten Gruppe übertragen',
    'au_subgroups:subgroup:of' => "Untergruppe von %s",
    'au_subgroups:setting:display_alphabetically' => "Anzeige der persönlichen Gruppenliste alphabetisch?",
    'au_subgroups:setting:display_subgroups' => 'Anzeige der Untergruppen in der Standardsortierung?',
    'au_subgroups:setting:display_featured' => 'Anzeige der besonderen Gruppen in der persönlichen Gruppenliste?',
    'au_subgroups:error:invite' => "Aktion abgebrochen - die fogenden Nutzer sind nicht Mitglied der übergeordneten Gruppe und können nicht eingeladen werden.",
    'au_subgroups:option:parent:members' => "Mitglieder der übergeordneten Gruppe",
    'au_subgroups:subgroups:more' => "Zeige alle Untergruppen",
	
	// group options
	'au_subgroups:group:enable' => "Untergruppen: Untergruppen in dieser Gruppe zugelassen?",
	'au_subgroups:group:memberspermissions' => "Untergruppen: Darf jedes Mitglied Untergruppen anlegen? (wenn nicht, dürfen nur Gruppenadministratoren Untergruppen anlegen)",
    
    /*
     * Widget
     */
    'au_subgroups:widget:order' => 'Ergebnisse sortieren nach',
    'au_subgroups:option:default' => 'Erzeugungszeitpunkt',
    'au_subgroups:option:alpha' => 'Alphabetisch',
    'au_subgroups:widget:numdisplay' => 'Anzahl der anzuzeigenden Untergruppen',
    'au_subgroups:widget:description' => 'Untergruppen dieser Gruppe anzeigen',
	
	/*
	 * Move group
	 */
	'au_subgroups:move:edit:title' => "Diese Gruppe einer anderen Gruppe unterordnen",
	'au_subgroups:transfer:help' => "Sie können diese Gruppe jeder anderen Gruppe unterordnen, in der Sie Schreibrechte haben. Mitglieder, die nicht Mitglied der neuen übergeordneten Gruppe sind, werden aus der Gruppe ausgeschlossen und bekommen eine neue Einladung in die übergeordnete Gruppe und den dazugehörigen Untergruppen. <b>Untergruppen dieser Gruppe werden gleichzeitig verschoben</b>",
	'au_subgroups:search:text' => "Suche Gruppen",
	'au_subgroups:search:noresults' => "Keine Gruppe gefunden",
	'au_subgroups:error:timeout' => "Suche dauert zu lange",
	'au_subgroups:error:generic' => "Bei der Suche ist ein Fehler aufgetreten",
	'au_subgroups:move:confirm' => "Sind Sie sicher, diese Gruppe zu einer Untergruppe einer anderen zu machen?",
	'au_subgroups:error:permissions' => "Sie müssen Schreibrechte in dieser Untergruppe und allen übergeordneten Gruppen haben. Eine Gruppe kann auch nicht Untergruppe zu sich selbst sein.",
	'au_subgroups:move:success' => "Gruppe wurde erfolgreich verschoben",
	'au_subgroups:error:invalid:group' => "Ungültige Gruppen-ID",
	'au_subgroups:invite:body' => "Hallo %s,

die Gruppe %s wurde verschoben und zu einer Untergruppe der Gruppe %s.
Da Sie im Moment nicht Mitglied der neuen übergeordneten Gruppe sind, wurden Sie als Mitglied entfernt. Sie wurden aber automatisch eingeladen, wieder einzutreten als Mitglied der übergeordneten Gruppe. 

Unten auf den Link klicken, um die Einladung anzusehen:

%s",

);
					
add_translation("de",$german);
