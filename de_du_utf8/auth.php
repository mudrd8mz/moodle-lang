<?PHP // $Id$ 
      // auth.php - created with Moodle 1.7+ (2006101008)
      // local modifications from http://17.moodle.de


$string['alternatelogin'] = 'Wenn du hier eine URL eingibst, wird diese als alternative Login-Seite verwandt. Die Seite sollte ein Aktionsfeld (Button) auf <strong>\'$a\'</strong> enthalten und Eingabefelder für den <strong>Anmeldenamen</strong> und das <strong>Passwort</strong>.<br />Sei sorgfältig bei der Eingabe der URL. Mit einer falschen URL schließt du sich selber vom Zugriff zur Seite aus.<br />Lass das Feld leer, um die Standardanmeldeseite zu verwenden.';
$string['auth_cas_create_user'] = 'Aktiviere die Einstellung, um CAS authentifizierte Nutzer/innen in die Moodle-Datenbank einzufügen. Wenn nicht, können sich nur die Nutzer/innen einloggen, die in der Moodle-Datenbank eingetragen sind.';
$string['auth_cas_enabled'] = 'Aktiviere die Funktion, um die CAS Authentifizierung zu verwenden';
$string['auth_cas_invalidcaslogin'] = 'Entschuldigung, dein Login ist gescheitert - dein Zugang konnte nicht bestätigt werden.';
$string['auth_casdescription'] = 'Dieses Verfahren verwendet einen CAS Server (Central Authentification Service) zur Authentifizierung von Nutzer/innen in einer Single-Sign-On Umgebung (SSO). Du kannst jedoch auch eine einfache LDAP Authentifizierung verwenden. Wenn der verwandte Anmeldename und das Passwort auf CAS als gültig erkannt werden, erstellt Moodle einen neuen Nutzereintrag in seiner Datenbank und weitere Nutzerdaten von LDAP, falls erforderlich. Bei späteren Logins werden nur Anmeldename und Passwort geprüft.';
$string['auth_changepasswordurl_expl'] = 'Trage hier eine URL ein, unter der die Nutzer/innen ein neues Passwort anfordern können. Wenn du diese Option nutzt, solltest du die Standardeinstellung zur Passwortänderung auf \"Nein\" setzen.';
$string['auth_dbextrafields'] = 'Diese Felder sind optional. Du kannst auswählen, einige Moodle-Nutzerfelder mit Informationen des <b>externen Datenbank-Feldes</b> vorauszufüllen, das du hier angibst.
<p>Wenn du das Feld leer lässt, werden Standardwerte benutzt.</p><p>Im anderen Fall müssen die Nutzer/innen alle Felder nach der Anmeldung ausfüllen./p>';
$string['auth_dbpasstype'] = 'Spezifiziere das Format, das das Passwortfeld benutzt. MD5-Verschlüsselung ist nützlich dafür, mit anderen üblichen Netzanwendungen Verbindung aufzunehmen, wie z.B. PostNuke';
$string['auth_fccreators'] = 'Liste der Kursverwalter/innen. Trenne verschiedene Gruppen durch \';\'. Namen müssen genau so geschrieben werden, wie auf dem Referenz-Server. Achte auch auf die korrekte Groß-/ Kleinschreibung.';
$string['auth_fchost'] = 'Server-Adresse des Referenz-Servers. Trage die IP-Adresse oder den DNS Namen ein.';
$string['auth_fieldlock_expl'] = '<p><b>Sperrwert:</b> Wenn du die Funktion aktivierst, verhindert Moodle die Bearbeitung des Feldes durch Nutzer/innen und Administrator/innen. Dies ist sinnvoll, wenn die Daten in einer externen Datenbank gepflegt werden. </p>';
$string['auth_fieldlocks_help'] = '<p>Du kannst Datenfelder der Nutzer/innen sperren. Dies ist u.U. sinnvoll wenn die Nutzerdaten von Administrator/innen gepflegt werden, manuell angelegt oder im Bulk-Upload (Hochladen über Textdatei) hochgeladen werden. Wenn du Felder sperrst, die von Moodle benötigt werden, musst du sicherstellen, dass diese beim Anlegen der Nutzerzugänge brauchbar vorbelegt sind.</p><p>Achte darauf, dass die Einstellung auf \"Bearbeitbar wenn Feld leer\" gesetzt ist, um Probleme zu vermeiden.</p>';
$string['auth_imaphost'] = 'IMAP Server-Adresse. Benutze die IP, nicht den DNS-Namen';
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
$string['auth_nntphost'] = 'NNTP Server-Adresse. Benutze die IP, nicht den DNS-Namen.';
$string['auth_nonedescription'] = 'Nutzer können sich anmelden und gültige Nutzer-Accounts erstellen, und zwar ohne Authentifizierung durch einen externen Server und ohne E-Mail-Bestätigung. Verwende diese Option vorsichtig, denke an mögliche Sicherheits- und Administrationsprobleme.';
$string['auth_pamdescription'] = 'Diese Methode verwendet PAM, um auf die richtigen Nutzernamen auf dem Server zuzugreifen. Du musst hierzu <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> installieren, um das Modul zu nutzen.';
$string['auth_passwordisexpired'] = 'Dein Passwort ist abgelaufen. Willst Du dein Passwort jetzt aktualisieren?';
$string['auth_passwordwillexpire'] = 'Dein Passwort wird in $a Tagen ablaufen. Willst du dein Passwort nun aktualisieren?';
$string['auth_pop3host'] = 'POP3-Server-Adresse. Benutze die IP, nicht den DNS-Namen.';
$string['auth_pop3type'] = 'Servertyp. Wenn dein Server Sicherheitszertifikate verwendet, wähle pop3cert.';
$string['auth_shib_convert_data_description'] = 'Du kannst diese API nutzen, um Daten von Shibboleth zu bearbeiten. <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">Hier</a> findest du weitere Hinweise.';
$string['auth_shib_instructions'] = 'Nutze den <a href=\"$a\">Shibboleth Login</a>, um Zugang über Shibboleth zu erhalten, wenn dein Unternehmen dies unterstützt. <br />Sonst verwendest du das normale hier angezeigte Loginformular.';
$string['auth_shib_instructions_help'] = 'Trage hier Informationen für deine Nutzer/innen ein, die ihnen den Zugang mit Hilfe von Shibboleth erklären. Diese werden auf der Loginseite angzeigt. Der Text sollte einen Link \"<b>$a</b>\" enthalten, damit ein einfachere Login möglich ist. Wenn du das Feld leer lässt, werden die Standard-Texte angezeigt und keine Hinweise auf den Shibboleth Login.';
$string['auth_shib_only_description'] = 'Checke diese Option, wenn eine Shibboleth-Authentifizierung bevorzugt wird.';
$string['auth_shibbolethdescription'] = 'Mit diesem Verfahren kannst du die Verbindung zu einem bestehenden Shibboleth Server herstellen, um  Zugänge zu prüfen und anzulegen.';
$string['auth_updatelocal_expl'] = '<p><b>Update lokaler Daten:</b> Wenn dieses Feld aktiviert wird, wird das Feld (aus externer Quelle (external auth)) jedes Mal aktualisiert, wenn der Teilnehmer sich einloggt oder eine Nutzersynchronisation erfolgt. Dateneinträge, die lokal aktualisiert werden, sollten geschützt werden.</p>';
$string['auth_updateremote_expl'] = '<p><b>Update externer Daten:</b> Wenn aktiviert, wird die externe Authentifizierung aktualisiert wenn der Nutzerdatzensatz aktualisiert wird. Felder sollten offen bleiben, um Dateneinträge zuzulassen.</p>';
$string['auth_user_creation'] = 'Neue (anonyme) Nutzer können Nutzer-Accounts erstellen außerhalb der Authentifizierungsquelle und per E-Mail bestätigen. Sofern du dies aktivierst, achte darauf, ebenso modulspezifische Optionen für die Modulerstellung zu konfigurieren.';
$string['auth_usernameexists'] = 'Der ausgewählte Anwendername existiert bereits - bitte wähle einen anderen.';
$string['authinstructions'] = 'Hier kannst du deinen Nutzern Anweisungen geben, welche Anwendernamen und Passworte sie verwenden sollen. Der eingegebene Text erscheint auf der Anmeldeseite. Wenn du nichts eingibst, werden keine Anweisungen angezeigt.';
$string['changepasswordhelp'] = 'Hier kannst du eine Adresse angeben, unter der die Nutzer ihren Nutzernamen/Passwort ändern können, sofern sie dies vergessen haben. Diese Option wird den Nutzern als Schaltfläche auf der Anmeldungsseite angeboten. Wenn du dieses Feld leer lässt, wird die Option nicht angegeboten.';
$string['shib_no_attributes_error'] = 'Du versuchst vermutlich, die Shibboleth Authentifizierung zu verwenden. Moodle hat jedoch keine Attribute für die Nutzer/innen erhalten. Prüfe bitte, ob der Identity Provider die erforderlichen Attribute ($a) dem Moodle-Serviceprovider zur Verfügung stellt oder informiere den Webmaster des Servers.';
$string['shib_not_all_attributes_error'] = 'Moodle benötigt einige Shibboleth-Attribute, die derzeitnicht bereitgestellt werden. Es handelt sich um die Attribute: $a<br />Benachrichtige bitte den Webmaster des Servers oder deinen Identity Provider.';
$string['shib_not_set_up_error'] = 'Die Shibboleth-Authentifizierung scheint nicht richtig eingerichtet zu sein. Beachte die <a href=\"README.txt\">README-Datei</a> mit weiteren Informationen zur Einrichtung der Shibboleth-Authentifizierung.';
$string['showguestlogin'] = 'Du kannst die Gast-Login Schaltfläche auf der Anmeldeseite anzeigen oder verbergen.';
$string['stdchangepassword_expl'] = 'Stelle Ja ein, wenn das externe Authentifizierungssystem eine Änderung des Passwortes durch Moodle zulässt. Die Einstellungen überschreiben \'Passwort-URL ändern\'';

?>
