<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Nedá sa pripojiť k zvolenej overovacej databáze.';
$string['auth_dbchangepasswordurl_key'] = 'Heslo - zmena URL';
$string['auth_dbdebugauthdb'] = 'Debugovať ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Debugovať ADOdb spojenie do externej databázy - použiť pri vrátení prázdnej stránky pri prihlasovaní. Nie je vhodné na produkčných systémoch!';
$string['auth_dbdeleteuser'] = 'Vymazaný používateľ $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Chyba pri vymazaní používateľa $a';
$string['auth_dbdescription'] = 'Táto metóda využíva tabuľku v externej databáze na kontrolu platnosti daného používateľského mena a hesla. Ak je to nové konto, môžu byť do prostredia Moodle skopírované informácie aj z iných políčok.';
$string['auth_dbextencoding'] = 'Kódovanie externej databázy';
$string['auth_dbextencodinghelp'] = 'Kódovanie použité v externej databáze';
$string['auth_dbextrafields'] = 'Tieto políčka sú nepovinné. Je tu možnosť, aby niektoré používateľské políčka v prostredí Moodle uvádzali informácie z <b>políčok externých databáz</b>, ktoré tu zadáte.<br />
Ak toto políčko necháte prázdne, bude tu uvádzané pôvodné nastavenie.<br /><p>
V obidvoch prípadoch, bude môcť používateľ po prihlásení upravovať všetky tieto políčka.</p>';
$string['auth_dbfieldpass'] = 'Názov políčka obsahujúceho heslá';
$string['auth_dbfieldpass_key'] = 'Pole pre heslo';
$string['auth_dbfielduser'] = 'Názov poľa obsahujúceho používateľské mená';
$string['auth_dbfielduser_key'] = 'Pole pre používateľské meno';
$string['auth_dbhost'] = 'Počítač hosťujúci databázový server.';
$string['auth_dbhost_key'] = 'Hostiteľ';
$string['auth_dbinsertuser'] = 'Vložený používateľ user $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Chyba pri vkladaní používateľa $a';
$string['auth_dbname'] = 'Názov databázy';
$string['auth_dbname_key'] = 'Názov databázy';
$string['auth_dbpass'] = 'Heslo pre uvedeného používateľa';
$string['auth_dbpass_key'] = 'Heslo';
$string['auth_dbpasstype'] = '<p>Špecifikujte formát, ktorý používa políčko s heslom. MD5 šifrovanie je vhodné pre pripojenie k ďalším bežným web aplikáciám ako PostNuke.<p> <p>Možnosť \'interný\' vyberte v prípade, že chcete externej databáze zveriť správu používateľských mien a e-mailových adries a Moodle správu hesiel. Ak použijete možnosť \'interný\', pole s e-mailovými adresami <i>musí</i> byť v externej databáze vyplnené a je nutné pravidelne spúšťať skript admin/cron.php. Moodle zašle novým používateľom e-mail obsahujúci dočasné heslo.</p>';
$string['auth_dbpasstype_key'] = 'Formát hesla';
$string['auth_dbreviveduser'] = 'Obnovený používateľ $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Chyba pri obnovení používateľa $a';
$string['auth_dbsetupsql'] = 'SQL príkaz pre nastavenie';
$string['auth_dbsetupsqlhelp'] = 'SQL príkaz pre špeciálne nastavenie databázy, často používaný pre nastavenie kódovania pri komunikácii. Príklad pre MySQL a PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Pozastaviť používateľa $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Chyba pri pozastavení používateľa $a';
$string['auth_dbsybasequoting'] = 'Použiť uvodzovky sybase';
$string['auth_dbsybasequotinghelp'] = 'Preskakovanie jednej úvodzovky v štýle Sybase - potrebné pre Oracle, MS SQL a niektoré ďalšie databázy. Nepoužívať pre MySQL!';
$string['auth_dbtable'] = 'Názov tabuľky v databáze';
$string['auth_dbtable_key'] = 'Tabuľka';
$string['auth_dbtitle'] = 'Použiť externú databázu';
$string['auth_dbtype'] = 'Databázový typ (bližšie viď <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentácia</a>)';
$string['auth_dbtype_key'] = 'Databáza';
$string['auth_dbupdatinguser'] = 'Aktualizovanie používateľa $a[0] id $a[1]';
$string['auth_dbuser'] = 'Používateľské meno s prístupom do databázy len na čítanie.';
$string['auth_dbuser_key'] = 'DB používateľ';
$string['auth_dbusernotexist'] = 'Nemožné aktualizovať neexistujúceho používateľa:$a';
$string['auth_dbuserstoadd'] = 'Používateľské položky na pridanie:$a';
$string['auth_dbuserstoremove'] = 'Používateľské položky na zmazanie:$a';