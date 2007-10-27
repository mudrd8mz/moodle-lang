<?php
$string['admindirerror']='Valitud administreerimiskataloog on vale';
$string['admindirname']='Administreerimiskataloog';
$string['admindirsetting']='Mõned vähesed veebihostid kasutavad spetsiaalset URL-i, et anda ligipääs juhtpaneelile. Kahjuks läheb see konflikti Moodle administreerimislehe standardse asukohaga. Sa saad seda viga parandada, kui nimetad oma administreerimiskataloogi ümber. Näiteks: <br /> <br /><b>moodleadmin</b><br /> <br /> See teeb administreerimislingid Moodle\'is korda.';
$string['caution']='Hoiatus';
$string['chooselanguage']='Vali keel';
$string['compatibilitysettings']='Kontrollin teie PHP sätteid ...';
$string['configfilenotwritten']='Installeerimisskript ei suutnud automaatselt tekitada config.php faili, mis sisaldaks sinu valitud seadistusi. Põhjus võib olla selles, et sinu Moodle kataloog ei ole kirjutatav. Sa võid käsitsi kopeerida järgneva koodi config.php nimelisse faili, mis asub Moodle juurkataloogis.';
$string['configfilewritten']='config.php on edukalt loodud';
$string['configurationcomplete']='Seadistamine lõpetatud';
$string['database']='Andmebaas';
$string['databasecreationsettings']='Nüüd sa pead konfigureerima seadistuse andmebaasile, kus hoitakse enamikku Moodle andmetest. See andmebaas luuakse automaatselt Moodle4Windows poolt koos järgnevalt määratud seadistustega.<br />
<br /> <br />
<b>Tüüp:</b>installeerija määras \"mysql\"<br/>
<b>Host:</b>installeerija määras \"localhost\"<br/>
<b>Nimi:</b>andmebaasi nimi, näiteks moodle<br/>
<b>Kasutaja:</b>installeerija määras \"root\"<br/>
<b>Parool:</b>sinu andmebaasi parool<br/>
<b>Tabelite eesliide:</b>valikuline eesliide, mida kasutada kõigi tabelite nimedes';
$string['databasesettings']='Nüüd pead sa konfigureerima admebaasi, kus hoitakse enamikku Moodle andmetest. See andmebaas peab olema juba loodud ning samuti kasutajanimi ja parool andmebaasile juurdepääsu saamiseks.
br />
<br /> <br />
<b>Tüüp:</b> mysql või postgres7<br />
<b>Host:</b> näiteks localhost või db.isp.com<br />
<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
<b>Kasutaja:</b> sinu andmebaasi kasutajanimi<br />
<b>Parool:</b> sinu andmebaasi parool<br />
<b>Tabelite eesliide:</b> valikuline eesliide, mida kasutada kõigi tabelite nimedes';
$string['dataroot']='Andmete kataloog';
$string['datarooterror']='Sinu määratud andmete kataloogi ei suudetud leida ega luua. Paranda tee või loo ise käsitsi see kataloog.';
$string['dbconnectionerror']='Me ei suutnud sinu määratud andmebaasi ühendada. Palun kontrolli oma andmebaasi seadistust.';
$string['dbcreationerror']='Andmebaasi loomise viga. Ei suudetud luua andmebaasi nime olemasolevate seadistustega.  ';
$string['dbhost']='Hosti server';
$string['dbpass']='Parool';
$string['dbprefix']='Tabeli eesliide';
$string['dbtype']='Tüüp';
$string['directorysettings']='<p>Palun kinnita Moodle installerimise asukoht.</p>
<p><b>Veebiaadress:</b>
Määra täispikk veebiaadress, kust saab Moodle\'ile juurdepääsu.
Kui sinu veebileht on juurdepääsetav mitme URL\'i kaudu, siis kasuta seda, mis on sinu õppijate jaoks kõige kergem meeles pidada. Ära kasuta kurakriipsu. </p>
<p><b>Moodle kataloog:</b>
Määra selle installatsiooni kataloogi täistee.
Tee kindlaks, et suured/väiketähed oleksid õiged.</p>
<p><b>Andmete kataloog:</b>
Sul on vaja kohta, kuhu Moodle salvestab üles laetud failid. See kataloog peaks olema loetav JA KIRJUTATAV veebiserveri kasutaja poolt (tavaliselt \'nobody\' või \'apache\'), kuid ei tohiks olla otse veebi kaudu ligipääsetav.
</p>';
$string['dirroot']='Moodle kataloog';
$string['dirrooterror']='Moodle kataloogi seadistus näib olevat vigane -  me ei suuda sealt leida Moodle installatsiooni. Allpool olev väärtus on nullitud.';
$string['download']='Lae alla';
$string['fail']='Fail';
$string['fileuploads']='Failide üleslaadimine';
$string['fileuploadserror']='See peaks olema sisse lülitatud';
$string['fileuploadshelp']='<p>Failide üleslaadimine näib sinu serveris olevat välja lülitatud.</p>
<p>Moodle\'it saab ikka installeerida, kui selle võimaluseta ei saa sa kursuse faile või uute kasutajate andmeid üles laadida</p>
<p>Failide üleslaadimise sisse lülitamiseks pead sa (või sinusüsteemiadministraator) muutma main php.ini faili oma süsteemis ja seadma <b>file_uploads</b> väärtuseks \'1\'.</p>';
$string['gdversion']='GD versioon';
$string['gdversionerror']='GD teek peaks olema võimeline töötlema ja looma pilte. ';
$string['gdversionhelp']='<p>Sinu serveril ei paista GD installeeritud olevat.</p>
<p>GD on andmeteek, mis on vajalik PHP jaoks, et Moodle\'il oleks võimalik pilte (kasutajate ikoonid, logide graafikud) töödelda ja luua. Moodle töötab ikka ka GD puudumisel, aga need võimalused ei ole siis sinu jaoks kättesaadavad.</p>
<p>GD lisamiseks PHP\'le Unixi operatsioonisüsteemis tuleb kompileerida PHP-d, kasutates --with-gd parameetrit.</p>
<p>Windowsis saad sa tavaliselt muuta php.ini faili ja kommenteerida sisse libdg.dll\'le vastava rea.</p>';
$string['installation']='Installeerimine';
$string['magicquotesruntime']='Magic Quotes talitlusaeg';
$string['magicquotesruntimeerror']='See peaks olema välja lülitatud';
$string['magicquotesruntimehelp']='<p>Magic quotes talitlusaeg peaks olema välja lülitatud, et Moodle saaks korralikult funktsioneerida.</p>
<p>Tavalielt on see vaikimisi välja lülitatud. Vaata <b>magic_quotes_runtime</b> seadistust  sinu php.ini failis.</p>
<p>Kui sul ei ole ligipääsu oma php.ini failile, siis peaksid lisama järgmise koodi .htaccess nimelisse faili, mis asub sinu Moodle kataloogis:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit']='Mälu limiit';
$string['memorylimiterror']='PHP mälu limiit on seatud päris madalale...sul võib hiljem sellega seoses probleeme tekkida.';
$string['memorylimithelp']='<p>PHP mälu limiit sinu serveri jaoks on hetkel $a.</p>
<p>See võib hiljem tekitada Moodle\'il mäluprobleeme, eriti kui sul on palju mooduleid ja/või kasutajaid.
</p>
<p>Me soovitame, et sa konfigureeriksid PHP kõrgema limiidi peale, näiteks 16M. Selle tostamiseks on mitu viisi:</p>
<ol>
<li>Kui võimalik, siis kompileeri PHP uuesti parameetriga <i>--enable-memory-limit</i>.
See lubab Moodle\'il ise mälu limiiti määrata.</li>
<li>Kui sul on juurdepääs oma php.ini failile, siis saad muuta seal <b>memory_limit</b> väärtuseks midagi 16M lähedast. Kui sul ei ole juurdepääsu, siis võiksid paluda administraatoril seda teha.</li>
<li>Mõnedes PHP serverites saad luua Moodle kataloogi .htaccess faili, mis sisaldab seda rida:<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Kuigi mõnedes serverites tõkestab see <b>kõigi</b> PHP lehekülgede tööd (sa näed veateateid, kui vaatad lehti), nii et pead eemaldama .htaccess faili.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp']='PHP ei ole MySQL laiendiga õigesti konfigureeritud, seega ei saa ta MySQL\'ga suhelda. Palun kontrolli oma php.ini faili või kompileeri PHP uuesti.';
$string['pass']='Korras';
$string['phpversion']='PHP versioon';
$string['phpversionerror']='PHP versioon peab olema vähemalt 4.1.0';
$string['phpversionhelp']='<p>Moodle vajab vähemalt PHP versiooni 4.1.0</p>
<p>Sinu jooksev versioon on $a</p>
<p>Sa pead oma PHP-d uuendama või kolima hosti, kus on uuem PHP versioon!</p>';
$string['safemode']='Ohutu režiim';
$string['safemodeerror']='Moodle\'il võib ohutus režiimis komplikatsioone tekkida';
$string['safemodehelp']='<p>Moodle võib tekkida mitmesuguseid probleeme, kui ohutu režiim on sisse lülitatud, näiteks ei luba ta tõenäoliselt luua uusi faile.</p>
<p>Ohutu režiim on tavaliselt sisse lülitatud ainult paranoilistel avalikel veebihostidel, seega pead leidma oma Moodle õpikeskkonnale uue serveriteenust pakkuva firma. </p>
<p>Sa võid proovida installeerimist jätkata, kui soovid, aga arvatavasti tekib sul ka hiljem probleeme.</p>';
$string['sessionautostart']='Sessioonide automaatne algatamine';
$string['sessionautostarterror']='See peaks olema välja lülitatud';
$string['sessionautostarthelp']='<p>Moodle vajab sessiooni tuge ja ei tööta ilma selleta.</p>
<p>Sessioone saab sisse lülitada php.ini failist, otsi sealt session.auto_start parameetrit.</p>';
$string['wwwroot']='Veebiaadress';
$string['wwwrooterror']='Veebiaadress näib vigane - Moodle installatsiooni ei paista seal olevat.';
$string['chooselanguagehead']='Keele valik';
$string['mysql']='MySQL (mysql)';
$string['oci8po']='Oracle (oci8po)';
$string['postgres7']='PostgreSQL (postgres7)';
$string['mssql']='SQL*Server (mssql)';
$string['welcomep10']='\$a->installername (\$a->installerversion)';
$string['mssql_n']='SQL*Server UTF-8 toetusega (mssql_n)';
$string['compatibilitysettingshead']='PHP seadete kontrollimine...';
$string['environmenthead']='Keskkonna kontrollimine...';
$string['configurationcompletehead']='Konfigureerimine lõpetatud';
$string['databasesettingshead']='Nüüd on vaja seadistada andmebaas, kus enamus Moodle andmeid hakatakse hoidma. See andmebaas peab olema eelnevalt loodud ning ka konto, millel ligipääs antud andmebaasile.';
$string['databasesettingssub']='<b>Tüüp:</b> mysql või postgres7<br />
	<b>Host:</b> näiteks localhost või db.isp.com<br />
	<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
	<b>Kasutaja:</b> Sinu andmebaasi konto kasutajatunnus<br />
	<b>Parool:</b> Sinu andmebaasi konto parool<br />
	<b>Tabelite prefiks:</b> fakultatiivne prefiks kasutamaks tabelite nimedes';
$string['databasesettingssub_mssql']='<b>Tüüp:</b> SQL*Server (mitte UTF-8) <b><font color=\"red\">Eksperimentaalne! (mitte kasutamiseks töökeskkonnas)</font></b><br />
	<b>Host:</b> näiteks localhost või db.isp.com<br />
	<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
	<b>Kasutaja:</b> Sinu andmebaasi konto kasutajatunnus<br />
	<b>Parool:</b> Sinu andmebaasi konto parool<br />
	<b>Tabelite prefiks:</b> prefiks kasutamaks tabelite nimedes (kohustuslik)';
$string['databasesettingssub_mssql_n']='<b>Tüüp:</b> SQL*Server (UTF-8 toetatav)<br />
	<b>Host:</b> näiteks localhost või db.isp.com<br />
	<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
	<b>Kasutaja:</b> Sinu andmebaasi konto kasutajatunnus<br />
	<b>Parool:</b> Sinu andmebaasi konto parool<br />
	<b>Tabelite prefiks:</b> prefiks kasutamaks tabelite nimedes (kohustuslik)';
$string['databasesettingssub_mysql']='<b>Tüüp:</b> MySQL<br />
	<b>Host:</b> näiteks localhost või db.isp.com<br />
	<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
	<b>Kasutaja:</b> Sinu andmebaasi konto kasutajatunnus<br />
	<b>Parool:</b> Sinu andmebaasi konto parool<br />
	<b>Tabelite prefiks:</b> fakultatiivne prefiks kasutamaks tabelite nimedes';
$string['databasesettingssub_oci8po']='<b>Tüüp:</b> Oracle<br />
	<b>Host:</b> ei kasutata, peab olema tühjaks jäetud<br />
	<b>Name:</b> given name of the tnsnames.ora connection<br />
	<b>User:</b> your database username<br />
	<b>Password:</b> your database password<br />
	<b>Tabelite prefiks:</b> prefiks kasutamaks tabelite nimedes (kohustuslik, 2cc. max)';
$string['databasesettingssub_odbc_mssql']='<b>Tüüp:</b> SQL*Server (üler ODBC) <b><font color=\"red\">Eksperimentaalne! (mitte kasutamiseks töökeskkonnas)</font></b><br />
	<b>Host:</b> DSN antud nimi ODBC kontroll paneelis<br />
	<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
	<b>Kasutaja:</b> Sinu andmebaasi konto kasutajatunnus<br />
	<b>Parool:</b> Sinu andmebaasi konto parool<br />
	<b>Tabelite prefiks:</b> prefiks kasutamaks tabelite nimedes (kohustuslik)';
$string['databasesettingssub_postgres7']='<b>Tüüp:</b> PostgreSQL<br />
	<b>Host:</b> näiteks localhost või db.isp.com<br />
	<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
	<b>Kasutaja:</b> Sinu andmebaasi konto kasutajatunnus<br />
	<b>Tabelite prefiks:</b> prefiks kasutamaks tabelite nimedes (kohustuslik)';
?>
