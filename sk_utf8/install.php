<?PHP // $Id$ 
      // install.php - created with Moodle 1.6 development (2005052400)


$string['admindirerror'] = 'Adresár pre správu (admin) nie je určený správne';
$string['admindirname'] = 'Adresár pre správu (admin)';
$string['admindirsetting'] = 'Niektorí poskytovatelia web priestoru používajú adresár /admin pre prístup ku kontrolnému panelu, prípadne ku podobným funkciám. To bohužiaľ nie je v súlade so štandardným umiestnením adresáru pre správu v Moodle. Tento konflikt je možné vyriešiť premenovaním adresáru pre správu vo Vašej inštalácii. Vložte sem nový názov, napr.<br /><br />
<b>moodleadmin</b><br /><br />
Tým se opravia odkazy na správu Moodle.';
$string['caution'] = 'Varovanie';
$string['chooselanguage'] = 'Vyberte jazyk';
$string['compatibilitysettings'] = 'Kontrola nastavení vášho PHP...';
$string['configfilenotwritten'] = 'Inštalačný skript nebol schopný automaticky vytvoriť  config.php súbor, obsahujúci Vaše zvolené nastavenia, pravdepodobne preto, že adresár Moodle nie je zapisovateľný. Môžete ručne skopírovať nasledovný kód do súboru s názvom config.php v rámci  koreňového adresára Moodle.';
$string['configfilewritten'] = 'súbor config.php bol úspešne vytvorený';
$string['configurationcomplete'] = 'Konfigurácia ukončená';
$string['database'] = 'Databáza';
$string['databasesettings'] = 'Teraz potrebujete nastaviť databázu, kde bude uchovávaná väčšina údajov Moodle. Táto databáza však musí byť predtým vytvorená a tiež musí byť vytvorené používateľské meno a prístupové heslo.<br /><br /><br />
<b>Typ:</b> mysql alebo postgres7<br />
<b>Host:</b> napr. localhost alebo db.isp.com<br />
<b>Meno:</b> meno databázy, napr. moodle<br />
<b>Používateľ:</b> používateľské meno Vašej databázy<br />
<b>Heslo:</b> heslo Vašej databázy<br />
<b>Predpona tabuliek:</b> nepovinná predpona pre všetky mená tabuliek';
$string['dataroot'] = 'Adresár pre údaje';
$string['datarooterror'] = '\'Adresár pre údaje\', ktorý ste zadali, nemôže byť nájdený alebo vytvorený. Upravte buď cestu alebo vytvorte ten adresár ručne.';
$string['dbconnectionerror'] = 'Nemohli sme sa pripojiť k vami zadanej databáze. Prosím skontrolujte nastavenia Vašej databázy.';
$string['dbcreationerror'] = 'Chyba pri vytváraní databázy. Nebolo možné vytvoriť databázu so zadaným menom a jej nastaveniami';
$string['dbhost'] = 'Hosťovský server';
$string['dbpass'] = 'Heslo';
$string['dbprefix'] = 'Predpona tabuliek';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p>Prosím, potvrďte umiestnenie inštalácie Moodle.</p>

<p><b>Web adresa:</b> Špecifikujte celú web adresu, kde bude Moodle umiestnený. Ak sa na túto adresu pristupuje z viacerých url adries, potom vyberte tú, ktorú budú používať Vaši študenti. Na konci nepoužívajte lomítko.</p>

<p><b>Adresár Moodle:</b> Špecifikujte celú cestu k adresáru a tejto inštalácii. Ubezpečte sa, že ste korektne použili veľké a malé písmená.</p>

