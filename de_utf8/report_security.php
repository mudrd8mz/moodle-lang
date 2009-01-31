<?PHP // $Id$ 
      // report_security.php - created with Moodle 2.0 dev (Build: 20090109) (2009010801)


$string['check_configrw_details'] = '<p>Es wird empfohlen, nach der Installation die Zugriffsrechte für die Datei config.php so zu setzen, dass der Webserver diese Datei nicht verändern kann. Bitte beachten Sie, dass dieser Schritt die Server-Sicherheit nicht entscheidend verbessert, aber es könnte generelle Angriffe behindern und im Ausmaß begrenzen.</p>';
$string['check_configrw_name'] = 'Beschreibbare Datei config.php';
$string['check_configrw_ok'] = 'Datei config.php kann nicht von PHP-Scripts verändert werden';
$string['check_configrw_warning'] = 'PHP Skripte können die Datei config.php modifizieren.';
$string['check_cookiesecure_details'] = '<p>Zusätzlich zur Aktivierung der Datenübertragung über https sollte auch die Funktion sichere Cookies aktiviert werden. Die permanenete Umleitung von http nach https sollte ebenfalls eingerichtet werden.</p>';
$string['check_cookiesecure_error'] = 'Bitte erlauben Sie sichere Cookies';
$string['check_cookiesecure_name'] = 'Sichere Cookies';
$string['check_cookiesecure_ok'] = 'Sichere Cookies erlaubt';
$string['check_courserole_anything'] = 'Die \'alles dürfen\' (do anything) Berechtigung muss nicht unter <a href=\"$a\">context</a> erlaubt werden.';
$string['check_defaultuserrole_error'] = 'Eine falsche Definition der Standardrolle wurde festgestellt! \"$a\"';
$string['check_defaultuserrole_name'] = 'Registrierte Nutzerrolle';
$string['check_defaultuserrole_notset'] = 'Die Standardrolle ist nicht gesetzt';
$string['check_defaultuserrole_ok'] = 'Die Definition für registrierte Nutzerrollen ist OK';
$string['check_displayerrors_details'] = '<p>Die Aktivierung der PHP-Einstellung <code>display_errors</code> wird auf produktiven Websites nicht empfohlen, weil die Fehlermeldungen u.U. sensible Informationen zu Ihrem Server preisgeben könnten.</p>';
$string['check_displayerrors_error'] = 'Die PHP-Einstellung für die Anzeige von Fehlern ist aktiviert. Es wird empfohlen, dies zu deaktivieren';
$string['check_displayerrors_name'] = 'Anzeige von PHP-Fehlern';
$string['check_displayerrors_ok'] = 'Die Anzeige von PHP-Fehlern ist deaktiviert';
$string['check_emailchangeconfirmation_details'] = '<p>Es wird empfohlen, eine E-Mail-Bestätigung einzufordern, wenn Nutzer/innen ihre E-Mail-Adresse in ihrem Profil ändern. Wenn dies deaktiviert ist, könnten Spammer versuchen, den Server zum Versenden von Spam zu missbrauchen.</p>';
$string['check_emailchangeconfirmation_error'] = 'Nutzer/innen dürfen beliebige E-Mail-Adressen eintragen';
$string['check_emailchangeconfirmation_name'] = 'Überprüfung beim Ändern der E-Mail-Adressen';
$string['check_emailchangeconfirmation_ok'] = 'Bestätigung bei der Änderung von E-Mail-Adressen im Nutzerprofil';
$string['check_embed_details'] = '<p>Die uneingeschränkte Nutzung von EMBED/OBJECT ist sehr gefährlich - alle registrierten Nutzer/innen könnten einen XSS-Angriff gegen andere Server-Nutzer starten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_embed_error'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist aktiviert - dies ist für die Mehrheit der Webserver sehr gefährlich';
$string['check_embed_name'] = 'EMBED/OBJECT zulassen';
$string['check_frontpagerole_name'] = 'Rolle auf der Startseite';
$string['check_frontpagerole_notset'] = 'Rolle auf der Startseite nicht eingerichtet';
$string['check_frontpagerole_ok'] = 'Rollendefinition für Startseite: OK';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals sind deaktiviert';
$string['check_google_name'] = 'Offen für Google';
$string['check_google_ok'] = 'Gastzugang für Suchmaschinen nicht aktiv';
$string['check_guestrole_name'] = 'Gastrolle';
$string['check_guestrole_notset'] = 'Gastrolle nicht gesetzt';
$string['check_guestrole_ok'] = 'Definition der Gastrolle ok';
$string['check_mediafilterswf_name'] = '.swf Mediafilter aktiv';
$string['check_mediafilterswf_ok'] = 'Flash Mediafilter nicht aktiv.';
$string['check_noauth_name'] = 'Keine Authentifikation';
$string['check_riskadmin_name'] = 'Administratoren';
$string['check_unsecuredataroot_name'] = 'Unsichere Einstellung dataroot';
$string['check_unsecuredataroot_ok'] = 'Das Verzeichnis dataroot darf nicht vom Netz aus erreichbar sein';
$string['configuration'] = 'Konfiguration';
$string['description'] = 'Beschreibung';
$string['details'] = 'Details';
$string['reportsecurity'] = 'Sicherheitsüberblick';
$string['security:view'] = 'Sicherheitsbericht ansehen';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritisch';
$string['statusinfo'] = 'Information';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Schwerwiegend';
$string['statuswarning'] = 'Warnung';

?>
