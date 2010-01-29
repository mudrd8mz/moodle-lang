<?PHP // $Id$ 
      // install.php - created with Moodle 2.0 dev (Build: 20100129) (2010012902)


$string['admindirerror'] = 'Das angegebene Admin-Verzeichnis ist falsch.';
$string['admindirname'] = 'Name für das Admin-Verzeichnis';
$string['admindirsetting'] = 'Einige wenige Webhosting-Anbieter benutzen /admin als spezielles Verzeichnis für den Zugang zum Administrationstool oder andere Dinge. Leider kommt es dadurch zu Konflikten mit dem Standard für das Administrationsverzeichnis von Moodle. Sie können dies ändern, indem Sie das Verzeichnis /admin in der Moodle-Installation umbenennen. Den geänderten Namen dieses Verzeichnisses müssen Sie hier eingeben, z.B.: <br /> <br /><b>moodleadmin</b><br /> 
Dies ändert die Links für das Admin-Verzeichnis in Moodle.';
$string['admindirsettinghead'] = 'Admin-Verzeichnis festlegen ...';
$string['admindirsettingsub'] = 'Einige wenige Webhosting-Anbieter benutzen /admin als spezielles Verzeichnis für den Zugang zum Administrationstool oder andere Dinge. Leider kommt es dadurch zu Konflikten mit dem Standard für das Administrationsverzeichnis von Moodle. Sie können dies ändern, indem Sie das Verzeichnis /admin in der Moodle-Installation umbenennen. Den geänderten Namen dieses Verzeichnisses müssen Sie hier eingeben.
z.B.: <br /> <br /><b>moodleadmin</b><br /> 
Dies ändert die Links für das Admin-Verzeichnis in Moodle.';
$string['availablelangs'] = 'Liste der verfügbaren Sprachen';
$string['caution'] = 'Warnung';
$string['chooselanguage'] = 'Sprache wählen';
$string['chooselanguagehead'] = 'Sprache wählen';
$string['chooselanguagesub'] = 'Wählen Sie eine Sprache, die Sie während der Installation verwenden wollen. Nach der Installation können Sie die Sprache für die Oberfläche und die Nutzer/innen festlegen.';
$string['cliadminpassword'] = 'Neues Admin-Kennwort';
$string['clialreadyinstalled'] = 'Die Datei config.php existiert bereits. Bitte benutzen Sie admin/cli/upgrade.php falls Sie Ihre Website aktualisieren möchten.';
$string['cliinstallfinished'] = 'Die Installation wurde erfolgreich abgeschlossen';
$string['cliinstallheader'] = 'Installation von Moodle $a über die Kommandozeile';
$string['climustagreelicense'] = 'Im nicht-interaktiven Modus müssen Sie der Lizenz über die Option --agree-license zustimmen';
$string['clitablesexist'] = 'Die Datenbank-Tabellen existieren bereits - Die cli Installation kann nicht fortgesetzt werden';
$string['compatibilitysettings'] = 'Prüfung Ihrer PHP-Einstellungen ...';
$string['compatibilitysettingshead'] = 'Prüfung Ihrer PHP-Einstellungen ...';
$string['compatibilitysettingssub'] = 'Alle Tests sollten vom Server bestätigt werden, damit Moodle später reibungslos laufen kann.';
$string['configfilenotwritten'] = 'Das Installationsscript kann die Datei config.php, welche die gewählten Einstellungen enthält, nicht automatisch erstellen. Der web-user hat keine Schreibrechte für das Moodle-Verzeichnis. Sie können den folgenden Code manuell in der Datei config.php speichern und diese dann ins Hauptverzeichnis Ihrer Moodle-Installation kopieren.';
$string['configfilewritten'] = 'Die Datei config.php wurde erfolgreich erstellt';
$string['configurationcomplete'] = 'Konfiguration ist abgeschlossen.';
$string['configurationcompletehead'] = 'Konfiguration ist abgeschlossen';
$string['configurationcompletesub'] = 'Moodle speichert Ihre Konfigurationseinstellungen nun im Hauptverzeichnis Ihrer Moodle-Installation.';
$string['database'] = 'Datenbank';
$string['databasecreationsettings'] = 'Sie müssen die Datenbankeinstellungen für die Speicherung der Moodle-Daten konfigurieren. Die Datenbank wird automatisch vom Installationsprozess mit den unten festgelegten Einstellungen angelegt:
<br />
<br /> <br />
<b>Typ:</b> vom Installer festgelegt auf  \"mysql\"<br />
<b>Server:</b> vom Installer festgelegt auf  \"localhost\"<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> vom Installer festgelegt auf  \"root\"<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> optionaler Prefix für alle Tabellennamen';
$string['databasecreationsettingshead'] = 'Sie müssen Einstellungen für die Datenbank konfigurieren, in der die meisten Moodle-Daten abgelegt werden. Der Installationsprozess erstellt die Datenbanktabellen automatisch auf der Grundlage der Einstellungen.';
$string['databasecreationsettingssub'] = '<b>Typ:</b> vom Installer festgelegt auf  \"mysql\" <br />
<b>Server:</b> vom Installer festgelegt auf  \"localhost\"<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> vom Installer festgelegt auf  \"root\"<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> optionaler Prefix für alle Tabellennamen';
$string['databasecreationsettingssub2'] = '<b>Typ:</b> vom Installer festgelegt auf \"mysqli\"<br />
<b>Server:</b> vom Installer festgelegt auf  \"localhost\"<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> vom Installer festgelegt auf \"root\"<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> optionaler Prefix für alle Tabellennamen';
$string['databasehead'] = 'Datenbank-Einstellungen';
$string['databasehost'] = 'Datenbank-Server :';
$string['databasename'] = 'Datenbank-Name :';
$string['databasepass'] = 'Datenbank-Kennwort :';
$string['databasesettings'] = 'Sie müssen die Datenbankeinstellungen für die Speicherung der Moodle-Daten konfigurieren. Diese Datenbank muss bereits vorher angelegt sein und Sie müssen den Datenbank-Nutzer und das Kennwort kennen.<br />
 <br />
