<?PHP // $Id$ 
      // resource.php - created with Moodle 1.6 development (2005052400)


$string['addresource'] = 'Pridať zdroj';
$string['chooseafile'] = 'Zmeniť alebo nahrať súbor';
$string['chooseparameter'] = 'Zmeniť parameter';
$string['configallowlocalfiles'] = 'Pri vytváraní nového zdroja povoliť odkazy na súbory, ktoré sa nachádzajú na pevnom disku alebo CD-ROM, na lokálnom počítači. Toto sa dá použiť v triede, kde majú všetci študenti prístup k spoločnému sieťovému disku, alebo keď je potrebné pristupovať k súborom, ktoré sú uložené na CD. Použitie tejto vlastnosti môže vyžadovať zmeny v bezpečnostných nastaveniach vášho prehliadača.';
$string['configdefaulturl'] = 'Táto hodnota bude predvyplnená v poli URL, pri vytváraní nového, na URL založeného zdroja.';
$string['configfilterexternalpages'] = 'Pokiaľ bude aktivované toto nastavenie, budú sa na všetky vonkajšie zdroje (web stránky, či nahrané HTML súbory) aplikovať filtre definované v nastaveniach stránok (napríklad automatické prelinkovanie výrazov zo slovníka). Pokiaľ aktivujete túto voľbu, môže sa stať že web stránky kurzu sa významne spomalia - preto používajte toto nastavenie opatrne a len v prípade keď ho naozaj potrebujete.  ';
$string['configframesize'] = 'Keď je webová stránka alebo súbor zobrazovaný v rámci, táto hodnota je veľkosť (v pixeloch) hlavného (najvyššieho) rámca (ktorý obsahuje navigačné tlačidlá).';
$string['configparametersettings'] = 'Táto voľba nastaví predvolené hodnoty pre nastavenia Parametrov, vo formulári, keď budete pridávať nové zdroje. Okrem prvého razu si toto môže nastaviť každý používateľ individuálne.';
$string['configpopup'] = 'Keď pridávate nový zdroj ktorý má byť zobrazený v novom okne chcete aby bolo toto nastavenie implicitne aktivované?';
$string['configpopupdirectories'] = 'Majú sa v novom okne implicitne zobrazovať adresáre z odkazmi?';
$string['configpopupheight'] = 'Na akú výšku má byť implicitne nastavené nové okno?';
$string['configpopuplocation'] = 'Má sa v novom okne implicitne zobrazovať panel s umiestnením (adresou)?';
$string['configpopupmenubar'] = 'Má sa v novom okne implicitne zobrazovať panel s ponukou (menu)?';
$string['configpopupresizable'] = 'Má byť v novom okne implicitne umožnená zmena jeho veľkosti?';
$string['configpopupscrollbars'] = 'Má byť v novom okne implicitne umožnené skrolovať obsahom?';
$string['configpopupstatus'] = 'Má sa v novom okne implicitne zobrazovať stavový riadok?';
$string['configpopuptoolbar'] = 'Má sa v novom okne implicitne zobrazovať panel nástrojov?';
$string['configpopupwidth'] = 'Na akú šírku má byť implicitne nastavené nové okno?';
$string['configsecretphrase'] = 'Toto tajné heslo bude použité pre zakódovanie hodnoty, ktorá je posielaná niektorými zdrojmi ako parameter. Tento kód je vytvorený ako MD5 hodnota IP adresy aktuálneho používateľa spojenej z vašim tajným heslom. napr. kod = md5(IP.tajneheslo). Toto umožní cieľovému zdroju dôkladnejšie zabezpečiť spojenie.';
$string['configwebsearch'] = 'Keď pridávate URL webstránky, tento odkaz bude ponúknutý ako stránka pre vyhľadávanie na zadanom URL.';
$string['configwindowsettings'] = 'Táto voľba nastaví predvolené hodnoty pre nastavenia Okna, vo formulári, keď budete pridávať nové zdroje. Okrem prvého razu si toto môže nastaviť každý používateľ individuálne.';
$string['directlink'] = 'Priamy odkaz na tento súbor';
$string['directoryinfo'] = 'Bude zobrazovať všetky súbory z vybraného adresára.';
$string['display'] = 'Okno';
$string['editingaresource'] = 'Upraviť zdroj ';
$string['encryptedcode'] = 'Zašifrovaný kód';
$string['example'] = 'Príklad';
$string['exampleurl'] = 'http://www.priklad.sk/priecinok/subor.html';
$string['fetchclienterror'] = 'Bola zaznamenaná chyba pri pokuse zobraziť web stránku (pravdepodobne zlé URL).';
$string['fetcherror'] = 'Bola zaznamenaná chyba pri pokuse zobraziť web stránku.';
$string['fetchservererror'] = 'Bola zaznamenaná chyba pri pokuse zobraziť web stránku zo vzdialeného serveru (pravdepodobne nejaká chyba v programe).';
$string['filename'] = 'Názov súboru';
$string['filtername'] = 'Automatické prepojenie názvov zdrojov';
$string['frameifpossible'] = 'Pre zachovanie viditeľnosti navigácie web stránky, vložiť zdroj do rámu ';
$string['fulltext'] = 'Plný text';
$string['htmlfragment'] = 'HTML fragment';
$string['localfile'] = 'Lokálny súbor';
$string['localfilechoose'] = 'Vyber lokálny súbor (CD-ROM)';
$string['localfilehelp'] = 'Pomoc so zobrazovaním lokálnych súborov';
$string['localfileinfo'] = '<p>Vyberte si lokálny súbor z vášho počítača. Tento súbor nebude nahraný na web stránku, ale Moodle bude neskôr hľadať taký istý súbor na počítači osoby, ktorá si neskôr bude prezerať tento zdroj.</p>
<p>Toto je použiteľné hlavne pre veľké multimediálne súbory, ktoré sú uložené na bežnom CD-ROM, ktoré dostane každý účastník kurzu. Každý účastník si môže nastaviť vlastnú cestu k lokálnym súborom, v <a href=\"$a\" target=\"_blank\">nastaveniach svojho používateľského profilu</a>.</p>';
$string['localfilepath'] = 'Pre nastavenie vašej vlastnej cesty k tomuto zdroju vyberte niektorý so súborov ktoré sa nachádzajú na vašom disku (prípadne CD-ROM) vo vašom počítači kde je zdroj uložený. Tento súbor nebude nahraný ale údaje o ceste k súboru budú zaznamenané a použité pre všetky ostatné ';
$string['localfileselect'] = 'Vyber si cestu k súboru.';
$string['maindirectory'] = 'Hlavný adresár zo súbormi';
$string['modulename'] = 'Zdroj';
$string['modulenameplural'] = 'Zdroje';
$string['neverseen'] = 'Nikdy nevidené';
$string['newdirectories'] = 'Ukázať odkazy na priečinky';
$string['newfullscreen'] = 'Vyplniť celú obrazovku';
$string['newheight'] = 'Prednastavená výška okna (v pixeloch)';
$string['newlocation'] = 'Ukázať panel umiestnenia';
$string['newmenubar'] = 'Ukázať panel ponúk';
$string['newresizable'] = 'Umožniť zmenu veľkosti okna';
$string['newscrollbars'] = 'Umožniť posun v okne';
$string['newstatus'] = 'Ukázať stavový riadok';
$string['newtoolbar'] = 'Ukázať panel nástrojov';
$string['newwidth'] = 'Prednastavená šírka okna (v pixeloch)';
$string['newwindow'] = 'Nové okno';
$string['newwindowopen'] = 'Zobraziť tento zdroj v novom okne';
$string['notallowedlocalfileaccess'] = 'Prístup k lokálnym súborom je práve vypnutý a preto nie je možné zobraziť tento zdroj.';
$string['note'] = 'Poznámka';
$string['notefile'] = 'Na prenos ďalších súborov do kurzu (tak aby sa zobrazili v tomto zozname) použite 

