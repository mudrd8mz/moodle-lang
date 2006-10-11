<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6.1 (2006050510)


$string['beep'] = 'pipsignal';
$string['chatintro'] = 'Introduktion';
$string['chatname'] = 'Namnet p&aring; det direktsamtalet';
$string['chatreport'] = 'Chatsessioner';
$string['chattime'] = 'Tid f&ouml;r n&auml;sta direktsamtal';
$string['configmethod'] = 'Den normala metoden f&ouml;r chat inneb&auml;r att klienterna regelbundet m&aring;ste kontakta servern   f&ouml;r uppdateringar. Det kr&auml;ver ingen konfiguration och fungerar &ouml;verallt men en m&auml;ngd chattare samtidigt kan skapa en stor arbetsbelastning f&ouml;r servern. Att anv&auml;nda en server demon kr&auml;ver \"shell\" tillg&aring;ng till UNIX men det resulterar i en snabb skalbar chatmilj&ouml;.';
$string['confignormalupdatemode'] = 'Uppdateringar av chattrum servas effektivt genom anv&auml;ndning av egenskapen <em>H&aring;ll liv i</em> i HTTP 1.1 men detta leder fortfarande till ganska stor belastning p&aring; servern. En mer avancerad metod &auml;r att anv&auml;nda strategin med att <em>Str&ouml;mma</em> f&ouml;r att mata p&aring; med uppdateringar &aring;t anv&auml;ndarna. Det &auml;r mycket b&auml;ttre att anv&auml;nda <em>Str&ouml;mma</em> skalor (metoden liknar chatd) men det kanske inte st&ouml;djs av Din server.';
$string['configoldping'] = 'Hur l&auml;nge ska en anv&auml;ndare f&aring; vara inaktiv innan Du anser att han/hon har avbrutit sin medverkan?';
$string['configrefreshroom'] = 'Hur ofta ska direktsamtalet uppdateras? (I sekunder r&auml;knat) Om Du st&auml;ller in en kort tid s&aring; kommer direktsamtalet att verka snabbare, men d&aring; blir ocks&aring; mer jobb f&ouml;r servern n&auml;r det &auml;r m&aring;nga som samtalar direkt.';
$string['configrefreshuserlist'] = 'Hur ofta ska listan p&aring; anv&auml;ndare uppdateras? (i sekunder)';
$string['configserverhost'] = 'V&auml;rdnamnet p&aring; datorn d&auml;r serverdemonen finns.';
$string['configserverip'] = 'Den numeriska IP-adressen st&auml;mmer &ouml;verens med v&auml;rdnamnet ovan';
$string['configservermax'] = 'Det maximala antalet till&aring;tna klienter';
$string['configserverport'] = 'Port att anv&auml;nda f&ouml;r demonen p&aring; servern';
$string['currentchats'] = 'Aktiva sessioner f&ouml;r direktsamtal';
$string['currentusers'] = 'Aktuella anv&auml;ndare';
$string['deletesession'] = 'Ta bort denna session';
$string['deletesessionsure'] = 'Är Du s&auml;ker p&aring; att Du vill ta bort denna session?';
$string['donotusechattime'] = 'Visa inte n&aring;gra tider f&ouml;r direktsamtal';
$string['enterchat'] = 'Klicka h&auml;r f&ouml;r att g&aring; in i direktsamtalet nu';
$string['errornousers'] = 'Systemet hittade inga anv&auml;ndare';
$string['explaingeneralconfig'] = 'De h&auml;r inst&auml;llningarna g&auml;ller <strong>alltid</strong>';
$string['explainmethoddaemon'] = 'De h&auml;r inst&auml;llningarna har betydelse <strong>endast</strong> om Du har valt \"Chat Server daemon\" som chat_method';
$string['explainmethodnormal'] = 'De h&auml;r inst&auml;llningarna har betydelse <strong>endast</strong> om Du har valt \"Normal metod\" som chat_method';
$string['generalconfig'] = 'Allm&auml;n konfiguration';
$string['helpchatting'] = 'Hj&auml;lp med direktsamtal';
$string['idle'] = 'F n inte aktiv';
$string['messagebeepseveryone'] = '$a skickar en pipsignal till alla!';
$string['messagebeepsyou'] = '$a har just skickat en pipsignal till Dig';
$string['messageenter'] = '$a har precis kommit in i detta direktsamtal';
$string['messageexit'] = '$a har l&auml;mnat det h&auml;r direktsamtalet';
$string['messages'] = 'Meddelanden';
$string['methoddaemon'] = 'Serverdemon f&ouml;r chat';
$string['methodnormal'] = 'Normal metod';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chattar';
$string['neverdeletemessages'] = 'Radera aldrig n&aring;gra meddelanden';
$string['nextsession'] = 'N&auml;sta schemalagda session';
$string['noguests'] = 'Chatten &auml;r inte &ouml;ppen f&ouml;r g&auml;ster';
$string['nomessages'] = 'Inga meddelanden &auml;n';
$string['normalkeepalive'] = 'H&aring;llLivI';
$string['normalstream'] = 'Str&ouml;mma';
$string['noscheduledsession'] = 'Ingen schemalagd session';
$string['repeatdaily'] = 'Vid samma tid varje dag';
$string['repeatnone'] = 'Inga upprepade visningar - visa bara den specificerade tiden';
$string['repeattimes'] = 'Upprepade sessioner';
$string['repeatweekly'] = 'Vid samma tid varje vecka';
$string['savemessages'] = 'Spara de sessioner som varit';
$string['seesession'] = 'Se den h&auml;r sessionen';
$string['sessions'] = 'sessioner f&ouml;r direktsamtal';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Alla kan se de sessioner som har varit';
$string['viewreport'] = 'Visa  de senaste sessionerna f&ouml;r direktsamtal';

?>
