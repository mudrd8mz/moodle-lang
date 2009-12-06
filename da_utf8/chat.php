<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9.7+ (Build: 20091130) (2007101570)


$string['autoscroll'] = 'Auto Scroll';
$string['beep'] = 'bip';
$string['chat:chat'] = 'Chat';
$string['chat:deletelog'] = 'Slet chatlogs';
$string['chat:readlog'] = 'Læs chatlogs';
$string['chatintro'] = 'Introduktionstekst';
$string['chatname'] = 'Navn på dette chatrum';
$string['chatreport'] = 'Chatsessioner';
$string['chattime'] = 'Næste planlagte chattid';
$string['configmethod'] = 'Den normale chatmetode fungerer ved at alle klienter jævnligt kontakter serveren for at checke for ændringer. Det kræver ingen konfiguration og fungerer overalt, det belaster dog webserveren en hel del hvis der er mange deltagere. Man kan i stedet bruge en serverservice som fungerer som bindeled til klienterne. Det kræver at man har shelladgang til web-serveren, men det belaster serveren mindre og får chatten til at \'flyde\' bedre.';
$string['confignormalupdatemode'] = 'Chatrum-opdateringer sker normalt ved at klienten poller serveren med jævne mellemrum vha. <em>KeepAlive</em> teknikken i HTTP 1.1 
Denne metode er ret belastene for serveren. En mere avanceret metode er at benytte <em>Stream</em> metoden til at sende opdateringer til brugeren. Streammetoden er mindre krævende og skaleres bedre til flere brugere, men det kan tænkes at den ikke understøttes af din webserver.';
$string['configoldping'] = 'Hvor lang tid skal der gå fra man sidst har hørt fra en bruger til man må formode at de har forladt chatten?';
$string['configrefreshroom'] = 'Hvor ofte skal chatrummet opdateres? (i sekunder) Lavere værdi får det til at virke mere realtime, men vil belaste webserveren mere, når mange mennesker chatter samtidigt';
$string['configrefreshuserlist'] = 'Hvor tit skal brugerlisten opdateres? (i sekunder)';
$string['configserverhost'] = 'Værtsnavnet på den computer hvor serverservices er';
$string['configserverip'] = 'Den numeriske IP-adresse på værten med serverservices.';
$string['configservermax'] = 'Maksimalt antal klienter tilladt';
$string['configserverport'] = 'Porten som serverservicen lytter på';
$string['currentchats'] = 'Aktive chatsessioner';
$string['currentusers'] = 'Nuværende bruger';
$string['deletesession'] = 'Slet denne session';
$string['deletesessionsure'] = 'Er du sikker på at du vil slette denne session?';
$string['donotusechattime'] = 'Vis ikke chattider';
$string['enterchat'] = 'Tryk her for at gå ind i chatten nu.';
$string['errornousers'] = 'Kunne ikke finde nogen brugere!';
$string['explaingeneralconfig'] = 'Disse indstillinger er <strong>altid</strong> i funktion';
$string['explainmethoddaemon'] = 'Disse indstillinger har <strong>kun</strong> betydning hvis du har valgt Chatserverservice som chatmetode.';
$string['explainmethodnormal'] = 'Disse indstillinger har <strong>kun</strong> betydning hvis du har valgt Normal metode (polling) som chatmetode.';
$string['generalconfig'] = 'Generel konfiguration';
$string['helpchatting'] = 'Hjælp til chat';
$string['idle'] = 'venter';
$string['messagebeepseveryone'] = '$a bipper alle!';
$string['messagebeepsyou'] = '$a har lige bippet dig!';
$string['messageenter'] = '$a er lige kommet til';
$string['messageexit'] = '$a har forladt chatten';
$string['messages'] = 'Beskeder';
$string['method'] = 'Chatmetode';
$string['methoddaemon'] = 'Chatserverservice';
$string['methodnormal'] = 'Normal metode (polling)';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chat';
$string['neverdeletemessages'] = 'Slet aldrig beskeder';
$string['nextsession'] = 'Næste planlagte session';
$string['noguests'] = 'Denne chat er ikke åben for gæster';
$string['nomessages'] = 'Ingen beskeder endnu';
$string['normalkeepalive'] = 'Polling';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Ingen planlagte chatsessioner';
$string['notallowenter'] = 'Du har ikke adgang til chatten.';
$string['oldping'] = 'Timeout til afbrydelse af session';
$string['pastchats'] = 'Seneste chatsessioner';
$string['refreshroom'] = 'Genindlæs';
$string['refreshuserlist'] = 'Genindlæs brugerliste';
$string['removemessages'] = 'Slet alle beskeder';
$string['repeatdaily'] = 'Samme tid hver dag';
$string['repeatnone'] = 'Ingen gentagelser - brug den kun angivne tid';
$string['repeattimes'] = 'Gentag sessioner';
$string['repeatweekly'] = 'Samme tid hver uge';
$string['savemessages'] = 'Gem forrige sessioner';
$string['seesession'] = 'Se denne session';
$string['serverhost'] = 'Servernavn';
$string['serverip'] = 'Server-IP';
$string['servermax'] = 'Max. antal brugere';
$string['serverport'] = 'Server-port';
$string['sessions'] = 'Chat sessioner';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Elever kan se gemte sessioner';
$string['updatemethod'] = 'Opdateringsmetode';
$string['viewreport'] = 'Se forrige sessioner';

?>
