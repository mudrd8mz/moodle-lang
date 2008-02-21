<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.8.2+ (2007021520)


$string['adminacceptccs'] = 'Aké typy kreditných kariet prijaté?';
$string['adminaccepts'] = 'Určte povolené platobné metódy a ich typy.';
$string['adminauthcode'] = 'Ak používateľova kreditná karta nemôže byť zachytená priamo cez internet, získať autorizačný kód cez telefón zo zákazníkovej banky.';
$string['adminauthorizeccapture'] = 'Kontrola a automatické spracovanie transakcií.';
$string['adminauthorizeemail'] = 'E-mailove upozorňovanie';
$string['adminauthorizesettings'] = 'Nastavenie Authorize.net';
$string['adminauthorizewide'] = 'Globálne nastavenia';
$string['adminavs'] = 'Vyberte túto možnosť, ak máte aktivovaný kontrolný systém Address Verification (AVS) vo svojom účte authorize.net. Používatelia musia vyplniť na platobnom formulári pole ulica, štát, zem a PSČ (Zip Code).';
$string['adminconfighttps'] = 'Prosím zaistite, že máte \"<a href=\"$a->url\"> zapnuté loginhttps ON</a>\" na spustenie tohto plugin<br />in Správa >> Premenné >> Bezpečnosť >> Bezpečnosť HTTP.';
$string['adminconfighttpsgo'] = 'Na konfiguráciu tohto pluginu choďte na <a href=\"$a->url\">zabezpečenú stránku</a>';
$string['admincronsetup'] = 'Skript cron.php, ktorý má na starosti bežnú údržbu serveru, nebol behom posledných 24 hodin spustený.<br />Ak chcete používať automatické spracovanie transakcií, musí byť cron v prevádzke.<br /><b>Povoľte</b> zápis cez \'Authorize.net Credit Card Gateway\' a <b> spustite cron</b>, alebo <b>zrušte</b> voľbu <b>an_review</b>.<br />Pokiaľ deaktivujete automatické spracovanie transakcií, budú transakcie zrušené, ak ich nespracujete do 30 dní.<br />Zaškrtnite voľbu <b>an_review</b> a vložte <b>\'0\' (nulu)</b> do poľa <b>an_capture_day</b>,<br />ak chcete transakcie potvrdiť/zamietnuť <b>ručne</b> behom 30 dní od podania.\';';
$string['adminemailexpired'] = 'Odoslať e-mail správcom s upozornením <b>$a</b> deň/dní pred vypršaním lehoty pre uskutočnenie transakcie. Túto voľbu je vhodné použiť pri ručnom spracovaní transakcií.';
$string['adminemailexpiredsort'] = 'Čím sa riadi upozorňovanie na transakcie s blížiacim sa koncom lehoty pre uskutočnenie.';
$string['adminemailexpiredsortcount'] = 'Počet transakcií';
$string['adminemailexpiredsortsum'] = 'Celkový súčet množstva';
$string['adminemailexpiredteacher'] = 'Ak ste aktivovali ručné spracovanie transakcií a ak učitelia môžu spravovať transakcie, je tiež možné zasielať oznámenia o transakciách s blížiacim sa koncom lehoty pre uskutočnenie učiteľom.
Vašim učiteľom bude zaslaná správa o počte transakcií s blížiacim sa koncom lehoty pre uskutočnenie e-mailom.';
$string['adminemailexpsetting'] = '(0=neposielať e-mail, prednastavenia=2, maximum=5)<br />(Nastavenie pre e-mailové upozornenie pri ručnom spracovaní transakcií: cron=v prevádzke, an_review=začiarknuté, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Deň automatického spracovania transakcií';
$string['adminhelpreviewtitle'] = 'Kontrola objednávky';
$string['adminneworder'] = 'Administrátor,

dostali ste novú objednávku na spracovanie:

ID požiadavky: $a->orderid
ID transakcie: $a->transid
Používateľ: $a->user
Kurz: $a->course
Množstvo: $a->amount

