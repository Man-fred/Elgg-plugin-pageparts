<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage Elgguservalidationbyadmin
 */

$german = array(
	'admin:users:unvalidated' => 'Unvalidated',
	
	'email:validate:subject' => "%s beantragt die Bestätigung der Anmeldung für %s!",
	'email:validate:body' => "Hallo %s,

Ein User mit Benutzername %s beantragt die Bestätigung der Anmeldung. 

Geolocation: Details der Anmeldung
IP Adresse: %s
Ungefähre Lokalisation: %s

Sie können die Anmeldung mit dem folgendem Link bestätigen. Die Zugehörigkeit zum Teilnehmerkreis muss vorher überprüft werden.
%s

Wenn Sie nicht auf den Link klicken können, kopieren Sie ihn in das Adressfeld Ihres Browsers.
%s
%s
",

	'user:validate:subject' => "Herzlich Willkommen %s! Ihre Anmeldung ist aktiviert",
	'user:validate:body' => "Hallo %s,

Sie bekommen diese E-Mail, weil Ihr Account %s durch einen Administrator aktiviert wurde. 

Sie können sich nun mit den folgenden Daten einloggen:

Benutzername : %s
Paßwort : das während der Registrierung von Ihnen gewählte Paßwort

%s
%s
",

	'email:confirm:success' => "Die Anmeldung ist nun bestätigt",
	'email:confirm:fail' => "Die Anmeldung kann nicht bestätigt werden...",

	'uservalidationbyadmin:registerok' => "Sie werden benachrichtigt, sobald ein Administrator Ihre Anmeldung überprüft hat.",
	'uservalidationbyadmin:login:fail' => "Ihre Anmeldung wurde noch nicht bestätigt. Sie müssen warten, bis ein Administrator Ihre Angaben überprüft hat.",

	'uservalidationbyadmin:admin:no_unvalidated_users' => 'Keine unbestätigten Anmeldungen.',

	'uservalidationbyadmin:admin:unvalidated' => 'Unbestätigt',
	'uservalidationbyadmin:admin:user_created' => 'Angemeldet %s',
	'uservalidationbyadmin:admin:resend_validation' => 'Wiederhole die Bestätigung',
	'uservalidationbyadmin:admin:validate' => 'Bestätigen',
	'uservalidationbyadmin:admin:delete' => 'Löschen',
	'uservalidationbyadmin:confirm_validate_user' => 'Bestätige %s?',
	'uservalidationbyadmin:confirm_resend_validation' => 'Wiederhole die Bestätigungs-E-Mail an %s?',
	'uservalidationbyadmin:confirm_delete' => 'Lösche %s?',
	'uservalidationbyadmin:confirm_validate_checked' => 'Bestätige übeprüfte Anmeldungen?',
	'uservalidationbyadmin:confirm_resend_validation_checked' => 'Wiederhole die Bestätigungs-E-Mail an die markierten Nutzer?',
	'uservalidationbyadmin:confirm_delete_checked' => 'Lösche die markierten Anmeldungen?',
	'uservalidationbyadmin:check_all' => 'Alle',

	'uservalidationbyadmin:errors:unknown_users' => 'Unbekannte Anmeldungen',
	'uservalidationbyadmin:errors:could_not_validate_user' => 'Der Nutzer kann nicht bestätigt werden.',
	'uservalidationbyadmin:errors:could_not_validate_users' => 'Die markierten Nutzer können nicht bestätigt werden.',
	'uservalidationbyadmin:errors:could_not_delete_user' => 'Der Nutzer kann nicht gelöscht werden.',
	'uservalidationbyadmin:errors:could_not_delete_users' => 'Die markierten Nutzer können nicht gelöscht werden.',
	'uservalidationbyadmin:errors:could_not_resend_validation' => 'Could not resend validation request.',
	'uservalidationbyadmin:errors:could_not_resend_validations' => 'Could not resend all validation requests to checked users.',

	'uservalidationbyadmin:messages:validated_user' => 'Nutzer bestätigt.',
	'uservalidationbyadmin:messages:validated_users' => 'Alle markierten Nutzer bestätigt.',
	'uservalidationbyadmin:messages:deleted_user' => 'Nutzer gelöscht.',
	'uservalidationbyadmin:messages:deleted_users' => 'Alle markierten Nutzer gelöscht.',
	'uservalidationbyadmin:messages:resent_validation' => 'Validation request resent.',
	'uservalidationbyadmin:messages:resent_validations' => 'Validation requests resent to all checked users.'

);

add_translation("de", $german);