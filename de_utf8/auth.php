<?PHP // $Id$ 
      // auth.php - created with Moodle 1.6.2+ (2006050521)


$string['alternatelogin'] = 'Die URL die Sie hier eingeben wird als Loginseite für die Moodle Website verwendet. Diese Seite muss ein Formular enthalten, welches die Eigenschaften <strong>\'$a\'</strong> sowie die Rückgabewerte <strong>username</strong> und <strong>password</strong>.<br /> beinhaltet. VORSICHT: Bei Eingabe einer falschen URL können Sie jegliches Einloggen auf dieser Seite unmöglich machen. Lassen Sie diese Einstellungen unverändert um die Standardeinstellungen zu verwenden.';
$string['alternateloginurl'] = 'Alternative Login URL';
$string['auth_cas_baseuri'] = 'URI des Servers (freilassen falls grundsätzlich keine URI vorhanden ist). <br />Zum Beispiel wenn der CAS Server auf die Adresse host.domaine.de/CAS/ reagiert muss hier<br />cas_baseuri = CAS/ eingegeben werden.';
$string['auth_cas_create_user'] = 'Schalten Sie diese Funktion ein, wenn Sie per CAS beglaubigte Benutzer/innen in Moodle einfügen möchten. Lassen Sie diese Funktion ausgeschaltet, können sich nur Benutzer/innen in Moodle einloggen die bereits vorhanden sind.';
$string['auth_cas_enabled'] = 'Schalten Sie diese Funktion ein um die CAS Authentisierung zu verwenden.';
$string['auth_cas_hostname'] = 'Der Hostname des CAS Servers.<br />Zum Beispiel: host.domain.de';
$string['auth_cas_invalidcaslogin'] = 'Ihr Login ist fehlgeschlagen. Sie konnten nicht authorisiert werden.';
$string['auth_cas_language'] = 'Bitte Sprache wählen';
$string['auth_cas_logincas'] = 'Sichere Verbindung nutzen';
$string['auth_cas_port'] = 'Port des CAS Servres';
$string['auth_cas_server_settings'] = 'CAS Server Konfiguration';
$string['auth_cas_text'] = 'Sichere Verbindung';
$string['auth_cas_version'] = 'CAS Version';
$string['auth_casdescription'] = 'Diese Methode verwendet einen CAS Server (Central Authentication Service) um Benutzer/innen mithilfe des Single Sign On environment (SSO) zu authtentifizieren. Sie könne auch eine einfache LDAP Authentifizierung nutzen. Wenn der vorgegebene Benutzername und das Passwort entsprechend für CAS gültig sind, erstellt Moodle einen neuen Benutzer/innen-Eintrag in der Datenbank und entsprechende Attribute von LDAP falls notwendig. Bei den folgenden Logins werden dann nur Benutzernamen und Passwort kontrolliert.';
$string['auth_castitle'] = 'CAS Server Titel (SSO)';
$string['auth_changepasswordhelp'] = 'Passworthilfe ändern';
$string['auth_changepasswordhelp_expl'] = 'Zeigt die Passworthilfe für Benutzer/innen an, die ihr $a Passwort vergessen habe. Diese Hilfe wird entweder alternativ, zusätzlich oder anstatt der <strong>Passwort URL ändern</strong>-Anzeige oder der internen Moodle Passwortänderung angezeigt.';
$string['auth_changepasswordurl'] = 'Passwort URL ändern';
$string['auth_changepasswordurl_expl'] = 'Bitte geben Sie hier die URL an, an die Benutzer/innen weitergeleitet werden, die ihr $a Passwort vergessen haben. <strong>Standartseite zur Passwortänderung</strong> muss auf <strong>Nein</strong> gestellt sein.';
$string['auth_common_settings'] = 'Allgemeine Einstellungen';
$string['auth_data_mapping'] = 'Datendiagramm';
$string['auth_dbfieldpass'] = 'Name des Feldes, dass das Passwort enthält';
$string['auth_dbfielduser'] = 'Name des Feldes, dass den Benutzernamen enthält';
$string['auth_dbhost'] = 'Computer der den Datenbakserver hostet';
$string['auth_dbname'] = 'Name der Datenbank';
$string['auth_dbpass'] = 'Passwort zum obigen Benutzernamen';
$string['auth_dbtable'] = 'Name der Tabelle in der Datenbank';
$string['auth_dbtitle'] = 'Eine externe Datenbank verwenden';
$string['auth_dbuser'] = 'Benutzername mit Lesezugriff für die Datenbank';
$string['auth_emailtitle'] = 'E-Mail basiert Authentifizierung';
$string['auth_fcfppport'] = 'Server Port (in den meisten Fällen 3333)';
$string['auth_imaptitle'] = 'IMAP Server verwenden';
$string['auth_ldap_login_settings'] = 'Login Einstellungen';
$string['auth_ldap_server_settings'] = 'LDAP Servereinstellungen';
$string['update_never'] = 'Nie';
$string['update_onlogin'] = 'Bei jedem Login';

?>
