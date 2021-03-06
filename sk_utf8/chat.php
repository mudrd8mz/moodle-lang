<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9.7+ (Build: 20091223) (2007101570)


$string['autoscroll'] = 'Automatický posun';
$string['beep'] = 'prezvoniť';
$string['chat:chat'] = 'Vstúpiť do chatovacej miestnosti';
$string['chat:deletelog'] = 'Odstrániť históriu chatovania';
$string['chat:readlog'] = 'Čítať históriu chatovania';
$string['chat:talk'] = 'Chatovať';
$string['chatintro'] = 'Úvodný text';
$string['chatname'] = 'Názov tejto miestnosti';
$string['chatreport'] = 'Chatovanie';
$string['chattime'] = 'Najbližšie chatovanie';
$string['configmethod'] = 'Pri normálnom chate sa aktualizujú klienti pri spojení so serverom. Táto metóda si nevyžaduje žiadnu konfiguráciu a funguje všade, ale môže spôsobiť dlhé čakanie na serveri. Používanie démona na serveri si vyžaduje prístup do Unixu shellu, čo však zrýchli prostredie pre chatovanie.';
$string['confignormalupdatemode'] = 'Aktualizácia chatovacích miestností je obvykle dostatočne efektívne zabezpečovaná metódou <em>Keep-Alive</em> protokolu HTTP 1.1. Avšak, aj tak je zaťaženie serveru dosť vysoké. Pokročilejšou metódou pre prenos údajov k užívateľom sa javí <em>streamovanie</em>. Použitie <em>streamovania</em> je lepšie škálovateľné (podobne ako u metódy chatovacieho démona), nie je však zaručené, že to váš server podporuje.';
$string['configoldping'] = 'Po akom čase môžeme považovať, že sa používateľ odhlásil z chatu (v sekundách)? Toto je len horný limit, pretože odhlásenia z chatu sú detekované veľmi rýchlo. Nižšie hodnoty budú viac zaťažovať Váš server. Ak používate normálnu metódu, <strong>nikdy</strong> nenastavujte túto hodnotu na menej ako 2* chat_refresh_room.';
$string['configrefreshroom'] = 'Po akom čase sa má chatovacia miestnosť obnovovať? (v sekundách). Nastavenie príliš krátkeho času spôsobí časté obnovovanie a vyššie nároky na server, ale chat sa javí ako rýchly.';
$string['configrefreshuserlist'] = 'Ako často sa má obnovovať zoznam používateľov? (v sekundách)';
$string['configserverhost'] = 'Hosťovské meno počítača, kde je umiestnený serverový démon';
$string['configserverip'] = 'Číselná IP adresa, ktorá platí pre vyššie uvedené hosťovské meno';
$string['configservermax'] = 'Maximálny počet povolených klientov';
$string['configserverport'] = 'Port, ktorý sa na serveri používa pre démona';
$string['currentchats'] = 'Prebieha chatovanie';
$string['currentusers'] = 'Prihlásení používatelia do chatu';
$string['deletesession'] = 'Odstrániť toto chatovanie';
$string['deletesessionsure'] = 'Naozaj chcete odstrániť toto chatovanie?';
$string['donotusechattime'] = 'Nezverejňovať čas chatovania';
$string['enterchat'] = 'Kliknite sem, ak sa chcete zapojiť do chatovania';
$string['errornousers'] = 'Nemôžem nájsť žiadnych používateľov!';
$string['explaingeneralconfig'] = 'Tieto nastavenia pôsobia <strong>vždy</strong>';
$string['explainmethoddaemon'] = 'Tieto nastavenia pôsobia <strong>iba</strong> vtedy, keď ste si vybrali chat_method \"Chat démon na serveri\"';
$string['explainmethodnormal'] = 'Tieto nastavenia pôsobia <strong>iba</strong> vtedy, keď ste si vybrali chat_method \"Normálna metóda\"';
$string['generalconfig'] = 'Všeobecná konfigurácia';
$string['helpchatting'] = 'Nápoveda k chatovaniu';
$string['idle'] = 'Nečinný/á';
$string['list_all_sessions'] = 'Zoznam chatovaní';
$string['list_complete_sessions'] = 'Zobraziť iba ukončené chatovania.';
$string['listing_all_sessions'] = 'Zobrazenie všetkých chatovaní.';
$string['messagebeepseveryone'] = '$a všetkých prezváňa!';
$string['messagebeepsyou'] = '$a Vás práve prezváňa!';
$string['messageenter'] = '$a práve vstúpil do tohto chatu';
$string['messageexit'] = '$a sa práve odhlásil z chatu';
$string['messages'] = 'Správy';
$string['method'] = 'Chatovacia metóda';
$string['methoddaemon'] = 'Chat démon ne serveri';
$string['methodnormal'] = 'Normálna metóda';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chatovanie';
$string['neverdeletemessages'] = 'Nikdy neodstraňovať správy';
$string['nextsession'] = 'Najbližšie plánované chatovanie';
$string['no_complete_sessions_found'] = 'Neboli nájdené ukončené chatovania.';
$string['noguests'] = 'Hostia nemôžu vstúpiť do tohto chatu';
$string['nomessages'] = 'Zatiaľ žiadne správy';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Streamovanie';
$string['noscheduledsession'] = 'Nie je plánované žiadne chatovanie';
$string['notallowenter'] = 'Nemáte oprávnenie na vstup do chatovacej miestnosti.';
$string['oldping'] = 'Časový limit na odpojenie';
$string['pastchats'] = 'Minulé chatovacie sedenia';
$string['refreshroom'] = 'Aktualizovať miestnosť';
$string['refreshuserlist'] = 'Aktualizovať zoznam účastníkov';
$string['removemessages'] = 'Odstrániť všetky správy';
$string['repeatdaily'] = 'V rovnaký čas každý deň';
$string['repeatnone'] = 'Bez opakovania - zverejniť len stanovený čas';
$string['repeattimes'] = 'Opakovať chatovanie';
$string['repeatweekly'] = 'V rovnaký čas každý týždeň';
$string['savemessages'] = 'Uložiť prebehnuté chatovanie';
$string['seesession'] = 'Ukázať toto chatovanie';
$string['serverhost'] = 'Meno servera';
$string['serverip'] = 'IP adresa servera';
$string['servermax'] = 'Maximálny počet účastníkov';
$string['serverport'] = 'Port servera';
$string['sessions'] = 'Chatovanie';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Každý si môže prezrieť prebehnuté chatovanie';
$string['updatemethod'] = 'Metóda aktualizácie';
$string['viewreport'] = 'Ukázať prebehnuté chatovanie';

?>
