<?PHP // $Id$ 
      // report_security.php - created with Moodle 2.0 dev (Build: 20091117) (2009112000)


$string['check_configrw_details'] = '<p>Es wird empfohlen, nach der Installation die Zugriffsrechte für die Datei config.php so zu setzen, dass der Webserver diese Datei nicht verändern kann. Bitte beachten Sie, dass dieser Schritt die Server-Sicherheit nicht entscheidend verbessert, aber es könnte generelle Angriffe behindern und im Ausmaß begrenzen.</p>';
$string['check_configrw_name'] = 'Zugriff auf config.php';
$string['check_configrw_ok'] = 'PHP-Skripte können die config.php nicht verändern';
$string['check_configrw_warning'] = 'PHP-Skripte könnten die Datei config.php verändern';
$string['check_cookiesecure_details'] = '<p>Zusätzlich zur Aktivierung der Datenübertragung über https sollte auch die Funktion sichere Cookies aktiviert werden. Die permanenete Umleitung von http nach https sollte ebenfalls eingerichtet werden.</p>';
$string['check_cookiesecure_error'] = 'Bitte erlauben Sie sichere Cookies';
$string['check_cookiesecure_name'] = 'Sichere Cookies';
$string['check_cookiesecure_ok'] = 'Sichere Cookies erlaubt';
$string['check_courserole_anything'] = 'Die \'alles dürfen\' (do anything) Berechtigung muss nicht unter <a href=\"$a\">context</a> erlaubt werden.';
$string['check_courserole_details'] = '<p>Jeder Kurs hat eine Standardrolle für Nutzer (meist Teilnehmer/in) definiert. Achten Sie darauf, dass für diese Rolle keine unsicheren Berechtigungen erlaubt sind.</p>
<p>Die einzige Rolle auf diedas zutrifft ist die <em>Standard-Teilnehmerrolle</em>.</p>';
$string['check_courserole_error'] = 'Fehlerhaft definierte Basisrolle für Kurse entdeckt!';
$string['check_courserole_name'] = 'Standardrollen (für Kurse)';
$string['check_courserole_notyet'] = 'In Kursen werden nur Standardrollen verwendet';
$string['check_courserole_ok'] = 'Die Standardrollendefinitionen sind ok';
$string['check_courserole_risky'] = 'Bedenkliche Berechtigungen wurden entdeckt! <a href=\"$a\">Zusammenhang anzeigen</a>';
$string['check_courserole_riskylegacy'] = 'Bedenkliche Vererbung wurde entdeckt! <a href=\"$a->url\">$a->shortname</a>';
$string['check_defaultcourserole_anything'] = 'Die Berechtigung \'alles erlaubt\' sollte nicht zugelassen werden! <a href=\"$a\">Zusammenhang anzeigen</a>';
$string['check_defaultcourserole_details'] = '<p>Die standardmäßige Teilnehmerrolle bei der Kurseinschreibung bestimmt die Standardrolle für alle Kurse. Bitte stellen Sie sicher, dass keine bedenklichen Fähigkeiten für diese Rolle erlaubt sind!</p>
<p>Der einzig unterstützte Standardtyp für diese Rolle ist <em>Teilnehmer/in (=Student)</em>';
$string['check_defaultcourserole_error'] = 'Fehlerhaft definierte Standardrolle \'$a\' entdeckt';
$string['check_defaultcourserole_legacy'] = 'Ein nicht unterstützer Legacy-Typ wurde entdeckt';
$string['check_defaultcourserole_name'] = 'Standardrolle (global)';
$string['check_defaultcourserole_notset'] = 'Die Standardrolle ist nicht festgelegt';
$string['check_defaultcourserole_ok'] = 'Die Standardrolle auf System-Ebene ist OK';
$string['check_defaultcourserole_risky'] = 'Bedenkliche Berechtigungen wurden entdeckt! <a href=\"$a\">Zusammenhang anzeigen</a>.';
$string['check_defaultuserrole_details'] = '<p>Jeder eingeloggte Nutzer hat zunächst Rechte aus der Standardrolle für Nutzer. Für diese Rolle sollten keine bedenklichen Berechtigungen vergeben worden sein.</p>
<p>Die einzige Rolle, für die das zunächst zutrifft, ist die Rolle <em>authentifizierte/r Nutzer/in</em>. Die Berechtigung \'Kurse sehen\' (course view) muss dazu nicht aktiviert sein.</p>';
$string['check_defaultuserrole_error'] = 'Eine falsche Definition der Standardrolle wurde festgestellt! \"$a\"';
$string['check_defaultuserrole_name'] = 'Registrierte Nutzerrolle';
$string['check_defaultuserrole_notset'] = 'Die Standardrolle ist nicht gesetzt';
$string['check_defaultuserrole_ok'] = 'Die Rollendefinition für registrierte Nutzer ist OK';
$string['check_displayerrors_details'] = '<p>Die Aktivierung der PHP-Einstellung <code>display_errors</code> wird auf produktiven Websites nicht empfohlen, weil die Fehlermeldungen u.U. sensible Informationen zu Ihrem Server preisgeben könnten. Setzen Sie also <code>display_errors=off</code>.</p>';
$string['check_displayerrors_error'] = 'Die PHP-Einstellung für die Anzeige von Fehlern ist aktiviert. Es wird empfohlen, dies zu deaktivieren';
$string['check_displayerrors_name'] = 'Anzeige von PHP-Fehlern';
$string['check_displayerrors_ok'] = 'Die Anzeige von PHP-Fehlern ist deaktiviert';
$string['check_emailchangeconfirmation_details'] = '<p>Es wird empfohlen, eine E-Mail-Bestätigung einzufordern, wenn Nutzer/innen ihre E-Mail-Adresse im Nutzerprofil ändern. Falls diese Einstellung deaktiviert ist, könnten Spammer versuchen, den Webserver zum Versenden von Spam zu missbrauchen.</p>';
$string['check_emailchangeconfirmation_error'] = 'Es dürfen beliebige E-Mail-Adressen eintragen werden';
$string['check_emailchangeconfirmation_info'] = 'Es dürfen ausschließlich E-Mail-Adressen von zugelassenen Domains eingetragen werden';
$string['check_emailchangeconfirmation_name'] = 'E-Mail-Adressänderungen';
$string['check_emailchangeconfirmation_ok'] = 'Änderungen von E-Mail-Adressen müssen bestätigt werden';
$string['check_embed_details'] = '<p>Die uneingeschränkte Nutzung von EMBED/OBJECT ist äußerst gefährlich, weil alle registrierten Nutzer/innen einen XSS-Angriff gegen andere Server-Nutzer starten könnten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_embed_error'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist aktiviert. Diese Einstellung ist für die Mehrheit der Webserver sehr gefährlich.';
$string['check_embed_name'] = 'EMBED/OBJECT';
$string['check_embed_ok'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist nicht erlaubt';
$string['check_frontpagerole_details'] = '<p>Die standardmäßige Startseitenrolle erhalten alle registrierten Nutzer für die Aktivitäten auf der Startseite. Bitte achten Sie, dass hier keine bedenklichen Berechtigungen vergeben werden dürfen.</p>
<p>Es wird empfohlen, eine spezielle Rolle neu anzulegen und keine der vorgegebenen Rollen zu verändern.</p>';
$string['check_frontpagerole_error'] = 'Fehlerhafte Rollendefinition auf der Startseite \"$a\" entdeckt!';
$string['check_frontpagerole_name'] = 'Rolle auf der Startseite';
$string['check_frontpagerole_notset'] = 'Die Rollendefinition für die Startseite nicht eingerichtet';
$string['check_frontpagerole_ok'] = 'Die Rollendefinition für die Startseite ist OK';
$string['check_globals_details'] = '<p>register_globals gilt als eine sehr unsichere Einstellung für PHP</p>
<p>Die PHP-Einstellung <code>register_globals=off </code> muss unbedingt gesetzt sein. Dies Einstellung können Sie in der Datei <code>php.ini</code>, Apache/IIS Konfiguration oder der Datei <code>.htaccess</code> vornehmen.</p>';
$string['check_globals_error'] = 'Die Einstellung register_globals muss deaktiviert sein. Bitte passen Sie Ihre PHP Einstellungen sofort an!';
$string['check_globals_name'] = 'register_globals';
$string['check_globals_ok'] = 'register_globals ist deaktiviert';
$string['check_google_details'] = '<p>Die Einstellung \'Offen für Google\' erlaubt es Google und anderen Suchmaschinen, mit der Gastberechtigung alle offenen Kurse zu durchsuchen. Es ist nicht sinnvoll diese Funktion zu aktivieren, wenn der Gastzugang deaktiviert ist.</p>';
$string['check_google_error'] = 'Der Zugriff für Suchmaschinen ist aktiviert, wobei der Gastzugang aber deaktiviert ist.';
$string['check_google_info'] = 'Suchmaschinen könnten auf Ihre Kursinhalte als Gäste zugreifen.';
$string['check_google_name'] = 'Offen für Google';
$string['check_google_ok'] = 'Gastzugang für Suchmaschinen nicht aktiv';
$string['check_guestrole_details'] = '<p>Die Gastrolle wird für Gäste, nichteingeloggte Nutzer und den zeitweisen Gastzugang zu Kursen verwandt. Bitte achten Sie darauf, keine unsicheren Berechtigungen für diese Rolle zuzulassen.<p>
</p>Der einzige unterstützte Legacytyp für die Gastrolle ist <em>Gast</em>.</p>';
$string['check_guestrole_error'] = 'Die Rollendefinition der Gastrolle \"$a\" ist fehlerhaft!';
$string['check_guestrole_name'] = 'Gastrolle';
$string['check_guestrole_notset'] = 'Die Gastrolle ist nicht gesetzt';
$string['check_guestrole_ok'] = 'Die Rollendefinition der Gastrolle ist OK';
$string['check_mediafilterswf_details'] = '<p>Die automatische Einbindung von swf-Dateien ist sehr gefährlich. Jeder registrierte Nutzer könnte damit eine XSS-Attacke gegen den Server auslösen. Deaktivieren Sie diese Funktion bitte auf Produktivsystemen.</p>';
$string['check_mediafilterswf_error'] = 'Der Flash-Mediafilter .swf ist aktiviert - dies ist für die meisten Webserver sehr gefährlich.';
$string['check_mediafilterswf_name'] = 'Mediafilter .swf';
$string['check_mediafilterswf_ok'] = 'Der Flash-Mediafilter .swf ist nicht aktiv';
$string['check_noauth_details'] = '<p>Das Plugin \'Ohne Authentifizierung\' ist nicht für produktive Seiten gedacht. Deaktivieren Sie diese Funktion unbedingt, es sei denn Sie betreiben eine Testseite zu Entwicklungszwecken.</p>';
$string['check_noauth_error'] = 'Das Plugin \'Ohne Authentifizierung\' darf auf produktiven Seiten nicht verwandt werden.';
$string['check_noauth_name'] = 'Ohne Authentifizierung';
$string['check_noauth_ok'] = 'Das Plugin \'Ohne Authentifizierung\' ist ausgeschaltet';
$string['check_openprofiles_details'] = '<p>Öffentlich sichtbare Nutzerprofile können von Spammern missbraucht werden. Aktivieren Sie am besten die Einstellung \'Login erforderlich\'  bzw. \'Login erforderlich, um Profile zu sehen\'.</p>';
$string['check_openprofiles_error'] = 'Jeder kann zur Zeit Nutzerprofile sehen, ohne sich zuvor einzuloggen.';
$string['check_openprofiles_name'] = 'Offene Nutzerprofile';
$string['check_openprofiles_ok'] = 'Login ist erforderlich, um Nutzerprofile sehen zu können';
$string['check_passwordpolicy_details'] = '<p>Es wird empfohlen, Passwortregeln festzulegen. Oft ist es ziemlich einfach, über das Erraten von Passworten einen unberechtigten Zugang zu Systemen zu bekommen. Die Regeln sollten allerdings nicht zu kompliziert sein. Sehr strenge Regeln führen nämlich häufig dazu, dass Nutzer sich die Passworte nicht merken können, sie vergessen oder sie sich aufschreiben.</p>';
$string['check_passwordpolicy_error'] = 'Passwortregeln sind nicht eingerichtet';
$string['check_passwordpolicy_name'] = 'Passwortregeln';
$string['check_passwordpolicy_ok'] = 'Passwortregeln sind aktiviert';
$string['check_passwordsaltmain_details'] = '<p>Das Passwort-Salting reduziert zuverlässig das Risiko von Passwortdiebstahl.</p>
<p>Um Passwort-Salt zu konfigurieren, fügen Sie bitte die folgende Zeile in Ihre Datei config.php:</p>
<code>&#36;CFG->passwordsaltmain = \'some long random string here with lots of characters\';</code>
<p>Der Zufallstext sollte aus einem Mix von Buchstaben, Zahlen und Sonderzeichen bestehen und mindestens 40 Zeichen lang sein. Bitte beachten Sie die <a href=\"$a\" target=\"_blank\">Dokumentation zum Passwort-Salting</a>, falls Sie diesen Parameter verändern möchten. Löschen Sie auf keinen Fall das Passwort-Salt, sobald Sie es einmal verwendet haben - andernfalls können Sie sich auch als Admin nicht mehr in Ihrem eigenen Moodle einloggen!</p>';
$string['check_passwordsaltmain_name'] = 'Passwort-Salting';
$string['check_passwordsaltmain_ok'] = 'Das Passwort-Salting ist OK';
$string['check_passwordsaltmain_warning'] = 'Das Passwort-Salting wurde nicht konfiguriert';
$string['check_passwordsaltmain_weak'] = 'Das Passwort-Salting ist zu schwach';
$string['check_riskadmin_detailsok'] = '<p>Bitte prüfen Sie die folgende Liste der Administrator/innen:</p><p><b>$a</b></p>';
$string['check_riskadmin_detailswarning'] = '<p>Bitte prüfen Sie die folgende Liste der Administrator/innen:</p><p><b>$a->admins</b></p>
<p>Es wird empfohlen, die Administratorenrolle nur auf Systemebene zu vergeben. Die folgenden Nutzer verfügen über nicht unterstützte Zuweisungen zur Administratorrolle:</p><p><b>$a->unsupported</b></p>';
$string['check_riskadmin_name'] = 'Administratoren';
$string['check_riskadmin_ok'] = '$a Serveradministrator(en) gefunden';
$string['check_riskadmin_unassign'] = 'Rollenzuweisung überprüfen bei <a href=\"$a->url\">$a->fullname ($a->email)</a>';
$string['check_riskadmin_warning'] = '$a->admincount Serveradministrator(en) und $a->unsupcount nicht unterstützte Zuweisung(en) zur Administratorrolle gefunden';
$string['check_riskxss_details'] = '<p>RISK_XSS bezeichnet alle bedenklichen Berechtigungen, die ausschließlich vertrauensvolle Nutzer ausführen dürfen.</p>
<p>Bitte prüfen Sie die folgende Nutzerliste und überlegen Sie sich, ob Sie ihnen völlig trauen können:</p><p><b>$a</b></p>';
$string['check_riskxss_name'] = 'XSS - vertrauensvolle Nutzer';
$string['check_riskxss_warning'] = 'RISK_XSS - $a Nutzer gefunden, denen vertraut werden muss!';
$string['check_unsecuredataroot_details'] = '<p>Das Verzeichnis \'moodledata\' sollte nicht aus dem Internet aufrufbar sein. Am besten legen Sie es außerhalb des öffentlich zugänglichen Verzeichnisses, beim Webserver Apache also üblicherweise außerhalb vom Verzeichnis \'htdocs\'.</p>
<p>Wenn Sie das Verzeichnis \'dataroot\' verschieben, müssen Sie auch unbedingt den Eintrag <code>&#36;CFG->dataroot</code> in der Datei  <code>config.php</code> entsprechend anpassen.</p>';
$string['check_unsecuredataroot_error'] = 'Ihr moodledata-Verzeichnis <code>$a</code> liegt an der falschen Stelle. Es ist aus dem Web aufrufbar.';
$string['check_unsecuredataroot_name'] = 'dataroot';
$string['check_unsecuredataroot_ok'] = 'Das Verzeichnis dataroot darf nicht vom Netz aus erreichbar sein';
$string['check_unsecuredataroot_warning'] = 'Ihr moodledata-Verzeichnis <code>$a</code> liegt an der falschen Stelle. Es sollte nicht aus dem Web aufrufbar sein.';
$string['configuration'] = 'Konfiguration';
$string['description'] = 'Beschreibung';
$string['details'] = 'Details';
$string['issue'] = 'Ausgabe';
$string['reportsecurity'] = 'Sicherheitsbericht';
$string['security:view'] = 'Sicherheitsbericht ansehen';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritisch';
$string['statusinfo'] = 'Information';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Schwerwiegend';
$string['statuswarning'] = 'Warnung';
$string['timewarning'] = 'Die Bearbeitung kann etwas länger dauern. Haben Sie bitte Geduld....';
$string['check_courserole_legacy'] = 'Nicht unterstützter Legacy-Typ entdeckt in a href=\"$a\">role</a>.'; // ORPHANED

?>
