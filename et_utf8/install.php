<?php

$string['aborting']='Installeerimise katkestamine';
$string['admindirerror']='Valitud administreerimiskataloog on vale';
$string['admindirname']='Administreerimiskataloog';
$string['admindirsetting']='Mõned vähesed veebihostid kasutavad spetsiaalset URL-i, et anda ligipääs juhtpaneelile. Kahjuks läheb see konflikti Moodle administreerimislehe standardse asukohaga. Sa saad seda viga parandada, kui nimetad oma administreerimiskataloogi ümber. Näiteks: <br /> <br /><b>moodleadmin</b><br /> <br /> See teeb administreerimislingid Moodle\'is korda.';
$string['admindirsettinghead']='Kataloogi admin seadistamine ...';
$string['adminemail']='E-mail';
$string['adminfirstname']='Eesnimi';
$string['admininfo']='Administratori detailid';
$string['adminlastname']='Perenimi';
$string['adminpassword']='Parool';
$string['adminusername']='Kasutaja nimi';
$string['askcontinue']='Jätka (jah/ei)';
$string['availabledbtypes']='Saadaval andmebaasi tüübid';
$string['availablelangs']='Saadaval keelte nimekiri';
$string['cannotconnecttodb']='Ei saa ühenduda andmebaasiga';
$string['caution']='Hoiatus';
$string['checkingphpsettings']='PHP seadete kontrollimine';
$string['chooselanguage']='Vali keel';
$string['chooselanguagehead']='Keele valik';
$string['chooselanguagesub']='Palun vali keel, mida kasutatakse AINULT installeerimise käigus. Hiljem saab valida õpikeskkonna ja kasutajate keelt.';
$string['compatibilitysettings']='Kontrollin teie PHP sätteid ...';
$string['compatibilitysettingshead']='PHP seadete kontrollimine...';
$string['compatibilitysettingssub']='Sinu server peab läbima kõik need testid, et Moodle jookseks korralikult';
$string['configfilecreated']='Seadistuste fail edukalt loodud';
$string['configfiledoesnotexist']='Seadistuste faili ei eksisteeri !!!';
$string['configfilenotwritten']='Installeerimisskript ei suutnud automaatselt tekitada config.php faili, mis sisaldaks sinu valitud seadistusi. Põhjus võib olla selles, et sinu Moodle kataloog ei ole kirjutatav. Sa võid käsitsi kopeerida järgneva koodi config.php nimelisse faili, mis asub Moodle juurkataloogis.';
$string['configfilewritten']='config.php on edukalt loodud';
$string['configurationcomplete']='Seadistamine lõpetatud';
$string['configurationcompletehead']='Konfigureerimine lõpetatud';
$string['configurationcompletesub']='Moodle tegi katse salvestada Sinu seadistuse Moodle juurkataloogis asuvasse faili.';
$string['configurationfileexist']='Seadistuste fail juba eksisteerib!';
$string['creatingconfigfile']='Seadistuste faili loomine ...';
$string['database']='Andmebaas';
$string['databasecreationsettings']='Nüüd sa pead konfigureerima seadistuse andmebaasile, kus hoitakse enamikku Moodle andmetest. See andmebaas luuakse automaatselt Moodle4Windows poolt koos järgnevalt määratud seadistustega.<br />
<br /> <br />
<b>Tüüp:</b>installeerija määras \"mysql\"<br/>
<b>Host:</b>installeerija määras \"localhost\"<br/>
<b>Nimi:</b>andmebaasi nimi, näiteks moodle<br/>
<b>Kasutaja:</b>installeerija määras \"root\"<br/>
<b>Parool:</b>sinu andmebaasi parool<br/>
<b>Tabelite eesliide:</b>valikuline eesliide, mida kasutada kõigi tabelite nimedes';
$string['databasecreationsettingssub']='<b>Tüüp:</b> määratud \"mysql\" paigaldaja poolt<br />
       <b>Host:</b> määratud \"localhost\" paigaldaja poolt<br />
       <b>Nimi:</b> andmebaasi nimi, nt. moodle<br />
       <b>User:</b> määratud \"root\" paigaldaja poolt<br />
       <b>Parool:</b> Sinu andmebaasi parool<br />
       <b>Tabelite prefiks:</b> fakultatiivne prefiks kasutamaks tabeli nimetes';