STAV SLUŽBY AUTOMATICKÉHO SPRACOVANIA TRANSAKCIÍ: $a->acstatus

Ak je aktivované automatické spracovanie transakcií, bude úhrada kreditnou kartou uskutočnená $a->captureon a používateľ bude následne zapísaný do kurzu; inak lehota pre transakciu vyprší $a->expireon a po to tomto dni nebude mozné platbu uskutočniť.

Platbu a zápis používateľa do kurzu môžeme tiež potvrdiť/zamietnuť na tejto adrese $a->url';
$string['adminnewordersubject'] = '$a->course; Nová objednávka na spracovenie: $a->orderid';
$string['adminpendingorders'] = 'Deaktivovali ste si automatické spracovanie transakcií. <br />Spolu $a->count transakcií s štatútom \'autorizované/rezervované\' bude zrušených, pokiaľ ich neskontrolujete. <br />K akceptovaniu/zamietnutiu platieb, choďte na stránku <a href=\'$a->url\'>Správa platieb</a>';
$string['adminreview'] = 'Skontrolovať objednávku pred spracovaním.';
$string['adminteachermanagepay'] = 'Učitelia môžu spravovať platby za kurz.';
$string['allpendingorders'] = 'Všetky čakajúce objednávky';
$string['amount'] = 'Množstvo';
$string['anlogin'] = 'Authorize.net: Prihlasovacie meno';
$string['anpassword'] = 'Authorize.net: Heslo (nevyžaduje sa)';
$string['anreferer'] = 'Sem vložte URL referer, pokiaľ ho máte nastavený vo Vašom účte na authorize.net. Do HTTP požiadavky bude začlenená hlavička \"Referer: URL\".';
$string['antestmode'] = 'Authorize.net: Testovacia transakcia v testovacom režime (nestiahne žiadne peniaze)';
$string['antrankey'] = 'Authorize.net: Kľúč transakcie';
$string['approvedreview'] = 'Prehľad schválených';
$string['authcaptured'] = 'Autorizované/rezervované';
$string['authcode'] = 'Kód autorizácie';
$string['authorize:managepayments'] = 'Správa platieb';
$string['authorize:uploadcsv'] = 'Nahrať CSV súbor';
$string['authorizedpendingcapture'] = 'Autorizované/rezervované';
$string['avsa'] = 'Adresa (ulica) súhlasia, ale PSČ nie';
$string['avsb'] = 'Neboli zadané údaje o adrese';
$string['avse'] = 'Chyba kontrolného systému AVS';
$string['avsg'] = 'Banka vydávajúca karty nesídli v USA';
$string['avsn'] = 'Adresa (ulica) ani PSČ nesúhlasia';
$string['avsp'] = 'Nemožno použiť kontrolu pomocou AVS';
$string['avsr'] = 'Opakujte - systém je nedostupný, alebo vypršal časový limit žiadosti';
$string['avsresult'] = 'Výsledok AVS kontroly: $a';
$string['avss'] = 'Služba nepodporuje vydavateľa';
$string['avsu'] = 'Údaj o adrese nie je k dispozícii';
$string['avsw'] = '9 miestne PSČ súhlasí, ale adresa nie';
$string['avsx'] = '9 miestne PSČ súhlasí a adresa súhlasí';
$string['avsy'] = '5 miestne PSČ súhlasí a adresa súhlasí';
$string['avsz'] = '5 miestne PSČ súhlasí, ale adresa nie';
$string['canbecredit'] = 'Možno fungovať až  do $a->upto';
$string['cancelled'] = 'Zrušené';
$string['capture'] = 'Rezervované';
$string['capturedpendingsettle'] = 'Autorizované/Rezervované úhrady';
$string['capturedsettled'] = 'Autorizované/uhradené';
$string['captureyes'] = 'Kreditná karta bude autorizovaná a študent bude prihlásený do kurzu. Pokračovať?';
$string['ccexpire'] = 'Dátum zániku platnosti (vypršania)';
$string['ccexpired'] = 'Platnosť kreditnej karty už vypršala';
$string['ccinvalid'] = 'Neplatné číslo karty';
$string['ccno'] = 'Číslo kreditnej karty';
$string['cctype'] = 'Typ kreditnej karty';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = 'Pozrite sa na zadnú stranu karty (posledné 3 čísla)';
$string['choosemethod'] = 'Ak poznáte kód k zápisu do kurzu, zadajte ho;<br />  V opačnom prípade budete musieť za tento kurz zaplatiť.';
$string['chooseone'] = 'Vypíšte jedno alebo obidve nasledujúce polia';
$string['costdefaultdesc'] = '<strong> v nastaveniach kurzu vložte hodnotu -1</strong> pre použitie tejto pôvodnej ceny v poli pre cenu';
$string['cutofftime'] = 'Čas spracovania transakcií. Kedy je posledná transakcia zobratá na uhradenie?';
$string['delete'] = 'Zrušiť';
$string['description'] = 'Modul Authorize.net umožňuje nastaviť platenie za kurzy pomocou kreditnej karty. Pokiaľ je cena niektorého kurzu nulová, nebude od používateľov sa nebude vyžadovať platba za vstup pri zápise do kurzu. Cenu je možné nastaviť globálne pre všetky kurzy na stránkach a tiež pre každý kurz osobitne. Pokiaľ je nastavená cena za individuálny kurz, potom sa globálne nastavenie pre všetky kurzy neberie do úvahy.';
$string['echeckabacode'] = 'Bankové číslo ABA';
$string['echeckaccnum'] = 'Číslo bankového účtu';
$string['echeckacctype'] = 'Typ bankového účtu';
$string['echeckbankname'] = 'Názov banky';
$string['echeckbusinesschecking'] = 'Overenie firmy';
$string['echeckchecking'] = 'Overenie';
$string['echeckfirslasttname'] = 'Vlastník bankového účtu';
$string['echecksavings'] = 'Úspory';
$string['enrolname'] = 'Authorize.net: Brána pre kreditné karty';
$string['expired'] = 'Vypršané';
$string['haveauthcode'] = 'Už mám autorizačný kód';
$string['howmuch'] = 'Koľko?';
$string['httpsrequired'] = 'Bohužiaľ Vás musíme informovať, že Vaša žiadosť nemôže byť teraz zpracovaná. Nepodarilo sa vykonať potrebné nastavenia tejto stránky. <br /><br /> Prosím nevkladajte číslo Vašej kreditnej karty, pokiaľ neuvidíte žltý zámok v spodnej lište. Keď ho uvidíte, znamená to, že komunikácia medzi klientom a serverom je šifrovaná. Takže číslo Vašej kreditnej karty počas prenosu po sieti nebude môcť zachytiť žiadna tretia osoba.';
$string['invalidaba'] = 'Neplatné číslo ABA';
$string['invalidaccnum'] = 'Neplatné číslo účtu';
$string['invalidacctype'] = 'Neplatný typ účtu';
$string['logindesc'] = 'Táto voľba musí byť zapnutá (ON). <br /><br /> Prosím presvedčte sa, že máte zapnuté <a href=\"$a->url\"> loginhttps ON</a> v časti Administratíva >> Premenné >> Zabezpečenie.<br /><br /> Po zapnutí bude Moodle používať bezpečné http spojenia iba pre prihlasovanie a pre stránky s platbami.';
$string['logininfo'] = 'Prihlasovacie meno, heslo a kľúč transakcie nie sú z bezpečnostných dôvodov zobrazené. Nemusíte ich zadávať znovu, ak ste ich už vyplnili. Ak ste niektoré už vyplnili, uvidíte vľavo od rámčeka zelený text. Ak tieto polia vypĺnate prvýkrát, prihlasovacie meno (*) je povinné, musíte vložiť <strong>alebo</strong> kľúč transakcie (#1) <strong>alebo</strong> heslo (#2) do príslušného rámčeku. Z bezpečnostých dôvodov Vám doporučujeme vkladať kľúč transakcie. Ak chcete vymazať súčasné heslo, začiarknite checkbox.';
$string['methodcc'] = 'Kreditná karta';
$string['methodecheck'] = 'e-šek (ACH)';
$string['missingaba'] = 'Chýba číslo ABA';
$string['missingaddress'] = 'Chýba adresa';
$string['missingbankname'] = 'Chýba názov banky';
$string['missingcc'] = 'Chýba číslo karty';
$string['missingccauthcode'] = 'Chýba autorizačný kód';
$string['missingccexpire'] = 'Chýba dátum vypršania';
$string['missingcctype'] = 'Chýba typ karty';
$string['missingcvv'] = 'Chýba overovací kód';
$string['missingzip'] = 'Chýba PSČ';
$string['mypaymentsonly'] = 'Ukázať len moje platby';
$string['nameoncard'] = 'Meno na karte';
$string['new'] = 'Nový';
$string['noreturns'] = 'Žiadne vrátené platby';
$string['notsettled'] = 'Neuhradené';
$string['orderid'] = 'ID objednávky';
$string['paymentmanagement'] = 'Správa platieb';
$string['paymentmethod'] = 'Platobná metóda';
$string['paymentpending'] = 'Vaša platba za tento kurz, pod číslom $a->orderid, sa spracováva. Vid <a href=\'$a->url\'>Podrobnosti o objednávke</a>.';
$string['pendingecheckemail'] = 'Vážený manažér,

