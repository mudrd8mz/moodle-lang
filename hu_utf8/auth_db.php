<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Nem sikerült a megadott hitelesítési adatbázishoz csatlakozni...';
$string['auth_dbchangepasswordurl_key'] = 'Jelszó-módosítási URL';
$string['auth_dbdebugauthdb'] = 'ADOdb hibaszűrése';
$string['auth_dbdebugauthdbhelp'] = 'ADOdb külső adatbázissal való kapcsolatának hibaszűrése – bejelentkezéskor üres oldalra kerülés esetén használandó. Nem ajánlott éles portálon való használatra.';
$string['auth_dbdeleteuser'] = '$a[0] nevű, $a[1] azonosítójú felhasználó törölve';
$string['auth_dbdeleteusererror'] = 'Hiba $a felhasználó törlése közben';
$string['auth_dbdescription'] = 'Ez a módszer egy külső adatbázistáblát használ a felhasználó nevének és jelszavának ellenőrzésére. Új felhasználó esetén az egyéb mezőkben tárolt információk is átmásolhatók a Moodle-ba.';
$string['auth_dbextencoding'] = 'Külső adatbázis-kódolás';
$string['auth_dbextencodinghelp'] = 'Külső adatbázisban használt kódolás';
$string['auth_dbextrafields'] = 'Ezek választható mezők. Választhatja azt is, hogy a Moodle előre feltölti a mezők egy részét az itt megadott külső adatbázismezőkből. Ha a mezőket üresen hagyja, a rendszer az alapbeállításokat fogja használni. Mindkét esetben a felhasználó belépés után változtathatja ezeket a mezőket.';
$string['auth_dbfieldpass'] = 'A jelszavakat tartalmazó mező neve';
$string['auth_dbfieldpass_key'] = 'Jelszómező';
$string['auth_dbfielduser'] = 'A felhasználóneveket tartalmazó mező neve';
$string['auth_dbfielduser_key'] = 'Felhasználónév-mező';
$string['auth_dbhost'] = 'Az adatbázisszervert futtató számítógép';
$string['auth_dbhost_key'] = 'Gazdagép';
$string['auth_dbinsertuser'] = '$a[0] nevű, $a[1] azonosítójú felhasználó hozzáadva';
$string['auth_dbinsertusererror'] = 'Hiba $a felhasználó hozzáadása közben';
$string['auth_dbname'] = 'Az adatbázis neve';
$string['auth_dbname_key'] = 'Adatbázisnév';
$string['auth_dbpass'] = 'A fenti felhasználónévnek megfelelő jelszó';
$string['auth_dbpass_key'] = 'Jelszó';
$string['auth_dbpasstype'] = 'Adja meg a jelszómező formátumát. Az MD5 titkosítás hasznos olyan elterjedt webalkalmazások esetén, mint a PostNuke. Használja a belsőt, ha a külső adatbázissal kívánja kezelni a felhasználóneveket és az e-mail címeket, de a Moodle-lal kezelteti a jelszavakat. Ez esetben a külső adatbázisban meg kell adnia egy kitöltött e-mail címmezőt és rendszeresen le kell futtatnia az admin/cron.php kódot. A Moodle e-mailt küld az ideiglenes jelszóval rendelkező új felhasználók részére.';
$string['auth_dbpasstype_key'] = 'Jelszó formátuma';
$string['auth_dbreviveduser'] = '$a[0] nevű, $a[1] azonosítójú felhasználó ismét bekapcsolva';
$string['auth_dbrevivedusererror'] = 'Hiba $a felhasználó ismételt bekapcsolása közben';
$string['auth_dbsetupsql'] = 'SQL-beállítási parancs';
$string['auth_dbsetupsqlhelp'] = 'SQL-parancs speciális adatbázis-beállításhoz, melyet gyakran kommunikáció kódolásának beállítására használnak - például MySQL és PostgreSQL esetén: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '$a[0] nevű, $a[1] azonosítójú felhasználó fiókja felfüggesztve';
$string['auth_dbsuspendusererror'] = 'Hiba $a felhasználó fiókjának felfüggesztése közben';
$string['auth_dbsybasequoting'] = 'Használjon Sybase szerinti idézőjeleket';
$string['auth_dbsybasequotinghelp'] = 'A Sybase stílusú, egyszeres idézőjeles váltókarakter-használatot az Oracle, a MS SQL és néhány másik adatbázis írja elő. MySQL esetén ne használja!';
$string['auth_dbtable'] = 'A táblázat neve az adatbázisban';
$string['auth_dbtable_key'] = 'Táblázat';
$string['auth_dbtitle'] = 'Külső adatbázis';
$string['auth_dbtype'] = 'Az adatbázis típusával kapcsolatos részletek (lásd az <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentációt</a>.)';
$string['auth_dbtype_key'] = 'Adatbázis';
$string['auth_dbupdatinguser'] = '$a[0] nevű, $a[1] azonosítójú felhasználó frissítése';
$string['auth_dbuser'] = 'Az adatbázishoz olvasási joggal rendelkező felhasználó neve';
$string['auth_dbuser_key'] = 'Adatbázis-felhasználó';
$string['auth_dbusernotexist'] = 'Nem létező $a felhasználó frissítése sikertelen';
$string['auth_dbuserstoadd'] = 'Hozzáadandó felhasználói adatok: $a';
$string['auth_dbuserstoremove'] = 'Eltávolítandó felhasználói adatok: $a';