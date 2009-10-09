<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Möchtest du Bind-User für die Nutzersuche verwenden, so gib dies hier an. Normalerweise etwas wie \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_contexts'] = 'Liste der Umgebungen, in denen sich Nutzer/innen befinden. Trenne verschiedene Umgebungen durch \';\'. Beispiel: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Wenn du die Nutzererstellung mit E-Mail-Bestätigung aktivierst, gib die Umgebung an, wo die Nutzer/innen erstellt werden sollen. Diese Umgebung sollte sich von der andererer Nutzer/innen unterscheiden, um Sicherheitsrisiken zu vermeiden. Du brauchst diese Umgebung nicht zur ldap_context Variable hinzuzufügen, Moodle sucht in dieser Umgebung automatisch nach Nutzer/innen.';
$string['auth_ldap_creators'] = 'Eine Liste von Gruppen, denen es erlaubt ist, neue Kurse zu erstellen. Trenne mehrere Gruppen durch \';\'. Normalerweise etwas wie \'cn=teachers, ou=staff, o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Setze Nein (no), um die Überprüfung abgelaufener Passworte abzuschalten, oder LDAP, um sie direkt über LDAP abzuwickeln.';
$string['auth_ldap_host_url'] = 'Gib einen LDAP Server in URL-Form an wie \'ldap://ldap.myorg.de/\' oder \'ldaps://ldap.myorg.de/\'';
$string['auth_ldap_memberattribute'] = 'Gib die Mitgliedsoptionen an, wenn Nutzer/innen zu einer Gruppe gehören. Normalerweise \'member\'';
$string['auth_ldap_objectclass'] = 'Filter für die Suche nach Nutzernamen. Normalerweise trägst du ein: objectClass=posixAccount . Defaults to objectClass=* what will return all objects from LDAP.';
$string['auth_ldap_opt_deref'] = 'Legt fest wie Aliasbezeichnungen bei der Suche behandelt werden. Wähle einen der folgenden Werte: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_preventpassindb'] = 'Wähle ja, um Passwörter <b>nicht</b> in der Moodle-Datenbank zu speichern';
$string['auth_ldap_version'] = 'Diese Version des LDAP Protokolls nutzt dein Server.';
$string['auth_ldapextrafields'] = 'Diese Felder sind optional. Du kannst einige Moodle Nutzer-Felder mit Daten aus <b>LDAP-Feldern</b> vorbelegen, die du hier spezifizierst. <p>Wenn du diese Felder leer lässt, wird nichts von LDAP transferiert und die Moodle Voreinstellungen werden verwendet.</p><p>In jedem Fall können Nutzer diese Felder editieren, nachdem sie sich angemeldet haben.</p>';