<?PHP // $Id$ 
      // install.php - created with Moodle 1.6 Beta 3 (2006042401)



$string['admindirerror'] = 'A megadott rendszergazdakönyvtár hibás';
$string['admindirname'] = 'Rendszergazdakönyvtár';
$string['admindirsetting'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Sajnos ez ütközik a Moodle rendszergazdai oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b><br /> <br />
Ezzel a rendszergazdai ugrópontok a Moodle-ban rendbe tehetők.';
$string['admindirsettinghead'] = 'A rendszergazdakönyvtár beállítása...';
$string['admindirsettingsub'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Sajnos ez ütközik a Moodle rendszergazdai oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /> <b>moodleadmin</b><br /> <br />
Ezzel a rendszergazdai ugrópontok a Moodle-ban rendbe tehetők.';
$string['caution'] = 'Vigyázat';
$string['chooselanguage'] = 'Válasszon nyelvet';
$string['chooselanguagehead'] = 'Válasszon nyelvet';
$string['chooselanguagesub'] = 'Válasszon nyelvet KIZÁRÓLAG a telepítéshez! A portál és a felhasználó nyelvét egy későbbi képernyőn adhatja meg.';
$string['compatibilitysettings'] = 'PHP-beállításainak ellenőrzése ...';
$string['compatibilitysettingshead'] = 'PHP-beállításainak ellenőrzése ...';
$string['compatibilitysettingssub'] = 'Szerverének az összes tesztet sikeresen kell lefuttatnia ahhoz, hogy a Moodle megfelelően működjön.';
$string['configfilenotwritten'] = 'A telepítő kóddal nem lehetett a megadott beállításaival létrehozni a config.php állományt, feltehetőleg azért, mert a Moodle könyvtára nem írható. Az alábbi kódot átmásolhatja a Moodle gyökérkönyvtárába egy config.php nevű állományba.';
$string['configfilewritten'] = 'a config.php létrehozása sikerült';
$string['configurationcomplete'] = 'Beállítás kész';
$string['configurationcompletehead'] = 'Beállítás kész';
$string['configurationcompletesub'] = 'A Moodle megpróbálta beállításait a telepítés gyökérkönyvtárában egy állományba elmenteni.';
$string['database'] = 'Adatbázis';
$string['databasecreationsettings'] = '    Most a Moodle adatainak tárolására szánt adatbázis beállításait kell elvégeznie.  
Ezt az adatbázist a telepítő automatikusan beállítja az alábbiak szerint.<br />
    <br /> <br />
       <strong>Típus:</strong> a telepítő \"mysql\"-re állítja be<br />
       <strong>Gazdagép:</strong> a telepítő \"localhost\"-ra állítja<br />
       <strong>Név:</strong> az adatbázis neve, pl. moodle<br />
       <strong>Felhasználó:</strong> a telepítő  \"root\"-ra állítja<br />
       <strong>Jelszó:</strong> az Ön jelszava az adatbázishoz<br />
       <strong>Táblázat előtagja:</strong> opcionális előtag az összes táblázatnévhez';
$string['databasecreationsettingshead'] = '    Most a Moodle adatainak tárolására szánt adatbázis beállításait kell elvégeznie.  
Ezt az adatbázist a telepítő automatikusan beállítja az alábbiak szerint.';
$string['databasecreationsettingssub'] = '<strong>Típus:</strong> a telepítő \"mysql\"-re állítja be<br />
<strong>Gazdagép:</strong> a telepítő \"localhost\"-ra állítja<br />
<strong>Név:</strong> az adatbázis neve, pl. moodle<br />
<strong>Felhasználó:</strong> a telepítő  \"root\"-ra állítja<br />
<strong>Jelszó:</strong> az Ön jelszava az adatbázishoz<br />
<strong>Táblázat előtagja:</strong> opcionális előtag az összes táblázatnévhez';
$string['databasesettings'] = 'Most be kell állítania azt az adatbázist, ahol Moodle-adatainak többségét tárolni fogja. Az adatbázisnak már léteznie kell, a hozzá tartozó azonosítóval és jelszóval együtt.<br />
<br /> <br />
<strong>Típus:</strong> mysql vagy postgres7<br />
<strong>Gazdagép:</strong> pl. localhost vagy db.isp.com<br />
<strong>Név:</strong>az adatbázis neve, pl. moodle<br />
<strong>Felhasználó:</strong>az Ön adatbázishoz használt azonosítója<br />
<strong>Jelszó:</strong> az Ön adatbázishoz használt jelszava<br />
<strong>Táblázat előtagja:</strong> opcionális előtag az összes táblanévhez	';
$string['databasesettingshead'] = 'Most be kell állítania azt az adatbázist, ahol Moodle-adatainak többségét tárolni fogja. Az adatbázisnak már léteznie kell, a hozzá tartozó azonosítóval és jelszóval együtt.';
$string['databasesettingssub'] = '<strong>Típus:</strong> mysql vagy postgres7<br />
<strong>Gazdagép:</strong> pl. localhost vagy db.isp.com<br />
<strong>Név:</strong>az adatbázis neve, pl. moodle<br />
<strong>Felhasználó:</strong>az Ön adatbázishoz használt azonosítója<br />
<strong>Jelszó:</strong> az Ön adatbázishoz használt jelszava<br />
<strong>Táblázat előtagja:</strong> opcionális előtag az összes táblanévhez';
$string['databasesettingssub_mssql'] = "<b>Típus:</b> SQL*Server (nem UTF-8) <b><font color=\"red\">Kísérleti! (élesben nem használandó)</font></b><br />
       <b>Gazdagép:</b> pl. localhost vagy db.isp.com<br />
       <b>Név:</b> adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> az Ön adatbázis-felhasználói neve<br />
       <b>Jelszó:</b> az Ön adatbázis-jelszava<br />
       <b>Táblázati előtag:</b> minden táblázatnévhez használandó előtag (kötelező)";
$string['databasesettingssub_mssql_n'] = "<b>Típus:</b> SQL*Server (UTF-8-at használ)<br />
       <b>Gazdagép:</b> pl. localhost vagy db.isp.com<br />
       <b>Név:</b> adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> az Ön adatbázis-felhasználói neve<br />
       <b>Jelszó:</b> az Ön adatbázis-jelszava<br />
       <b>Táblázati előtag:</b> minden táblázatnévhez használandó előtag (kötelező)";
$string['databasesettingssub_mysql'] = "<b>Típus:</b> MySQL<br />
       <b>Gazdagép:</b> pl. localhost vagy db.isp.com<br />
       <b>Név:</b> adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> az Ön adatbázis-felhasználói neve<br />
       <b>Jelszó:</b> az Ön adatbázis-jelszava<br />
       <b>Táblázati előtag:</b> minden táblázatnévhez használandó előtag (választható)";
$string['databasesettingssub_oci8po'] = "<b>Típus:</b> Oracle<br />
       <b>Gazdagép:</b> pl. localhost vagy db.isp.com<br />
       <b>Név:</b> adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> az Ön adatbázis-felhasználói neve<br />
       <b>Jelszó:</b> az Ön adatbázis-jelszava<br />
       <b>Táblázati előtag:</b> minden táblázatnévhez használandó előtag (kötelező, max. 2 cc)";
$string['databasesettingssub_odbc_mssql'] = "<b>Típus:</b> SQL*Server (over ODBC) <b><font color=\"red\">Kísérleti! (élesben nem használandó)</font></b><br />
       <b>Gazdagép:</b> az ODBC kezelőpaneljében megadott DSN neve<br />
       <b>Név:</b> adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> az Ön adatbázis-felhasználói neve<br />
       <b>Kelszó:</b> az Ön adatbázis-jelszava<br />
       <b>Táblázati előtag:</b> minden táblázatnévhez használandó előtag (kötelező)";
$string['databasesettingssub_postgres7'] = "<b>Típus:</b> PostgreSQL<br />
       <b>Gazdagép:</b> pl. localhost vagy db.isp.com<br />
       <b>Név:</b> adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> az Ön adatbázis-felhasználói neve<br />
       <b>Jelszó:</b> az Ön adatbázis-jelszava<br />
       <b>Táblázati előtag:</b> minden táblázatnévhez használandó előtag (kötelező)";
$string['dataroot'] = 'Adatkönyvtár';
$string['datarooterror'] = 'A megadott \'Adatkönyvtár\' nem létezik vagy nem sikerült létrehozni. Módosítsa az útvonalat vagy hozza létre a könyvtárat.';
$string['dbconnectionerror'] = 'Nem sikerült a megadott adatbázishoz csatlakozni. Ellenőrizze adatbázisának beállításait.';
$string['dbcreationerror'] = 'Hiba az adatbázis létrehozása közben. A megadott beállításokkal nem lehetett létrehozni az adatbázis nevét.';
$string['dbhost'] = 'Gazdagép szervere';
$string['dbpass'] = 'Jelszó';
$string['dbprefix'] = 'Táblázat előtagja';
$string['dbtype'] = 'Típus';
$string['dbwrongencoding'] = 'A kiválasztott adatbázis egy nem ajánlott kódolást használ ($a). Helyette ajánlatos unikódos (UTF-8) adatbázist használni. Egyébként ezt a tesztet átugorhatja, ha bejelöli alább az \"Adatbázis kódolásának ellenőrzése\" négyzetet, bár így a későbbiekben gondjai támadhatnak.';
$string['dbwronghostserver'] = "A fentiek szerinti \"Gazdagép\" beállítási szabályait tartsa be.";
$string['dbwrongnlslang'] = "Webszerverében az NLS_LANG környezetváltozónak az AL32UTF8 karakterkészletet kell használni. Az OCI8 megfelelő beálításával kapcsolatban lásd a PHP dokumentációját.";
$string['dbwrongprefix'] = "A fentiek szerinti \"Táblázati előtag\" beállítási szabályait tartsa be.";
$string['directorysettings'] = '<p>Hagyja jóvá a Moodle telepítésének helyét.</p>

<p><b>Webcím:</b>
Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több URL-ről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p>

<p><b>Moodle-könyvtár:</b>
Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p>

<p><b>Adatkönyvtár:</b>
Egy helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában \'nobody\' vagy \'apache\') ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az Internetről közvetlenül elérhető.</p>';
$string['directorysettingshead'] = 'Erősítse meg a Moodle telepítésének helyét.';
$string['directorysettingssub'] = '<strong>Webcím:</strong>
Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több URL-ről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.
<br />
<br />
<strong>Moodle-könyvtár:</strong>
Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.
<br />
<br />
<strong>Adatkönyvtár:</strong>
Egy helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában \'nobody\' vagy \'apache\') ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az Internetről közveltenül elérhető.';
$string['dirroot'] = 'Moodle-könyvtár';
$string['dirrooterror'] = 'A \'Moodle-könyvtár\' beállítása feltehetőleg hibás - nem található alatta a Moodle telepítése. Az alábbi értéket visszaállítottuk.';
$string['download'] = 'Letöltés';
$string['downloadlanguagebutton'] = 'Töltse le a(z) \"$a\" nyelvi csomagot';
$string['downloadlanguagehead'] = 'Töltse le a nyelvi csomagot';
$string['downloadlanguagenotneeded'] = 'Folytathatja a telepítést az alapértelmezés szerinti \"$a\" nyelvi csomaggal.';
$string['downloadlanguagesub'] = 'Letölthet most egy nyelvi csomagot és azon a nyelven folytathatja a telepítést.<br /><br />Ha nem tudja letölteni, folytathatja a telepítést angol nyelven. (A telepítés végén lehetősége lesz további nyelvi csomagok letöltésére és telepítésére.)';
$string['environmenthead'] = 'Környezetének ellenőrzése ...';
$string['environmentsub'] = 'Ellenőrizzük, hogy rendszerének különféle összetevői megfelelnek-e a rendszerkövetelményeknek';
$string['fail'] = 'Hiba';
$string['fileuploads'] = 'Állományok feltöltése';
$string['fileuploadserror'] = 'Bekapcsolva kell lennie';
$string['fileuploadshelp'] = '<p>Szerverén az állományok feltöltése feltehetőleg ki van kapcsolva.</p>
<p>A Moodle ettől még telepíthető, de nem fog tudni kurzusállományokat vagy új felhasználói profilokat feltölteni.</p>
<p>Állományok feltöltésének bekapcsolásához Önnek (vagy rendszeradminisztrátorának) a rendszer fő php.ini nevű állományában a 
<b>file_uploads</b> beállítást \'1\'-re kell módosítania.</p>';
$string['gdversion'] = 'GD-verzió';
$string['gdversionerror'] = 'Képek feldolgozásához és készítéséhez a GD-könyvtárnak léteznie kell.';
$string['gdversionhelp'] = '<p>Feltehetőleg szerverén nincs telepítve a GD.</p>
<p>A GD a PHP számára szükséges könyvtár, mellyel a Moodle képeket (például felhasználói ikonokat) tud feldolgozni és újakat tud készíteni (például naplódiagramokat). A Moodle működik GD nélkül is - csak ezek a lehetőség nem lesznek az Ön számára elérhetők.</p>
<p>A GD Unix alatti PHP-hez való hozzáadásához a PHP-t fordítsa a --with-gd paraméterrel.</p>
<p>Windows alatt szerkesztheti a php.ini-t: el kell távolítani a megjegyzésjelet a php_gd2.dll-re hivatkozó sor elejéről.</p>';
$string['globalsquotes'] = 'Globális változók nem biztonságos kezelése';
$string['globalsquoteserror'] = 'Javítsa ki a PHP beállításait: kapcsolja ki a disable register_globals és/vagy az enable magic_quotes_gpc opciókat';
$string['globalsquoteshelp'] = '<p>Nem ajánlott egyszerre kikapcsolni a Magic Quotes GPC-t és bekapcsolni a Register Globals-t.</p>

<p>Az ajánlott beállítás <b>magic_quotes_gpc = On</b> és <b>register_globals = Off</b> a php.ini-ben.</p>

<p>Ha nem tudja szerkeszteni a php.ini állományt, esetleg megpróbálhatja az alábbi sort beszúrni a Moodle-könyvtárban egy .htaccess állományba:
   <blockquote>php_value magic_quotes_gpc On</blockquote>
   <blockquote>php_value register_globals Off</blockquote>
</p>   
   ';
$string['installation'] = 'Telepítés';
$string['langdownloaderror'] = 'A(z) \"$a\" nyelv nincs telepítve. A telepítés angol nyelven folytatódik. ';
$string['langdownloadok'] = 'A(z) \"$a\" nyelv telepítése sikerült. A telepítés ezen a nyelven folytatódik.';
$string['magicquotesruntime'] = 'Futásidejű Magic Quotes';
$string['magicquotesruntimeerror'] = 'Kikapcsolva kell lennie';
$string['magicquotesruntimehelp'] = '<p>A futásidejű Magic Quotes-nak kikapcsolva kell lennie a Moodle megfelelő működéséhez.</p>

<p>Alaphelyzetben ez ki van kapcsolva ... lásd a <b>magic_quotes_runtime</b> beállítást a php.ini fájlban.</p>

<p>Ha nem éri el a php.ini állományát, próbálja meg beszúrni a következő sort egy .htaccess elnevezésű állományba a Moodle könyvtárba:
</p><blockquote>php_value magic_quotes_runtime Off</blockquote>';
$string['memorylimit'] = 'Memóriakorlát';
$string['memorylimiterror'] = 'A PHP memóriakorlátja túl alacsonyra van állítva... ez a későbbiekben gondot okozhat.';
$string['memorylimithelp'] = '<p>Szerverén a PHP memóriakorlátja jelenleg $a.</p>
<p>Ez a Moodle számára a későbbiekben gondot okozhat, különösen akkor, ha sok modulja és/vagy sok felhasználója van bekapcsolva.</p>
<p>Ha lehet, állítsa be a PHP magasabb korláttal, pl. 40M-tal. Többféleképpen próbálkozhat:</p>
<ol>
<li>Ha lehet, fordítsa újra a PHP-t <i>--enable-memory-limit</i>-tel. Így a Moodle maga állíthatja be a memóriakorlátot.</li>
<li>Ha elérhető a php.ini állomány, módosítsa a <b>memory_limit</b> 
beállítást pl. 40M-ra. Ha nem éri el az állományt, kérje meg a rendszeradminisztrátort a módosítás elvégzésére.</li>
<li>Egyes PHP-szervereken létrehozhat egy  .htaccess állományt a Moodle-könyvtárban az alábbi sorral:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Vannak szerverek, ahol ez <b>az összes</b> PHP-oldal működését megakadályozza  
(az oldalak hibát jeleznek), ezért el kell távolítania a .htaccess állományt.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a MySQL kiterjesztéshez, így nem tud ele kommunikálni. Ellenőrizze a php.ini fájlt vagy fordítsa újra a PHP-t.';
$string['mssql'] = "SQL*Server (mssql)";
$string['mssql_n'] = "SQL*Server UTF-8 támogatással (mssql_n)";
$string['mssqlextensionisnotpresentinphp'] = "A PHP nincs megfelelően beállítva az MSSQL-bővítéshez, egy nem tud kommunikálni az SQL*Serverrel.  Ellenőrizze a php.ini állományt vagy fordítsa le újra a PHP-t.";
$string['mysql'] = "MySQL (mysql)";
$string['oci8po'] = "Oracle (oci8po)";
$string['ociextensionisnotpresentinphp'] = "A PHP nincs megfelelően beállítva az OCI8 bővítéshez, egy nem tud kommunikálni az Oracle-lal. Ellenőrizze a php.ini állományt vagy fordítsa le újra a PHP-t.";
$string['odbc_mssql'] = "SQL*Server over ODBC (odbc_mssql)";
$string['odbcextensionisnotpresentinphp'] = "A PHP nincs megfelelően beállítva az ODBC-bővítéshez, egy nem tud kommunikálni az SQL*Serverrel.  Ellenőrizze a php.ini állományt vagy fordítsa le újra a PHP-t.";
$string['pgsqlextensionisnotpresentinphp'] = "A PHP nincs megfelelően beállítva az PGSQL-bővítéshez, egy nem tud kommunikálni a PostgreSQL-lel.  Ellenőrizze a php.ini állományt vagy fordítsa le újra a PHP-t.";
$string['postgres7'] = "PostgreSQL (postgres7)";
$string['pass'] = 'Rendben';
$string['phpversion'] = 'PHP-verzió';
$string['phpversionerror'] = 'A PHP-verzió legalább 4.1.0 legyen';
$string['phpversionhelp'] = '<p>A Moodle használatához legalább PHP 4.1.0 verziója szükséges.</p>
<p>Az Ön által használt verzió $a</p>
<p>Frissítse a PHP-verziót vagy térjen át újabb PHP-verziót működtető gazdagépre!</p>';
$string['safemode'] = 'Biztonságos mód';
$string['safemodeerror'] = 'A Moodle bekapcsolt biztonságos mód esetén akadályba ütközhet';
$string['safemodehelp'] = '<p>A Moodle bekapcsolt biztonságos mód esetén egy sor problémába ütközhet, mindenekelőtt feltehetőleg nem tud majd új állományokat létrehozni.</p>
<p>A biztonságos módot általában túlzottan pánikoló webes gazdák kapcsolják be, így valószínűleg egy másik gazdagépet kell keresnie a Moodle számára.</p>
<p>Ha kívánja, folytathatja a telepítést, de számítson a későbbiekben néhány hibára.</p>';
$string['sessionautostart'] = 'Folyamat automatikus kezdése';
$string['sessionautostarterror'] = 'Ezt ki kell kapcsolni';
$string['sessionautostarthelp'] = '<p>A Moodle-nak folyamattámogatásra van szüksége, nélküle nem működik.</p>
<p>A folyamatok a php.ini állományban kapcsolhatók be, lásd a session.auto_start paramétert.</p>';
$string['skipdbencodingtest'] = 'Az adatbázis-kódolás ellenőrzésének kihagyása';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Azért látja ezt az oldalt, mert sikeresen telepítette és futtatja a(z) <strong>$a->packname $a->packversion</strong> csomagot számítógépén. Gratulálunk!';
$string['welcomep30'] = 'A(z) <strong>$a->installername</strong> tartalmazza azokat az alkalmazásokat, amelyekkel a <strong>Moodle</strong> számára kialakítható a működési környezet, azaz:';
$string['welcomep40'] = 'A csomag tartalmazza a <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>-t is.';
$string['welcomep50'] = 'A csomagban lévő alkalmazások használatára a vonatkozó engedélyek érvényesek. A teljes <strong>$a->installername</strong> csomag
<a href=\"http://www.opensource.org/docs/definition_plain.html\">nyílt forráskódú</a> és közreadása a <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> licenc alapján történik.';
$string['welcomep60'] = 'A következő oldalak segítségével számítógépén egyszerűen telepítheti és beállíthatja a <strong>Moodle</strong>-t. Elfogadhatja az alapbeállításokat, de módosíthatja is őket igényeinek megfelelően.';
$string['welcomep70'] = 'Kattintson az alábbi \"Tovább\" gombra és folytassa a <strong>Moodle</strong> telepítését.';
$string['wwwroot'] = 'Webcím';
$string['wwwrooterror'] = 'A webcím nem érvényes - a Moodle mostani telepítése nincs a megadott címen. Az alábbi érték visszaállt.';

?>
