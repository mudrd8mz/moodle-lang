<?PHP // $Id$ 
      // install.php - created with Moodle 1.7 dev (2006050300)


$string['admindirerror'] = 'Adresář správy (admin) není určen správně';
$string['admindirname'] = 'Adresář správy (admin)';
$string['admindirsetting'] = 'Velmi malé množství webových hostitelů používá /admin jako speciální URL k přístupu ke kontrolnímu panelu nebo k podobným funkcím. To bohužel způsobuje konflikty se standardním umístěním adresáře správy v Moodle. Tento konflikt můžete vyřešit přejmenováním adresáře správy vaší instalace. Vložte sem nový název, např. <br/> <br /><b>moodleadmin</b><br /> <br />Tím se opraví odkazy na správu Moodle.';
$string['admindirsettinghead'] = 'Nastavení adresáře \'admin\'';
$string['admindirsettingsub'] = 'Na některých serverech je URL adresa /admin vyhrazena pro speciální účely (např. pro ovládací panel). Na takových serverech může dojít ke kolizi se standardním umístěním stránek pro správu Moodlu. Máte-li tento problém, přejmenujte adresář \'admin\' ve vaší instalaci Moodlu a do tohoto pole zadejte jeho nový název. Příklad: <br /> <br /><b>moodleadmin</b><br /> <br />
Všechny generované odkazy na stránky správy Moodlu budou používat tento nový název.';
$string['caution'] = 'Varování';
$string['chooselanguage'] = 'Vyberte jazyk';
$string['chooselanguagehead'] = 'Vyberte jazyk';
$string['chooselanguagesub'] = 'Zvolte si jazyk použitý PŘI INSTALACI. Jazykové nastavení stránek budete moci nastavit později. ';
$string['compatibilitysettings'] = 'Kontrola nastavení vašeho PHP...';
$string['compatibilitysettingshead'] = 'Kontrola nastavení vašeho PHP...';
$string['compatibilitysettingssub'] = 'Pro správný běh Moodlu by váš server měl projít ve všech následujících testech';
$string['configfilenotwritten'] = 'Instalační skript nemohl automaticky vytvořit soubor config.php s vaší konfigurací - pravděpodobně z důvodů nastavení práv k zápisu do adresáře Moodle. Můžete ručně zkopírovat následující kód do souboru s názvem config.php v hlavním adresáři vaší instalace Moodle.';
$string['configfilewritten'] = 'config.php byl úspěšně vytvořen';
$string['configurationcomplete'] = 'Konfigurace dokončena';
$string['configurationcompletehead'] = 'Konfigurace dokončena';
$string['configurationcompletesub'] = 'Moodle se pokusil uložit soubor s konfigurací do kořenového adresáře jeho instalace';
$string['database'] = 'Databáze';
$string['databasecreationsettings'] = 'Nyní musíte nakonfigurovat spojení k databázi, kde si bude Moodle ukládat většinu svých dat. Tato databáze může být vytvořena instalátorem automaticky podle následujícího nastavení.<br/>
<br /> <br />
<b>Typ:</b>instalátor nastaví na \"mysql\"<br />
<b>Hostitel:</b>instalátor nastaví na \"localhost\"<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b>instalátor nastaví na \"root\"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje mít jednu databázi pro více instalací Moodlu)';
$string['databasecreationsettingshead'] = 'Nyní musíte nakonfigurovat spojení k databázi, kde si bude Moodle ukládat většinu svých dat. Tato databáze může být vytvořena instalátorem automaticky podle následujícího nastavení.<br/>';
$string['databasecreationsettingssub'] = '<b>Typ:</b>instalátor nastaví na \"mysql\"<br />
<b>Hostitel:</b>instalátor nastaví na \"localhost\"<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b>instalátor nastaví na \"root\"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje mít jednu databázi pro více instalací Moodlu)';
$string['databasesettings'] = 'Nyní musíte nakonfigurovat spojení k databázi, kde si bude Moodle ukládat většinu svých dat. Tato databáze musí již existovat, stejně jako musí být nastaveno uživatelské jméno a heslo pro přístup k ní.<br/>
<br /> <br />
<b>Typ:</b> mysql nebo postgres7<br />
<b>Hostitel:</b> např. localhost nebo db.naseskola.cz<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> uživatelské jméno účtu pro přístup k databázi<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje mít jednu databázi pro více instalací Moodle)';
$string['databasesettingshead'] = 'Nyní musíte nakonfigurovat spojení k databázi, kde si bude Moodle ukládat většinu svých dat. Tato databáze musí již existovat, stejně jako musí být nastaveno uživatelské jméno a heslo pro přístup k ní.';
$string['databasesettingssub'] = '<b>Typ:</b> mysql nebo postgres7<br />
<b>Hostitel:</b> např. localhost nebo db.naseskola.cz<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> uživatelské jméno účtu pro přístup k databázi<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje mít jednu databázi pro více instalací Moodle)';
$string['dataroot'] = 'Datový adresář';
$string['datarooterror'] = 'Vámi specifikovaný datový adresář nebyl nalezen a nemohl být vytvořen. Buď opravte vloženou cestu, nebo vytvořte adresář ručně.';
$string['dbconnectionerror'] = 'Nemůžu se spojit s databází, kterou jste specifikovali. Prosím, zkontrolujte nastavení databáze.';
$string['dbcreationerror'] = 'Chyba při vytváření databáze. Nelze vytvořit databázi daného jména s poskytnutým nastavením';
$string['dbhost'] = 'Hostitelský server';
$string['dbpass'] = 'Heslo';
$string['dbprefix'] = 'Předpona tabulek';
$string['dbtype'] = 'Typ';
$string['dbwrongencoding'] = 'Podle detekce běží vybraná databáze pod nedoporučeným kódováním $a. Bylo by lepší používat databázi s kodováním Unicode (UTF-8). Tuto kontrolu můžete přeskočit zaškrtnutím pole \"Přeskočit test DB kódování\", ale můžete se v budoucnu dostat do problémů.';
$string['directorysettings'] = '<p>Prosím, potvrďte umístění této Moodle instalace.</p>

