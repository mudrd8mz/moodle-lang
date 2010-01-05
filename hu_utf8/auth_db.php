<?PHP // $Id$ 
      // auth_db.php - created with Moodle 1.9.3+ (Build: 20081217) (2007101532.11)


$string['auth_dbcantconnect'] = 'Nem sikerült csatlakozni a megadott hitelesítési adatbázishoz...';
$string['auth_dbchangepasswordurl_key'] = 'Jelszómódosító URL';
$string['auth_dbdebugauthdb'] = 'Az ADOdb hibaszűrése';
$string['auth_dbdebugauthdbhelp'] = 'Az ADOdb külső adatbázishoz csatlakozásának hibaszűrése - bejelentkezéskor üres oldal megjelenése esetén használandó. Éles portálokon nem használandó!';
$string['auth_dbdeleteuser'] = '$a[0] id $a[1] felhasználó törlése';
$string['auth_dbdeleteusererror'] = 'Hiba  $a felhasználó törlése közben';
$string['auth_dbdescription'] = 'Ez a módszer külső adatbázistábla alapján ellenőrzi az adott felhasználónév és jelszó érvényességét. Új fiók esetén egyéb mezők adatai is átmásolhatók a Moodle-ba.';
$string['auth_dbextencoding'] = 'Külső adatbázis kódolása';
$string['auth_dbextencodinghelp'] = 'A külső adatbázisban használt kódolás';
$string['auth_dbextrafields'] = 'Ezek választható mezők. Az itt megadott <b>külső adatbázismezőkből</b> előre kitölthet egyes Moodle-hoz tartozó felhasználói mezőket. <p>Ha üresen hagyja, az alapbeállítás adatai kerülnek bele.</p><p>bejelentkezés után a felhasználó mindkét esetbenn az összes mezőt szerkesztheti.</p>';
$string['auth_dbfieldpass'] = 'A jelszavakat tartalmazó mező neve';
$string['auth_dbfieldpass_key'] = 'Jelszómező';
$string['auth_dbfielduser'] = 'A felhasználóneveket tartalmazó mező neve';
$string['auth_dbfielduser_key'] = 'Felhasználónév-mező';
$string['auth_dbhost'] = 'Az adatbázisszerver gazdagépe';
$string['auth_dbhost_key'] = 'Gazdagép';
$string['auth_dbinsertuser'] = '$a[0] id $a[1] felhasználó beszúrva';
$string['auth_dbinsertusererror'] = 'Hiba $a felhasználó beszúrása közben';
$string['auth_dbname'] = 'AZ adatbázis neve';
$string['auth_dbname_key'] = 'Adatbázisnév';
$string['auth_dbpass'] = 'A fenti felhasználónévnek megfelelő jelszó';
$string['auth_dbpass_key'] = 'Jelszó';
$string['auth_dbpasstype'] = '<p>Adja meg a jelszómező által használt formátumot. Az MD5 hash-kód hasznos egyéb elterjedt webes alkalmazásokhoz, pl. a PostNuke-hozt való csatlakozás esetén.</p> <p>Használja a \'belsőt\', ha a külső adatbázissal kívánja kezelni a felhasználóneveket és az e-mail címeket, de a jelszavak kezelését a Moodle-ra bízná. A \'belső\' használata esetén a külső adatbázisban meg <i>kell</i>  adnia egy létező e-mail címet és rendszeresen le kell futtatnia mind az admin/cron.php, mind az auth/db/auth_db_sync_users.php kódot. A Moodle az új felhasználóknak ideiglenes jelszót tartalmazó e-mailt küld ki.</p>';
$string['auth_dbpasstype_key'] = 'A jelszó formája';
$string['auth_dbreviveduser'] = '$a[0] id $a[1] felhasználó ismét bekapcsolva';
$string['auth_dbrevivedusererror'] = 'Hiba $a felhasználó ismételt bekapcsolása közben';
$string['auth_dbsetupsql'] = 'SQL-beállítási parancs';
$string['auth_dbsetupsqlhelp'] = 'SQL-parancs speciális adatbázis-beállításhoz, mely gyakran a kommunikáció kódolásához használatos - MySQL és PostgreSQL esetén pl.: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '$a[0] id $a[1] felhasználó felfüggesztve';
$string['auth_dbsuspendusererror'] = 'Hiba $a felhasználó felfüggesztése közben';
$string['auth_dbsybasequoting'] = 'Sybase-idézőjelek használata';
$string['auth_dbsybasequotinghelp'] = 'Sybase-féle egyszeres idézőjelek használata Oracle, MS SQL és néhány más adatbázis esetén. MySQL-hez nem használandó!';
$string['auth_dbtable'] = 'Az adatbázis táblájának neve';
$string['auth_dbtable_key'] = 'Tábla';
$string['auth_dbtitle'] = 'Külső adatbázis';
$string['auth_dbtype'] = 'Az adatbázis típusa (A részleteket lásd az <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentációjában</a>)';
$string['auth_dbtype_key'] = 'Adatbázis';
$string['auth_dbupdatinguser'] = '$a[0] id $a[1] felhasználó frissítése';
$string['auth_dbuser'] = 'Az adatbázishoz olvasási joggal hozzáférő felhasználó neve';
$string['auth_dbuser_key'] = 'Adatbázis-felhasználó';
$string['auth_dbusernotexist'] = 'A nem létező $a felhasználó frissítése nem lehetséges';
$string['auth_dbuserstoadd'] = 'Beszúrandó felhasználói adatok: $a';
$string['auth_dbuserstoremove'] = 'Eltávolítandó felhasználói adatok: $a';

?>
