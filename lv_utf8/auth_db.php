<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Nevarēja izveidot savienojumu ar norādīto autentifikācijas datubāzi...';
$string['auth_dbchangepasswordurl_key'] = 'Paroles maiņas URL';
$string['auth_dbdebugauthdb'] = 'Atkļūdot ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Atkļūdot ADOdb savienojumu ar ārējo datubāzi&nbsp;— izmantojiet, ja pieslēdzoties tiek iegūta tukša lapa. Nav piemērots izmantošanai darba vietnē.';
$string['auth_dbdeleteuser'] = 'Izdzēsts lietotājs $a[0], ID $a[1]';
$string['auth_dbdeleteusererror'] = 'Dzēšot lietotāju $a, radās kļūda';
$string['auth_dbdescription'] = 'Šī metode izmanto ārējas datubāzes tabulu, lai pārbaudītu, vai norādītais lietotājvārds un parole ir derīgi. Ja konts ir jauns, sistēmā Moodle, iespējams, tiks kopēta arī citos laukos norādītā informācija.';
$string['auth_dbextencoding'] = 'Ārējās datubāzes kodējums';
$string['auth_dbextencodinghelp'] = 'Ārējā datubāzē izmantotais kodējums';
$string['auth_dbextrafields'] = 'Šie lauki nav obligāti. Varat izvēlēties sākotnēji aizpildīt dažus sistēmas Moodle lietotāja laukus, iekļaujot informāciju no šeit norādītajiem <b>ārējās datubāzes laukiem</b>. <p>Ja šīs vērtības atstājat tukšas, tiek izmantotas noklusējuma vērtības.</p><p>Jebkurā gadījumā lietotājs pēc pieslēgšanās var rediģēt visus šos laukus.</p>';
$string['auth_dbfieldpass'] = 'Paroļu lauka nosaukums';
$string['auth_dbfieldpass_key'] = 'Paroles lauks';
$string['auth_dbfielduser'] = 'Lietotājvārdu lauka nosaukums';
$string['auth_dbfielduser_key'] = 'Lietotājvārda lauks';
$string['auth_dbhost'] = 'Dators, kas vieso datubāzu serveri.';
$string['auth_dbhost_key'] = 'Resursdators';
$string['auth_dbinsertuser'] = 'Ievietots lietotājs $a[0], ID $a[1]';
$string['auth_dbinsertusererror'] = 'Ievietojot lietotāju $a, radās kļūda';
$string['auth_dbname'] = 'Pašas datubāzes nosaukums';
$string['auth_dbname_key'] = 'Datubāzes nosaukums';
$string['auth_dbpass'] = 'Norādītajam lietotājvārdam atbilstoša parole';
$string['auth_dbpass_key'] = 'Parole';
$string['auth_dbpasstype'] = '<p>Norādiet paroles laukā lietojamo formātu. MD5 jaukšana noder savienojuma izveidei ar citām vispārējām tīmekļa lietojumprogrammām, piemēram, PostNuke.</p> <p>Izmantojiet “internal”, ja vēlaties, lai ārējā datubāze pārvaldītu lietotājvārdus un e-pasta adreses, bet sistēma Moodle pārvaldītu paroles. Izmantojot vērtību “internal”, jums <i>ir</i> jānorāda aizpildīts ārējās datubāzes e-pasta adreses lauks, kā arī regulāri jāizpilda skripti admin/cron.php un auth/db/auth_db_sync_users.php. Sistēma Moodle jaunajiem lietotājiem nosūtīs e-pasta ziņojumu ar tajā norādītu pagaidu paroli.</p>';
$string['auth_dbpasstype_key'] = 'Paroles formāts';
$string['auth_dbreviveduser'] = 'Atjaunots lietotājs $a[0], ID $a[1]';
$string['auth_dbrevivedusererror'] = 'Atjaunojot lietotāju $a, radās kļūda';
$string['auth_dbsetupsql'] = 'SQL iestatīšanas komanda';
$string['auth_dbsetupsqlhelp'] = 'SQL komanda īpašajai datubāzes iestatīšanai, to bieži izmanto sakaru kodējuma iestatīšanai, piemēram, lietojot MySQL un PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Aizturēts lietotājs $a[0], ID $a[1]';
$string['auth_dbsuspendusererror'] = 'Aizturot lietotāju $a, radās kļūda';
$string['auth_dbsybasequoting'] = 'Izmantot sybase pēdiņas';
$string['auth_dbsybasequotinghelp'] = 'Sybase stila vienpēdiņu atkāpšanās&nbsp;— nepieciešama Oracle, MS SQL un dažām citām datubāzēm. Nelietojiet to MySQL gadījumā!';
$string['auth_dbtable'] = 'Datubāzes tabulas nosaukums';
$string['auth_dbtable_key'] = 'Tabula';
$string['auth_dbtitle'] = 'Ārēja datubāze';
$string['auth_dbtype'] = 'Datubāzes tips (detalizētu informāciju skatiet <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentācijā</a>)';
$string['auth_dbtype_key'] = 'Datubāze';
$string['auth_dbupdatinguser'] = 'Lietotāja $a[0], ID $a[1], atjaunināšana';
$string['auth_dbuser'] = 'Lietotājvārds ar lasīšanas piekļuvi datubāzei';
$string['auth_dbuser_key'] = 'Datubāzes lietotājs';
$string['auth_dbusernotexist'] = 'Nevar atjaunināt neesošu lietotāju: $a';
$string['auth_dbuserstoadd'] = 'Pievienojamās lietotāju ievadnes: $a';
$string['auth_dbuserstoremove'] = 'Noņemamās lietotāju ievadnes: $a';