<b>Typ:</b> mysql oder postgres7<br />
<b>Server:</b> z.B. localhost oder db.isp.com<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen Prefix:</b> optionaler Prefix für alle Tabellennamen';
$string['databasesettingshead'] = 'Sie müssen nun die Einstellungen für die Datenbank konfigurieren, in der die meisten Moodle-Daten gespeichert werden. Diese Datenbank muss bereits angelegt sein. Außerdem muss ein Nutzer mit Anmeldenamen und Kennwort existieren, der auf die Datenbank zugreifen darf.';
$string['databasesettingssub'] = '<b>Typ:</b> mysql oder postgres7<br />
<b>Server:</b> z.B. localhost oder db.isp.com<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> optionaler Prefix für alle Tabellennamen';
$string['databasesettingssub_mssql'] = '<b>Typ:</b> SQL*Server (ohne UTF-8)<b><strong class=\"errormsg\">Experimentell! (nicht für Produktivumgebungen)</strong></b><br /><br />
<b>Server:</b> z.B. localhost oder db.isp.com<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellennamen (notwendig)';
$string['databasesettingssub_mssql_n'] = '<b>Typ:</b> SQL*Server (mit UTF-8)<br />
<b>Server:</b> z.B. localhost oder db.isp.com<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingssub_mysql'] = '<b>Typ:</b> MySQL<br />
<b>Server:</b> z.B. localhost oder db.isp.com<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (optional)';
$string['databasesettingssub_mysqli'] = '<b>Typ:</b> Improved MySQL<br />
<b>Server:</b> z.B. localhost oder db.domain.com<br />
<b>Datenbank:</b> Datenbank-Name, z.B moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (optional)';
$string['databasesettingssub_oci8po'] = '<b>Typ:</b> Oracle<br />
<b>Server:</b> unbenutzt - muss leer bleiben!<br />
<b>Datenbank:</b> vorgegebener Name für die Verbindung zu tnsnames.ora<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>Typ:</b> SQL*Server (over ODBC) <b><font color=\"red\">Experimentell! (nicht für den produktiven Einsatz)</font></b><br />
<b>Server:</b> vorgegebener DSN-Name im ODBC-Kontrolldialog<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingssub_postgres7'] = '<b>Typ:</b> PostgreSQL<br />
<b>Server:</b> z.B. localhost oder db.isp.com<br />
<b>Datenbank:</b> Datenbankname, z.B. moodle<br />
<b>Nutzer:</b> Ihr Anmeldename für die Datenbank<br />
<b>Kennwort:</b> Ihr Kennwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingswillbecreated'] = '<b>Hinweis: </b> Das Installationsprogramm wird versuchen, automatisch eine Datenbank anzulegen, sofern diese noch nicht besteht.';
$string['databasesocket'] = 'Unix Socket';
$string['databasetypehead'] = 'Datenbank-Treiber wählen';
$string['databasetypesub'] = 'Moodle unterstützt mehrere Typen von Datenbank-Servern. Bitte fragen Sie Ihren Server-Administrator, welchen Typ Sie benutzen können.';
$string['databaseuser'] = 'Datenbank-Nutzer';
$string['dataroot'] = 'Daten-Verzeichnis';
$string['datarooterror'] = 'Das angegebene Datenverzeichnis ist nicht vorhanden und kann nicht angelegt werden. Korrigieren Sie die Pfad-Eingabe oder legen Sie das Verzeichnis manuell an.';
$string['datarootpublicerror'] = 'Das von Ihnen angegebene Verzeichnis dataroot ist direkt aus dem Internet zugänglich. Sie müssen das Verzeichnis ändern!';
$string['dbconnectionerror'] = 'Eine Verbindung zur angegebenen Datenbank konnte nicht hergestellt werden. Bitte überprüfen Sie Ihre Eingaben.';
$string['dbcreationerror'] = 'Fehler beim Anlegen der Datenbank. Die Datenbank konnte mit diesen Einstellungen nicht erstellt werden.';
$string['dbhost'] = 'Server';
$string['dbpass'] = 'Kennwort';
$string['dbprefix'] = 'Tabellen-Prefix';
$string['dbtype'] = 'Typ';
$string['dbwrongencoding'] = 'Die ausgewählte Datenbank läuft unter einem nicht empfohlenen Zeichensatz. Es wäre besser, wenn Sie eine Unicode (UTF-8) basierte Datenbank verwenden würden. Sie haben die Möglichkeit diesen Schritt zu überspringen. Vermutlch wird dies später bei der Nutzung aber zu Problemen führen.
Die ausgewählte Datenbank läuft unter einem nicht empfohlenen Zeichensatz. Es wäre besser, wenn Sie eine Unicode (UTF-8) basierte Datenbank verwenden würden. Sie haben die Möglichkeit diesen Schritt zu überspringen. Vermutlich wird dies später bei der Nutzung aber zu Problemen führen.';
$string['dbwronghostserver'] = 'Sie müssen den oben genannten \"Server\"-Regeln folgen.';
$string['dbwrongnlslang'] = 'Die Umgebungsvariable NLS_LANG Ihres Webservers muss den Zeichensatz AL32UTF8 benutzen. Lesen Sie in der PHP-Dokumentation nach, wie Sie OCI8 richtig einstellen.';
$string['dbwrongprefix'] = 'Sie müssen den oben genannten \"Tabellen-Prefix\"- Regeln folgen.';
$string['directorysettings'] = '<p>Bitte überprüfen Sie das Verzeichnis für diese Moodle-Installation.</p>

