<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Ne morem se povezati z navedeno avtentikacijsko zbirko';
$string['auth_dbchangepasswordurl_key'] = 'URL za spreminjanje gesla';
$string['auth_dbdebugauthdb'] = 'Razhroščevanje ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Vklopi razhroščevalni način ADOdb povezovanja na zunanjo podatkovno zbirko - uporabite, kadar med prijavo dobite prazno stran. Ni primerno za uporabo na produkcijskih strežnikih.';
$string['auth_dbdeleteuser'] = 'Brisanje uporabnika $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Napaka pri brisanju uporabnika $a';
$string['auth_dbdescription'] = 'Ta način uporablja zunanjo tabelo podatkovne zbirke za preverjanje, če sta podano uporabniško ime in geslo pravilna.  Če je uporabniški račun nov, je možno prenesti v Moodle tudi podatke iz ostalih polj.';
$string['auth_dbextencoding'] = 'Kodni nabor zunanje zbirke';
$string['auth_dbextencodinghelp'] = 'Kodni nabor, ki ga uporablja zunanja podatkovna zbirka';
$string['auth_dbextrafields'] = 'Ta polja niso obvezna.  Odločite se lahko in nekatera uporabniška polja vnaprej izpolnite s podatki iz <b>zunanjih polj podatkovne zbirke</b>, ki jih tu določite. <p>Če pustite ta polja prazna, bodo uporabljene privzete vrednosti.</p><p>V vsakem primeru bodo lahko uporabniki urejali vsa ta polja, ko se bodo prijavili.</p>';
$string['auth_dbfieldpass'] = 'Ime polja, ki vsebuje gesla';
$string['auth_dbfieldpass_key'] = 'Polje za geslo';
$string['auth_dbfielduser'] = 'Ime polja, ki vsebuje uporabniška imena';
$string['auth_dbfielduser_key'] = 'Polje za uporabniško ime';
$string['auth_dbhost'] = 'Računalnik, na katerem teče strežnik podatkovne zbirke.';
$string['auth_dbhost_key'] = 'Gostitelj';
$string['auth_dbinsertuser'] = 'Vstavil uporabnika $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Napaka pri vstavljanju uporabnika $a';
$string['auth_dbname'] = 'Ime podatkovne zbirke';
$string['auth_dbname_key'] = 'Ime podatkovne zbirke';
$string['auth_dbpass'] = 'Geslo, ki ustreza zgornjemu uporabniškemu imenu';
$string['auth_dbpass_key'] = 'Geslo';
$string['auth_dbpasstype'] = '<p>Opredelite zapis, ki ga uporablja polje z geslom. Kodiranje MD5 je uporabno za povezovanje z drugimi pogostimi spletnimi aplikacijami, kot je PostNuke.</p> <p>Uporabite \'interno\', če želite, da zunanja podatkovna zbirka upravlja uporabniška imena in elektronske naslove, Moodle pa naj upravlja gesla. Če uporabite \'interno\', potem <i>morate</i> zagotoviti izpolnjeno polje z elektronskim naslovom v zunanji podatkovni zbirki in morate redno izvajati admin/cron.php. Moodle bo poslal elektronsko sporočilo novim uporabnikom z začasnim geslom.</p>';
$string['auth_dbpasstype_key'] = 'Format gesla';
$string['auth_dbreviveduser'] = 'Oživil uporabnika $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Napaka pri oživljanju uporabnika $a';
$string['auth_dbsetupsql'] = 'Nastavitveni ukaz SQL';
$string['auth_dbsetupsqlhelp'] = 'Ukaz SQL za posebne nastavitve podatkovne baze. Ponavadi se uporablja za nastavitev kodnega nabora komunikacije. Primer za MySQL in PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Suspendiral uporabnika $a[0] ID $a[1]';
$string['auth_dbsuspendusererror'] = 'Napaka pri suspendiranju uporabnika $a';
$string['auth_dbsybasequoting'] = 'Uporaba sybase narekovajev';
$string['auth_dbsybasequotinghelp'] = 'Oracle, MS SQL in nekatere druge podatkovne zbirke potrebujejo uporabo enojnih narekovajev tipa Sybase. Ne uporabljajte z MySQL!';
$string['auth_dbtable'] = 'Ime tabele v podatkovni zbirki';
$string['auth_dbtable_key'] = 'Tabela';
$string['auth_dbtitle'] = 'Uporabi zunanjo podatkovno zbirko';
$string['auth_dbtype'] = 'Vrsta podatkovne zbirke (Poglej si  <a href=\"../lib/adodb/readme.htm#drivers\">dokumentacijo ADOdb</A> za podrobnosti)';
$string['auth_dbtype_key'] = 'Podatkovna zbirka';
$string['auth_dbupdatinguser'] = 'Shranjujem podatke uporabnika $a[0] id $a[1]';
$string['auth_dbuser'] = 'Uporabniško ime s pravico bralnega dostopa do podatkovne zbirke';
$string['auth_dbuser_key'] = 'Uporabnik zbirke';
$string['auth_dbusernotexist'] = 'Ne morem shraniti podatke neobstoječega uporabnika: $a';
$string['auth_dbuserstoadd'] = 'Dodaj uporabniške zapise: $a';
$string['auth_dbuserstoremove'] = 'Izbriši uporabniške zapise: $a';