<p><b>Adresár pre údaje:</b> Potrebujete miesto, kde Moodle bude ukladať prenášané súbory. Tento adresár by mal byť používateľovi webového servera prístupný aj na čítanie, aj na ZAPISOVANIE (zvyčajne \'nobody\' alebo \'apache\'), ale nemalo by sa dať k nemu pristupovať priamo z webu.</p>';
$string['dirroot'] = 'Adresár Moodle';
$string['dirrooterror'] = 'Nastavenia v \'Adresári Moodle\' sú nesprávne - nemôžeme tu nájsť inštaláciu Moodle. Hodnota dole bola vynulovaná.';
$string['download'] = 'Stiahnuť';
$string['fail'] = 'Neúspešné';
$string['fileuploads'] = 'prenesené súbory';
$string['fileuploadserror'] = 'Toto by malo byť zapnuté';
$string['fileuploadshelp'] = '<p>Zdá sa, že na Vašom serveri nie je aktivovaný prenos súborov.</p>

<p>Moodle môže byť aj napriek tomu nainštalovaný, ale bez tejto možnosti, nebudete schopní preniesť súbory kurzu, alebo obrázky v nových používateľských profiloch.</p>

<p>Na aktivovanie prenosu súborov, Vy (alebo Váš systémový administrátor) budete musieť upraviť main php.ini súbor v systéme a zmeniť nastavenie pre <b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'Verzia knižnice GD';
$string['gdversionerror'] = 'Knižnica GD by mala existovať na spracovávanie a vytváranie obrázkov';
$string['gdversionhelp'] = '<p>Na Vašom serveri zrejme nie je nainštalovaná GD knižnica.</p>

<p>GD je knižnica, ktorú si vyžaduje PHP, aby mohlo Moodle povoliť spracovávať obrázky (napr. ikony v používateľských profiloch) a vytvárať nové obrázky (napr. grafy z prihlásení). Moodle bude stále pracovať bez GD - tieto možnosti budú dostupné len Vám.</p>

<p>Keď chcete pridať GD do PHP pod Unixom, vytvorte PHP použitím --with-gd parameter.</p>

<p>Pod Windows môžete upraviť php.ini a odkomentovať riadok obsahujúci libgd.dll.</p>';
$string['installation'] = 'Inštalácia';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Toto by malo byť vypnuté';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime by malo byť vypnuté, aby Moodle fungoval tak, ako má.</p>

<p>Zvyčajne je voľba štandardne vypnutá ... pozri nastavenia <b>magic_quotes_runtime</b> vo Vašom php.ini súbore.</p>

<p>Ak nemáte prístup k súboru php.ini, mali by ste nasledovný riadok do súboru s názvom .htaccess v rámci adresára Moodle: 
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p> ';
$string['memorylimit'] = 'Limit pamäte';
$string['memorylimiterror'] = 'PHP limit pamäte je nastavený na minimum...S týmto môžete mať neskôr problémy.';
$string['memorylimithelp'] = '<p>PHP limit pamäte pre Váš server je momentálne nastavený na $a.</p>

<p>Toto môže neskôr spôsobiť problémy v Moodle, najmä ak máte veľa modulov a/alebo veľa používateľov.</p>

<p>Odporúčame Vám, aby ste nastavili PHP s vyšším limitom pamäte, ak je to možné, napr. 16M. Na to existuje veľa spôsobov, ktoré môžete vyskúšať:</p>
<ol>
<li>Ak je to možné, znovu vytvorte PHP s <i>--enable-memory-limit</i>. Toto umožní Moodle samonastavenie limitu pamäte.</li>
<li>Ak máte prístup k Vášmu php.ini súboru, môžete zmeniť <b>memory_limit</b> nastavenie, napr. na 16M. Ak nemáte prístup k súboru, môžete sa na to spýtať Vášho administrátora.</li>
Na niektorých PHP serveroch, si môžete vytvoriť súbor .htaccess v Adresári Moodle, ktorý bude obsahovať tento riadok: <p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Avšak, na niektorých serveroch bude toto brániť <b>všetkým</b> PHP stránkam v práci (budete vidieť chyby, keď sa pozriete na stránky), takže budete musieť odstrániť súbor .htaccess.</p></li>
</ol> 	';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nebolo správne nakonfigurované s MySQL rozšírením a tak nemôže komunikovať s MySQL. Prosím, skontrolujte si Váš php.ini súbor alebo znovu vytvorte PHP.';
$string['pass'] = 'Prejsť';
$string['phpversion'] = 'Verzia PHP';
$string['phpversionerror'] = 'Verzia PHP musí byť aspoň  4.1.0';
$string['phpversionhelp'] = '<p>Moodle si vyžaduje verziu PHP aspoň  4.1.0.</p>
<p>Vy máte momentálne nainštalovanú túto verziu $a</p>
<p>Musíte obnoviť PHP alebo presunúť na hostiteľský počítač s novou verziou PHP!</p>';
$string['safemode'] = 'Bezpečný mód';
$string['safemodeerror'] = 'Moodle môže mať problémy, ak je zapnutý bezpečný mód';
$string['safemodehelp'] = '<p>Moodle môže mať viacero problémov, ak je zapnutý bezpečný mód, pravdepodobne nedovolí vytvárať nové súbory.</p>

<p>Bezpečný mód je zvyčajne povolený verejnými poskytovateľmi webového priestoru, takže by ste si mali nájsť nového poskytovateľa webového priestoru pre stránku Moodle.</p>';
$string['sessionautostart'] = 'Autoštart sekcie';
$string['sessionautostarterror'] = 'Toto by malo byť vypnuté';
$string['sessionautostarthelp'] = '<p>Moodle vyžaduje podporu sekcie a nebude bez nej fungovať.</p>';
$string['wwwroot'] = 'Web adresa';
$string['wwwrooterror'] = 'Táto web adresa pravdepodobne nie je platná - táto inštalácia Moodle tu pravdepodobne nie je.';

?>
