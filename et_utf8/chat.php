<?PHP // $Id$ 
      // chat.php - created with Moodle 1.5.2 (2005060220)


$string['beep'] = 'signaal';
$string['chatintro'] = 'Sissejuhatav tekst';
$string['chatname'] = 'Jututoa nimi';
$string['chatreport'] = 'Jututoa sessioon';
$string['chattime'] = 'Järgmine vestluse aeg';
$string['configmethod'] = 'Normaalne jututoa meetod koosneb klientidest, kes kontakteeruvad pidevalt serveriga uuenduste saamiseks. See ei vaja mingeid konfiguratsioone töötab igal pool, kuid sure hulga jututstajate korral võib koormata võrku. Serveri deemoni kasutamiseks on vaja juurdepääsu Unixisse, kuid tulemuseks on kiire ja stabiilne jutukeskkond. ';
$string['configoldping'] = 'Kui pika aja tagant kontrollitakse, kas kasutaja on jututoast lahkunud (sekundites)? See on maksimaalne aeg, tavaliselt toimub kontrollimine väga kiiresti. Mida väiksem sekundite arv, seda koormavam on serverile. Kii sa kasutad tavapärast meetodit, ära <strong>mitte kunagi</strong> sea seda arvu väiksemaks kui 2 * chat_refresh_room.   ';
$string['configrefreshroom'] = 'Kui tihti peaks jututuba end uuendama? (sekundites). Seades selle arvu väikseks, näib jututuba kiirem, kuid suure hulga jututstajate korral langeb veebiserverile suurem koormus.';
$string['configrefreshuserlist'] = 'Kui tihti peaks kasutajate nimekirja uuendama? (sekundites)';
$string['configserverhost'] = 'Arvuti hostinimi, kus asub  serveri deemon ';
$string['configserverip'] = 'Numbriline IP aadress mis kattub ülal oleva hostinimega';
$string['configservermax'] = 'Maksimaalselt lubatud klientide arv';
$string['configserverport'] = 'Port serveris, mida deemon kasutab';
$string['currentchats'] = 'Aktiivsed jututoa sessioonid';
$string['currentusers'] = 'Kasutajad hetkel';
$string['deletesession'] = 'Kustuta see sessioon';
$string['deletesessionsure'] = 'Kas oled ikka kindel, et soovid seda sessiooni kustutada?';
$string['donotusechattime'] = 'Ära avalikusta ühegi vestluse aega';
$string['enterchat'] = 'Klõpsa siia, et siseneda jututuppa';
$string['errornousers'] = 'Ei leidnud ühtegi kasutajat!';
$string['explaingeneralconfig'] = 'Need seadistused mõjuvad <strong>alati</strong> ';
$string['explainmethoddaemon'] = 'Need seadistused on olulised <strong>ainult</strong> siis, kui sa oled jutustamise meetodiks chat_method\'is valinud \"Serveri deemon\"';
$string['explainmethodnormal'] = 'Need seadistused on olulised <strong>ainult</strong> siis, kui sa oled jutustamise meetodiks chat_method\'is valinud \"Normaalne meetod\"';
$string['generalconfig'] = 'Üldine konfiguratsioon';
$string['helpchatting'] = 'Vestluse abi';
$string['idle'] = 'jõudeolek';
$string['messagebeepseveryone'] = '$a annab kõigile märku!';
$string['messagebeepsyou'] = '$a on Sulle just märku andnud!';
$string['messageenter'] = '$a ühines just käesoleva vestlusega';
$string['messageexit'] = '$a lahkus käesolevast vestlusest';
$string['messages'] = 'Sõnumid';
$string['methoddaemon'] = 'Serveri deemon';
$string['methodnormal'] = 'Normaalne meetod';
$string['modulename'] = 'Vestlus';
$string['modulenameplural'] = 'Vestlused';
$string['neverdeletemessages'] = 'Ära kunagi kustuta sõnumeid';
$string['nextsession'] = 'Järgmine plaaniline sessioon ';
$string['noguests'] = 'Vestlus ei ole külalistele avatud';
$string['nomessages'] = 'Mitte ühtegi sõnumit';
$string['repeatdaily'] = 'Igal päeval samal ajal';
$string['repeatnone'] = 'Ei kordu - avalda vaid määratud ajal';
$string['repeattimes'] = 'Korda sessioone';
$string['repeatweekly'] = 'Igal nädalal samal ajal';
$string['savemessages'] = 'Salvesta vanemad sessioonid';
$string['seesession'] = 'Vaata käesolevat sessiooni';
$string['sessions'] = 'Jututoa sessioonid';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Kõik saavad vaadata vanu sessioone';
$string['viewreport'] = 'Vaata vanu jututoa sessioone';

?>
