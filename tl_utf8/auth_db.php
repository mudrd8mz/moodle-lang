<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Hindi makakonekta sa itinakdang datosan ng pagsino...';
$string['auth_dbchangepasswordurl_key'] = 'URL-pagbabago ng kontrasenyas';
$string['auth_dbdebugauthdb'] = 'I-debug ang ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'I-debug ang koneksiyong ADOdb sa panlabas na datosan - gamitin ito kapag kinukuha ang blangkong pahina sa paglagda.  Hindi ito angkop sa mga site na pamproduksiyon.';
$string['auth_dbdeleteuser'] = 'Binurang tagagamit $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Nagka-error sa pagbura ng tagagamit na $a';
$string['auth_dbdescription'] = 'Gumagamit ang paraang ito ng panlabas na datosan teybol upang masuri kung ang ibinigay na bansag at kontrasenyas ay tanggap.  Kung bago ang akawnt, ang impormasyon sa iba pang pitak ay maaari ring kopyahin ng Moodle.';
$string['auth_dbextencoding'] = 'Encoding ng panlabas na db';
$string['auth_dbextencodinghelp'] = 'Encoding na ginagamit sa panlabas na datosan';
$string['auth_dbextrafields'] = 'Opsiyonal ang mga pitak na ito.  Maaari mong piliin na magkalaman kaagad ang ilang pitak ng tagagamit ng Moodle ng impormasyon mula sa <b>mga panlabas na pitak ng datosan</b> na tutukuyin mo rito. <p>Kung pababayaan mong blangko ang mga ito, ang mga umiiral ang gagamitin.</p><p>Ano\'t-anuman, maeedit ng mga tagagamit ang mga pitak na ito pagkatapos nilang lumagda.</p>';
$string['auth_dbfieldpass'] = 'Pangalan ng pitak na naglalaman ng mga kontrasenyas';
$string['auth_dbfieldpass_key'] = 'Pitak ng kontrasenyas';
$string['auth_dbfielduser'] = 'Pangalan ng pitak na naglalaman ng mga bansag';
$string['auth_dbfielduser_key'] = 'Pitak ng bansag';
$string['auth_dbhost'] = 'Ang kompyuter na naghohost ng datosang server.';
$string['auth_dbinsertuser'] = 'Isiningit ang tagagamit na $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Nagka-error sa pagsisingit ng tagagamit na $a';
$string['auth_dbname'] = 'Pangalan ng mismong datosan';
$string['auth_dbname_key'] = 'Ngalan ng DB';
$string['auth_dbpass'] = 'Kontrasenyas na katugon ng bansag sa itaas';
$string['auth_dbpass_key'] = 'Kontrasenyas';
$string['auth_dbpasstype'] = '<p>Itakda ang anyo na gagamitin ng pitak ng kontrasenyas.  Magagamit ang MD5 encryption sa pagkonek sa ibang karaniwang aplikasyong pangweb tulad ng PostNuke</p><p>Piliin ang \'panloob\' kung nais mong pangasiwaan ng panlabas na DB ang mga bansag at email address, subali\'t ang Moodle ang mangangasiwa sa kontrasenyas. Kapag ginamit mo ang  \'panloob\', <i>kailangan</i> mong magbigay ng isang  pitak ng email address na may mga laman na sa panlabas na DB, at kailangan mong patakbuhin ang admin/cron.php nang regular. Magpapadala ang Moodle ng email sa mga bagong tagagamit na may pansamantalang kontrasenyas.</p>';
$string['auth_dbpasstype_key'] = 'Anyo ng kontrasenyas';
$string['auth_dbreviveduser'] = 'Binuhay muli ang tagagamit na $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Nagka-error sa pagbuhay muli sa tagagamit na $a';
$string['auth_dbsetupsql'] = 'SQL na atas sa pagsasaayos';
$string['auth_dbsetupsqlhelp'] = 'SQL na atas para sa espesyal na pagsasaayos ng datosan, karaniwang ginagamit sa pagsasaayos ng encoding ng komunikasyon - halimbawa sa MySQL at PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Sinuspinde ang tagagamit na $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Nagka-error sa pagsuspinde sa tagagamit na $a';
$string['auth_dbsybasequoting'] = 'Gumamit ng panipi na pang-sybase';
$string['auth_dbsybasequotinghelp'] = 'Estilong sybase na may isahang panipi na pag-eescape - kailangan sa Oracle, MS SQL at iba pang datosan.  Huwag gagamitin sa MySQL!';
$string['auth_dbtable'] = 'Pangalan ng teybol sa datosan';
$string['auth_dbtable_key'] = 'Teybol';
$string['auth_dbtitle'] = 'Gumamit ng panlabas na datosan';
$string['auth_dbtype'] = 'Ang uri ng datosan (Tingnan ang <a href=\"../lib/adodb/readme.htm#drivers\">Dokumentasyon ng ADOdb</a> para sa detalye)';
$string['auth_dbtype_key'] = 'Datosan';
$string['auth_dbupdatinguser'] = 'Ginagawang bago ang tagagamit na $a[0] id $a[1]';
$string['auth_dbuser'] = 'Bansag na may karapatang basahin ang datosan';
$string['auth_dbuser_key'] = 'Tagagamit ng DB';
$string['auth_dbusernotexist'] = 'Hindi magagawang bago ang tagagamit na hindi pa nalilikha: $a';
$string['auth_dbuserstoadd'] = 'Mga talâ ng tagagamit na idadagdag: $a';
$string['auth_dbuserstoremove'] = 'Mga talâ ng tagagamit na aalisin: $a';