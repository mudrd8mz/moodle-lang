<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_cas_create_user'] = 'Aktiviere die Einstellung, um CAS authentifizierte Nutzer/innen in die Moodle-Datenbank einzufügen. Wenn nicht, können sich nur die Nutzer/innen einloggen, die in der Moodle-Datenbank eingetragen sind.';
$string['auth_cas_enabled'] = 'Aktiviere die Funktion, um die CAS Authentifizierung zu verwenden';
$string['auth_cas_invalidcaslogin'] = 'Entschuldigung, dein Login ist gescheitert - dein Zugang konnte nicht bestätigt werden.';
$string['auth_casdescription'] = 'Dieses Verfahren verwendet einen CAS Server (Central Authentification Service) zur Authentifizierung von Nutzer/innen in einer Single-Sign-On Umgebung (SSO). Du kannst jedoch auch eine einfache LDAP Authentifizierung verwenden. Wenn der verwandte Anmeldename und das Passwort auf CAS als gültig erkannt werden, erstellt Moodle einen neuen Nutzereintrag in seiner Datenbank und weitere Nutzerdaten von LDAP, falls erforderlich. Bei späteren Logins werden nur Anmeldename und Passwort geprüft.';