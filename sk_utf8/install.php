<?PHP // $Id$ 
      // install.php - created with Moodle 1.6.2+ (2006050521)


$string['admindirerror'] = 'Adresár pre správu (admin) nie je určený správne';
$string['admindirname'] = 'Adresár pre správu (admin)';
$string['admindirsetting'] = 'Niektorí poskytovatelia web priestoru používajú adresár /admin pre prístup ku kontrolnému panelu, prípadne ku podobným funkciám. To bohužiaľ nie je v súlade so štandardným umiestnením adresáru pre správu v Moodle. Tento konflikt je možné vyriešiť premenovaním adresáru pre správu vo Vašej inštalácii. Vložte sem nový názov, napr.<br /><br />
<b>moodleadmin</b><br /><br />
Tým sa opravia odkazy na správu Moodle.';
$string['admindirsettinghead'] = 'Nastavovanie adresáre \'admin\'...';
$string['admindirsettingsub'] = 'Na niektorých serveroch je URL adresa /admin vyhradená pre špeciálne účely (napr. pre ovládací panel). Na takých serveroch môže dojsť ku kolízii so štandardným umiestením stránok pre správu Moodle. Ak máte tento problém, premenujte adresár \'admin\' vo vašej inštalácii Moodle a do tohto poľa zadajte jeho nový názov. Príklad: <br /> <br /><b>moodleadmin</b><br /> <br />
Všetky generované odkazy na stránky správy Moodle budú používať tento nový názov.';
$string['caution'] = 'Varovanie';
$string['chooselanguage'] = 'Vyberte jazyk';
$string['chooselanguagehead'] = 'Vyberte jazyk';
$string['chooselanguagesub'] = 'Zvoľte si jazyk PRE INŠTALOVANIE. Jazyk pre stránky Moodle a pre užívateľov budete môcť vybrať neskôr.';
$string['compatibilitysettings'] = 'Kontrola nastavenia vášho PHP...';
$string['compatibilitysettingshead'] = 'Kontrola nastavenia PHP...';
$string['compatibilitysettingssub'] = 'Pre správný beh Moodle by váš server mal vyhovieť vo všetkých nasledujúcích testoch.';
$string['configfilenotwritten'] = 'Inštalačný skript nebol schopný automaticky vytvoriť config.php súbor, obsahujúci Vaše zvolené nastavenia, pravdepodobne preto, že adresár Moodle nie je zapisovateľný. Môžete ručne skopírovať nasledovný kód do súboru s názvom config.php v rámci  koreňového adresára Moodle.';
$string['configfilewritten'] = 'súbor config.php bol úspešne vytvorený';
$string['configurationcomplete'] = 'Konfigurácia ukončená';
$string['configurationcompletehead'] = 'Konfigurácia ukončená';
$string['configurationcompletesub'] = 'Moodle so pokusil uložiť súbor s konfiguráciou do koreňového adresára inštalácie Moodle.';
$string['database'] = 'Databáza';
$string['databasecreationsettings'] = 'Teraz musíte nastaviť pripojenie k databáze, kam si bude Moodle ukladať väčšinu svojích údajov. Táto databáza môže byť vytvorená inštalátorom automaticky podľa následujúceho nastavenia.<br/>
<br /> <br />
<b>Typ:</b> inštalátor nastaví na \"mysql\"<br />
<b>Hostiteľ:</b> inštalátor nastaví na \"localhost\"<br />
<b>Názov:</b> názov databázy, napr. moodle<br />
<b>Užívateľ:</b> inštalátor nastaví na \"root\"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Predpona tabuliek:</b> voliteľná predpona, ktorá sa vloží pred názvy všetkých tabuliek (umožňuje používať jednu databázu pre viac inštalácií Moodle)';
$string['databasecreationsettingshead'] = 'Teraz musíte nastaviť pripojenie k databáze, kam si bude Moodle ukladať väčšinu svojich údajov. Táto databáza môže byť vytvorená inštalátorom automaticky podľa následujúcího nastavenia.';
$string['databasecreationsettingssub'] = '<b>Typ:</b> inštalátor nastaví na \"mysql\"<br />
<b>Hostiteľ:</b> inštalátor nastaví na \"localhost\"<br />
<b>Názov:</b> názov databázy, napr. moodle<br />
<b>Uživatel:</b> inštalátor nastaví na \"root\"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Predpona tabuliek:</b> voliteľná predpona, která sa vloží pred názvy všetkých tabuliek (umožňuje používať jednu databázu pre viac inštalácií Moodle)';
$string['databasesettings'] = 'Teraz potrebujete nastaviť databázu, kde bude uchovávaná väčšina údajov Moodle. Táto databáza však musí byť predtým vytvorená a tiež musí byť vytvorené používateľské meno a prístupové heslo.<br /><br /><br />
<b>Typ:</b> mysql alebo postgres7<br />
<b>Host:</b> napr. localhost alebo db.isp.com<br />
<b>Meno:</b> meno databázy, napr. moodle<br />
<b>Používateľ:</b> používateľské meno Vašej databázy<br />
<b>Heslo:</b> heslo Vašej databázy<br />
<b>Predpona tabuliek:</b> nepovinná predpona pre všetky mená tabuliek';
$string['databasesettingshead'] = 'Teraz potrebujete nastaviť pripojenie k databáze, kam si bude Moodle ukladať väčšinu svojich údajov. Táto databáza už musí byť vytvorená a tiež musí byť vytvorené používateľské meno a prístupové heslo.';
$string['databasesettingssub'] = '<b>Typ:</b> mysql alebo postgres7<br />
<b>Hostiteľ:</b> napr. localhost alebo db.nasaskola.sk<br />
<b>Názov:</b> názov databáze, napr. moodle<br />
<b>Užívateľ:</b> užívateľské meno účtu pre prístup k databáze<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Predpona tabuliek:</b> voliteľná predpona, která sa vloží pred názvy všetkých tabuliek (umožňuje používať jednu databázu pre viac inštalácií Moodle)';
$string['dataroot'] = 'Adresár pre údaje';
$string['datarooterror'] = '\'Adresár pre údaje\', ktorý ste zadali, nemôže byť nájdený alebo vytvorený. Upravte buď cestu alebo vytvorte ten adresár ručne.';
$string['dbconnectionerror'] = 'Nemohli sme sa pripojiť k vami zadanej databáze. Prosím skontrolujte nastavenia Vašej databázy.';
$string['dbcreationerror'] = 'Chyba pri vytváraní databázy. Ale bolo možné vytvoriť databázu so zadaným menom a jej nastaveniami';
$string['dbhost'] = 'Hosťovský server';
$string['dbpass'] = 'Heslo';
$string['dbprefix'] = 'Predpona tabuliek';
$string['dbtype'] = 'Typ';
$string['dbwrongencoding'] = 'Vybraná databáza používa nedoporučené kódovanie $a. Vhodnejšie by bylo používať databázu s kódovaním Unicode (UTF-8). Túto kontrolu môžete preskočiť zaškrtnutím poľa \"Preskočiť test kódovania DB\", môžete však v budúcnosti naraziť na problémy.';
$string['directorysettings'] = '<p>Prosím, potvrďte umiestnenie inštalácie Moodle.</p>