<p><b>Webová adresa:</b>
Určete úplnou webovou adresu, na niž bude váš Moodle dostupný. Jsou-li vaše stránky dostupné přes více URL, vyberte z nich tu, kterou budou používat vaši studenti. Na konci adresy nevkládejte lomítko.</p>

<p><b>Moodle adresář:</b>
Určtete úplnou cestu k adresáři s touto instalací. Ujistěte se, že vám odpovídají malá/VELKÁ písmena.</p>

<p><b>Datový adresář:</b>
Je třeba mít diskový prostor, kam může Moodle ukládat nahrané (uploadované) soubory. K tomuto adresáři musí mít proces webového serveru právo ke čtení I ZÁPISU (webový server bývá spouštěn pod uživatelem \'nobody\' nebo \'apache\' nebo něco podobného). Tento adresář by neměl být dostupný přímo přes webové rozhraní (může obsahovat neveřejná data).</p>';
$string['directorysettingshead'] = 'Prosím, potvrďte umístění této Moodle instalace';
$string['directorysettingssub'] = '<b>Webová adresa:</b>
Určete úplnou webovou adresu, na niž bude váš Moodle dostupný. Jsou-li vaše stránky dostupné přes více URL, vyberte z nich tu, kterou budou používat vaši studenti. Na konci adresy nevkládejte lomítko.
<br />
<br />
<b>Moodle adresář:</b>
Určtete úplnou cestu k adresáři s touto instalací. Ujistěte se, že vám odpovídají malá/VELKÁ písmena.
<br />
<br />
<b>Datový adresář:</b>
Je třeba mít diskový prostor, kam může Moodle ukládat nahrané (uploadované) soubory. K tomuto adresáři musí mít proces webového serveru právo ke čtení I ZÁPISU (webový server bývá spouštěn pod uživatelem \'nobody\' nebo \'apache\' nebo něco podobného). Tento adresář by neměl být dostupný přímo přes webové rozhraní (může obsahovat neveřejná data).';
$string['dirroot'] = 'Moodle adresář';
$string['dirrooterror'] = 'Hodnota \'Moodle adresář\' nevypadá nastavená správně - nemůžu tam najít Moodle instalaci. Následující hodnota byla resetována.';
$string['download'] = 'Stáhnout';
$string['downloadlanguagebutton'] = 'Stáhnout jazykový balíček \"$a\"';
$string['downloadlanguagehead'] = 'Stáhnout jazykový balíček';
$string['downloadlanguagenotneeded'] = 'V instalaci lze nyní pokračovat v jazyce \"$a\".';
$string['downloadlanguagesub'] = 'Nyní máte možnost stáhnout si některý z jazykových balíčků Moodlu a pokračovat v tomto jazyce.<br /><br />Pokud si momentálně nemůžete nebo nechcete stáhnout jazykový balíček, bude instalační proces pokračovat v angličtině. Jazykové balíčky si budete moci stáhnout i později po ukončení instalace.';
$string['environmenthead'] = 'Kontrola vašeho prostředí...';
$string['environmentsub'] = 'Prověřujeme nyní různé komponenty vašeho systému, zda splňují požadavky instalace';
$string['fail'] = 'Selhalo';
$string['fileuploads'] = 'Nahrané soubory (uploads)';
$string['fileuploadserror'] = 'Mělo by být zapnuto';
$string['fileuploadshelp'] = '<p>Vypadá to, že na vašem serveru není umožněno nahrávat soubory.</p>

<p>Moodle může být i přesto nainstalován, ale bez této funkce nebudete moci nahrávat žádné soubory (např. studijní materiály nebo fotografie uživatelů).</p>

<p>Chcete-li povolit nahrávání souborů, budete muset vy (nebo váš správce) upravit hlavní soubor php.ini na vašem serveru a změnit nastavení
<b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'Verze GD';
$string['gdversionerror'] = 'Knihovna GD je potřebná ke zpracovávání a tvorbě obrázků (např. fotografie, grafy apod.)';
$string['gdversionhelp'] = '<p>Vypadá to, že na vašem serveru není nainstalována knihovna GD.</p>

<p>GD je knihovna, kterou vyžaduje PHP, aby umožnilo Moodlu zpracovávat obrázky (jako jsou ikony uživatelů) a vytvářet nové obrázky (jako jsou např. grafy přístupů na vaše stránky). Moodle bude fungovat i bez GD, ale tyto funkce nebudou dostupné.</p>

<p>Chcete-li přidat GD do PHP pod Unixem, zkompilujte PHP s parametrem --with-gd .</p>

<p>Pod systémem Windows stačí většinou upravit php.ini a odkomentovat řádek odkazující na libgd.dll.</p>';
$string['globalsquotes'] = 'Nezabezpečené zacházení s globálními proměnnými';
$string['globalsquoteserror'] = 'Upravte nastavení PHP: zakažte register_globals a/nebo povolte magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Vaše nastavení PHP nepovoluje Magic Quotes GPC a zároveň povoluje Register Globals. Tato kombinace není doporučována.</p>

<p>Doporučujeme nastavit ve vašem souboru php.ini <b>magic_quotes_gpc = On</b> a <b>register_globals = Off</b></p>

Nemáte-li přístup k souboru php.ini, nebo pokud nemůžete/nechcete měnit toto nastavení pro celý server, umístěte do kořenového adresáře instalace Moodlu soubor nazvaný .htaccess s následujícím obsahem:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Instalace';
$string['langdownloaderror'] = 'Bohužel, jazyk \"$a\" se nepodařilo nainstalovat. Instalace bude pokračovat v angličtine.';
$string['langdownloadok'] = 'Úspěšně se podařilo nainstalovat jazykový balíček \"$a\". Instalace bude pokračovat v tomto jazyce.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Mělo by být vypnuto';
$string['magicquotesruntimehelp'] = '<p>Funkce \'Magic quotes runtime\' by měla být vypnuta pro správné fungování Moodlu.</p>

<p>Normálně bývá tato funkce implicitně vypnutá ... podívejte se na nastavení <b>magic_quotes_runtime</b> ve vašem php.ini .</p>

<p>Pokud nemáte přístup k vašemu php.ini, můžete zkusit umístit následující řádek do souboru  .htaccess ve vašem Moodle adresáři:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Limit paměti';
$string['memorylimiterror'] = 'Limit paměti pro PHP skripty je nastaven relativně nízko ... později vás to může stát problémy.';
$string['memorylimithelp'] = '<p>Limit paměti pro PHP skripty je na vašem serveru momentálně nastaven na hodnotu $a.</p>

<p>Toto může později způsobovat Moodlu problémy, zvláště při větším množství modulů a/nebo uživatelů.</p>

<p>Je-li to možné, doporučujeme vám nakonfigurovat PHP s vyšším limitem - např. 16M. Je několik způsobů, které můžete zkusit:
<ol>
<li>Můžete-li, překompilujte PHP s volbou <i>--enable-memory-limit</i>.
Toto umožní Moodlu nastavit si pro sebe požadovaný limit.</li>
<li>Máte-li přístup k vašemu souboru php.ini, změňte nastavení <b>memory_limit</b>
na hodnotu blízkou 16M. Nemáte-li taková práva, požádejte vašeho správce webového serveru, aby to pro vás udělal.</li>
<li>Na některých PHP serverech můžete v Moodle adresáři vytvořit soubor .htaccess s následujícím řádkem:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Bohužel, na některých serverech tímto vyřadíte z provozu <b>všechny</b> PHP stránky (při jejich prohlížení uvidíte chybové zprávy), takže budete muset soubor .htaccess odstranit.</li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nebylo korektně nakonfigurováno pro komunikaci v MySQL. Zkontrolujte váš php.ini nebo překompilujte PHP.';
$string['pass'] = 'Prošlo';
$string['phpversion'] = 'Verze PHP';
$string['phpversionerror'] = 'Verze PHP musí být alespoň 4.1.0 nebo vyšší';
$string['phpversionhelp'] = '<p>Moodle vyžaduje verzi PHP alespoň 4.1.0.</p>
<p>Vaše stávající PHP má verzi $a</p>
<p>Musíte upgradovat vaše PHP nebo Moodle nainstalovat na hostitele s vyšší verzí!</p>';
$string['safemode'] = 'Bezpečný režim (safe mode)';
$string['safemodeerror'] = 'Moodle může mít problémy při zapnutém bezpečném režimu (safe mode)';
$string['safemodehelp'] = '<p>Moodle může mít množství problémů při zapnutém bezpečném režimu PHP (tzv. safe mode). Jedním z nich je, že pravděpodobně nebude moci vytvářet nové soubory.</p>

<p>Bezpečný režim bývá zapnutý u paranoidních veřejných webových hostitelů, takže možná bude stačit najít si jiného hostitele pro váš Moodle.</p>

<p>Můžete zkusit pokračovat v instalaci, ale očekávejte možné problémy.</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Mělo by být vypnuto';
$string['sessionautostarthelp'] = '<p>Moodle požaduje podporu session a nebude bez ní fungovat.</p>

<p>Podporu session můžete povolit v souboru php.ini  ... podívejte se na parametr session.auto_start .</p>';
$string['skipdbencodingtest'] = 'Přeskočit test DB kódování';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Pakliže vidíte tuto stránku, podařilo se vám úspěšně nainstalovat a spustit balíček <strong>$a->packname $a->packversion</strong>. Gratulujeme!';
$string['welcomep30'] = '<strong>$a->installername</strong> obsahuje aplikace k vytvoření prostředí, ve kterém bude provozován váš <strong>Moodle</strong>. Jmenovitě se jedná o:';
$string['welcomep40'] = 'Balíček rovněž obsahuje <strong>Moodle ve verzi $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Použití všech aplikací v tomto balíčku je vázáno jejich příslušnými licencemi. Kompletní balíček <strong>$a->installername</strong> je software s <a href=\"http://www.opensource.org/docs/definition_plain.html\"> otevřeným kódem (open source)</a> a je šířen pod licencí <a href=\"http://www.gnu.org/copyleft/gpl.html\">GNU/GPL</a>.';
$string['welcomep60'] = 'Následující stránky vás provedou skrze několik jednoduchých kroků potřebných k rozběhnutí <strong>Moodle</strong> na vašem počítači. Můžete přijmout výchozí nastavení, nebo si jej případně upravit podle svých potřeb.';
$string['welcomep70'] = 'Stisknutím následujícího tlačítka \"Další\" pokračujte v nastavení vaší instalace Moodlu.';
$string['wwwroot'] = 'Webová adresa';
$string['wwwrooterror'] = 'Toto nevypadá jako platná webová adresa této instalace Moodle.';

?>
