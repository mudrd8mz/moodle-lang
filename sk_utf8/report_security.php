<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.7 (Build: 20091126) (2007101570)


$string['check_configrw_details'] = '<p>Doporučuje sa zmeniť oprávnenia k súboru config.php tak, aby do nemohol byť upravovaný web serverom.
Toto opatrenie síce výrazne nezlepší bezpečnosť serveru, ale aspoň spomalí alebo obmedzí prieniky.</p>';
$string['check_configrw_name'] = 'Zapisovateľný config.php';
$string['check_configrw_ok'] = 'PHP skripty nemôžu zapisovať do súboru config.php';
$string['check_configrw_warning'] = 'PHP skripty môžu meniť súbor config.php';
$string['check_cookiesecure_details'] = '<p>Ak povolíte komunikáciu cez HTTPS, mali by ste tiež povoliť zabezpečený prenos cookies. Tiež by ste mali pridať trvalé presmerovanie z HTTP na HTTPS.</p>';
$string['check_cookiesecure_error'] = 'Prosím povoľte zabezpečené cookies';
$string['check_cookiesecure_name'] = 'Zabezpečené cookies';
$string['check_cookiesecure_ok'] = 'Zabezpečené cookies sú povolené';
$string['check_courserole_anything'] = 'Schopnosť robiť hocičo nemôže byť v <a href=\"$a\">tomto kontexte</a> povolená.';
$string['check_courserole_details'] = '<p>Každý kurz má definovanú jednu východziu rolu používateľov. Skontrolujte, že táto rola nemá pridelené žiadne riskantné oprávnenia.</p>
<p>Jediným podporovaným starým typom východzej roly v kurze je <em>Študent</em>.</p>';
$string['check_courserole_error'] = 'Bola zistená chyba v definícii východzích rol kurzu';
$string['check_courserole_name'] = 'Východzia rola v kurze';
$string['check_courserole_notyet'] = 'Všetky kurzy používajú prednastavenú hodnotu pre tento server';
$string['check_courserole_ok'] = 'Definícia východzích rol v kurzu je OK.';
$string['check_courserole_risky'] = 'Riskantné oprávnenia sú zistené <a href=\"$a\">v tomto kontexte</a>.';
$string['check_courserole_riskylegacy'] = 'Riskantný starý typ u roly <a href=\"$a->url\">$a->shortname</a>.';
$string['check_defaultcourserole_anything'] = 'Schopnosť robiť hocičo nemôže byť v <a href=\"$a\">tomto kontexte</a> povolená.';
$string['check_defaultcourserole_details'] = '<p>Východzia rola študenta pre zápis do kurzov špecifikuje východziu rolu v kurze. Uistite sa, že neobsahuje žiadne riskantné schopnosti a oprávenia.</p>
<p>Jediným podporovaným starým typom východzej roly v kurze je <em>Študent</em>.</p>';
$string['check_defaultcourserole_error'] = 'Bola zistená chyba v definícii východzej roly kurzu: \"$a\"!';
$string['check_defaultcourserole_legacy'] = 'Nepodporovaný starý typ roly.';
$string['check_defaultcourserole_name'] = 'Prednastavená východzia rola v kurzoch';
$string['check_defaultcourserole_notset'] = 'Východzia rola nie je nastavená.';
$string['check_defaultcourserole_ok'] = 'Prednastavená rola je OK.';
$string['check_defaultcourserole_risky'] = 'Boli zistené riskantné schponosti <a href=\"$a\">v tomto kontexte</a>.';
$string['check_defaultuserrole_details'] = '<p>Všetci prihlásení používatelia majú oprávnenia vyplývajúce z tzv. \"Východzej roly pre všetkých používateľov\". Uistite sa, že táto východzia rola nemá pridelené žiadne riskantné schopnosti.</p>
<p>Jediným podporovaným starým typom tejto východzej roly je <em>Registrovaný používateľ</em>. Schopnosť vidieť kurz tu nesmie byť povolená.</p>';
$string['check_defaultuserrole_error'] = 'Bola zistená chyba v definícii východzej roly pre všetkých používateľov: \"$a\"!';
$string['check_defaultuserrole_name'] = 'Východzia rola pre všetkých používateľov';
$string['check_defaultuserrole_notset'] = 'Východzia rola nie je nastavená.';
$string['check_defaultuserrole_ok'] = 'Východzia rola pre všetkých používateľov je OK.';
$string['check_displayerrors_details'] = '<p>Na produkčných serveroch sa nedoporučuje zobrazovanie chybových hlásení PHP (<code>display_errors</code>).  Zobrazené informácie môžu obsahovať citlivé údaje o vašom serveri.</p>';
$string['check_displayerrors_error'] = 'PHP nastavenie display_errors je zapnuté. Je doporučené ho vypnúť.';
$string['check_displayerrors_name'] = 'Zobrazovanie chýb PHP';
$string['check_displayerrors_ok'] = 'Zobrazovanie chýb PHP je zakázané.';
$string['check_emailchangeconfirmation_details'] = '<p>Je doporučené, aby používatelia museli potvrdiť svoju novú e-mailovú adresu pri jej zmene v používateľskom profile. Ak tento krok vynecháte, môže byť váš server zneužitý k rozosielaniu nevyžiadanej pošty (spamu).</p>
<p>Emailový záznam môže byť overovacím zásuvným modulom zamknutý, táto možnosť tu nie je uvažovaná.</p>';
$string['check_emailchangeconfirmation_error'] = 'Používatelia môžu zadať ľubovoľnú emailovú adresu.';
$string['check_emailchangeconfirmation_info'] = 'Používatelia môžu zadať emailovú adresu iba z dovolených domén.';
$string['check_emailchangeconfirmation_name'] = 'Potvrdenie zmeny e-mailu';
$string['check_emailchangeconfirmation_ok'] = 'Používatelia musia potvrdiť zmenu e-mailovej adresy.';
$string['check_embed_details'] = '<p>Neobmedzené vkladanie objektov do HTML je veľmi nebezpečné. Akýkoľvek registrovaný používateľ potom môže zahájiť XSS útok proti iným používateľom serveru. Na produkčných serveroch by to malo byť zakázané.</p>';
$string['check_embed_error'] = 'Vkladanie objektov do HTML je povolené - toto je veľmi nebezpečné nastavenie.';
$string['check_embed_name'] = 'Povolené značky EMBED a OBJECT';
$string['check_embed_ok'] = 'Vkladanie objektov do HTML je obmedzené.';
$string['check_frontpagerole_details'] = '<p>Všetci prihlásení používatelia majú vzhľadom k činnostiam na titulnej stránke oprávnenie vyplývajúce z tzv. \"Východzej roly na titulnej stránke\". Uistite sa, že táto východzia rola nemá pridelené žiadne riskantné schopnosti.</p>
<p>Ak nastavujete schopnosti na titulnej stránke, potom sa doporučuje vytvoriť pre tento účel úplne novú rolu.</p>';
$string['check_frontpagerole_error'] = 'Bola zistená chyba v definícii východzej roly na titulnej stránke: \"$a\"!';
$string['check_frontpagerole_name'] = 'Rola na titulnej stránke';
$string['check_frontpagerole_notset'] = 'Rola na titulnej stránke nie je nastavená.';
$string['check_frontpagerole_ok'] = 'Rola na titulnej stránke je OK.';
$string['check_globals_details'] = '<p>Automatická registrácia globálnych premenných predstavuje veľké bezpečnostné riziko PHP.</p>
<p>Vaša konfigurácia by preto mala obsahovať nastavenie <code>register_globals=off</code>. To môžete zmeniť v súbore <code>php.ini</code>, v nastavení Apache či IIS alebo v súbore <code>.htaccess</code>.</p>';
$string['check_globals_error'] = 'Registrácia globálnych premenných MUSÍ byť zakázaná. Opravte toto PHP nastavenie čím skôr!';
$string['check_globals_name'] = 'Registrácia globálnych premenných';
$string['check_globals_ok'] = 'Registrácia globálnych premenných je zakázaná.';
$string['check_google_details'] = '<p>Ak povolíte prehľadávanie vašich kurzov vyhľadávačom Google, môžu webové vyhľadávače vstupovať do vašich kurzov s právami hosťa. Toto nastavenie nemá zmysel, ak je zakázaná možnosť \"Prihlásiť sa ako hosť\".';
$string['check_google_error'] = 'Je povolené prehľadávanie vyhľadávačom Google, ale hosťovský prístup je zakázaný.';
$string['check_google_info'] = 'Vyhľadávače môžu vstupovať do kurzov ako hostia.';
$string['check_google_name'] = 'Prehľadávanie vyhľadávačom Google';
$string['check_google_ok'] = 'Prehľadávanie vyhľadávačom Google je vypnuté.';
$string['check_guestrole_details'] = '<p>Rola hosťa sa používa pre používateľov prihlásených ako Hosť, pre neprihlásených používateľov a pre dočasný prístup do kurzu. Uistite sa, že táto rola nemá pridelené žiadne riskantné schopnosti.</p>
<p>Jediným podporovaným starým typom tejto východzej roly je <em>Hosť</em>.</p>';
$string['check_guestrole_error'] = 'Je zistená chyba v definícii roly hosťa: \"$a\"!';
$string['check_guestrole_name'] = 'Rola hosťa';
$string['check_guestrole_notset'] = 'Rola hosťa nie je nastavená.';
$string['check_guestrole_ok'] = 'Rola hosťa je OK.';
$string['check_mediafilterswf_details'] = '<p>Automatické vkladanie SWF (Flash aplikácií) je veľmi nebezpečné. Akýkoľvek registrovaný používateľ potom môže zahájiť XSS útok proti iným používateľom servera. Na produkčných serveroch by toto malo byť zakázané.</p>';
$string['check_mediafilterswf_error'] = 'Multimediálny filter .swf (Flash) súborov je aktívny - toto je veľmi nebezpečné nastavenie pre väčšinu serverov';
$string['check_mediafilterswf_name'] = 'Povolený .swf filter';
$string['check_mediafilterswf_ok'] = 'Multimediálny filter .swf (Flash) súborov nie je aktívny.';
$string['check_noauth_details'] = '<p>Autentifikačný modul <em>Registrácia bez overenia</em> nie je určený pre produkčné servery. Ak toto nie je vývojový a testovací server, deaktivujte tento modul.</p>';
$string['check_noauth_error'] = 'Autentifikačný modul \"Registrácia bez overenia\" nesmie byť použitý na produkčných serveroch.';
$string['check_noauth_name'] = 'Registrácia bez overenia';
$string['check_noauth_ok'] = 'Registrácia bez overenia je zakázaná.';
$string['check_openprofiles_details'] = '<p>Otvorené používateľské profily môžu byť zneužité k publikovaniu nežiadúceho webového obsahu (porno, reklama, ...) v poli Opis používateľa. Doporučuje sa buď <code>Vnútiť prihlásenie pre zobrazovanie profilov</code> alebo <code>Vnútiť prihlásenie</code>.';
$string['check_openprofiles_error'] = 'Profily používateľov sú dostupné anonymným návštevníkom bez prihlásenia.';
$string['check_openprofiles_name'] = 'Otvorené používateľské profily';
$string['check_openprofiles_ok'] = 'Pre zobrazenie profilov je nutné sa prihlásiť.';
$string['check_passwordpolicy_details'] = '<p>Doporučuje sa definovať Zásady bezpečného hesla. Uhádnutie hesiel je často najjednoduchšia cesta k získaniu neoprávneného prístupu na váš server.
Na druhej strane, nenastavujte pravidlá príliš prísne - to vedie k tomu, že používatelia si heslo nezapamätajú a niekde si ho zapisujú, co opäť vedie k zníženiu zabezpečenia.</p>';
$string['check_passwordpolicy_error'] = 'Zásady bezpečného hesla nie sú definované.';
$string['check_passwordpolicy_name'] = 'Zásady bezpečného hesla';
$string['check_passwordpolicy_ok'] = 'Zásady bezpečného hesla sú nastavené';
$string['check_passwordsaltmain_details'] = '<p>Nastavenie solenia hesla výrazne znižuje nebezpečenstvo ukradnutia hesla.</p>
<p>Pre nastavenie soli hesiel pridajde do Vášho súboru config.php nasledovný riadok:</p>
<code>$CFG->passwordsaltmain = \'nejaky dlhy nahodny retazec s vela znakmi\';</code>
<p>Náhodný reťazec by mal obsahovať písmená, čísla a iné znaky. Doporučuje sa minimálne 40 znakov.</p>
<p>Pre nastavenie soli hesiel doporučujeme podrobný postup uvedený <a href=\"$a\" target=\"_blank\">v dokumentácii solenia hesiel</a>. Po nastavení soli v konfiguračnom súbore daný riadok NESMIETE vymazať, inak sa nedokážete opätovne prihlásiť na portál!</p>';
$string['check_passwordsaltmain_name'] = 'Solenie hesla';
$string['check_passwordsaltmain_ok'] = 'Soľ pre heslo je v poriadku';
$string['check_passwordsaltmain_warning'] = 'Nebolo nastavené solenie hesla';
$string['check_passwordsaltmain_weak'] = 'Solenie hesla je nedostatočné';
$string['check_riskadmin_detailsok'] = '<p>Prosím skontrolujte zoznam administrátorov:<br />$a</p>';
$string['check_riskadmin_detailswarning'] = '<p>Zoznam administrátorov:<br />$a->admins</p>
<p>Rola Administrátor sa priraďuje iba v hlavnom systémovom kontexte. Nasledujúcim používateľom je priradená rola Administrátora v nevhodnom kontexte:<br />$a->unsupported</p>';
$string['check_riskadmin_name'] = 'Administrátori';
$string['check_riskadmin_ok'] = 'Počet administrátorov: $a';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) skontrolujte priradenie roly</a>';
$string['check_riskadmin_warning'] = 'Bolo nájdených $a->admincount administrátorov a $a->unsupcount nepodporovaných priradení rol.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Tieto aktívne predefinovania umožňujú zahrnúť používateľské údaje v zálohách. Uistite sa, že toto oprávnenie je nutné.</p> $a';
$string['check_riskbackup_details_systemroles'] = '<p>Nasledovný systém rol v súčasnosti povoľuje používateľom zahrnúť používateľské údaje v zálohách. Uistite sa, že toto oprávnenie je nutné.</p> $a';
$string['check_riskbackup_details_users'] = '<p>Z dôvodu vyššie uvedených rol a predefinovaní majú nasledovné používateľské kontá v súčasnej situácii oprávnenie vytvoriť zálohy obsahujúce súkromné údaje používateľov zapísaných do kurzu. Uistite sa, že sú (a) dôveryhodní a (b) chránení silnými heslami:</p> $a';
$string['check_riskbackup_detailsok'] = 'Neexistujú žiadne roly, ktoré povoľujú zálohovanie používateľských údajov. Treba však zobrať do úvahu, že administrátori so schopnosťou \"doanything\" pravdepodobne stále toto oprávnenie majú.';
$string['check_riskbackup_editoverride'] = '<a href=\"$a->url\">$a->name v kontexte $a->contextname</a>';
$string['check_riskbackup_editrole'] = '<a href=\"$a->url\">$a->name</a>';
$string['check_riskbackup_name'] = 'Zálohovanie používateľských údajov';
$string['check_riskbackup_ok'] = 'Žiadne roly explicitne nepovoľujú zálohovanie používateľských údajov.';
$string['check_riskbackup_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) v kontexte $a->contextname</a>';
$string['check_riskbackup_warning'] = 'Bolo nájdených $a->rolecount rol, $a->overridecount predefinovaní a $a->usercount používateľov so schopnosťou zálohovania používateľských údajov.';
$string['check_riskxss_details'] = '<p>Príznakom RISK_XSS sú označené riskantné schopnosti, ktoré by mali byť povolené iba dôveryhodným používateľom.</p>
<p>Skontrolujte si nasledovný zoznam a uistite sa, že sa jedná o osoby, ktorým môžete na tomto serveri dôverovať, čo sa bezpečnosti týka:<br />$a</p>';
$string['check_riskxss_name'] = 'XSS dôveryhodní používatelia';
$string['check_riskxss_warning'] = 'RISK_XSS - bolo nájdených $a používateľov, ktorí musia byť dôveryhodní.';
$string['check_unsecuredataroot_details'] = '<p>Dátový adresár nesmie byť dostupný cez web. Najlepšie je použiť adresár mimo verejného web adresára.</p>
<p>Ak presuniete dátový adresár, potrebujete aktualizovať hodnotu <code>$CFG->dataroot</code> v súbore <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Dátový adresár <code>$a</code> je nesprávne umiestnený a jeho obsah je dostupný cez web!';
$string['check_unsecuredataroot_name'] = 'Umiestnenie dátového adresára';
$string['check_unsecuredataroot_ok'] = 'Dátový adresár nesmie byť dostupný cez web.';
$string['check_unsecuredataroot_warning'] = 'Dátový adresár <code>$a</code> je nesprávne umiestnený a jeho obsah môže byť dostupný cez web.';
$string['configuration'] = 'Nastavenie';
$string['description'] = 'Opis';
$string['details'] = 'Podrobnosti';
$string['issue'] = 'Problém';
$string['reportsecurity'] = 'Prehľad zabezpečenia';
$string['security:view'] = 'Zobraziť prehľad zabezpečenia';
$string['status'] = 'Stav';
$string['statuscritical'] = 'Kritický problém';
$string['statusinfo'] = 'Poznámka';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Vážny problém';
$string['statuswarning'] = 'Varovanie';
$string['timewarning'] = 'Spracovanie údajov môže trvať dlho - prosím čakajte...';
$string['check_courserole_legacy'] = 'Nepodporovaný archetyp role <a href=\"$a\">role</a>.'; // ORPHANED

?>
