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
$string['check_courserole_details'] = '<p>Jeder Kurs hat eine Standardrolle für Nutzer (meist Teilnehmer/in) definiert. Achten Sie darauf, dass für diese Rolle keine unsicheren Berechtigungen erlaubt sind.</p>
<p>Die einzige Rolle auf diedas zutrifft ist die <em>Standard-Teilnehmerrolle</em>.</p>';
$string['check_courserole_error'] = 'Fehlerhaft definierte Basisrolle für Kurse entdeckt!';
$string['check_courserole_name'] = 'Standardrollen (für Kurse)';
$string['check_courserole_notyet'] = 'Im Kurs werden nur Standardrollen verwandt';
$string['check_courserole_ok'] = 'Standardrollendefinitionen sind ok';
$string['check_courserole_risky'] = 'Riskante Berechtigungen entdeckt in <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_anything'] = 'Die \'alles erlaubt\'-Berechtigung sollte im Kontext  <a href=\"$a\">context</a> nicht zugelassen werden.';
$string['check_defaultcourserole_error'] = 'Fehlerhaft definierte Standardrolle \'$a\' entdeckt';
$string['check_defaultcourserole_name'] = 'Standardrolle (global)';
$string['check_defaultcourserole_notset'] = 'Standardrolle ist nicht festgelegt.';
$string['check_defaultcourserole_ok'] = 'Standardrolle auf System-Ebene ist ok.';
$string['check_defaultcourserole_risky'] = 'Riskante Berechtigungen entdeckt im Kontext <a href=\"$a\">context</a>.';
$string['check_defaultuserrole_details'] = '<p>Jeder eingeloggte Nutzer hat zunächst Rechte aus der Standardrolle für Nutzer. Für diese rolle sollten keine riskanten Berechtigungen vergeben worden sein.</p>
<p>Die einzige Rolle für die das zunächst zutrifft ist die Rolle <em>authentifitzierter Nutzer/in</em>. Die Berechtigung \'Kurse sehen\'(course view) muss dazu nicht aktiviert sein.</p>';
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
$string['check_noauth_details'] = '<p>Das <em>Keine Authentifizierung </em> Plugin ist nicht für produktive Seiten gedacht. Deaktivieren Sie die Funktion, es sei denn Sie betreiben eine Testseite zu Entwicklungszwecken.</p>';
$string['check_noauth_error'] = 'Das \'Keine Authentifizierung\' Plugin darf auf produktiven Seiten nicht verwandt werden.';
$string['check_noauth_name'] = 'Keine Authentifizierung';
$string['check_noauth_ok'] = 'Das \'Keine Authentifizierung\' Plugin ist abgeschaltet';
$string['check_openprofiles_details'] = '<p>Öffentlich sichtbare Nutzerprofile können von Spammern missbraucht werden. Die Einstellungen \'Login erforderlich\'  bzw. \'Login erforderlich, um Profile zu sehen\' sollten aktiviert werden.</p>';
$string['check_openprofiles_error'] = 'Jeder kann zur Zeit Nutzerprofile sehen, ohne sich zuvor einzulogen.';
$string['check_openprofiles_name'] = 'Öffentlich sichtbare Nutzerprofile';
$string['check_openprofiles_ok'] = 'Login ist erforderlich, um Nutzerprofile sehen zu können.';
$string['check_passwordpolicy_details'] = '<p>Es wird empfohlen, Passwortregeln festzulegen. Der Versuch Passworte zu erraten, ist oft der einfachste Weg, sich unberechtigt Zugang zu einem System zu verschaffen. Die Regeln sollten jedoch zu kompliziert sein. Sehr strikte Regeln führen häufig dazu, dass Nutzer sich die Passworte nicht merken können, sie vergessen oder sie sich aufschreiben.</p>';
$string['check_passwordpolicy_error'] = 'Passwortregeln sind nicht eingerichtet';
$string['check_passwordpolicy_name'] = 'Passwortregeln';
$string['check_passwordpolicy_ok'] = 'Passwortregeln sind aktiviert';
$string['check_riskadmin_detailsok'] = '<p>Bitte bestätigen Sie die folgende Liste der Administrator/innen:</p><p>$a</p>';
$string['check_riskadmin_detailswarning'] = '<p>Bitte bestätigen Sie die folgende Liste der Administrator/innen:</p><p>$admins</p>
<p>Es wird empfohlen, die Administratorenrolle nur auf Systemebene zu vergeben. Die folgenden Nutzer haben Administratorenrollenzuweisungen, die nicht unterstützt werden:</p><p>$a->unsupported</p>';
$string['check_riskadmin_name'] = 'Administratoren';
$string['check_unsecuredataroot_details'] = '<p>Das moodledata Verzeichnis sollte nicht aus dem Web aufrufbar sein. Am Besten legen Sie es in eine Verzeichnis, das nicht vom Web aus aufrufbar ist.</p>
<p>Wennn Sie das Verzeichnis verlegen, müssen Sie auch den Eintrag <code>$CFG->dataroot</code> in der Datei <code>config.php</code>entsprechend anpassen.</p>';
$string['check_unsecuredataroot_error'] = 'Ihr moodledata-Verzeichnis <code>$a</code> liegt an der falschen Stelle. Es ist aus dem Web aufrufbar.';
$string['check_unsecuredataroot_name'] = 'Unsichere Einstellung dataroot';
$string['check_unsecuredataroot_ok'] = 'Das Verzeichnis dataroot darf nicht vom Netz aus erreichbar sein';
$string['check_unsecuredataroot_warning'] = 'Ihr moodledata-Verzeichnis <code>$a</code> liegt an der falschen Stelle. Es sollte nicht aus dem Web aufrufbar sein.';
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
$string['timewarning'] = 'Die Bearbeitungszeit kann etwas länger dauern. Haben Sie bitte etwas Geduld.';

?>
