<?PHP // $Id$ 
      // install.php - created with Moodle 1.5.2 + (2005060222)


$string['admindirerror'] = 'Ylläpitohakemisto on määritetty väärin';
$string['admindirname'] = 'Ylläpitohakemisto';
$string['admindirsetting'] = 'Jotkut webpalvelut käyttävät /admin hakemistoa ylläpitotarkoituksiin tms. Valitettavasti tämä on ristiriidassa Moodlen ylläpitosivujen normaalin paikan kanssa. Voit korjata tämän nimeämällä asennuksesi ylläpitohakemiston uudelleen, ja laittamalla uuden nimen tähän. Esimerkiksi: 
<br /> <br /><b>moodleadmin</b><br /> <br />
Tämä korjaa ylläpito linkit Moodlessa.';
$string['caution'] = 'Varoitus';
$string['chooselanguage'] = 'Valitse kieli';
$string['compatibilitysettings'] = 'Tarkistetaan PHP:n asetukset';
$string['configfilenotwritten'] = 'Asennus ei pystynyt luomaan automaattisesti config.php tiedostoa, joka olisi sisältänyt valitsemasi asetukset, todennäköisesti koska Moodlen hakemisto on kirjoitussuojattu. Voit manuaalisesti kopioida seuraavan koodin tiedostoon nimeltä config.php Moodlen päähakemiston sisällä.';
$string['configfilewritten'] = 'config.php on luotu.';
$string['configurationcomplete'] = 'Asetukset suoritettu';
$string['database'] = 'Tietokanta';
$string['databasecreationsettings'] = 'Nyt sinun täytyy asettaa assetukset tietokannalle, johon suurin osa Moodlen tiedoista tallennetaan. Moodle4Windows-asennusohjelma luo tietokannan automaattisesti käyttäen asetuksia, jotka on kerrottu alla.<br />
 <br /> <br />
<b>Type:</b> asennusohjelma asettaa asetusarvoksi \"mysql\"<br />
<b>Host:</b> asennusohjelma asettaa asetusarvoksi \"localhost\"<br />
<b>Name:</b> tietokannan nimi, esim. moodle<br />
<b>User:</b>asennusohjelma asettaa oletuskäyttäjäksi \"root\"-käyttäjän <br />
<b>Password:</b> salasanasi tietokantaan<br />
<b>Tables Prefix:</b> valinnanvarainen etuliite kaikille taulukoille tietokannassasi';
$string['databasesettings'] = 'Nyt sinun täytyy valita tietokanta missä suurin osa Moodlen tiedoista säilytetään. Tämän tietokannan täytyy jo valmiiksi olla luotu, kuten myös käyttäjänimen ja salasanan, joilla siihen päästään. .<br />
<br /> <br />
<b>Tyyppi:</b> mysql or postgres7<br />
<b>Isäntä:</b> localhost or db.isp.com<br />
<b>Nimi:</b> tietokannan nimi, eg moodle<br />
<b>Käyttäjä:</b> tietokantasi käyttäjänimi<br />
<b>Salasana:</b> tietokantasi salasana<br />
<b>Taulukon etuliite:</b> omavalintainen etuliite jota käytetään kaikissa taulukoissa ';
$string['dataroot'] = 'Datahakemisto';
$string['datarooterror'] = '\"Datahakemistoa\", jonka määrittelit, ei voitu löytää, eikä luoda. Joko korjaa polku, tai luo hakemisto manuaalisesti.';
$string['dbconnectionerror'] = 'Emme pystyneet kytkeytymään tiedokantaan, jonka määrittelit. Tarkista tietokanta asetuksesi.';
$string['dbcreationerror'] = 'Tietokannan luomisvirhe. Ei pystytty luomaan annettua tietokannan nimeä tarjotuilla asetuksilla.';
$string['dbhost'] = 'Palvelin';
$string['dbpass'] = 'Salasana';
$string['dbprefix'] = 'Taulukon etumerkki';
$string['dbtype'] = 'Tyyppi';
$string['directorysettings'] = '<p>Varmista tämän Moodle asennuksen paikka.</p>

<p><b>Web-osoite:</b>
Täsmennä koko Web osoite, johon Moodlella on pääsy.
Jos websivustoosi päästään monen URL:n kautta, valitse kaikkein luonnollisin vaihtoehto, se jota oppilaasikin käyttäisivät. Älä sisällytä kenoviivaa.</p>

<p><b>Moodle hakemisto:</b>
Määritä koko hakemistopolku tähän asennukseen. Varmista, että isot/pienet kirjaimet ovat oikein.</p>