<p><b>URL-Adresse:</b>
Geben Sie hier die vollständige URL für Ihre Moodle-Installation an. Sollte Ihre Seite über mehrere Adressen erreichbar sein, geben Sie die Adresse an, die am häufigsten genutzt wird. Bitte geben Sie am Ende kein Slash ein.</p>

<p><b>Moodle-Verzeichnis:</b>
Geben Sie den absoluten Pfad für Ihre Moodle-Installation an. Bitte prüfen Sie, ob die Groß- und Kleinschreibung korrekt ist.</p>

<p><b>Datenverzeichnis:</b>
Moodle benötigt ein Verzeichnis, indem hochgeladene Dateien abgelegt werden. Dieses Verzeichnis muss Lese- und Schreibrechte für den 
web-user des Servers haben. (üblicherweise \'nobody\' or \'apache\'), aber es sollte nicht direkt über das Internet erreichbar sein.</p>';
$string['directorysettingshead'] = 'Bestätigen Sie bitte die Verzeichniseinträge für Ihre Moodle-Installation';
$string['directorysettingssub'] = '<p><b>URL-Adresse:</b>
Geben Sie hier die vollständige URL für Ihre Moodle-Installation an. Sollte Ihre Seite über mehrere Adressen erreichbar sein, geben Sie die Adresse an, die am häufigsten genutzt wird. Bitte geben Sie am Ende kein Slash ein.</p>

<p><b>Moodle-Verzeichnis:</b>
Geben Sie den absoluten Pfad für Ihre Moodle-Installation an. Bitte prüfen Sie, ob die Groß- und Kleinschreibung korrekt ist.</p>

<p><b>Datenverzeichnis:</b>
Moodle benötigt ein Verzeichnis, indem hochgeladene Dateien abgelegt werden. Dieses Verzeichnis muss Lese- und Schreibrechte für den 
web-user des Servers haben. (üblicherweise \'nobody\' or \'apache\'), aber es sollte nicht direkt über das Internet erreichbar sein.</p>';
$string['dirroot'] = 'Moodle-Verzeichnis';
$string['dirrooterror'] = 'Die Einstellungen für das Moodle-Verzeichnis sind nicht korrekt.  Es wurde keine Moodle-Installation gefunden. Die anderen Werte wurden gelöscht.';
$string['download'] = 'Herunterladen';
$string['downloadlanguagebutton'] = 'Download des Sprachpakets: $a';
$string['downloadlanguagehead'] = 'Download der Sprachpakete';
$string['downloadlanguagenotneeded'] = 'Sie können die Installation mit dem Sprachpaket \"$a\" fortsetzen.';
$string['downloadlanguagesub'] = 'Sie haben nun die Möglichkeit, ein Sprachpaket herunterzuladen und den Installationsprozess mit dieser Sprache fortzusetzen. <br /><br /> Falls sie keinen Download durchführen können, wird die Installation auf Englisch fortgeführt. (Wenn die Installation abgeschlossen ist, haben Sie die Option weitere Sprachpakete herunterzuladen.)';
$string['doyouagree'] = 'Stimmen Sie zu ? (ja/nein)';
$string['environmenthead'] = 'Prüfung der Installationsvoraussetzungen';
$string['environmentsub'] = 'Es wird geprüft, ob die verschiedenen Komponenten Ihres Systems die Installationsanforderungen erfüllen.';
$string['environmentsub2'] = 'Jedes Moodle-Release hat Mindestvoraussetzungen bezüglich der PHP-Version und einigen verbindlichen PHP-Extensions. Vor allen Installationen und Aktualisierungen wird eine vollständige Prüfung der Serverausstattung durchgeführt. Bitte fragen Sie Ihren Server-Administrator, wenn Sie mit der Installation einer neuen Version oder mit der Aktivierung von PHP-Extensions nicht weiterkommen.';
$string['errorsinenvironment'] = 'Fehler bei den Anforderungen!';
$string['fail'] = 'Fehlgeschlagen';
$string['fileuploads'] = 'Dateien hochladen';
$string['fileuploadserror'] = 'Dies sollte eingeschaltet sein';
$string['fileuploadshelp'] = '<p>Dateien hochladen ist auf diesem Server abgestellt.</p> <p>Moodle kann installiert werden. Es ist aber nicht möglich, Dateien für Kurse oder Bilder in den Profilen hochzuladen.</p> <p>Um das Hochladen von Dateien zu ermöglichen, müssen Sie oder der Administrator des Servers die Datei php.ini anpassen und die Einstellungen für<b>file_uploads</b> ändern auf \'1\'.</p>';
$string['gdversion'] = 'GD-Version';
$string['gdversionerror'] = 'Die GD-Bibliothek sollte verfügbar sein, um Bilder zu erzeugen und anzuzeigen.';
$string['gdversionhelp'] = '<p>Auf Ihrem Server ist vermutlich GD nicht installiert. </p>
<p>GD ist eine Bibliothek, die von PHP benötigt wird, um damit Bilder von Moodle angezeigt werden können, z.B. Nutzer-Bilder oder grafische Darstellungen der Log-Daten. Moodle arbeitet auch ohne GD. Die o.g. Funktionen stehen Ihnen dann jedoch nicht zur Verfügung.</p>
<p> Wenn Sie GD unter UNIX zu PHP hinzufügen wollen, kompilieren Sie PHP unter Verwendung des Parameters   with-gd </p>
<p>Unter Windows können Sie die Datei php.ini bearbeiten und die Zeile libgd.dll auskommentieren.</p>';
$string['globalsquotes'] = 'Unsichere Einstellung von Globalparametern';
$string['globalsquoteserror'] = 'Prüfen Sie die PHP-Einstellungen: deaktivieren Sie register_globals und/oder aktivieren Sie magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Die Kombination von deaktivierten Magic Quotes GPC und aktivierten Register Globals zur gleichen Zeit sind nicht empfehlenswert.</p>

<p>Die empfohlene Einstellung ist <b>magic_quotes_gpc = On</b> und <b>register_globals = Off</b> in Ihrer php.ini-Datei</p>

<p>Wenn Sie keinen Zugriff auf die Datei php.ini haben, können Sie die folgende Zeile in der Datei .htaccess im Moodle Verzeichnis einfügen:
<blockquote><div>php_value magic_quotes_gpc On</div></blockquote>
<blockquote><div>php_value register_globals Off</div></blockquote>
</p>';
$string['inputdatadirectory'] = 'Daten-Verzeichnis';
$string['inputwebadress'] = 'Web-Adresse';
$string['inputwebdirectory'] = 'Moodle-Verzeichnis';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Leider konnte die Sprache \"$a\" nicht installiert werden. Die Installation wird auf Englisch fortgesetzt.';
$string['langdownloadok'] = 'Die Installation der Sprache \"$a\" war erfolgreich. Der weitere Installationsprozess erfolgt nun in dieser Sprache.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Dies sollte ausgeschaltet sein (\'off\')';
$string['magicquotesruntimehelp'] = '<p>Magic Quotes Runtime sollte abgeschaltet \'off\' sein, damit Moodle richtig läuft.  </p>
<p>Normalerweise ist dies der Fall. Prüfen Sie die Einstellung <b>magic_quotes_runtime</b> in der Datei php.ini. </p>
<p>Wenn Sie keinen Zugriff zur Datei php.ini haben sollten Sie die folgende Zeile in eine Datei .htacess in Ihrem Moodle-Verzeichnis einfügen: <blockquote><div>php_value magic_quotes_runtime Off</div></blockquote></p>';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'Die PHP-Speichereinstellung memory_limit ist zu niedrig. Dies könnte später zu Problemen führen.';
$string['memorylimithelp'] = '<p>Die PHP-Einstellung memory_limit für Ihren Server ist zur Zeit auf $a eingestellt. </p>
<p>Dies wird vermutlich zu Problemen führen, wenn Sie Moodle mit vielen Aktivitäten oder vielen Nutzer/innen verwenden. </p>
<p>Wir empfehlen die Einstellung zu erhöhen. Empfohlen werden 40M oder mehr. Dies können Sie auf verschiedene Arten machen:</p>
<ol>
<li>Wenn Sie PHP neu kompilieren können, nehmen Sie die Einstellung <i>--enable-memory-limit</i>. Dann kann Moodle die Einstellung selber vornehmen.
<li>Wenn Sie Zugriff auf die Datei php.ini haben, können Sie die Einstellung <b>memory_limit</b> selber auf z.B. 40M anpassen. Wenn Sie selber keinen Zugriff haben, fragen Sie den Server-Admin, dies für Sie zu tun.
<li>Auf einigen PHP-Servern können Sie eine .htaccess-Datei im Moodle-Verzeichnis einrichten. Tragen Sie darin die folgende Zeile ein: <p><blockquote><div>php_value memory_limit 40M</div></blockquote></p>
<p>Achtung: auf einigen Servern hindert diese Einstellung <b>alle</b> PHP-Seiten und Sie erhalten Fehlermeldungen. Entfernen Sie dann den Eintrag in der .htaccess-Datei wieder.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server mit UTF-8-Unterstützung (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die MSSQL-Erweiterung mit SQL*Server zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die MySQL-Erweiterung mit MySQL zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP wurde nicht ordnungsgemäß für die MySQLi-Erweiterung konfiguriert, um mit MySQL zu kommunizieren. Bitte überprüfen Sie die Datei php.ini oder übersetzen Sie PHP neu. Die MySQLi-Erweiterung ist nicht für PHP4 verfügbar.';
$string['nativemysqli'] = 'Verbessertes MySQL (nativ/mysqli)';
$string['nativemysqlihelp'] = 'Sie müssen die Datenbankeinstellungen für die Speicherung der Moodle-Daten konfigurieren. Die Datenbank wird angelegt, wenn der angegebene Datenbank-Nutzer die dafür nötigen Rechte besitzt. Ein Nutzername und das zugehörige Kennwort für den Datenbank-Zugriff müssen bereits existieren. Das Tabellen-Prefix ist optional.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'Sie müssen die Datenbankeinstellungen für die Speicherung der Moodle-Daten konfigurieren. Die Datenbank muss bereits angelegt sein. Ein Nutzername und das zugehörige Kennwort  für den Datenbank-Zugriff müssen bereits existieren. Das Tabellen-Prefix ist verbindlich.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die OCI8-Erweiterung mit Oracle zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['odbc_mssql'] = 'SQL*Server über ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die ODBC-Erweiterung mit SQL*Server zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['pass'] = 'Durchgang';
$string['paths'] = 'Pfade';
$string['pathserrcreatedataroot'] = 'Das Datenverzeichnis ($a->dataroot) kann vom Installer nicht angelegt werden.';
$string['pathshead'] = 'Pfade bestätigen';
$string['pathsrodataroot'] = 'Das Verzeichnis dataroot ist schreibgeschützt.';
$string['pathsroparentdataroot'] = 'Das Verzeichnis ($a->parent) ist schreibgeschützt. Deswegen kann das Datenverzeichnis ($a->dataroot)  vom Installer nicht angelegt werden.';
$string['pathssubadmindir'] = 'Einige Webserver benutzen /admin als speziellen Link, um auf Einstellungsseiten oder Ähnliches zu verweisen. Unglücklicherweise kollidiert dies mit dem standardmäßigen Verzeichnis für die Moodle-Administration. Sie können dieses Problem beheben, indem Sie das Verzeichnis admin in Ihrer Moodle-Installation umbenennen und den neuen Namen hier eingeben (z.B. <em>moodleadmin</em>). Mit dieser Änderung werden alle Admin-Links korrigiert.';
$string['pathssubdataroot'] = 'Sie benötigen einen Speicherplatz, wo Moodle hochgeladene Dateien abspeichern kann. Dieses Verzeichnis muss mit den Rechten des Webservers (üblicherweise \'nobody\' oder \'apache\') lesbar und beschreibbar sein. Dieses Verzeichnis sollte allerdings nicht direkt über das Internet erreicht werden können.';
$string['pathssubdirroot'] = 'Vollständiger Pfad der Moodle-Installation. Bitte ändern Sie diese Einstellung nur bei der Bunutzung symbolischer Links.';
$string['pathssubwwwroot'] = 'Vollständige Internetadresse für den Zugriff auf Moodle. Es ist nicht möglich, über mehrere unterschiedliche Adressen auf Moodle zuzugreifen. Sollten Sie für Ihre Website mehrere öffentliche Adressen verwenden, so müssen Sie eine Adresse auswählen und für die übrigen Adressen dauerhafte Weiterleitungen einrichten. Falls Ihre Website gleichzeitig aus einem Intranet und aus dem Internet erreichbar ist, so tragen Sie hier die öffentliche Adresse ein. Sorgen Sie in diesem Fall zusätzlich dafür, dass über einen DNS-Eintrag für alle Intranet-Nutzer ebenfalls die öffentliche Adresse nutzbar ist.';
$string['pathsunsecuredataroot'] = 'Der Speicherort des Verzeichnisses dataroot ist unsicher';
$string['pathswrongadmindir'] = 'Das Verzeichnis admin existiert nicht';
$string['pathswrongdirroot'] = 'Falscher Pfad zum Verzeichnis dirroot';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die PGSQL-Erweiterung mit PostgreSQL zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['phpextension'] = 'PHP-Extension $a';
$string['phpversion'] = 'PHP-Version';
$string['phpversionhelp'] = '<p>Moodle erwartet PHP mindestens in der Version 4.3.0/4.4.0 oder 5.1.0 (5.0.x weist eine Reihe bekannter Fehler auf).</p>
<p>Sie nutzen zur Zeit die Version $a.</p>
<p>Sie müssen Ihre PHP-Verson aktualisieren oder auf einen Rechner wechseln, der eine neuere Version von PHP nutzt.<br />
(Im Falle von 5.0.x könnten Sie auch zu einer Version 4.3.x/4.4.x downgraden)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Um Informationen über diese Moodle-Version zu erhalten, schauen Sie bitte in die Release-Hinweise auf $a';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Die Nutzung von Moodle im Safe Mode kann zu Schwierigkeiten führen.';
$string['safemodehelp'] = '<p>Moodle kann beim Betrieb im Safe Mode verschiedene Probleme haben, nicht zuletzt kann es unmöglich sein, neue Dateien zu erzeugen. </p>
<p>Safe Mode ist zumeist nur auf einigen öffentlichen Webservern eingestellt. Suchen Sie sich einen Anbieter, der auf diese Einstellung verzichtet oder bitten Sie Ihren Dienstleister, dass Sie auf einen Server \'umziehen\' können, der diese Einstellung nicht verwendet.</p>
<p>Sie können versuchen, die Installation fortzusetzen. Sie müssen aber später mit Problemen rechnen. </p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Diese Option sollte abgeschaltet sein';
$string['sessionautostarthelp'] = '<p>Moodle benötigt den Session Support und kann ohne diese Einstellung nicht funktionieren.</p>
<p>Sessions sind durch Einstellungen in der Datei php.ini möglich. Bitte suchen Sie nach der Einstellung für session.auto_start </p>';
$string['skipdbencodingtest'] = 'Prüfung der Datenbank-Verschlüsselung überspringen';
$string['sqliteextensionisnotpresentinphp'] = 'PHP ist für die Erweiterung SQLite nicht richtig konfiguriert. Bitte prüfen Sie Ihre php.ini oder übersetzen Sie PHP neu.';
$string['upgradingqtypeplugin'] = 'Plugin für Frage/Typ aktualisieren';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Sie haben das Paket <strong>$a->packname $a->packversion</strong> erfolgreich auf Ihrem Computer installiert.';
$string['welcomep30'] = 'Diese Version von <strong>$a->installername</strong> enthält folgende Anwendungen, mit denen Sie <strong>Moodle</strong> ausführen können:';
$string['welcomep40'] = 'Das Paket enthält: <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Die Nutzung dieser Anwendungen ist lizenzrechtlich geprüft. Alle Anwendungen von <strong>$a->installername</strong> sind
<a href=\"http://www.opensource.org/docs/definition_plain.html\"> Open Source </a> und unterliegen der <a href=\"http://www.gnu.org/copyleft/gpl.html\"> GPL</a> Lizenz.';
$string['welcomep60'] = 'Die folgenden Seiten führen Sie in einfachen Schritten durch die Konfiguration und Installation von <strong>Moodle</strong> auf Ihrem Computer. Sie können die vorgeschlagenen Einstellungen übernehmen oder an Ihre Bedürfnisse anpassen.';
$string['welcomep70'] = 'Klicken Sie auf den \"Weiter\"-Button, um mit dem Setup von <string>Moodle</string> fortzufahren.';
$string['wwwroot'] = 'Web-Adresse';
$string['wwwrooterror'] = 'Diese Web-Adresse scheint nicht gültig zu sein. Moodle ist nicht unter dieser Adresse installiert.';
$string['phpversionerror'] = 'PHP muss mindestens in der Version 4.3.0 oder 5.1.0 installiert sein (5.0.x weist eine Reihe bekannter Fehler auf).'; // ORPHANED
$string['postgresqlwarning'] = '<strong>Hinweis:</strong> Falls Sie Verbindungsprobleme bemerken, könnten Sie versuchen im Feld \'Host\' folgende Einträge zu setzen: \"host=\'postgresql_host\' port=\'5432\' dbname=\'postgresql_database_name\' user=\'postgresql_user\' password=\'postgresql_user_password\'\". Die Felder Name der Datenbank, Nutzer und Kennwort bleiben leer. Weitere Informationen finden Sie in den <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">Moodle Docs</a>'; // ORPHANED
$string['aborting'] = 'Installation abbrechen'; // ORPHANED
$string['adminemail'] = 'E-Mail :'; // ORPHANED
$string['adminfirstname'] = 'Vorname :'; // ORPHANED
$string['admininfo'] = 'Administratordetails'; // ORPHANED
$string['adminlastname'] = 'Nachname :'; // ORPHANED
$string['adminpassword'] = 'Passwort :'; // ORPHANED
$string['adminusername'] = 'Anmeldename :'; // ORPHANED
$string['askcontinue'] = 'Fortsetzen (ja/nein) :'; // ORPHANED
$string['availabledbtypes'] = 'Verfügbare Datenbank-Typen'; // ORPHANED
$string['cannotconnecttodb'] = 'Verbindung zur Datenbank gescheitert'; // ORPHANED
$string['checkingphpsettings'] = 'PHP-Einstellungen prüfen'; // ORPHANED
$string['configfilecreated'] = 'Konfiguartionsdatei wurde erfolgreich erstellt'; // ORPHANED
$string['configfiledoesnotexist'] = 'Keine Konfiguarationsdatei gefunden!!!'; // ORPHANED
$string['configurationfileexist'] = 'Konfiguarationsdatei existiert bereits!'; // ORPHANED
$string['creatingconfigfile'] = 'Konfiguarationsdatei wird erstellt ...'; // ORPHANED
$string['databasesettingsformoodle'] = 'Datenbank-Einstellungen für Moodle'; // ORPHANED
$string['databasetype'] = 'Datenbank-Typ :'; // ORPHANED
$string['disagreelicense'] = 'Das Upgrade wird nicht ohne Zustimmung zur GPL durchgeführt!'; // ORPHANED
$string['downloadlanguagepack'] = 'Möchten Sie jetzt das Sprachpaket herunterladen (ja/nein) :'; // ORPHANED
$string['downloadsuccess'] = 'Sprachpaket erfolgreich heruntergeladen'; // ORPHANED
$string['installationiscomplete'] = 'Die Installation ist abgeschlossen!'; // ORPHANED
$string['invalidargumenthelp'] = 'Fehler: Ungültige Argumente
Benutzung: \$ php cliupgrade.php OPTIONS
Geben Sie --help ein, um weitere Hilfe zu bekommen'; // ORPHANED
$string['invalidemail'] = 'Ungültige E-Mail'; // ORPHANED
$string['invalidhost'] = 'Ungültiger Server'; // ORPHANED
$string['invalidint'] = 'Fehler: Wert ist keine Zahl'; // ORPHANED
$string['invalidintrange'] = 'Fehler: Wert ist außerhalb des Bereichs'; // ORPHANED
$string['invalidpath'] = 'Ungültiger Pfad'; // ORPHANED
$string['invalidsetelement'] = 'Fehler: Wert ist nicht in den vorgegebenen Optionen enthalten'; // ORPHANED
$string['invalidtextvalue'] = 'Ungültiger Text'; // ORPHANED
$string['invalidurl'] = 'Ungültige URL'; // ORPHANED
$string['invalidvalueforlanguage'] = 'Ungültiger Wert für die Option --lang. Geben Sie --help ein, um mehr Hilfe zu bekommen'; // ORPHANED
$string['invalidyesno'] = 'Fehler: Wert ist kein gültiges Ja/Nein-Argument'; // ORPHANED
$string['locationanddirectories'] = 'Speicherort und -verzeichnisse'; // ORPHANED
$string['pdosqlite3'] = 'SQLite 3 (PDO) <b><strong class=\"errormsg\">Experimentell! (nicht nutzbar in produktiven Umgebungen)</strong></b>'; // ORPHANED
$string['php52versionerror'] = 'PHP-Version muss mindestens 5.2.4 sein.'; // ORPHANED
$string['php52versionhelp'] = '<p>Moodle benötigt mindestens PHP Version 5.2.4</p>
<p>Sie nutzen zur Zeit Version $a.</p>
<p>Ihre PHP-Version muss aktualisiert oder ein anderer Host genutzt werden.</p>'; // ORPHANED
$string['selectlanguage'] = 'Sprache für die Installation auswählen'; // ORPHANED
$string['sitefullname'] = 'Name der gesamten Website :'; // ORPHANED
$string['siteinfo'] = 'Details der Website'; // ORPHANED
$string['sitenewsitems'] = 'Anzahl neuer Nachrichten :'; // ORPHANED
$string['siteshortname'] = 'Kurzname der Website :'; // ORPHANED
$string['sitesummary'] = 'Beschreibung der Website :'; // ORPHANED
$string['tableprefix'] = 'Tabellen-Prefix :'; // ORPHANED
$string['upgradingactivitymodule'] = 'Aktivitäten-Module aktualisieren'; // ORPHANED
$string['upgradingbackupdb'] = 'Datenbanktabelle zum Backup aktualisieren'; // ORPHANED
$string['upgradingblocksdb'] = 'Datenbanktabelle für Blöcke aktualisieren'; // ORPHANED
$string['upgradingblocksplugin'] = 'Plugin für Blöcke aktualisieren'; // ORPHANED
$string['upgradingcompleted'] = 'Aktualisierung abgeschlossen ...'; // ORPHANED
$string['upgradingcourseformatplugin'] = 'Plugin für das Kursformat aktualisieren'; // ORPHANED
$string['upgradingenrolplugin'] = 'Plugin zur Einschreibung aktualisieren'; // ORPHANED
$string['upgradinggradeexportplugin'] = 'Plugin zum Bewertungsexport aktualisieren'; // ORPHANED
$string['upgradinggradeimportplugin'] = 'Plugin zum Bewertungsimport aktualisieren'; // ORPHANED
$string['upgradinggradereportplugin'] = 'Plugin zum Bewertungsbericht aktualisieren'; // ORPHANED
$string['upgradinglocaldb'] = 'Lokale Datenbank aktualisieren'; // ORPHANED
$string['upgradingmessageoutputpluggin'] = 'Plugin zur Mitteilungsausgabe aktualisieren'; // ORPHANED
$string['upgradingrpcfunctions'] = 'RPC-Funktionen aktualisieren'; // ORPHANED
$string['usagehelp'] = 'Übersicht:
\$php cliupgrade.php --Parameter

Parameter:
--lang : Spracheinstellung für die Installation (Standard Englisch (en))
--webaddr : Web-Adresse der Moodle-Site
--moodledir : Pfad zum Moodle-Verzeichnis
--datadir : Pfad zum Daten-Verzeichnis (sollte vor direktem Zugriff geschützt sein!!)
--dbtype : Datenbank-Typ (Standard mysql)
--dbhost : Datenbank-Server (Standard localhost)
--dbname : Datenbank-Name (Standard moodle)
--dbuser : Datenbank-Nutzer
--dbpass : Datenbank-Passwort
--prefix : Tabellen-Prefix für alle Datenbank-Tabellen. (Standard mdl_)
--verbose : 0 keine Ausgabe, 1 Zusammenfassung (Standard), 2 Ausgabe aller Details
--interactivelevel : 0 nicht interaktiv, 1 semi-interaktiv (Standard), 2 interaktiv
--agreelicense : Yes (Standard) oder No
--confirmrelease : Yes (Standard) oder No
--sitefullname : Name der Website. (Standard \"Moodle Site\" - bitte ändern!!)
--siteshortname : Kurzname der Website (Standard moodle)
--sitesummary : Bescheibung der Website
--adminfirstname : Vorname des Adminstrators (Standard Admin)
--adminlastname : Nachname des Adminstrators (Standard User)
--adminusername : Anmeldename des Adminstrators (Standard admin)
--adminpassword : Passwort für den Adminstrator (Standard admin)
--adminemail : E-Mail-Adresse des Adminstrators (Standard root@localhost)
--help : Hilfe anzeigen

Nutzungsbeispiel:
\$php cliupgrade.php --lang=en --webaddr=http://www.example.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost --dbname=moodle --dbuser=root --prefix=mdl --agreelicense=yes --confirmrelease=yes --sitefullname=\"Example Moodle Site\" --siteshortname=moodle --sitesummary=siteforme --adminfirstname=Admin --adminlastname=User --adminusername=admin --adminpassword=admin --adminemail=admin@example.com --verbose=1 --interactivelevel=2'; // ORPHANED
$string['versionerror'] = 'Fehler: Nutzerabbruch bei der Versionsabfrage'; // ORPHANED
$string['welcometext'] = '--- Moodle-Installation über die Komandozeile ---'; // ORPHANED
$string['writetoconfigfilefaild'] = 'Fehler beim Schreiben der Konfigurationsdatei'; // ORPHANED
$string['yourchoice'] = 'Ihre Wahl :'; // ORPHANED
$string['databasesettingssub_sqlite3_pdo'] = '<b>Typ:</b> SQLite 3 (PDO) <b><strong class=\"errormsg\">Experimentell! (nicht für produktive Server benutzen!!)</strong></b><br />
<b>Host:</b> Pfad zum Verzeichnis, in dem die Datenbankdatei gespeichert werden soll (vollständiger Pfad); mit localhost oder einem leeren Feld wird dasdas Moodle Datenverzeichnis verwendet<br />
<b>Name:</b> Datenbankname, z.B. moodle (optional)<br />
<b>Nutzer:</b> Ihr Benutzername für die Datenbank (optional)<br />
<b>Passwort:</b> Ihr Passwort für die Datenbank (optional)<br />
<b>Tabellen-Prefix:</b> optionaler Prefix für alle Tabellen<br />
Der Name der Datenbankdatei wird über den Nutzernamen erkannt, der Datenbankname und das Passwort sind oben angegeben.'; // ORPHANED
$string['sqlite3_pdo'] = 'SQLite 3 (PDO) <b><strong class=\"errormsg\">Experimentell! (nicht für produktive Server benutzen!!)</strong></b>'; // ORPHANED

?>