na potvrdenie čaká $a->count e-šekov a Vy musíte nahrať csv súbor, aby boli užívatelia zapísaní.

Kliknite na nasledujúci odkaz a prečítajte si nápovedu k tejto stránke:
$a->url';
$string['pendingechecksubject'] = '$a->course: Rezervované e-šeky ($a->count)';
$string['pendingordersemail'] = 'Vážený administrátor,

$a->pending transakcie pre tento kurz \"$a->course\" vypršia, ak neprijmete platbu v priebehu $a->days dní.

Táto správa Vás upozorňuje, že ste neaktivovali systém automatického spracovania transakcií. Takže musíte každú platbu prijať alebo odmietnuť ručne.

Prijatie alebo zamietnutie rezervovaných platieb uskutočníte na adrese: $a->url.

Ak chcete zapnúť automatické spracovanie transakcií (nebudete dostávať upozorňovacie e-maily), kliknite na adresu: $a->enrolurl';
$string['pendingordersemailteacher'] = 'Vážený učiteľ,

$a->pending transakcie o výške $a->currency $a->sumcost za kurz  \"$a->course\"  vypršia, ak ich neprimete do $a->days dní.

Musíte prijať alebo zamietnuť platby ručne, pretože administrátor neaktivoval systém automatického spracovania transakcií.