<p><b>Data hakemisto:</b>
Tarvitset paikan, jonne Moodle voi tallentaa ladatut tiedostot. Tämän hakemiston pitäisi olla luettavissa ja kirjoitettavissa web palvelin käyttäjän taholta (usein \"nobody\" tai \"apache\"), mutta sen ei pitäisi olla käytettävissä suoraan web:in kautta.</p>';
$string['dirroot'] = 'Moodle hakemisto';
$string['dirrooterror'] = '\"Moodle hakemisto\" asetus näyttäisi olevan väärä-emme voi löytää Moodle asennusta sieltä. Arvo alapuolella on nollattu.';
$string['download'] = 'Lataus';
$string['fail'] = 'Virhe';
$string['fileuploads'] = 'Tiedostojen lähettäminen';
$string['fileuploadserror'] = 'Tämän pitäisi olla päällä';
$string['fileuploadshelp'] = '<p>Tiedostojen lähettäminen ei näyttäisi olevan käytössä palvelimellasi.</p>

<p>Moodle voidaan silti asentaa, mutta ilman tätä kykyä, et pysty lataamaan kurssitiedostoja tai uuden käyttäjän profiili kuvia.</p>

<p>Mahdollistaaksesi tiedostojen latauksen sinun (tai systeemisi ylläpitäjän) täytyy muokata varusohjelmien php.ini tiedosto systeemiisi ja muuttaa asetus <b>file_uploads</b> to \'1\'.</p>';
$string['gdversion'] = 'GD versio';
$string['gdversionerror'] = 'GD kirjaston pitäisi olla päällä, että voidaan käsitellä ja luoda kuvia.';
$string['gdversionhelp'] = '<p>Palvelimellasi ei näyttäisi olevan GD:tä asennettuna.</p>

<p>GD on kirjasto jonka PHP vaatii voidakseen antaa Moodlen käsitellä kuvia (esimerkiksi käyttäjäprofiili kuvakkeita) ja luoda uusia kuvia (esimerkiksi kirjauskuvioita) Moodle toimii ilman GD:täkin, mutta silloin nämä toiminnot eivät ole saatavilla.</p>

<p>Lisätäksesi GD:n PHP:hen Unix:in alaisena, käännä PHP käyttäen --with-gd parametria.</p>

<p>Windowsin alaisena voit yleensä muokata php.ini:ä ja olla kommentoimatta rivivertailua libgd.dll.</p>';
$string['installation'] = 'asennus';
$string['magicquotesruntime'] = 'Magic quotes ajoaika';
$string['magicquotesruntimeerror'] = 'Tämän pitäisi olla poissa päältä';
$string['magicquotesruntimehelp'] = '<p>Magic quotes ajoajan pitäisi olla pois päältä, jotta Moodle voi toimia kunnolla.</p>

<p>Normaalisti se on pois päältä oletuksena... Katso asetukset
<b>magic_quotes_runtime</b> in your php.ini file.</p>

<p>Jos sinulla ei ole pääsyä php.ini:isi, saatat pystyä asettamaan seuraavan rivin tiedostoon nimeltä .htaccess Moodlen hakemiston sisällä:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p> ';
$string['memorylimit'] = 'Muistiraja';
$string['memorylimiterror'] = 'PHP muistiraja on asetettu aika alas... Se saattaa aiheuttaa ongelmia myöhemmin.';
$string['memorylimithelp'] = '<p>PHP muistiraja palvelimellesi on tällä hetkellä asetettu $a:han.</p>

<p>Tämä saattaa aiheuttaa Moodlelle muistiongelmia myöhemmin, varsinkin jos sinulla on paljon mahdollisia moduuleita ja/tai paljon käyttäjiä.</p>

<p>Suosittelemme, että valitset asetuksiksi PHP:n korkeimmalla mahdollisella raja-arvolla, esimerkiksi 16M.
On olemassa monia tapoja joilla voit yrittää tehdä tämän:</p>
<ol>
<li>Jos pystyt, uudelleenkäännä PHP <i>--enable-memory-limit</i>. :llä.
Tämä sallii Moodlen asettaa muistirajan itse.</li>
<li>Jos sinulla on pääsy php.ini tiedostoosi, voit muuttaa <b>memory_limit</b> setuksen siellä johonkin kuten 16M. Jos sinulla ei ole pääsyoikeutta, voit kenties pyytää ylläpitäjää tekemään tämän puolestasi.</li>
<li>Joillain PHP palvelimilla voit luoda a .htaccess tiedoston Moodle hakemistossa, sisältäen tämän rivin:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Kuitenkin, joillain palvelimilla tämä estää  <b>kaikkia</b> PHP sivuja toimimasta (näet virheet, kun katsot sivuja), joten sinun täytyy poistaa .htaccess tiedosto.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP:tä ei ole kunnolla valittu asetukseksi MySQL laajennuksen kanssa, jotta se voisi kommunikoida MySQL:n kanssa. Tarkista php.ini tiedostosi tai käännä PHP uudelleen.';
$string['pass'] = 'Tarkastettu';
$string['phpversion'] = 'PHP versio';
$string['phpversionerror'] = 'PHP version täytyy olla vähintään 4.1.0';
$string['phpversionhelp'] = '<p>Moodle vaatii vähintään PHP version 4.1.0.</p>
<p>Käytät parhaillaan versiota $a</p>
<p>Sinun täytyy päivittää PHP tai siirtää isäntä uudemman PHP version kanssa!</p>';
$string['safemode'] = 'Safe mode';
$string['safemodeerror'] = 'Moodlella saattaa olla ongelmia PHP:n  Safe Moden ollessa päällä';
$string['safemodehelp'] = '<p>Moodlella saattaa olla lukuisia ongelmia Safe Moden ollessa päällä, joista vähäisin ei ole se, ettei se todennäköisesti pysty luomaan uusia tiedostoja.</p> 
<p>Turvatila on yleensä aktivoinut paranoidinen web-palvelun pitäjä, joten sinun ehkä täytyy vaihtaa web-isännöinti yhtiötä Moodleasi varten.</p>

<p>Voit yrittää jatkaa asennusta, mutta varaudu ongelmiin myöhemmin.</p>';
$string['sessionautostart'] = 'Istunnon automaattinen aloitus';
$string['sessionautostarterror'] = 'Tämän pitäisi olla pois päältä';
$string['sessionautostarthelp'] = '<p>Moodle vaatii istuntotukea, eikä toimi ilman sitä.</p>

<p>istunto voidaan mahdollistaa php.ini tiedostossa... Etsi istuntoa varten.auto_start parameter.</p>';
$string['wwwroot'] = 'Web-osoite';
$string['wwwrooterror'] = 'Web-osoite ei näyttäisi olevan voimassa- tämä Moodle asennus ei näyttäisi olevan siellä.';

?>
