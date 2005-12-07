<?PHP // $Id$ 
      // admin.php - created with Moodle 1.6 development (2005060201)


$string['adminseesallevents'] = 'Administrátori môžu prezerať všetky udalosti';
$string['adminseesownevents'] = 'Administrátori majú rovnaké práva ako ostatní používatelia';
$string['blockinstances'] = 'Výskyty';
$string['blockmultiple'] = 'Viacnásobný';
$string['cachetext'] = 'Doba existencie textovej vyrovnávacej pamäte';
$string['calendarsettings'] = 'Kalendár';
$string['change'] = 'zmeniť';
$string['configallowcoursethemes'] = 'Keď zapnete túto voľbu, bude možné nastaviť pre kurz vlastnú tému. Téma kurzu má najvyššiu prioritu, zobrazí sa aj v prípade, keď bude nastavenie témy hlavnej stránky, používateľa či aktuálneho sedenia odlišné.';
$string['configallowemailaddresses'] = 'Ak chcete obmedziť všetky nové emailové adresy na určité domény, uveďte ich tu, oddelené medzerami. Všetky ostatné domény budú odmietnuté. Napr. <strong>vasaskola.sk inaskola.sk</strong>';
$string['configallowobjectembed'] = 'Ako štandardne nastavené bezpečnostné opatrenie, normálni používatelia nemôžu do textov vkladať multimediálne prvky (napr. Flash) prostredníctvom EMBED a OBJECT tagov v ich HTML (hoci sa to dá bezpečne urobiť použitím filtera multimediálnych pluginov). Ak si želáte, aby boli tieto tagy povolené pre používateľov, potom zapnite túto voľbu.  ';
$string['configallowunenroll'] = 'Ak je toto nastavené na \'Áno\', potom sa môžu študenti sami kedykoľvek odhlásiť z kurzov. V opačnom prípade im to nie je dovolené a celý proces prihlasovania sa do kurzov bude kontrolovaný iba učiteľmi a administrátormi.';
$string['configallowuserblockhiding'] = 'Chcete povoliť používateľom skrytie/zobrazenie postranných blokov na všetkých týchto stránkach? Táto vlastnosť používa Javasript a Cookies pre uloženie aktuálneho stavu pre každý blok a ovplyvní iba používateľov pohľad.';
$string['configallowuserthemes'] = 'Keď zapnete túto voľbu, používateľ si bude môcť nastaviť vlastné témy. Témy používateľa majú vyššiu prioritu, zobrazia sa aj v prípade, keď bude nastavenie témy hlavnej stránky iné (toto neplatí pre témy kurzu).';
$string['configallusersaresitestudents'] = 'Mali by byť všetci používatelia považovaní za študentov vzhľadom k aktivitám, ktoré sú im dostupné  na hlavnej stránke systému? Ak je Vaša odpoveď \'Áno\', potom každý autorizovaný používateľ sa môže týchto aktivít zúčastniť ako študent. Ak je Vaša odpoveď \'Nie\', potom len tí používatelia, ktorí sú už účastníkmi aspoň jedného kurzu, sa môžu zúčastniť týchto aktivít. Ako učitelia týchto aktivít môžu vystupovať len administrátori a špeciálne na to vymenovaní učitelia. ';
$string['configautologinguests'] = 'Mali by byť návštevníci automaticky prihlasovaní ako hostia, ak vstúpia do kurzov s hosťovským prístupom?';
$string['configcachetext'] = 'Toto nastavenie môže zrýchliť prevádzku systému predovšetkým pre tie stránky, ktoré sú obsahovo rozsiahlejšie alebo používajú textové filtre. Kópie textov sa tu budú uchovávať v pôvodnej forme počas vopred stanoveného časového rozpätia. Ak sa tu nastavia nízke hodnoty parametrov, môže to spomaliť všetky činnosti, ale ak sa tu nastavia pomerne vysoké hodnoty parametrov, bude obnova textov (napr. pri pridaní nových linkov) trvať veľmi dlho.';
$string['configclamactlikevirus'] = 'Považovať súbory za napadnuté vírusom';
$string['configclamdonothing'] = 'Považovať súbory za normálne';
$string['configclamfailureonupload'] = 'Ak ste nastavili clam, aby skenoval prenášané súbory, ale nie je správne nastavený alebo z neznámych dôvodov nereaguje tak, ako má, ako sa má systém správať? Ak si vyberiete \'Považovať súbory za napadnuté vírusom\', budú súbory presunuté do karanténnej oblasti alebo vymazané. Ak si vyberiete \'Považovať súbory za normálne\', budú súbory presunuté na to miesto, ktoré si Vy určíte bez problémov. Samozrejme, administrátori budú upozornení, ak clam nebude fungovať. Ak si vyberiete \'Považovať súbory za napadnuté vírusom\' a z neznámych dôvodov clam nebude reagovať správne (väčšinou je nesprávne nastavená cesta ku clam), všetky prenášané súbory budú presunuté do zadanej karanténnej oblasti alebo vymazané. Buďte opatrný pri tomto natavení.';
$string['configcountry'] = 'Ak si tu vyberiete krajinu, tak bude táto krajina nastavá aj pre nové používateľské kontá. Ak chcete, aby si používatelia sami vybrali krajinu, nenastavujte ju tu.';
$string['configdbsessions'] = 'Ak povolíte túto voľbu, toto nastavenie bude používať databázu na uchovanie informácií o aktuálnych sedeniach (lekciách). Toto je výhodné použiť najmä pri obsahovo rozsiahlejších stránkach založených na zoskupení serverov. Pre väčšinu stránok by táto voľba mala zostať neaktívna, aby sa namiesto databázy používal disk servera. Prosím berte na vedomie, že ak teraz zmeníte toto nastavenie, všetci používatelia (vrátane Vás) budú zo systému odhlásení.';
$string['configdebug'] = 'Ak zapnete túto voľbu, PHP zvýši oznamovanie chýb tak, že bude uvádzaných viac varovaní. Toto je užitočné len pre vývojových pracovníkov.';
$string['configdeleteunconfirmed'] = 'Ak používate emailovú autorizáciu, toto je časové rozpätie, počas ktorého bude odpoveď akceptovaná používateľmi. Po tomto období budú staré nepoužívané kontá vymazané.    ';
$string['configdenyemailaddresses'] = 'Ak chcete zakázať emailové adresy z určitých domén, uveďte ich tu, oddelené medzerami. Všetky ostatné domény budú akceptované. Napr. <strong>atlas.sk szm.sk hotmail.com</strong>';
$string['configdigestmailtime'] = 'Ľuďom, ktorí sa rozhodnú pre zasielanie emailov v štruktúrovanej forme, bude každý deň prichádzať email stručne informujúci o najnovších udalostiach v kurze. Toto nastavenie určuje tú časť dňa, kedy bude tento email zasielaný používateľom (odošle ho nasledujúci cron po ukončení tejto hodiny).  ';
$string['configdisplayloginfailures'] = 'Toto zobrazí vybraným používateľom informácie o predchádzajúcich neúspešných pokusoch o prihlásenie.';
$string['configenablerssfeeds'] = 'Tento prepínač umožní RSS kanály z iných stránok. Aby ste videli všetky aktuálne zmeny, musíte aktivovať RSS kanály aj v jednotlivých moduloch - choďte do Nastavení Moodle v Konfigurácii administrátora.';
$string['configenablerssfeedsdisabled'] = 'Voľba nie je dostupná, pretože RSS kanály sú deaktivované na celej Stránke. Ak ich chcete aktivovať, choďte do Nastavení premenných v Konfigurácii administrátora.';
$string['configerrorlevel'] = 'Vyberte si množstvo PHP varovaní, ktoré chcete mať zobrazované. Normal je zvyčajne najlepšia možnosť.';
$string['configextendedusernamechars'] = 'Ak povolíte toto nastavenie, študenti môžu vo svojich používateľských menách používať akékoľvek znaky (to však neovplyvní ich skutočné mená). Štandardné nastavenie je \'Nesprávne\', ktoré obmedzuje používané znaky v menách len na alfanumerické znaky.';
$string['configfilterall'] = 'Filtrovať všetky reťazce, vrátane hlavičiek, titulov, navigačnej lišty a podobne. Toto je najviac užitočné pri používaní viacjazyčného filtera, inak spôsobuje iba mierne zvýšenú záťaž pri generovaní stránok.';
$string['configfilteruploadedfiles'] = 'Aktivovaním tejto voľby bude Moodle spracovávať všetky načítané HTML a textové súbory s filtrami predtým, ako sa zobrazia.';
$string['configforcelogin'] = 'Normálne môže byť hlavná stránka s uvedeným zoznamom kurzov (nie s konkrétnymi kurzami) prezeraná používateľmi bez toho, aby sa predtým prihlásili. Ak chcete, aby sa používatelia prihlásili predtým, ako čokoľvek urobia na stránke, potom by ste mali aktivovať toto nastavenie. ';
$string['configforceloginforprofiles'] = 'Aktivovaním tohto nastavenia sa každý reálny používateľ (nie hosť) bude musieť najskôr prihlásiť, ak si chce prezerať profily používateľov. Táto voľba je štandardne deaktivovaná (\'Nesprávne\'), aby si perspektívni študenti mohli prečítať informácie o učiteľoch jednotlivých kurzov. Znamená to však tiež, že webové vyhľadávače ich dokážu vyhľadať a prezerať.';
$string['configframename'] = 'Ak používate Moodle vo web-frame (rámci), potom tu uveďte názov tohto rámca. Inak nechajte tento názov ako \'_top\'.';
$string['configfullnamedisplay'] = 'Toto definuje, ako sa zobrazujú mená, ak sú uvedené v plnej rozsahu. Pre väčšinu jednojazyčných stránok je najlepšie nastavenie toto: \'Meno a Priezvisko\', ale môžete napríklad aj skryť všetky priezviská alebo to nechať na samotný jazykový balík, nech sa rozhodne (niektoré jazyky majú špecifické zvyklosti). ';
$string['configgdversion'] = 'Označte verziu GD, ktorá je nainštalovaná. Nastavená verzia je tá, ktorá bola automaticky zistená. Nemeňte to, iba ak skutočne viete čo robíte!';
$string['confightmleditor'] = 'Vyberte si, či chcete povoliť používanie zakomponovaného HTML textového editora alebo nie. Aj keď si vyberiete povoliť, tento editor sa objaví iba keď používateľ používa kompatibilný prehliadač (IE 5.5 alebo novšie verzie). Používatelia sa ale môžu tiež rozhodnúť nepoužívať tento prehliadač.';
$string['configidnumber'] = 'Špecifické nastavenia či (a)Používatelia nebudú požiadaní o zadanie ID čísla vôbec, (b)Používatelia budú požiadaní o zadanie ID čísla, ale nemusia ho vyplniť, (c)Používatelia budú požiadaní o zadanie ID čísla a musia ho vyplniť. Ak bude zadané ID číslo používateľa, bude zobrazované v profile.';
$string['configintro'] = 'Na tejto stránke môžete špecifikovať rôzne konfiguračné premenné, ktoré pomôžu Moodle správne spolupracovať s Vašim serverom. Veľmi sa tým nezaťažujte - východiskové nastavenia zvyčajne pracujú správne a vždy sa môžete k tejto stránke vrátiť a tieto nastavenia zmeniť.';
$string['configintroadmin'] = 'Na tejto stránke by ste mali konfigurovať Vaše hlavné administrátorské konto. Administrátor má plnú kontrolu nad celou stránkou. Dbajte na to, aby mal bezpečné používateľské meno, heslo a tiež platnú emailovú adresu. Neskôr môžete vytvoriť viac administrátorských účtov.';
$string['configintrosite'] = 'Táto stránka Vám umožňuje konfigurovať hlavnú stránku a meno tejto stránky. Neskôr to môžete kedykoľvek zmeniť cez link \'Nastavenia stránky\' na domovskej stránke. ';
$string['configintrotimezones'] = 'Táto stránka umožní vyhľadať nové informácie o svetových časových pásmach (spolu s informáciami o pravidlách zmeny letného a zimného času). Tieto miesta budú skontrolované v poradí: $a. Táto procedúra je bezpečná a nepoškodí štandardnú inštaláciu. 
Chcete aktualizovať Vaše časové pásma teraz? ';
$string['configlang'] = 'Vyberte si východzí jazyk pre celú stránku. Používatelia môžu neskôr toto nastavenie zmeniť.';
$string['configlangcache'] = 'Uložte výber jazykov do vyrovnávajúcej pamäte. Ušetríte tak veľa pamäte a výkonu pri spracovávaní stránok. Pokiaľ zapnete túto voľbu, môže sa menu chvíľu (niekoľko minút) aktualizovať, pri pridaní či odstránení jazyka.';
$string['configlangdir'] = 'Pri väčšine jazykov sa píše zľava doprava, ale pri niektorých, napr.arabčina a hebrejčina, sa píše sprava doľava.';
$string['configlanglist'] = 'Nechajte túto voľbu prázdnu, ak chcete, aby si používatelia mohli vybrať ľubovoľný jazyk z tejto verzie Moodle. Tento zoznam môžete skrátiť, ak uvediete zoznam jazykov, oddelených čiarkou, napr.

