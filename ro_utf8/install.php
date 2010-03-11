<?PHP // $Id$ 
      // install.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['admindirerror'] = 'Directorul admin specificat este incorect';
$string['admindirname'] = 'Admin Directory';
$string['admindirsettinghead'] = 'Se setează Admin Directory...';
$string['caution'] = 'Atenţie';
$string['chooselanguage'] = 'Selectaţi o limbă';
$string['chooselanguagehead'] = 'Selectare limbă';
$string['chooselanguagesub'] = 'Vă rugăm selectaţi limba pentru interfaţa de instalare, limba selectată va fi folosită EXCLUSIV în cadrul procedurii de instalare. Ulterior veţi putea selecta limba în care doriţi să fie afişată interfaţa.';
$string['compatibilitysettings'] = 'Se verifică setările PHP...';
$string['compatibilitysettingshead'] = 'Se verifică setările PHP...';
$string['configfilewritten'] = 'config.php a fost creat cu succes';
$string['configurationcomplete'] = 'Configurare finalizată';
$string['configurationcompletehead'] = 'Finalizare configurare';
$string['configurationcompletesub'] = 'Moodle a făcut o încercare de salvare a fişierului de configurare a sitului dumneavoastră în directorul root al Moodle.';
$string['database'] = 'Bază de date';
$string['databasecreationsettings'] = 'Acum va trebui să configuraţi setările bazei de date unde vor fi stocate majoritatea datelor Moodle. Această bază de date va fi creată în mod automat de aplicaţia de instalare cu parametrii specificaţi mai jos.<br />
<br /> <br />
<b>Type:</b> fixed to \"mysql\" by the installer<br />
<b>Host:</b> fixed to \"localhost\" by the installer<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> fixed to \"root\" by the installer<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasecreationsettingshead'] = 'Acum va trebui să configuraţi setările pentru baza de date unde se vor stoca datele Moodle. Această bază de date va fi creată automat de installer cu parametrii specificaţi mai jos.';
$string['databasecreationsettingssub'] = '<b>Type:</b> fixed to \"mysql\" by the installer<br />
<b>Host:</b> fixed to \"localhost\" by the installer<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> fixed to \"root\" by the installer<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasesettings'] = 'Acum va trebui să configuraţi baza de date unde se vor restaura marea majoritate a informaţiilor din baza de date Moodle. Această bază de date ar fi trebuit să fi fost deja creată şi să aveţi nevoie de un nume de utilizator şi de o parolă să o accesaţi.<br />
<br /> <br />
<b>Type:</b> mysql or postgres7<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasesettingssub'] = '<b>Type:</b> mysql or postgres7<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (non UTF-8) <b><strong class=\"errormsg\">Experimental! (not for use in production)</strong></b><br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingssub_mssql_n'] = '<b>Type:</b> SQL*Server (UTF-8 enabled)<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingssub_mysql'] = '<b>Type:</b> MySQL<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (optional)';
$string['databasesettingssub_mysqli'] = '<b>Type:</b> Improved MySQL<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (optional)';
$string['databasesettingssub_oci8po'] = '<b>Type:</b> Oracle<br />
<b>Host:</b> not used, must be left blank<br />
<b>Name:</b> given name of the tnsnames.ora connection<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>Type:</b> SQL*Server (over ODBC) <b><strong class=\"errormsg\">Experimental! (not for use in production)</strong></b><br />
<b>Host:</b> given name of the DSN in the ODBC control panel<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingssub_postgres7'] = '<b>Type:</b> PostgreSQL<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingswillbecreated'] = '<b>Notă:</b> În cazul în care nu există o bază de date installerul va încerca să creeze în mod automat una.';
$string['dataroot'] = 'Data Directory';
$string['datarooterror'] = 'Data Directory specificat de dumneavoastră nu a putut fi găsit sau creat. Verificaţi corectitudinea căii furnizate sau creaţi manual directorul.';
$string['datarootpublicerror'] = 'Data Directory specificat de dumneavoastră este accesibil în mod direct via Web, trebuie să folosiţi un alt director.';
$string['dbconnectionerror'] = 'Nu s-a putut realiza conexiunea cu baza de date specificată de dumneavoastră. Vă rugăm verificaţi setările făcute pentru baza de date.';
$string['dbcreationerror'] = 'Eroare creare bază de date. Nu s-a putut crea baza de date cu numele şi setările furnizate.';
$string['dbhost'] = 'Host Server';
$string['dbpass'] = 'Parolă';
$string['dbprefix'] = 'Prefix tabele';
$string['dbtype'] = 'Tip';
$string['dirroot'] = 'Director Moodle';
$string['download'] = 'Descarcă';
$string['downloadlanguagebutton'] = 'Descarcă modulul de localizare  &quot;$a&quot;';
$string['downloadlanguagehead'] = 'Descarcă modulul de localizare';
$string['downloadlanguagenotneeded'] = 'Puteţi continua procesul de instalare folosind modulul de localizare implicit \"$a\".';
$string['environmenthead'] = 'Se verifică mediul...';
$string['fileuploads'] = 'Încărcare Fişiere';
$string['fileuploadserror'] = 'Acest parametru ar trebuie să fie activat';
$string['gdversion'] = 'Versiune GD';
$string['installation'] = 'Instalare';
$string['magicquotesruntimeerror'] = 'Acest parametru ar trebui să fie dezactivat';
$string['memorylimit'] = 'Limită memorie';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server with UTF-8 support (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['oci8po'] = 'Oracle (oci8po)';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['phpversion'] = 'Versiune PHP';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Este posibili ca Moodle să nu poată funcţiona cu Safe Mode';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Acest parametru ar trebui să fie dezactivat';
$string['skipdbencodingtest'] = 'Skip DB Encoding Test';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['wwwroot'] = 'Adresă Web';

?>
