<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.6+ (Build: 20091124) (2007101563.03)


$string['check_configrw_details'] = '<p>Doporučuje se změnit práva k souboru config.php tak, aby do něj nemohl zapisovat sám webový server.
Toto opatření sice nijak nezabezpečí váš server, ale může zpomalit či jinak omezit potenciální útočníky.</p>';
$string['check_configrw_name'] = 'Zapisovatelný config.php';
$string['check_configrw_ok'] = 'PHP skripty nemohou zapisovat do config.php';
$string['check_configrw_warning'] = 'PHP skripty mohou měnit config.php';
$string['check_cookiesecure_details'] = '<p>Pokud zprovozníte a povolíte komunikaci přes HTTPS, měli byste též povolit zabezpečený přenos cookies. Zvažte rovněž trvalé přesměrování z HTTP na HTTPS.</p>';
$string['check_cookiesecure_error'] = 'Povolte zabezpečená cookies';
$string['check_cookiesecure_name'] = 'Zabezpečená cookies';
$string['check_cookiesecure_ok'] = 'Zabezpečená cookies povolena';
$string['check_courserole_anything'] = 'Možnost dělat cokoliv nemůže být <a href=\"$a\">v tomto kontextu</a> povolena.';
$string['check_courserole_details'] = '<p>Každý kurz má definovánu jednu výchozí roli uživatelů. Ujistěte se, že tato role nemá přidělena žádná riskantní oprávnění.</p>
<p>Jediným podporovaným archetypem výchozí role v kurzu je <em>Student</em>.</p>';
$string['check_courserole_error'] = 'Zjištěna chyba v definici výchozích rolí kurzu';
$string['check_courserole_name'] = 'Výchozí role v kurzu';
$string['check_courserole_notyet'] = 'Všechny kurzy používají přednastavenou hodnotu pro tento server';
$string['check_courserole_ok'] = 'Definice výchozích rolí v kurzu OK.';
$string['check_courserole_risky'] = 'Riskantní oprávnění zjištěna <a href=\"$a\">v tomto kontextu</a>.';
$string['check_courserole_riskylegacy'] = 'Riskantní archetyp u role <a href=\"$a->url\">$a->shortname</a>.';
$string['check_defaultcourserole_anything'] = 'Možnost dělat cokoliv nemůže být <a href=\"$a\">v tomto kontextu</a> povolena.';
$string['check_defaultcourserole_details'] = '<p>Na úrovni stránek je možno definovat výchozí roli uživatelů v kurzech (toto nastavení lze pak u jednotlivých kurzů měnit). Ujistěte se, že tato výchozí role nemá přidělena žádná riskantní oprávnění.</p>
<p>Jediným podporovaným archetypem výchozí role v kurzu je <em>Student</em>.</p>';
$string['check_defaultcourserole_error'] = 'Zjištěna chyba v definici výchozí role kurzu: \"$a\"!';
$string['check_defaultcourserole_legacy'] = 'Nepodporovaný archetyp role';
$string['check_defaultcourserole_name'] = 'Přednastavená výchozí role v kurzech';
$string['check_defaultcourserole_notset'] = 'Výchozí role není nastavena';
$string['check_defaultcourserole_ok'] = 'Přednastavená role OK';
$string['check_defaultcourserole_risky'] = 'Riskantní oprávnění zjištěna <a href=\"$a\">v tomto kontextu</a>.';
$string['check_defaultuserrole_details'] = '<p>Všichni přihlášení uživatelé mají oprávnění vyplývající z tzv. \"Výchozí role pro všechny uživatele\". Ujistěte se, že tato výchozí role nemá přidělena žádná riskantní oprávnění.</p>
<p>Jediným podporovaným archetypem této výchozí role je <em>Registrovaný uživatel</em>. Oprávnění vidět kurz zde nesmí být povoleno.</p>';
$string['check_defaultuserrole_error'] = 'Zjištěna chyba v definici výchozí role pro všechny uživatele: \"$a\"!';
$string['check_defaultuserrole_name'] = 'Výchozí role pro všechny uživatele';
$string['check_defaultuserrole_notset'] = 'Výchozí role není nastavena';
$string['check_defaultuserrole_ok'] = 'Výchozí role pro všechny uživatele OK';
$string['check_displayerrors_details'] = '<p>Na produkčních serverech se nedoporučuje zobrazování chybových hlášení PHP (<code>display_errors</code>).  Zobrazené informace mohou obsahovat citlivé údaje o vaší instalaci.</p>';
$string['check_displayerrors_error'] = 'PHP display_errors je zapnuto. Doporučuje se vypnout.';
$string['check_displayerrors_name'] = 'Zobrazování chyb PHP';
$string['check_displayerrors_ok'] = 'Zobrazování chyb PHP je zakázáno';
$string['check_emailchangeconfirmation_details'] = '<p>Doporučuje se, aby uživatelé museli potvrzovat svou novou e-mailovou adresu při její změně v uživatelském profilu. Pokud tento krok vynecháte, může být váš server zneužit k rozesílání nevyžádané korespondence.</p>';
$string['check_emailchangeconfirmation_error'] = 'Uživatelé mohou zadat libovolnou adresu';
$string['check_emailchangeconfirmation_info'] = 'Uživatelé mohou zadat emailové adresy pouze z dovolených domén.';
$string['check_emailchangeconfirmation_name'] = 'Potvrzení změny e-mailu';
$string['check_emailchangeconfirmation_ok'] = 'Uživatelé musejí potvrdit změnu e-mailové adresy';
$string['check_embed_details'] = '<p>Neomezené vkládání objektů do HTML je velmi nebezpečné. Jakýkoliv registrovaný uživatel pak může zahájit XSS útok proti jiným uživatelům serveru. Na produkčních server by mělo být zakázáno.</p>';
$string['check_embed_error'] = 'Vkládání objektů do HTML povoleno - velmi nebezpečné nastavení';
$string['check_embed_name'] = 'Povolené značky EMBED a OBJECT';
$string['check_embed_ok'] = 'Vkládání objektů do HTML omezeno';
$string['check_frontpagerole_details'] = '<p>Všichni přihlášení uživatelé mají vzhledem k činnostem na titulní stránce oprávnění vyplývající z tzv. \"Výchozí role na titulní stránce\". Ujistěte se, že tato výchozí role nemá přidělena žádná riskantní oprávnění.</p>
<p>Pokud roli na titulní stránce nastavujete, doporučuje se vytvořit pro tyto účely zvláštní roli bez archetypu.</p>';
$string['check_frontpagerole_error'] = 'Zjištěna chyba v definici výchozí role na titulní stránce: \"$a\"!';
$string['check_frontpagerole_name'] = 'Role na titulní stránce';
$string['check_frontpagerole_notset'] = 'Role na titulní stránce nenastavena';
$string['check_frontpagerole_ok'] = 'Role na titulní stránce OK';
$string['check_globals_details'] = '<p>Automatická registrace globálních proměnných představuje velkou bezpečnostní slabinu PHP.</p>
<p>Vaš konfigurace y proto měla obshaovat nastavení <code>register_globals=off</code>. To můžete provést v souboru <code>php.ini</code>, v nastavení Apache nebo IIS a nebo v souboru <code>.htaccess</code></p>';
$string['check_globals_error'] = 'Registrace globálních proměnných MUSÍ být zakázána. Co nejdříve opravte toto nastavení!';
$string['check_globals_name'] = 'Registrace globálních proměnných';
$string['check_globals_ok'] = 'Registrace globálních proměnných zakázána';
$string['check_google_details'] = '<p>Pokud povolíte prohledávání vašich kurzů Googlem, mohou webové vyhledávače vstupovat do vašich kurzů s právy hosta. Toto nastavení postrádá smysl, když máte zakázánu možnost \"Přihlásit se jako host\".';
$string['check_google_error'] = 'Povoleno prohledávání Googlem, ale nemůže se přihlásit jako host.';
$string['check_google_info'] = 'Vyhledávače mohou do kurzů vstupovat jako hosté';
$string['check_google_name'] = 'Prohledávání Googlem';
$string['check_google_ok'] = 'Prohledávání Googlem vypnuto';
$string['check_guestrole_details'] = '<p>Role hosta se používá pro uživatele přihlášené jako Host, pro nepřihlášené uživatele a pro dočasný přístup do kurzu. Ujistěte se, že tato role nemá přidělena žádná riskantní oprávnění.</p>
<p>Jediným podporovaným archetypem této výchozí role je <em>Host</em>.</p>';
$string['check_guestrole_error'] = 'Zjištěna chyba v definici role hosta: \"$a\"!';
$string['check_guestrole_name'] = 'Role hosta';
$string['check_guestrole_notset'] = 'Role hosta nenastavena';
$string['check_guestrole_ok'] = 'Role hosta OK';
$string['check_mediafilterswf_details'] = '<p>Automatické vkládání SWF (Flash aplikací) je velmi nebezpečné. Jakýkoliv registrovaný uživatel pak může zahájit XSS útok proti jiným uživatelům serveru. Na produkčních server by mělo být zakázáno.</p>';
$string['check_mediafilterswf_error'] = 'Multimediální filtr .swf souborů je aktivní - velmi nebezpečné nastavení';
$string['check_mediafilterswf_name'] = 'Povolený .swf filtr';
$string['check_mediafilterswf_ok'] = 'Multimediální filtr .swf souborů není aktivní OK';
$string['check_noauth_details'] = '<p>Autentizační modul <em>Registrace bez ověření</em> není určen pro produkční servery. Pokud toto není vývojový a testovací server, deaktivujte tento modul.</p>';
$string['check_noauth_error'] = 'Autentizační modul \"Registrace bez ověření\" nesmí být použit na produkčních serverech';
$string['check_noauth_name'] = 'Registrace bez ověření';
$string['check_noauth_ok'] = 'Registrace bez ověření zakázána OK';
$string['check_openprofiles_details'] = '<p>Otevřené uživatelské profily mohou být zneužity k publikování nežádoucího webového obsahu (porno, reklama, ...) v poli Popis uživatele. Doporučuje se buď <code>Vnutit přihlášení pro zobrazování profilů</code> nebo <code>Vnutit přihlášení</code>.';
$string['check_openprofiles_error'] = 'Profily uživatelů jsou dostupné anonymním návštěvníkům stránek';
$string['check_openprofiles_name'] = 'Otevřené uživatelské profily';
$string['check_openprofiles_ok'] = 'Pro zobrazení profilů je nutné být přihlášen';
$string['check_passwordpolicy_details'] = '<p>Doporučuje se definovat Zásady bezpečného hesla. Uhádnutí hesel je často nejjednodušší cesta k získání neoprávněného přístupu na váš server.
Nicméně nenastavujte pravidla příliš přísná - to vede k tomu, že uživatelé si heslo pamatují a někam si jej zapisují, což opět vede ke snížení zabezpečení.</p>';
$string['check_passwordpolicy_error'] = 'Zásady bezpečného hesla nejsou definovány';
$string['check_passwordpolicy_name'] = 'Zásady bezpečného hesla';
$string['check_passwordpolicy_ok'] = 'Zásady bezpečného hesla nastaveny';
$string['check_passwordsaltmain_details'] = '<p>Solení hesel výrazně snižuje riziko prolomení zahešovaných hesel v databázi a v zálohách kurzů.</p>
<p>Pro nastavení soli přidejte do vašeho souboru config.php následující řádek:</p>
<code>\$CFG->passwordsaltmain = \'sem vložte nějaký náhodný řetězec obsahující spoustu znaků\';</code>
<p>Náhodný řetězec tvořící sůl by měl obsahovat písmena, číslice a další znaky. Měl by být alespoň 40 znaků dlouhý.</p>
<p>Upozornění - <a href=\"$a\" target=\"_blank\">prostudujte si dokumentaci</a>, pokud se chystáte měnit zde vloženou hodnotu. Jakmile je sůl jednou nastavena, nelze její hodnotu jen tak prostě odstranit. Znemožnili byste přihlášení uživatelů a sebe sama na váš server!</p>';
$string['check_passwordsaltmain_name'] = 'Solení hesel';
$string['check_passwordsaltmain_ok'] = 'Sůl je korektně nastavena';
$string['check_passwordsaltmain_warning'] = 'Nebyla nastavena žádná sůl';
$string['check_passwordsaltmain_weak'] = 'Nastavená sůl je příliš slabá';
$string['check_riskadmin_detailsok'] = '<p>Seznam stávajících správců stránek:<br />$a</p>';
$string['check_riskadmin_detailswarning'] = '<p>Seznam stávajících správců stránek:<br />$a->admins</p>
<p>Role Správce se přiřazuje pouze v hlavním systémovém kontextu. Následujícím uživatelům je přiřazena role Správce v nesprávném kontextu:<br />$a->unsupported</p>';
$string['check_riskadmin_name'] = 'Správci';
$string['check_riskadmin_ok'] = 'Počet správců: $a';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) překontrolujte přiřazení role</a>';
$string['check_riskadmin_warning'] = 'Počet správců: $a->admincount, chybně  přidělených rolí: $a->unsupcount';
$string['check_riskxss_details'] = '<p>Příznakem RISK_XSS jsou označena riskantní oprávnění, která by měla být přiznána pouze důvěryhodným uživatelům.</p>
<p>Zkontrolujte následující seznam a ujistěte se, že se jedná o uživatele, kterým můžete ve věci bezpečnosti serveru důvěřovat:<br />$a</p>';
$string['check_riskxss_name'] = 'XSS důvěryhodní uživatelé';
$string['check_riskxss_warning'] = 'RISK_XSS - počet důvěryhodných uživatelů: $a';
$string['check_unsecuredataroot_details'] = '<p>Datový adresář nesmí být dostupný přes webové rozhraní. Nejlepším způsobem, jak toho docílit, je přesunout celý adresář mimo veřejný webový adresář.</p>
<p>Po přesunu datového adresáře bude potřeba aktualizovat hodnotu <code>\$CFG->dataroot</code> v souboru <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Datový adresář <code>$a</code> je chybně umístěn a jeho obsah je vystaven na webu!';
$string['check_unsecuredataroot_name'] = 'Umístění datového adresáře';
$string['check_unsecuredataroot_ok'] = 'Datový adresář nesmí být dostupný přes web';
$string['check_unsecuredataroot_warning'] = 'Datový adresář <code>$a</code> je chybně umístěn a jeho obsah může být dostupný přes web';
$string['configuration'] = 'Nastavení';
$string['description'] = 'Popis';
$string['details'] = 'Podrobnosti';
$string['issue'] = 'Problém';
$string['reportsecurity'] = 'Přehled zabezpečení';
$string['security:view'] = 'Zobrazit přehled zabezpečení';
$string['status'] = 'Stav';
$string['statuscritical'] = 'Kritický problém';
$string['statusinfo'] = 'Poznámka';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Vážný problém';
$string['statuswarning'] = 'Varování';
$string['timewarning'] = 'Zpracování dat může trvat dlouho - buďte trpěliví...';
$string['check_courserole_legacy'] = 'Nepodporovaný archetyp role <a href=\"$a\">role</a>.'; // ORPHANED

?>