<a href=\"$a\">Manažér súborov</a>.';
$string['notypechosen'] = 'Musíte si vybrať typ. Použite tlačidlo späť, vráťte sa a skúste znova.';
$string['pagedisplay'] = 'Zobraz tento zdroj v aktuálnom okne';
$string['pagewindow'] = 'To isté okno';
$string['pan'] = 'Sledovať';
$string['parameter'] = 'Parameter';
$string['parameters'] = 'Parametre';
$string['popupresource'] = 'Tento zdroj by sa mal otvoriť v novom okne';
$string['popupresourcelink'] = 'Pokiaľ sa to nestalo, kliknite tu: $a';
$string['resourcetype'] = 'Typ zdroja';
$string['resourcetype1'] = 'Odkaz';
$string['resourcetype2'] = 'Webová stránka';
$string['resourcetype3'] = 'Prenesený súbor';
$string['resourcetype4'] = 'Čistý text';
$string['resourcetype5'] = 'Webový odkaz';
$string['resourcetype6'] = 'HTML text';
$string['resourcetype7'] = 'Program';
$string['resourcetype8'] = 'Wiki text';
$string['resourcetype9'] = 'Adresár';
$string['resourcetypedirectory'] = 'Zobraz adresár';
$string['resourcetypefile'] = 'Odkaz na súbor alebo web stránku';
$string['resourcetypehtml'] = 'Vytvor web stránku';
$string['resourcetypelabel'] = 'Vlož nadpis';
$string['resourcetypetext'] = 'Vytvor textovú stránku';
$string['searchweb'] = 'Hladať na web stránke';
$string['serverurl'] = 'Server URL ($a->wwwroot)';
$string['variablename'] = 'Meno premennej';
$string['vol'] = 'Čís';

?>