sk,cz,en,es_es,fr,it.';
$string['configlangmenu'] = 'Vyberte si, či chcete zobraziť menu pre voľbu jazyka na www stránkach Moodle (domovská stránka, autorizačná stránka a podobne). To neovplyvní používateľove možnosti nastavenia preferovaného jazyka vo svojom vlastnom profile.';
$string['configlocale'] = 'Vyberte si miestne jazykové nastavenie - toto ovplyvní formát a jazyk údajov. Tieto miestne údaje musíte mať nainštalované vo Vašom operačnom systéme (napríklad en_US alebo es_ES). Ak neviete, čo si vybrať, nechajte toto prázdne.';
$string['configloginhttps'] = 'Aktivovanie tejto voľby bude znamenať, že Moodle bude používať bezpečné https spojenie len pri autorizačnej stránke (pri prihlasovaní do systému)uvedením bezpečného prihlasovacieho mena. Následne sa vráti k normálnemu http protokolu URL pre všeobecnú rýchlosť. UPOZORNENIE: Toto nastavenie VYŽADUJE, aby https protokol bol aktivovaný na web serveri - ak nie je, MALI BY STE ZAMKNÚŤ VAŠU STRÁNKU.';
$string['configloglifetime'] = 'Táto voľba špecifikuje dĺžku časového intervalu, počas ktorého si chcete uchovať záznamy o používateľských aktivitách. Záznamy, ktoré sú staršie, sa automaticky vymažú. Je dobré uchovávať si záznamy tak dlho, ako je to možné, ale ak máte veľmi zaneprázdnený server a máte problémy s jeho rýchlosťou, potom si vyberte kratší čas pre uchovávanie záznamov.';
$string['configlongtimenosee'] = 'Ak sa študenti dlhý čas neprihlásia, sú automaticky vyradení z kurzov. Tento parameter stanovuje tento časový limit.';
$string['configmaxbytes'] = 'Táto voľba špecifikuje maximálnu veľkosť prenášaných súborov na celej stránke. Toto nastavenie je limitované PHP nastavením upload_max_filesize a nastavením Apache LimitRequestBody. Nastavenie maxbytes ohraničuje rozsah veľkostí, z ktorých si môžete vybrať v každej úrovni kurzu alebo modulu.';
$string['configmaxeditingtime'] = 'Toto určuje čas, ktorý majú ľudia na upravovanie príspevkov do fóra, spätnej väzby pre písomné práce , atď. Zvyčajne je to 30 minút.';
$string['configmessaging'] = 'Má byť aktivovaný systém posielania správ medzi používateľmi stránky?';
$string['confignoreplyaddress'] = 'Emaily sa niekedy posielajú v mene používateľa (napr. prispievanie do fór). Emailová adresa, ktorú tu špecifikujete, bude používaná ako adresa \'Od koho\' v prípade, ak prijímatelia nie sú schopní priamo odpovedať používateľovi (napr. keď si používateľ vyberie zachovanie súkromnej adresy).';
$string['confignotifyloginfailures'] = 'Ak sa uchovávajú záznamy o neúspešných pokusoch o prihlásenie do systému, môžu byť tieto odoslané emailom. Kto by si mal prezerať tieto oznámenia?';
$string['confignotifyloginthreshold'] = 'Ak sú aktívne oznámenia o neúspešných pokusoch o prihlásenie do systému, koľko takýchto prihlásení od jedného používateľa alebo jednej IP adresy sa má zobrazovať v oznámeniach?';
$string['configopentogoogle'] = 'Ak aktivujete toto nastavenie, potom Google bude mať oprávnenie vstupu do Vašej stránky ako Hosť. Naviac, ľudia prichádzajúci na Vašu stránku z prostredia vyhľadávača Google, budú automaticky prihlasovaní ako Hostia. Betrte prosím na vedomie, že takýto prístup môže byť realizovaný len u tých kurzov, ktoré povoľujú vstup hosťov. ';
$string['configpathtoclam'] = 'Cesta do Clam AV. Pravdepodobne niečo ako usr/bin/clamscan alebo /usr/bin/clamdscan. Túto cestu potrebujete, aby Clam AV fungoval správne.';
$string['configproxyhost'] = 'Ak tento <b>server</b> potrebuje používať server proxy (napríklad bránu firewall) pri prístupe na Internet, tak tu uveďte hostiteľské meno a port. V opačnom prípade to nechajte prázdne.';
$string['configquarantinedir'] = 'Ak chcete, aby Clam AV presunul napadnuté súbory do karanténneho adresára, napíšte ho sem. Musí byť ale zobraziteľný web serverom. Ak túto voľbu nevyplníte alebo ak zadáte adresár, ktorý neexistuje alebo sa nedá zobraziť, budú napadnuté súbory vymazané. Nepridávajte koncové lomítko.';
$string['configrunclamonupload'] = 'Spustiť Clam AV pri prenášaní súboru? K tomu budete potrebovať nastaviť správnu cestu v pathtoclam. (Clam AV je voľne šíriteľný vírusový skener, ktorý si môžete stiahnuť na http://www.clamav.net/)';
$string['configsectioninterface'] = 'Rozhranie';
$string['configsectionmail'] = 'Pošta';
$string['configsectionmaintenance'] = 'Údržba';
$string['configsectionmisc'] = 'Rôzne';
$string['configsectionoperatingsystem'] = 'Operačný systém';
$string['configsectionpermissions'] = 'Práva';
$string['configsectionsecurity'] = 'Bezpečnosť';
$string['configsectionuser'] = 'Používateľ';
$string['configsecureforms'] = 'Moodle môže použiť dodatočné bezpečnostné opatrenia pri akceptovaní vstupov z web formulárov. Ak to umožníte, potom sa bude overovať premenná HTTP_REFERER, ktorú pošle browser a porovná sa s aktuálnou adresou formulára. Toto môže spôsobiť (vo veľmi zriedkavých prípadoch) problémy, napr. ak je používateľ používa firewall, ktorý je konfigurovaný tak, že odstráni premennú HTTP_REFERER. Vtedy sa môže stať, že formulár Vám \'zmrzne\'. Ak sa na to používatelia sťažujú, môžete deaktivovať toto nastavenie. V tomto prípade sa však vystavujete väčším útokom zvonku (brute force password attacks).
Ak si nie ste istý, nechajte túto voľbu nastavenú na \'Yes\'. ';
$string['configsessioncookie'] = 'Toto nastavenie upravuje meno cookie používaného v Moodle sedeniach (lekciách). Táto možnosť je voliteľná a užitočná v tom prípade, ak je spustená viac ako jedna kópia Moodle v rámci tej istej www stránky (aby ste sa vyhli popleteniu cookies).';
$string['configsessiontimeout'] = 'Ak sú ľudia pripojení na túto stránku dlho nečinní (bez \"prechádzania\" stránok), sú automaticky odpojení (ich sedenie je ukončené). Táto premenná určuje, aký dlhý by mal byť ten časový interval nečinnosti.';
$string['configshowblocksonmodpages'] = 'Niektoré moduly aktivít podporujú možnosť zobrazovania bloku na Vašich stránkach. Pokiaľ túto voľbu zapnete, môžu učitelia pridávať nové bloky na okraj svojich stránok, inak rozhranie nebude zobrazovať túto možnosť.';
$string['configshowsiteparticipantslist'] = 'Všetci títo používatelia stránky a učitelia budú v zozname účastníkov stránky. Komu by malo byť povolené prezeranie tohto zoznamu?';
$string['configsitepolicy'] = 'Ak máte definovanú podmienku, ktorú všetci používatelia musia vidieť a s ňou súhlasiť pred používaním tejto stránky, potom sem vložte danú URL adresu; v opačnom prípade túto voľbu nevypĺňajte. URL adresa môže byť nastavená v ktoromkoľvek mieste - jedno z najvhodnejších miest by bol súbor v súboroch stránky, napr. http://yoursite/file.php/1/policy.html ';
$string['configslasharguments'] = 'Súbory (obrázky atď.) sú prenášané prostredníctvom skriptu používajúceho značku \'lomítko\' (druhá možnosť vo výbere). Táto metóda umožňuje, aby boli súbory ľahšie zachytené na webových prehliadačoch, proxy serveroch atď. Bohužiaľ, niektoré PHP servery  túto metódu nepodporujú. Ak máte problémy pri zobrazovaní stiahnutých súborov alebo obrázkov (napr. obrázky používateľa), nastavte tu prvú možnosť vo výbere.';
$string['configsmtphosts'] = 'Zadajte plný názov jedného alebo viacerých SMTP serverov, ktoré má Moodle používať pri posielaní pošty (napríklad \'mail.a.com\' alebo \'mail.a.com;mail.b.com\'). Ak to neuvediete, Moodle použije postup posielania pošty podľa východzích nastavení.';
$string['configsmtpuser'] = 'Ak ste hore uviedli SMTP server a ten vyžaduje overovanie, uveďte tu používateľské meno a heslo.';
$string['configteacherassignteachers'] = 'Môžu obyčajní učitelia prideliť iných učiteľov do toho kurzu, v ktorom vyučujú? Ak \'Nie\', potom iba tvorcovia kurzov a administrátori môžu prideľovať učiteľov do kurzov.';
$string['configthemelist'] = 'Pokiaľ ponecháte toto pole prázdne, povolíte použitie ktorejkoľvek platnej témy. Pokiaľ chcete skrátiť výber tém, môžete tu určiť zoznam mien tém oddelených čiarkou. Napríklad: standard,orangewhite';
$string['configtimezone'] = 'Tu môžete nastaviť východzie časové pásmo. Toto je len VÝCHODZIE časové pásmo pre zobrazovanie dátumov - každý používateľ toto môže zmeniť nastavením svojho preferovaného zobrazovania dátumu v profile používateľa. \'Čas servera\' na Moodle bude implicitne nastavený podľa operačného systému servera ale \'Čas servera\' v profile používateľa bude nastavený podľa nastavenia časového pásma.';
$string['configunzip'] = 'Uveďte umiestnenie Vášho unzip programu (iba Unix, nepovinné). Je to potrebné pre rozbalenie zozipovaných archívov na serveri. Ak túto voľbu nevyplníte, Moodle bude používať vlastný interný postup.';
$string['configvariables'] = 'Nastaviť premenné';
$string['configwarning'] = 'Postupujte veľmi opatrne pri zmenách týchto nastavení - nesprávne hodnoty môžu spôsobiť problémy.';
$string['configzip'] = 'Uveďte cestu k Vášmu zip programu (len pre UNIX, nepovinné). Pokiaľ je cesta špecifikovaná, bude použitá pre tvorbu zip archívov na serveri. Pokiaľ ju ponecháte prázdnu, Moodle bude používať vlastný interný postup.';
$string['confirmation'] = 'Potvrdenie';
$string['cronwarning'] = '<a href=\"cron.php\" title=\"cron.php\">Skript pre údržbu cron.php?</a> nebol spustený najmenej 24 hodín.<br /><a href=\"../doc/?frame=install.html&#8834;=cron\">Táto dokumentácia o inštalácii</a> vysvetľuje, ako tento proces môžete zautomatizovať.';
$string['edithelpdocs'] = 'Upraviť dokumentáciu nápovede';
$string['editstrings'] = 'Upraviť textové reťazce';
$string['filterall'] = 'Filtrovať všetky reťazce';
$string['filteruploadedfiles'] = 'Filtrovať prenášané súbory';
$string['helpadminseesall'] = 'Môžu si administrátori prezerať všetky udalosti kalendára, alebo len tie, ktoré sa ich týkajú? ';
$string['helpcalendarsettings'] = 'Konfigurovať viaceré aspekty kalendára týkajúce sa dátumu/času v prostredí Moodle';
$string['helpforcetimezone'] = 'Môžete povoliť používateľom, aby si individuálne zvolili ich vlastné časové pásmo, alebo nastaviť jedno časové pásmo pre každého.';
$string['helpsitemaintenance'] = 'Pre aktualizácie a ďalšiu údržbu';
$string['helpstartofweek'] = 'Ktorým dňom v týždni by sa mal začínať týždeň v kalendári?';
$string['helpupcominglookahead'] = 'Koľko dní dopredu sa má štandardne zobrazovať v kalendári pri prezeraní nadchádzajúcich udalostí? ';
$string['helpupcomingmaxevents'] = 'Koľko nadchádzajúcich udalostí (maximum) sa má štandardne zobrazovať používateľom?';
$string['helpweekenddays'] = 'Ktoré dni v týždni sú považované za \"víkend\", t.j. sú označené inou farbou?';
$string['importtimezones'] = 'Aktualizovať kompletný zoznam časových pásiem';
$string['importtimezonescount'] = '$a->count položiek importovaných z $a->source';
$string['importtimezonesfailed'] = 'Nebol nájdený zdroj! (Zlá správa)';
$string['incompatibleblocks'] = 'Nekompatibilné bloky';
$string['optionalmaintenancemessage'] = 'Správa o údržbe stránky (nepovinné)';
$string['pleaseregister'] = 'Prosím, zaregistrujte si Vašu stránku, aby ste odstránili toto tlačidlo';
$string['sitemaintenance'] = 'Táto stránka sa nachádza v režime údržby a momentálne nie je prístupná';
$string['sitemaintenancemode'] = 'Režim údržby';
$string['sitemaintenanceoff'] = 'Režim údržby bol deaktivovaný a táto stránka bude ďalej bežať normálne';
$string['sitemaintenanceon'] = 'Vaša stránka je momentálne v režime údržby (prihlásiť sa a používať stránku môžu iba administrátori).';
$string['sitemaintenancewarning'] = 'Vaša stránka je momentálne v režime údržby (prihlásiť sa a používať stránku môžu iba administrátori). Pre návrat k normálnej prevádzke stránky <a href=\"maintenance.php\">deaktivujte režim údržby</a>.';
$string['tabselectedtofront'] = 'Mal by byť označený tag v aktuálnom riadku v tabuľkách s tabulátorom umiestnený vpredu?';
$string['therewereerrors'] = 'Vo Vašich údajoch boli nájdené chyby';
$string['timezoneforced'] = 'Toto je nastavené administrátorom stránky';
$string['timezoneisforcedto'] = 'Nastaviť rovnaké použitie pre všetkých používateľov';
$string['timezonenotforced'] = 'Používateľ si môže vybrať vlastnú časovú zónu';
$string['upgradeforumread'] = 'Novou vlastnosťou pridanou do Moodle 1.5 je sledovanie čítaných/nečítaných príspevkov do fór.<br />
Pre použitie tejto funkcie je potrebné <a href=\"$a\">aktualizovať tabuľky</a>.';
$string['upgradeforumreadinfo'] = 'Novou vlastnosťou pridanou do Moodle 1.5 je sledovanie čítaných/nečítaných príspevkov do fór. Pre použitie tejto funkcie je potrebné aktualizovať tabuľky všetkými informáciami pre sledovanie existujúcich príspevkov. Toto môže trvať podľa veľkosti Vašej stránky až niekoľko hodín a môže to veľmi zaťažiť Váš databázový server. Napriek tomu bude Vaša stránka stále funkčná a používatelia nebudú zasiahnutí. Ak tento proces raz začnete, musíte ho aj dokončiť  (nechajte otvorené okno v prehliadači). Napriek tomu, pokiaľ tento proces zastavíte zatvorením okna, nemusíte sa báť, môžete ho naštartovať znovu.<br /><br />
Chcete naštartovať aktualizáciu teraz?';
$string['upgradelogs'] = 'Vaše staré záznamy musia byť aktualizované, aby bol systém plne funkčný.<a href=\"$a\">Viac informácií</a>';
$string['upgradelogsinfo'] = 'Nedávno boli prevedené nejaké zmeny týkajúce sa spôsobu, akým sú záznamy uchovávané. Aby ste si mohli prezerať všetky Vaše staré záznamy, musíte ich aktualizovať. Toto môže trvať dosť dlho (napr. niekoľko hodín - to záleží od Vašej stránky) a môže to dosť zaťažiť samotný databázový server u obsiahlejších stránok. Ak tento proces raz začnete, musíte ho aj dokončiť (nechajte otvorené okno v prehliadači). Neobávajte sa, Vaša stránka bude pre ostatných používateľov fungovať bez problémov, pokým Vy budete aktualizovať záznamy. <br /><br />Chcete aktualizovať Vaše záznamy teraz?';
$string['upgradesure'] = '<p>Vaše súbory v Moodle boli zmenené a Vy sa práve chystáte povýšiť Váš server na túto verziu:</p>
<p><b>$a</b></p>
<p>Ak to teraz začnete, už sa nemôžete vrátiť späť.</p>
<p>Ste si istý, že chcete povýšiť tento server na túto verziu?</p>';
$string['upgradingdata'] = 'Údaje sa aktualizujú';
$string['upgradinglogs'] = 'Záznamy sa aktualizujú';

?>
