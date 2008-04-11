<?PHP // $Id$ 
      // install.php - created with Moodle 1.8.4+ (2007021540)


$string['aborting'] = 'Telepítés abbahagyása';
$string['admindirerror'] = 'A megadott rendszergazdakönyvtár hibás';
$string['admindirname'] = 'Rendszergazdakönyvtár';
$string['admindirsetting'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Sajnos ez ütközik a Moodle rendszergazdai oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b>.<br /> <br /> Ezzel a rendszergazdai ugrópontok a Moodle-ban rendbe tehetők.';
$string['admindirsettinghead'] = 'A rendszergazdakönyvtár beállítása...';
$string['admindirsettingsub'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Sajnos ez ütközik a Moodle rendszergazdai oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b>.<br /> <br /> Ezzel a rendszergazdai ugrópontok a Moodle-ban rendbe tehetők.';
$string['adminemail'] = 'E-mail:';
$string['adminfirstname'] = 'Keresztnév:';
$string['admininfo'] = 'Rendszergazda adatai';
$string['adminlastname'] = 'Vezetéknév:';
$string['adminpassword'] = 'Jelszó:';
$string['adminusername'] = 'Felhasználónév:';
$string['askcontinue'] = 'Tovább (igen/nem):';
$string['availabledbtypes'] = 'Elérhető adatbázisfajták';
$string['availablelangs'] = 'Elérhető nyelvek listája';
$string['cannotconnecttodb'] = 'Nem lehet az adatbázishoz csatlakozni';
$string['caution'] = 'Vigyázat';
$string['checkingphpsettings'] = 'PHP-beállítások ellenőrzése';
$string['chooselanguage'] = 'Válasszon nyelvet';
$string['chooselanguagehead'] = 'Nyelv kiválasztása';
$string['chooselanguagesub'] = 'KIZÁRÓLAG a telepítéshez válasszon nyelvet! A portál és a felhasználó nyelvét egy későbbi képernyőn adhatja meg.';
$string['compatibilitysettings'] = 'PHP-beállításainak ellenőrzése ...';
$string['compatibilitysettingshead'] = 'PHP-beállítások ellenőrzése ...';
$string['compatibilitysettingssub'] = 'Szerverének az összes tesztet sikeresen kell lefuttatnia ahhoz, hogy a Moodle megfelelően működjön.';
$string['configfilecreated'] = 'A konfigurációs állomány létrehozása sikerült';
$string['configfiledoesnotexist'] = 'A konfigurációs állomány nem létezik!!!';
$string['configfilenotwritten'] = 'A telepítő kóddal nem lehetett a megadott beállításaival létrehozni a config.php állományt, feltehetőleg azért, mert a Moodle könyvtára nem írható. Az alábbi kódot kézzel átmásolhatja a Moodle gyökérkönyvtárába egy config.php nevű állományba.';
$string['configfilewritten'] = 'a config.php létrehozása sikerült';
$string['configurationcomplete'] = 'A beállítások elkészültek';
$string['configurationcompletehead'] = 'Beállítás kész';
$string['configurationcompletesub'] = 'A Moodle megpróbálta beállításait a telepítés gyökérkönyvtárában egy állományba elmenteni.';
$string['configurationfileexist'] = 'A konfigurációs állomány már létezik';
$string['creatingconfigfile'] = 'A konfigurációs állomány létrehozása...';
$string['database'] = 'Adatbázis';
$string['databasecreationsettings'] = 'Most a Moodle adatait tároló adatbázis beállításait kell elvégeznie. Ezt az adatbázist a telepítő automatikusan beállítja az alábbiak szerint. <br /><br /><br /><b>Típus: </b>a telepítő \"mysql\"-re állítja be<br /><b>Gazdagép</b>: a telepítő \"localhost\"-ra állítja<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: a telepítő \"root\"-ra állítja<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: opcionális előtag az összes táblázatnévhez';
$string['databasecreationsettingshead'] = 'Most a Moodle adatait tároló adatbázis beállításait kell elvégeznie. Ezt az adatbázist a telepítő automatikusan beállítja az alábbiak szerint.';
$string['databasecreationsettingssub'] = '<b>Típus: </b>a telepítő \"mysql\"-re állítja be<br /><b>Gazdagép</b>: a telepítő \"localhost\"-ra állítja<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: a telepítő  \"root\"-ra állítja<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: opcionális előtag az összes táblázatnévhez';
$string['databasehost'] = 'Az adatbázis gazdagépe:';
$string['databasename'] = 'Az adatbázis neve:';
$string['databasepass'] = 'Az adatbázis jelszava:';
$string['databasesettings'] = 'Most be kell állítania azt az adatbázist, ahol Moodle-adatainak többségét tárolni fogja. Az adatbázisnak már léteznie kell, a hozzá tartozó azonosítóval és jelszóval együtt.<br /><br /> <br /><b>Típus: </b> mysql vagy postgres7<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: opcionális előtag az összes táblázatnévhez';
$string['databasesettingsformoodle'] = 'Az adatbázis beállításai a Moodle-hoz';
$string['databasesettingshead'] = 'Most be kell állítania azt az adatbázist, ahol Moodle-adatainak többségét tárolni fogja. Az adatbázisnak már léteznie kell, a hozzá tartozó azonosítóval és jelszóval együtt.';
$string['databasesettingssub'] = '<b>Típus: </b> MySQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_mssql'] = 'Típus: SQL*Server (nem UTF-8) <font color=\"red\">Kísérleti! (élesben nem használandó)</font><br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_mssql_n'] = '<b>Típus: </b> SQL*Server (UTF-8 bekapcsolva)<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_mysql'] = '<b>Típus: </b> MySQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (választható)';
$string['databasesettingssub_mysqli'] = '<b>Típus: </b> Javított MySQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (választható)';
$string['databasesettingssub_oci8po'] = '<b>Típus:</b> Oracle<br /><b>Gazdagép</b>: nem használatos, üresen marad<br /><b>Név</b>: a tnsnames.ora kapcsolat neve<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező, max. 2cc.)';
$string['databasesettingssub_odbc_mssql'] = '<b>Típus:</b> SQL* szerver (ODBC-vel) <b><font color=\"red\">Kísérleti! (élesben nem használandó)</font></b><br /><b>Gazdagép:</b> a DSN ODBC-vezérlőpulton megadott neve<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingssub_postgres7'] = '<b>Típus: </b> PostgreSQL<br /><b>Gazdagép</b>: pl. localhost vagy db.isp.com<br /><b>Név</b>: az adatbázis neve, pl. moodle<br /><b>Felhasználó</b>: az Ön adatbázishoz használt azonosítója<br /><b>Jelszó</b>: az Ön jelszava az adatbázishoz<br /><b>Táblázat előtagja</b>: minden táblázatnévhez használandó előtag (kötelező)';
$string['databasesettingswillbecreated'] = '<b>Megjegyzés:</b> A telepítő megpróbálja automatikusan létrehozni az adatbázist, ha az nem létezik.';
$string['databasetype'] = 'Az adatbázis típusa:';
$string['databaseuser'] = 'Az adatbázis felhasználója';
$string['dataroot'] = 'Adatkönyvtár';
$string['datarooterror'] = 'A megadott \'Adatkönyvtár\' nem létezik, vagy nem sikerült létrehozni. Módosítsa az útvonalat vagy hozza létre a könyvtárat.';
$string['dbconnectionerror'] = 'Nem sikerült a megadott adatbázishoz csatlakozni. Ellenőrizze adatbázisának beállításait.';
$string['dbcreationerror'] = 'Hiba az adatbázis létrehozása közben. A megadott beállításokkal nem lehetett létrehozni az adatbázis nevét.';
$string['dbhost'] = 'Gazdagép szervere';
$string['dbpass'] = 'Jelszó';
$string['dbprefix'] = 'Táblázat előtagja';
$string['dbtype'] = 'Típus';
$string['dbwrongencoding'] = 'A kiválasztott adatbázis egy nem ajánlott kódolást használ ($a). Helyette ajánlatos unikódos (UTF-8) adatbázist használni. Egyébként ezt a tesztet átugorhatja, ha bejelöli alább az \"Adatbázis kódolásának ellenőrzése\" négyzetet, bár így a későbbiekben gondjai támadhatnak.';
$string['dbwronghostserver'] = 'A fentiekben kifejtettek szerint tartsa be a \"Gazdagép\" beállítási szabályait.';
$string['dbwrongnlslang'] = 'Webszerverén az NLS_LANG környezetváltozónak az AL32UTF8 karakterkészletet kell használni. Az OCI8 megfelelő beállításával kapcsolatban lásd a PHP dokumentációját.';
$string['dbwrongprefix'] = 'A fentiekben kifejtettek szerint tartsa be a \"Táblázati előtag\" beállítási szabályait.';
$string['directorysettings'] = '<p>Hagyja jóvá a Moodle telepítésének helyét.</p><p><b>Webcím:</b>Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több URL-ről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p><p><b>Moodle-könyvtár:</b>Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p><p><b>Adatkönyvtár:</b>Egy olyan helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában \"nobody\" vagy \"apache\") ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az internetről közvetlenül elérhető.</p>';
$string['directorysettingshead'] = 'Erősítse meg a Moodle telepítésének helyét.';
$string['directorysettingssub'] = '<b>Webcím:</b>Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több URL-ről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p><p><b>Moodle-könyvtár:</b>Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p><p><b>Adatkönyvtár:</b>Egy olyan helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában \"nobody\" vagy \"apache\") ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az internetről közvetlenül elérhető.</p>';
$string['dirroot'] = 'Moodle-könyvtár';
$string['dirrooterror'] = 'A \"Moodle-könyvtár\" beállítása feltehetőleg hibás - nem található alatta a Moodle telepítése. Az alábbi értéket visszaállítottuk.';
$string['disagreelicense'] = 'A frissítés a GPL-lel való egyet nem értés miatt nem folytatható!';
$string['download'] = 'Letöltés';
$string['downloadlanguagebutton'] = 'Töltse le a &quot;$a&quot; nyelvi csomagot';
$string['downloadlanguagehead'] = 'Nyelvi csomag letöltése';
$string['downloadlanguagenotneeded'] = 'Folytathatja a telepítést az alapértelmezés szerinti &quot;$a&quot; nyelvi csomaggal.';
$string['downloadlanguagepack'] = 'Most akarja letölteni a nyelvi csomagot (igen/nem):';
$string['downloadlanguagesub'] = 'Letölthet most egy nyelvi csomagot és azon a nyelven folytathatja a telepítést.<br /><br />Ha nem tudja letölteni, folytathatja a telepítést angol nyelven. (A telepítés végén lehetősége lesz további nyelvi csomagok letöltésére és telepítésére.)';
$string['downloadsuccess'] = 'A nyelvi csomag letöltése sikerült';
$string['doyouagree'] = 'Egyetért? (igen/nem):';
$string['environmenthead'] = 'Környezetének ellenőrzése ...';
$string['environmentsub'] = 'Ellenőrizzük, hogy rendszerének különféle összetevői megfelelnek-e a rendszerkövetelményeknek';
$string['errorsinenvironment'] = 'Hibák vannak a környezetben!';
$string['fail'] = 'Hiba';
$string['fileuploads'] = 'Állományok feltöltése';
$string['fileuploadserror'] = 'Be kell kapcsolni';
$string['fileuploadshelp'] = '<p>Szerverén az állományok feltöltése feltehetőleg ki van kapcsolva.</p> <p>A Moodle ettől még telepíthető, de nem fog tudni kurzusállományokat vagy új felhasználói profilokat feltölteni.</p> <p>Állományok feltöltésének bekapcsolásához Önnek (vagy rendszeradminisztrátorának) a rendszer fő php.ini nevű állományában a <b>file_uploads</b> beállítást \'1\'-re kell módosítania.</p>';
$string['gdversion'] = 'GD-verzió';
$string['gdversionerror'] = 'Képek feldolgozásához és készítéséhez szükséges a GD-könyvtár.';
$string['gdversionhelp'] = '<p>Feltehetőleg szerverén nincs telepítve a GD.</p><p>A GD a PHP számára szükséges könyvtár, mellyel a Moodle képeket (például felhasználói ikonokat) tud feldolgozni és újakat tud készíteni (például naplódiagramokat). A Moodle működik GD nélkül is - csak ezek a lehetőség nem lesznek az Ön számára elérhetők.</p><p>A GD Unix alatti PHP-hez való hozzáadásához a PHP-t fordítsa a --with-gd paraméterrel.</p><p>Windows alatt szerkesztheti a php.ini-t: el kell távolítani a megjegyzésjelet a php_gd2.dll-re hivatkozó sor elejéről.</p>';
$string['globalsquotes'] = 'Globális változók nem biztonságos kezelése';
$string['globalsquoteserror'] = 'Javítsa ki a PHP beállításait: kapcsolja ki a disable register_globals-t és/vagy kapcsolja be a magic_quotes_gpc-t';
$string['globalsquoteshelp'] = '<p>Nem ajánlott egyszerre kikapcsolt Magic Quotes GPC-t bekapcsolt Register Globals mellett használni.</p><p>A javasolt beállítás: <b>magic_quotes_gpc = On</b> és <b>register_globals = Off</b> a php.ini állományban. </p><p>Ha nem elérhető php.ini állománya, próbálja meg az alábbi sort beszúrni a Moodle-könyvtárában lévő .htaccess állományba: <blockquote>php_value magic_quotes_gpc On</blockquote> <blockquote>php_value register_globals Off</blockquote> </p>';
$string['inputdatadirectory'] = 'Adatkönyvtár:';
$string['inputwebadress'] = 'Webcím:';
$string['inputwebdirectory'] = 'Moodle-könyvtár:';
$string['installation'] = 'Telepítés';
$string['installationiscomplete'] = 'A telepítés befejeződött!';
$string['invalidargumenthelp'] = 'Hiba: érvénytelen argumentum(ok). Használat: $php cliupgrade.php OPTIONS További segítséghez használja a --help opciót';
$string['invalidemail'] = 'Érvénytelen e-mail cím';
$string['invalidhost'] = 'Érvénytelen gazdagép';
$string['invalidint'] = 'Hiba: az érték nem egész szám';
$string['invalidintrange'] = 'Hiba: az érték az érvényes tartományon kívül esik';
$string['invalidpath'] = 'Érvénytelen útvonal';
$string['invalidsetelement'] = 'Hiba: a megadott érték nem szerepel a lehetőségek között';
$string['invalidtextvalue'] = 'Érvénytelen szöveges érték';
$string['invalidurl'] = 'Érvénytelen URL';
$string['invalidvalueforlanguage'] = 'Érvénytelen érték a --lang opcióhoz. További segítséghez írja be a --help szöveget';
$string['invalidyesno'] = 'Hiba: az érték nem érvényes igen-nem argumentum';
$string['langdownloaderror'] = 'A(z) \"$a\" nyelv nincs telepítve. A telepítés angol nyelven folytatódik.';
$string['langdownloadok'] = 'A \"$a\" nyelv telepítése sikerült. A telepítés ezen a nyelven folytatódik.';
$string['locationanddirectories'] = 'Hely és könyvtárak';
$string['magicquotesruntime'] = 'Futásidejű Magic Quotes';
$string['magicquotesruntimeerror'] = 'Ki kell kapcsolni';
$string['magicquotesruntimehelp'] = '<p>A futásidejű Magic Quotes kódot a Moodle megfelelő működéséhez ki kell kapcsolni.</p> <p>Alapesetben ez így is van ... lásd a <b>magic_quotes_runtime</b> beállítást a php.ini állományban.</p> <p>Ha nem elérhető php.ini állománya, próbálja meg az alábbi sort beszúrni a Moodle-könyvtárában lévő .htaccess állományba: <blockquote>php_value magic_quotes_runtime Off</blockquote> </p>';
$string['memorylimit'] = 'Memóriakorlát';
$string['memorylimiterror'] = 'A PHP-memóriakorlát túl alacsonyra van állítva... ez a későbbiekben gondot okozhat.';
$string['memorylimithelp'] = 'Szerverén a PHP memóriakorlátja jelenleg $a. Ez a Moodle számára a későbbiekben gondot okozhat, különösen akkor, ha sok modulja és/vagy sok felhasználója van bekapcsolva. Ha lehet, állítsa be a PHP-t magasabb korláttal, pl. 40 Mb-tal. Többféleképpen próbálkozhat: ha lehet, fordítsa újra a PHP-t --enable-memory-limit-tel. Így a Moodle maga állíthatja be a memóriakorlátot. Ha elérhető a php.ini állomány, módosítsa a memory_limit beállítást pl. 40 Mb-ra. Ha nem éri el az állományt, kérje meg a rendszergazdát a módosítás elvégzésére. Egyes PHP-szervereken létrehozhat egy .htaccess állományt a Moodle-könyvtárban az alábbi sorral: php_value memory_limit 40M. Vannak szerverek, ahol ez az összes PHP-oldal működését megakadályozza (az oldalak hibát jeleznek), ezért el kell távolítania a .htaccess állományt.';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server UTF-8 támogatással (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az MSSQL-bővítéshez, így nem tud kommunikálni az SQL*Serverrel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a MySQL kiterjesztéshez, így nem tud vele kommunikálni. Ellenőrizze a php.ini fájlt, vagy fordítsa újra a PHP-t.';
$string['mysqli'] = 'Javított MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a MySQL-kiterjesztéshez, így nem tud vele kommunikálni. Ellenőrizze a php.ini fájlt, vagy fordítsa újra a PHP-t. A MySQLi-kiterjesztés PHP 4 esetén nem használható.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az OCI8 bővítéshez, így nem tud kommunikálni az Oracle-lal. Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az ODBC-bővítéshez, így nem tud kommunikálni az SQL*Serverrel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['pass'] = 'Sikerült';
$string['pgsqlextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva a PGSQL-bővítéshez, így nem tud kommunikálni a PostgreSQL-lel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['phpversion'] = 'PHP-verzió';
$string['phpversionerror'] = 'A PHP-verzió legalább 4.3.0 vagy 5.1.0 legyen (az 5.0.x több ismert gond miatt nem ajánlott).';
$string['phpversionhelp'] = 'A Moodle használatához legalább a PHP 4.3.0 vagy 5.1.0 verziója szükséges (az 5.0.x több ismert gond miatt nem ajánlott). Az Ön által használt verzió $a. Frissítse a PHP-verziót, vagy térjen át újabb PHP-verziót működtető gazdagépre! (5.0.x esetén visszatérhet a 4.4.x verziójoz is)';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'A Moodle ezen verziójának adataival kapcsolatosan olvassa el a(z) $a címen a Változatra vonatkozó megjegyzéseket';
$string['safemode'] = 'Biztonságos mód';
$string['safemodeerror'] = 'A Moodle bekapcsolt biztonságos mód esetén gondokba ütközhet';
$string['safemodehelp'] = 'A Moodle bekapcsolt biztonságos mód esetén egy sor problémába ütközhet, mindenekelőtt feltehetőleg nem tud majd új állományokat létrehozni. A biztonságos módot általában túlzottan pánikoló webes rendszergazdák kapcsolják be, így valószínűleg egy másik gazdagépet kell keresnie a Moodle számára. Ha kívánja, folytathatja a telepítést, de számítson a későbbiekben néhány hibára.';
$string['selectlanguage'] = 'Nyelvi csomag kiválasztása a telepítéshez';
$string['sessionautostart'] = 'Automatikus folyamatkezdés';
$string['sessionautostarterror'] = 'Ezt ki kell kapcsolni';
$string['sessionautostarthelp'] = 'A Moodle-nak folyamattámogatásra van szüksége, nélküle nem működik. A folyamatok a php.ini állományban kapcsolhatók be, lásd a session.auto_start paramétert.';
$string['sitefullname'] = 'A portál teljes neve:';
$string['siteinfo'] = 'A portál adatai';
$string['sitenewsitems'] = 'Hírek:';
$string['siteshortname'] = 'A portál rövid neve:';
$string['sitesummary'] = 'A portálról szóló összegzés:';
$string['skipdbencodingtest'] = 'Az adatbázis-kódolás ellenőrzésének kihagyása';
$string['tableprefix'] = 'Táblázat előtagja:';
$string['upgradingactivitymodule'] = 'Tevékenységmodul frissítése';
$string['upgradingbackupdb'] = 'Biztonsági adatbázis frissítése';
$string['upgradingblocksdb'] = 'Blokkok adatbázisának frissítése';
$string['upgradingblocksplugin'] = 'Blokkok segédprogamjának frissítése';
$string['upgradingcompleted'] = 'A frissítés véget ért...';
$string['upgradingcourseformatplugin'] = 'Kurzusforma segédprogramjának frissítése';
$string['upgradingenrolplugin'] = 'Beiratkozási segédprogam frissítése';
$string['upgradinggradeexportplugin'] = 'Pontexportáló segédprogam frissítése';
$string['upgradinggradeimportplugin'] = 'Pontimportáló segédprogam frissítése';
$string['upgradinggradereportplugin'] = 'Pontjelentési segédprogam frissítése';
$string['upgradinglocaldb'] = 'Helyi adatbázis frissítése';
$string['upgradingmessageoutputpluggin'] = 'Üzenetmegjelenítő segédprogam frissítése';
$string['upgradingqtypeplugin'] = 'Kérdéstípus segédprogamjának frissítése';
$string['upgradingrpcfunctions'] = 'RPC-funkciók frissítése';
$string['usagehelp'] = 'Összegzés: $php cliupgrade.php 
OPCIÓK 
--lang Érvényesen telepített nyelv a telepítéshez. Az alapbeállítás az angol (en)
--webaddr A Moodle-portál webcíme --moodledir A Moodle-webmappa helye --datadir A Moodle-adatmappa helye (ne legyen a netről látható) 
--dbtype Az adatbázis típusa. Az alapbeállítás a mysql 
--dbhost Az adatbázis gazdagépe. Az alapbeállítás a localhost 
--dbname Az adatbázis neve. Az alapbeállítás a moodle 
--dbuser Az adatbázis felhasználója. Alapbeállításban üres 
--dbpass Az adatbázis jelszava. 
Alapbeállításban üres 
--prefix A fenti adatbázistáblák előtagja. Alapbeállításban mdl 
--verbose 0 Nincs kimenet, 1 Összegzett kimenet (alapbeállítás), 2 Részletes kimenet 
--interactivelevel  0 Nem interaktív, 1 félig interaktív (alapbeállítás), 2 interaktív 
--agreelicense Igen (alapbeállítás) vagy Nem 
--confirmrelease  Igen (alapbeállítás) vagy Nem 
--sitefullname A portál teljes neve. Alapbeállítás: Moodle Site (Módosítsa a portál nevét!!) 
--siteshortname A portál rövid neve. Alapbeállítás: moodle 
--sitesummary A portál összegzése. Alapbeállítás: üres 
--adminfirstname A rendszergazda keresztneve. Alapbeállítás: Admin --adminlastname A rendszergazda vezetékneve. Alapbeállítás: User --adminusername A rendszergazda felhasználóneve. Alapbeállítás: admin --adminpassword A rendszergazda jelszava. Alapbeállítás: admin --adminemail A rendszergazda e-mailo címe. Alapbeállítás: root@localhost --help ezen súgóoldal megjelenítése. 
Használat: 
$php cliupgrade.php --lang=en --webaddr=http://www.example.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost --dbname=moodle --dbuser=root --prefix=mdl --agreelicense=yes --confirmrelease=yes --sitefullname=\"Moodle-portál mintája\" --siteshortname=moodle --sitesummary=siteforme --adminfirstname=Admin --adminlastname=User --adminusername=admin --adminpassword=admin --adminemail=admin@example.com --verbose=1 --interactivelevel=2';
$string['versionerror'] = 'A felhasználó verzióhiba miatt megszakította';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Azért látja ezt az oldalt, mert sikeresen telepítette és futtatja az $a->packname $a->packversion csomagot számítógépén. Gratulálunk!';
$string['welcomep30'] = 'A $a->installername tartalmazza azokat az alkalmazásokat, amelyekkel a Moodle számára kialakítható a működési környezet, azaz:';
$string['welcomep40'] = 'A csomag tartalmazza a Moodle $a->moodlerelease ($a->moodleversion)-t is.';
$string['welcomep50'] = 'A csomagban lévő alkalmazások használatára a vonatkozó engedélyek érvényesek. A teljes $a->installername csomag <a href=\"http://www.opensource.org/docs/definition_plain.html\">nyílt forráskódú</a>, közreadása pedig a <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>-licenc alapján történik.';
$string['welcomep60'] = 'A következő oldalak segítségével számítógépén egyszerűen telepítheti és beállíthatja a Moodle-t. Elfogadhatja az alapbeállításokat, de igényeinek megfelelően módosíthatja is őket.';
$string['welcomep70'] = 'Kattintson az alábbi \"Tovább\" gombra és folytassa a Moodle telepítését.';
$string['welcometext'] = '---Üdvözli Önt a Moodle parancssori telepítője---';
$string['writetoconfigfilefaild'] = 'Hiba: nem sikerült a konfigurációs állomány írása';
$string['wwwroot'] = 'Webcím';
$string['wwwrooterror'] = 'A webcím nem érvényes - a Moodle mostani telepítése nincs a megadott címen. Az alábbi értéket visszaállítottuk.';
$string['yourchoice'] = 'Választása:';

?>