$string['databasehead']='Andmebaasi seaded';
$string['databasehost']='Andmebaasi host';
$string['databasename']='Andmebaasi nimi';
$string['databasepass']='Andmebaasi parool';
$string['databasesettings']='Nüüd pead sa konfigureerima admebaasi, kus hoitakse enamikku Moodle andmetest. See andmebaas peab olema juba loodud ning samuti kasutajanimi ja parool andmebaasile juurdepääsu saamiseks.
br />
<br /> <br />
<b>Tüüp:</b> mysql või postgres7<br />
<b>Host:</b> näiteks localhost või db.isp.com<br />
<b>Nimi:</b> andmebaasi nimi, näiteks moodle<br />
<b>Kasutaja:</b> sinu andmebaasi kasutajanimi<br />
<b>Parool:</b> sinu andmebaasi parool<br />
<b>Tabelite eesliide:</b> valikuline eesliide, mida kasutada kõigi tabelite nimedes';
$string['databasesettingsformoodle']='Moodle andmebaasi seaded';
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
$string['databasesettingswillbecreated']='<b>Märkus:</b> Installeerija püüab luua andmebaasi automaatselt, kui seda ei eksisteeri.';
$string['databasesocket']='UNIX\'i sokkel';
$string['databasetype']='Andmebaasi tüüp';
$string['databasetypehead']='Vali andmebaasi draiver';
$string['databasetypesub']='Moodle toetab mitut andmebaasiserveri tüüpi. Palun kontakteeru serveri administraatoriga, kui ei tea millist valida';
$string['databaseuser']='Andmebaasi kasutaja';
$string['dataroot']='Andmete kataloog';
$string['datarooterror']='Sinu määratud andmete kataloogi ei suudetud leida ega luua. Paranda tee või loo ise käsitsi see kataloog.';
$string['datarootpublicerror']='Sinu määratud andmete kataloog on otse ligipääsetav veebi kaudu. Sa pead valima mingi muu kataloogi.';
$string['dbconnectionerror']='Me ei suutnud sinu määratud andmebaasi ühendada. Palun kontrolli oma andmebaasi seadistust.';
$string['dbcreationerror']='Andmebaasi loomise viga. Ei suudetud luua andmebaasi nime olemasolevate seadistustega.';
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
$string['directorysettingshead']='Palun kinnita Moodle installatsiooni asukohta';
$string['dirroot']='Moodle kataloog';
$string['dirrooterror']='Moodle kataloogi seadistus näib olevat vigane -  me ei suuda sealt leida Moodle installatsiooni. Allpool olev väärtus on nullitud.';
$string['download']='Lae alla';
$string['downloadlanguagebutton']='Tõmba alla &quot;$a&quot; keelepakett';
$string['downloadlanguagehead']='Tõmba alla keelepakett';
$string['downloadlanguagepack']='Kas sa soovid tõmmata keelepaketi praegu (jah/ei):';
$string['downloadlanguagesub']='Sul on praegu võimalus tõmmata alla keelepakk ja jätkata installeerimist vastavas keeles.<br /><br />Kui Sa oled mitte võimeline alla tõmbama keelepakki, siis installeerimine jätkub inglise keeles. (Niipea, kui installeerimine on lõppenud, on Sul võimalus alla tõmmata täiendavaid keelepakke.)';
$string['downloadsuccess']='Keelepaki alla tõmbamine oli edukas';
$string['doyouagree']='Kas sa nõustud? (jah/ei):';
$string['environmenthead']='Keskkonna kontrollimine...';
$string['environmentsub']='Me kontrollime, kas mitmesugused süsteemi komponendid vastavad nõudmistele.';
$string['errorsinenvironment']='Keskkonna sobivuse kontroll ebaõnnestus!';
$string['fail']='Fail';
$string['fileuploads']='Failide üleslaadimine';
$string['fileuploadserror']='See peaks olema sisse lülitatud';
$string['fileuploadshelp']='<p>Failide üleslaadimine näib sinu serveris olevat välja lülitatud.</p>
<p>Moodle\'it saab ikka installeerida, kui selle võimaluseta ei saa sa kursuse faile või uute kasutajate andmeid üles laadida</p>
<p>Failide üleslaadimise sisse lülitamiseks pead sa (või sinusüsteemiadministraator) muutma main php.ini faili oma süsteemis ja seadma <b>file_uploads</b> väärtuseks \'1\'.</p>';
$string['gdversion']='GD versioon';
$string['gdversionerror']='GD teek peaks olema võimeline töötlema ja looma pilte.';
$string['gdversionhelp']='<p>Sinu serveril ei paista GD installeeritud olevat.</p>
<p>GD on andmeteek, mis on vajalik PHP jaoks, et Moodle\'il oleks võimalik pilte (kasutajate ikoonid, logide graafikud) töödelda ja luua. Moodle töötab ikka ka GD puudumisel, aga need võimalused ei ole siis sinu jaoks kättesaadavad.</p>
<p>GD lisamiseks PHP\'le Unixi operatsioonisüsteemis tuleb kompileerida PHP-d, kasutates --with-gd parameetrit.</p>
<p>Windowsis saad sa tavaliselt muuta php.ini faili ja kommenteerida sisse libdg.dll\'le vastava rea.</p>';
$string['globalsquotes']='Ebaturvaline globaalmuutujate häsitlemine';
$string['globalsquoteserror']='Paranda oma PHP seadeid: mitte võimalda \"register_globals\" ja/või võimalda \"magic_quotes_gpc\".';
$string['globalsquoteshelp']='<p>Kombinatsioon mitte lubatud Magic Quotes GPC ja võimaldatud Register Globals samaaegsest seadistusest ei ole soovitatav.</p><p>Soovituslik seadistus on <b>magic_quotes_gpc = On</b> and <b>register_globals = Off</b> Sinu php.ini failis</p><p>Kui Sul ei ole ligipääsu php.ini failile, siis peaksid paneme alljärgnevad read Moodle kataloogis olevasse faili .htaccess:<blockquote>php_value magic_quotes_gpc On</blockquote><blockquote>php_value register_globals Off</blockquote></p>';
$string['inputdatadirectory']='Andmete kataloog:';
$string['inputwebadress']='Veebiaadress:';
$string['inputwebdirectory']='Moodle kataloog:';
$string['installation']='Installeerimine';
$string['invalidemail']='Vigane e-mail';
$string['invalidhost']='Vigane host';
$string['invalidpath']='Vigane rada';
$string['invalidurl']='Vigane URL';
$string['langdownloaderror']='Kahjuks keelt \"$a\" ei paigaldatud. Paigaldamine jätkub inglise keeles.';
$string['langdownloadok']='Keel \"$a\" paigaldati edukalt. Paigaldamisprotsess jätkub selles keeles.';
$string['locationanddirectories']='Asukohad ja kataloogid';
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
$string['mssql']='SQL*Server (mssql)';
$string['mssql_n']='SQL*Server UTF-8 toetusega (mssql_n)';
$string['mssqlextensionisnotpresentinphp']='PHP laiendus MSSQL ei ole korralikult seadistatud, mistõttu ei saa ühenduda SQL*Server\'iga. Palun kontrolli oma php.ini faili või kompileeri PHP uuesti.';
$string['mysql']='MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp']='PHP ei ole MySQL laiendiga õigesti konfigureeritud, seega ei saa ta MySQL\'ga suhelda. Palun kontrolli oma php.ini faili või kompileeri PHP uuesti.';
$string['mysqli']='Täiustatud MySQL (mysqli)';
$string['oci8po']='Oracle (oci8po)';
$string['ociextensionisnotpresentinphp']='PHP laiendus OCI8 ei ole korralikult seadistatud, mistõttu ei saa ühenduda Oracle\'ga. Palun kontrolli oma php.ini faili või kompileeri PHP uuesti.';
$string['odbc_mssql']='SQL*Server üle ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp']='PHP laiendus ODBC ei ole korralikult seadistatud, mistõttu ei saa ühenduda SQL*Server\'iga. Palun kontrolli oma php.ini faili või kompileeri PHP uuesti.';
$string['pass']='Korras';
$string['paths']='Rajad';
$string['pathserrcreatedataroot']='Andmete kataloogi ($a->dataroot) ei saa installeerija luua.';
$string['pathshead']='Radade kinnitused';
$string['pathsunsecuredataroot']='Andmete juurkataloogi asukoht pole turvamine';
$string['pathswrongadmindir']='Admin kataloogi ei eksisteeri';
$string['pgsqlextensionisnotpresentinphp']='PHP laiendus PGSQL ei ole korralikult seadistatud, mistõttu ei saa ühenduda PostgreSQL\'iga. Palun kontrolli oma php.ini faili või kompileeri PHP uuesti.';
$string['php52versionerror']='PHP versioon peab olema vähemalt 5.2.4.';
$string['php52versionhelp']='<p>Moodle vajab PHP\'d versiooniga vähemalt 5.2.4.</p>
<p>Sul on praegu versioon $a</p>
<p>Sa pead uuendama PHP\'d või võtma kasutusele hosti, kus on uuem versioon PHP\'st!</p>';
$string['phpextension']='$a PHP laiendus';
$string['phpversion']='PHP versioon';
$string['phpversionerror']='PHP versioon peab olema vähemalt 4.1.0';
$string['phpversionhelp']='<p>Moodle vajab vähemalt PHP versiooni 4.1.0</p>
<p>Sinu jooksev versioon on $a</p>
<p>Sa pead oma PHP-d uuendama või kolima hosti, kus on uuem PHP versioon!</p>';
$string['postgres7']='PostgreSQL (postgres7)';
$string['releasenoteslink']='Rohkem informatsiooni selle versiooni kohta palun vaata väljalaste märkustest $a';
$string['safemode']='Ohutu režiim';
$string['safemodeerror']='Moodle\'il võib ohutus režiimis komplikatsioone tekkida';
$string['safemodehelp']='<p>Moodle võib tekkida mitmesuguseid probleeme, kui ohutu režiim on sisse lülitatud, näiteks ei luba ta tõenäoliselt luua uusi faile.</p>
<p>Ohutu režiim on tavaliselt sisse lülitatud ainult paranoilistel avalikel veebihostidel, seega pead leidma oma Moodle õpikeskkonnale uue serveriteenust pakkuva firma. </p>
<p>Sa võid proovida installeerimist jätkata, kui soovid, aga arvatavasti tekib sul ka hiljem probleeme.</p>';
$string['selectlanguage']='Keele valimine installeerimiseks';
$string['sessionautostart']='Sessioonide automaatne algatamine';
$string['sessionautostarterror']='See peaks olema välja lülitatud';
$string['sessionautostarthelp']='<p>Moodle vajab sessiooni tuge ja ei tööta ilma selleta.</p>
<p>Sessioone saab sisse lülitada php.ini failist, otsi sealt session.auto_start parameetrit.</p>';
$string['sitefullname']='Saidi täisnimi';
$string['siteinfo']='Saidi detailid';
$string['siteshortname']='Saidi lühinimi';
$string['skipdbencodingtest']='Jäta vahele andmebaasi kodeeringu test';
$string['tableprefix']='Tabeli prefiks';
$string['welcomep10']='$a->installername ($a->installerversion)';
$string['welcomep20']='Sa näed seda lehte, sest oled edukalt installeerinud ja käivitanud <strong>$a->packname $a->packversion</strong> paketi Sinu arvutis. Õnnitleme!';
$string['welcomep40']='Pakett sisaldab ka <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep70']='Vajuta \"Järgmine\" nuppu all jätkamaks <strong>Moodle</strong> paigaldamisega.';
$string['welcometext']='--- Tere tulemast Moodle käsurea installeerijasse ---';
$string['writetoconfigfilefaild']='Viga: seadete faili kirjutamine ebaõnnestus';
$string['wwwroot']='Veebiaadress';
$string['wwwrooterror']='Veebiaadress näib vigane - Moodle installatsiooni ei paista seal olevat.';
$string['aborting']='Installeerimise katkestamine'; // ORPHANED
$string['adminemail']='E-mail'; // ORPHANED
$string['adminfirstname']='Eesnimi'; // ORPHANED
$string['admininfo']='Administratori detailid'; // ORPHANED
$string['adminlastname']='Perenimi'; // ORPHANED
$string['adminpassword']='Parool'; // ORPHANED
$string['adminusername']='Kasutaja nimi'; // ORPHANED
$string['askcontinue']='Jätka (jah/ei)'; // ORPHANED
$string['availabledbtypes']='Saadaval andmebaasi tüübid'; // ORPHANED
$string['availablelangs']='Saadaval keelte nimekiri'; // ORPHANED
$string['cannotconnecttodb']='Ei saa ühenduda andmebaasiga'; // ORPHANED
$string['checkingphpsettings']='PHP seadete kontrollimine'; // ORPHANED
$string['configfilecreated']='Seadistuste fail edukalt loodud'; // ORPHANED
$string['configfiledoesnotexist']='Seadistuste faili ei eksisteeri !!!'; // ORPHANED
$string['configurationfileexist']='Seadistuste fail juba eksisteerib!'; // ORPHANED
$string['creatingconfigfile']='Seadistuste faili loomine ...'; // ORPHANED
$string['databasehead']='Andmebaasi seaded'; // ORPHANED
$string['databasehost']='Andmebaasi host'; // ORPHANED
$string['databasename']='Andmebaasi nimi'; // ORPHANED
$string['databasepass']='Andmebaasi parool'; // ORPHANED
$string['databasesettingsformoodle']='Moodle andmebaasi seaded'; // ORPHANED
$string['databasesocket']='UNIX\'i sokkel'; // ORPHANED
$string['databasetype']='Andmebaasi tüüp'; // ORPHANED
$string['databasetypehead']='Vali andmebaasi draiver'; // ORPHANED
$string['databasetypesub']='Moodle toetab mitut andmebaasiserveri tüüpi. Palun kontakteeru serveri administraatoriga, kui ei tea millist valida'; // ORPHANED
$string['databaseuser']='Andmebaasi kasutaja'; // ORPHANED
$string['downloadlanguagepack']='Kas sa soovid tõmmata keelepaketi praegu (jah/ei):'; // ORPHANED
$string['downloadsuccess']='Keelepaki alla tõmbamine oli edukas'; // ORPHANED
$string['doyouagree']='Kas sa nõustud? (jah/ei):'; // ORPHANED
$string['errorsinenvironment']='Keskkonna sobivuse kontroll ebaõnnestus!'; // ORPHANED
$string['inputdatadirectory']='Andmete kataloog:'; // ORPHANED
$string['inputwebadress']='Veebiaadress:'; // ORPHANED
$string['inputwebdirectory']='Moodle kataloog:'; // ORPHANED
$string['invalidemail']='Vigane e-mail'; // ORPHANED
$string['invalidhost']='Vigane host'; // ORPHANED
$string['invalidpath']='Vigane rada'; // ORPHANED
$string['invalidurl']='Vigane URL'; // ORPHANED
$string['locationanddirectories']='Asukohad ja kataloogid'; // ORPHANED
$string['paths']='Rajad'; // ORPHANED
$string['pathserrcreatedataroot']='Andmete kataloogi ($a->dataroot) ei saa installeerija luua.'; // ORPHANED
$string['pathshead']='Radade kinnitused'; // ORPHANED
$string['pathsunsecuredataroot']='Andmete juurkataloogi asukoht pole turvamine'; // ORPHANED
$string['pathswrongadmindir']='Admin kataloogi ei eksisteeri'; // ORPHANED
$string['php52versionerror']='PHP versioon peab olema vähemalt 5.2.4.'; // ORPHANED
$string['php52versionhelp']='<p>Moodle vajab PHP\'d versiooniga vähemalt 5.2.4.</p>
<p>Sul on praegu versioon $a</p>
<p>Sa pead uuendama PHP\'d või võtma kasutusele hosti, kus on uuem versioon PHP\'st!</p>'; // ORPHANED
$string['phpextension']='$a PHP laiendus'; // ORPHANED
$string['releasenoteslink']='Rohkem informatsiooni selle versiooni kohta palun vaata väljalaste märkustest $a'; // ORPHANED
$string['selectlanguage']='Keele valimine installeerimiseks'; // ORPHANED
$string['sitefullname']='Saidi täisnimi'; // ORPHANED
$string['siteinfo']='Saidi detailid'; // ORPHANED
$string['siteshortname']='Saidi lühinimi'; // ORPHANED
$string['tableprefix']='Tabeli prefiks'; // ORPHANED
$string['welcometext']='--- Tere tulemast Moodle käsurea installeerijasse ---'; // ORPHANED
$string['writetoconfigfilefaild']='Viga: seadete faili kirjutamine ebaõnnestus'; // ORPHANED
$string['yourchoice']='Sinu valik:'; // ORPHANED

?>