<p><b>Web adresa:</b> Špecifikujte celú web adresu, kde bude Moodle umiestnený. Ak sa na túto adresu pristupuje z viacerých url adries, potom vyberte tú, ktorú budú používať Vaši študenti. Na konci nepoužívajte lomítko.</p>

<p><b>Adresár Moodle:</b> Špecifikujte celú cestu k adresáru a tejto inštalácii. Ubezpečte sa, že ste korektne použili veľké a malé písmená.</p>

<p><b>Adresár pre údaje:</b> Potrebujete miesto, kde Moodle bude ukladať prenášané súbory. Tento adresár by mal byť používaťeľovi webového servera prístupný aj na čítanie, aj na ZAPISOVANIE (zvyčajne \'nobody\' alebo \'apache\'), ale nemalo by sa dať k nemu pristupovať priamo z webu.</p>';
$string['directorysettingshead'] = 'Potvrďte prosím adresy této inštalace Moodle.';
$string['directorysettingssub'] = '<b>Webová adresa</b>:
zadajte úplnu webovú adresu, na ktorej bude Moodle dostupný. Ak sú vaše stránky dostupné na viacerých URL, vyberte z nich tú, ktorú budú vaši študenti používať nejčastejšie. Na konci adresy nepíšte lomítko.
<br />
<br />
<b>Adresár Moodle</b>:
zadajte úplnu cestu k adresáru s touto inštaláciou. Uistite sa, že sú v nej správne uvedené malé/VEĽKÁ písmená.
<br />
<br />
<b>Datový adresár</b>:
potrebujete diskový prestor, kam bude Moodle ukladať nahrané (uploadované) súbory. K tomuto adresári musí mať proces webového serveru právo na čítanie A ZÁPIS (webový server bývá spustený pod užívaľom \'nobody\' alebo \'apache\' alebo podobne). Tento adresár by ale zároveň nemal byť dostupný priamo cez webové rozhranie (môže obsahovať neverejné údaje).';
$string['dirroot'] = 'Adresár Moodle';
$string['dirrooterror'] = 'Nastavenia v \'Adresári Moodle\' sú nesprávne - nemôžeme tu nájsť inštaláciu Moodle. Hodnota nižšie bola vynulovaná.';
$string['download'] = 'Stiahnuť';
$string['downloadlanguagebutton'] = 'Stiahnuť jazykový balíček \"$a\"';
$string['downloadlanguagehead'] = 'Stiahnuť jazykový balíček';
$string['downloadlanguagenotneeded'] = 'V inštalácii je možné pokračovať v jazyku \"$a\".';
$string['downloadlanguagesub'] = 'Teraz máte možnosť si stiahnuť si niektorý z jazykových balíčkov Moodle a pokračovať v tomto jazyku.<br /><br />Ak si práve nemôžete alebo nechcete stiahnuť jazykový balíček, bude inštalačný proces pokračovať v angličtine. Jazykové balíčky si budete môcť stiahnuť aj neskôr po ukončení inštalácie.';
$string['environmenthead'] = 'Kontrola programového prostredia...';
$string['environmentsub'] = 'Teraz sa preveruje, či vybrané komponenty vášho systému splňujú požiadavky inštalácie.';
$string['fail'] = 'Neúspešné';
$string['fileuploads'] = 'prenesené súbory';
$string['fileuploadserror'] = 'Toto by malo byť zapnuté';
$string['fileuploadshelp'] = '<p>Zdá sa, že na Vašom serveri nie je aktivovaný prenos súborov.</p>

<p>Moodle môže byť aj napriek tomu nainštalovaný, ale bez tejto možnosti, nebudete schopní preniesť súbory kurzu, alebo obrázky v nových používateľských prefiloch.</p>

<p>Na aktivovanie prenosu súborov, Vy (alebo Váš systémový administrátor) budete musieť upraviť main php.ini súbor v systéme a zmeniť nastavenie pre <b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'Verzia knižnice GD';
$string['gdversionerror'] = 'Knižnica GD by mala existovať na spracovávanie a vytváranie obrázkov';
$string['gdversionhelp'] = '<p>Na Vašom serveri zrejme nie je nainštalovaná GD knižnica.</p>

<p>GD je knižnica, ktorú si vyžaduje PHP, aby mohlo Moodle povoliť spracovávať obrázky (napr. ikony v používateľských profiloch) a vytvárať nové obrázky (napr. grafy z prihlásení). Moodle bude stále pracovať bez GD - tieto možnosti budú dostupné len Vám.</p>

<p>Keď chcete pridať GD do PHP pod Unixom, vytvorte PHP použitím --with-gd parameter.</p>

<p>Pod Windows môžete upraviť php.ini a odkomentovať riadok obsahujúci libgd.dll.</p>';
$string['globalsquotes'] = 'Nie bezpečné používanie globálnych premenných';
$string['globalsquoteserror'] = 'Opravte svoje nastavenia PHP: vypnite register_globals a/alebo zapnite magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Kombinácia vypnutých Magic Quotes GPC a zapnutých Register Globals nie je doporučená.</p>

<p>Odporúčané nastavenie je<b>magic_quotes_gpc = On</b> a <b>register_globals = Off</b> vo vašom php.ini</p>

<p>Ak nemáte prístup k vašemu php.ini, skúste pridať nasledovný riadok do súboru .htaccess vo vašom  Moodle adresári:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Inštalácia';
$string['langdownloaderror'] = 'Bohužiaľ, jazyk \"$a\" sa nepodarilo nainštalovať. Inštalácia bude pokračovať v angličtine.';
$string['langdownloadok'] = 'Podarilo so úspešne nainštalovať jazykový balíček \"$a\". inštalace bude pokračovať v tomto jazyce.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Toto by malo byť vypnuté';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime by malo byť vypnuté, aby Moodle fungoval tak, ako má.</p>

<p>Zvyčajne je voľba štandardne vypnutá ... pozri nastavenia <b>magic_quotes_runtime</b> vo Vašom php.ini súbore.</p>

<p>Ak nemáte prístup k súboru php.ini, mali by ste nasledovný riadok do súboru s názvom .htaccess v rámci adresára Moodle: 
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
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
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nebolo správne nakonfigurované s MySQL rozšírením, a tak nemôže komunikovať s MySQL. Prosím, skontrolujte si Váš php.ini súbor alebo znovu vytvorte PHP.';
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
$string['sessionautostarthelp'] = '<p>Moodle vyžaduje podporu sekcií a nebude bez nich fungovať.</p>';
$string['skipdbencodingtest'] = 'Preskočiť test kódovania DB';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Podarilo so vám úspešne nainštalovať a spustiť balíček <strong>$a->packname $a->packversion</strong>. Gratulujeme!';
$string['welcomep30'] = '<strong>$a->installername</strong> obsahuje aplikácia k vytvoreniu prostreda, v ktorom bude prevádzkovaný váš <strong>Moodle</strong>. Menovite sa jedná o:';
$string['welcomep40'] = 'Balíček tiež obsahuje <strong>Moodle vo verzii $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Použitie všetkých aplikácií v tomto balíčku je viazané ich príslušnými licenciami. Kompletný balíček <strong>$a->installername</strong> je software s <a href=\"http://www.opensource.org/docs/definition_plain.html\"> otvoreným kódom (open source)</a> a je šírený pod licenciou <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Nasledujúce stránky vás povedú v nekoľkých jednoduchých krokoch nastavením <strong>Moodle</strong> na vašom počítači. Môžete prijať výchozie nastavenie, alebo si ich upraviť podľa svojich potrieb.';
$string['welcomep70'] = 'Stisknutím nižšie uvedeného tlačidka \"Ďalší\" pokračujte v nastavení vašej inštalácie Moodle.';
$string['wwwroot'] = 'Web adresa';
$string['wwwrooterror'] = 'Táto web adresa pravdepodobne nie je platná - táto inštalácia Moodle tu pravdepodobne nie je.';

?>