$a->url';
$string['pendingorderssubject'] = 'UPOZORNENIE: $a->course, $a->pending transakcie vypršia za $a->days deň/dní.';
$string['reason11'] = 'Bola podaná duplikátna transakcia.';
$string['reason13'] = 'Prihlasovacie ID obchodníka je neplatné alebo účet je neaktívny.';
$string['reason16'] = 'transakcia nebola nájdená.';
$string['reason17'] = 'Tento typ kreditnej karty obchodník nepríma.';
$string['reason245'] = 'Tento typ e-šeku nie je povolený pri použití hosťovaného spôsobu platby';
$string['reason246'] = 'Tento typ e-šeku nie je povolený';
$string['reason27'] = 'Výsledok kontroly AVS pre túto transakciu: nezhodné adresné údaje. Zadaná adresa sa nezhoduje s adresou majiteľa karty.';
$string['reason28'] = 'Tento typ kreditnej arty obchodník neprijíma.';
$string['reason30'] = 'Neplatné nastavenie systému spracovania transakcií. Obráťte sa na spoločnosť zaisťujúcu pre daného obchodníka spracovanie transakcií.';
$string['reason39'] = 'Zadaný kód meny je buď neplatný, alebo nie je podporovaný, alebo nie je povolený pre tohoto obchodníka, alebo nemá menový kurz.';
$string['reason43'] = 'Systém spracovania transakcií obsahuje nesprávne informácie o obchodníkovi. Obráťte sa na spoločnosť zaisťujúcu pre daného obchodníka spracovanie transakcií.';
$string['reason44'] = 'Táto transakcia bola zamietnutá. Chyba filtra kódu karty!';
$string['reason45'] = 'Táto transakcia bola zamietnutá. Chyba filtra kódu karty/AVS!';
$string['reason47'] = 'Čiastka požadovaná k úhrade nesmie byť vyššia ako pôvodná autorizovaná čiastka.';
$string['reason5'] = 'Požadovaná je platná čiastka.';
$string['reason50'] = 'Táto transakcia čaká na úhradu a nemôže byť vrátená.';
$string['reason51'] = 'Suma všetkých kreditov proti tejto transakcii je väčšia ako pôvodná čiastka transakcie.';
$string['reason54'] = 'Odkazovaná transakcia sa nezhoduje s kritériami pre vydanie kreditu';
$string['reason55'] = 'Suma všetkých kreditov proti tejto odkazovanej transakcii by prekročila pôvodnú čiastku dlhu.';
$string['reason56'] = 'Tento obchodník príjima e-šek (ACH) transakcie; nie sú povolené transakcie kreditných kariet.';
$string['refund'] = 'Vrátiť';
$string['refunded'] = 'Vrátené';
$string['returns'] = 'Vrátené';
$string['reviewday'] = 'Rezervovať automaticky kreditné karty, pokiaľ učiteľ alebo administrátor uskutoční požiadavku v <b>$a</b> dňoch. MUSÍ BYŤ SPUSTENÝ CRON. <br />(0 dní znamená, že je zrušené automatické spracovanie transakcií, učiteľ alebo administrátor musí objednávky uskutočniť ručne. Transakcie budú zrušené, ak zrušíte automatické spracovanie transakcií alebo pokiaľ ich nevybavíte do 30 dní.)';
$string['reviewfailed'] = 'Kontrola sa neuskutočnila';
$string['reviewnotify'] = 'Vaša platba bude skontrolovaná. Očakávajte email od vášho učiteľa v priebehu niekoľkých dní.';
$string['sendpaymentbutton'] = 'Odoslať platbu';
$string['settled'] = 'Uhradené';
$string['settlementdate'] = 'Dátum úhrady';
$string['subvoidyes'] = 'Nahradená transakcia ($a->transid) bude zrušená a na váš účet bude pripísaná čiastka $a->amount. Pokračovať?';
$string['tested'] = 'Testované';
$string['testmode'] = '[TESTOVACÍ REŽIM]';
$string['testwarning'] = 'Rezervovanie/Rušenie/Vrátenie prebehli bez problémov v testovacom režime, ale v databáze nebol žiaden záznam aktualizovaný ani do nej vložený.';
$string['transid'] = 'ID transakcie';
$string['underreview'] = 'Práve sa kontroluje';
$string['unenrolstudent'] = 'Vyškrtnúť študenta?';
$string['uploadcsv'] = 'Nahrať CSV súbor';
$string['usingccmethod'] = 'Zapísať s použitím: <a href=\"$a->url\"><strong>Kreditná Karta</strong></a>';
$string['usingecheckmethod'] = 'Zapísať s použitím: <a href=\"$a->url\"><strong>e-šek</strong></a>';
$string['void'] = 'Zrušiť';
$string['voidyes'] = 'Transakcia bude zrušená. Pokračovať?';
$string['welcometocoursesemail'] = 'Vážený študent,

Ďakujeme za Vaše platby. Ste zapísaný v týchto kurzoch:

$a->courses

Svoj používateľský profil si môžete upraviť tu:
$a->profileurl

Detaily Vašich platieb nájtete tu:
$a->paymenturl';
$string['youcantdo'] = 'Nemôžete uskutočniť túto akciu:  $a->action';
$string['zipcode'] = 'Poštové smerovacie číslo';

?>
