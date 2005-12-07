<?PHP // $Id$ 
      // install.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2005010100)


$string['admindirerror'] = 'A megadott adminisztrátor-könyvtár hibás';
$string['admindirname'] = 'Adminisztrátor-könyvtár';
$string['admindirsetting'] = 'Nagyon kevés kiszolgálónál használatos a /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Sajnos ez ütközik a Moodle admin-oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b><br /> <br />
Ezzel az adminisztrátori ugrópontok a Moodle-ban rendbe tehetők.';
$string['caution'] = 'Vigyázat';
$string['chooselanguage'] = 'Válasszon nyelvet';
$string['compatibilitysettings'] = 'PHP-beállításainak ellenőrzése ...';
$string['configfilenotwritten'] = 'A telepítő kóddal nem lehetett a megadott beállításaival létrehozni a config.php állományt, feltehetőleg azért, mert a Moodle könyvtára nem írható. Az alábbi kódot átmásolhatja a Moodle gyökérkönyvtárába egy config.php nevű állományba.';
$string['configfilewritten'] = 'a config.php létrehozása sikerült';
$string['configurationcomplete'] = 'Beállítás kész';
$string['database'] = 'Adatbázis';
$string['databasesettings'] = 'Most be kell állítania azt az adatbázist, ahol Moodle-adatainak többségét tárolni fogja. Az adatbázisnak már léteznie kell, a hozzá tartozó azonosítóval és jelszóval együtt.<br />
<br /> <br />
<b>Típus:</b> mysql vagy postgres7<br />
<b>Gazdagép:</b> pl. localhost vagy db.isp.com<br />
<b>Név:</b>az adatbázis neve, pl. moodle<br />
<b>Felhasználó:</b>az Ön adatbázishoz használt azonosítója<br />
<b>Jelszó:</b> az Ön adatbázishoz használt jelszava<br />
<b>Táblázat előtagja:</b> opcionális előtag az összes táblanévhez	';
$string['databasecreationsettings'] = '    Most a Moodle adatainak tárolására szánt adatbázis beállításait kell elvégeznie.  
Ezt az adatbázist a Moodle4Windows telepítő automatikusan beállítja az alábbiak szerint.<br />
    <br /> <br />
       <b>Típus:</b> a telepítő \"mysql\"-re állítja be<br />
       <b>Gazdagép:</b> a telepítő \"localhost\"-ra állítja<br />
       <b>Név:</b> az adatbázis neve, pl. moodle<br />
       <b>Felhasználó:</b> a telepítő  \"root\"-ra állítja<br />
       <strong>Jelszó:</strong> az Ön jelszava az adatbázishoz<br />
       <b>Táblázat előtagja:</b> opcionális előtag az összes táblázatnévhez';
$string['dataroot'] = 'Adatkönyvtár';
$string['datarooterror'] = 'A megadott \'Adatkönyvtár\' nem létezik vagy nem sikerült létrehozni. Módosítsa az útvonalat vagy hozza létre a könyvtárat.';
$string['dbconnectionerror'] = 'Nem sikerült a megadott adatbázishoz csatlakozni. Ellenőrizze adatbázisának beállításait.';
$string['dbcreationerror'] = 'Hiba az adatbázis létrehozása közben. A megadott beállításokkal nem lehetett létrehozni az adatbázis nevét.';
$string['dbhost'] = 'Gazdagép szervere';
$string['dbpass'] = 'Jelszó';
$string['dbprefix'] = 'Táblázat előtagja';
$string['dbtype'] = 'Típus';
$string['directorysettings'] = '<p>Hagyja jóvá a Moodle telepítésének helyét.</p>

<p><b>Webcím:</b>
Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több URL-ről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p>

<p><b>Moodle-könyvtár:</b>
Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p>

<p><b>Adatkönyvtár:</b>
Egy helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában \'nobody\' vagy \'apache\') ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az Internetről közveltenül elérhető.</p>';
$string['dirroot'] = 'Moodle-könyvtár';
$string['dirrooterror'] = 'A \'Moodle-könyvtár\' beállítása feltehetőleg hibás - nem található alatta a Moodle telepítése. Az alábbi értéket visszaállítottuk.';
$string['download'] = 'Letöltés';
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
<p>A GD a PHP számára szükséges könyvtár, mellyel a Moodle képeket (például flehasználói ikonokat) tud feldolgozni és újakat tud készíteni (például naplódiagramokat). A Moodle működik GD nélkül is - csak ezek a lehetőség nem lesznek az Ön számára elérhetők.</p>
<p>A GD Unix alatti PHP-hez való hozzáadásához a PHP-t fordítsa a --with-gd paraméterrel.</p>
<p>Windows alatt szerkesztheti a php.ini-t: el kell távolítani a megjegyzésjelet a libgd.dll-re hivatkozó sor elejéről.</p>';
$string['installation'] = 'Telepítés';
$string['magicquotesruntime'] = 'Futásidejű Magic Quotes';
$string['magicquotesruntimeerror'] = 'Kikapcsolva kell lennie';
$string['magicquotesruntimehelp'] = '<p>A futásidejű Magic Quotes-nak kikapcsolva kell lennie runtime should be turned off for Moodle to function properly.</p>

<p>Normally it is off by default ... see the setting <b>magic_quotes_runtime</b> in your php.ini file.</p>

<p>If you don\'t have access to your php.ini, you might be able to place the following line in a file 
called .htaccess within your Moodle directory:
</p><blockquote>php_value magic_quotes_runtime Off</blockquote>
';
$string['memorylimit'] = 'Memóriakorlát';
$string['memorylimiterror'] = 'A PHP memóriakorlátja túl alacsonyra van állítva... ez a későbbiekben gondot okozhat.';
$string['memorylimithelp'] = '<p>Szerverén a PHP memóriakorlátja jelenleg $a.</p>
<p>Ez a Moodle számára a későbbiekben gondot okozhat, különösen akkor, ha sok modulja és/vagy sok felhasználója van bekapcsolva.</p>
<p>Ha lehet, állítsa be a PHP magasabb korláttal, pl. 16M-tal. Többféleképpen próbálkozhat:</p>
<ol>
<li>Ha lehet, fordítsa újra a PHP-t <i>--enable-memory-limit</i>-tel. Így a Moodle maga állíthatja be a memóriakorlátot.</li>
<li>Ha elérhető a php.ini állomány, módosítsa a <b>memory_limit</b> 
beállítást pl. 16M-ra. Ha nem éri el az állományt, kérje meg a rendszeradminisztrátort a módosítás elvégzésére.</li>
<li>Egyes PHP-szervereken létrehozhat egy  .htaccess állományt a Moodle-könyvtárban az alábbi sorral:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Vannak szerverek, ahol ez <b>az összes</b> PHP-oldal működését megakadályozza  
(az oldalak hibát jeleznek), ezért el kell távolítania a .htaccess állományt.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a has not been properly configured with the MySQL extension so that it can communicate with MySQL. Please check your php.ini file or recompile PHP.';
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
$string['wwwroot'] = 'Webcím';
$string['wwwrooterror'] = 'A webcím nem érvényes - a Moodle mostani telepítése nincs a megadott címen.';

?>
