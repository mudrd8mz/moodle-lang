<?PHP // $Id$ 
      // chat.php - created with Moodle 1.8.2+ (2007021520)


$string['beep'] = 'bipio';
$string['chat:chat'] = 'Siarad mewn sgwrs';
$string['chat:deletelog'] = 'Dileu cofnodion sgyrsiau';
$string['chat:readlog'] = 'Darllen cofnodion sgyrsiau';
$string['chatintro'] = 'Testun cyflwyno';
$string['chatname'] = 'Enw\'r ystafell sgwrsio hon';
$string['chatreport'] = 'Sesiynau sgwrsio';
$string['chattime'] = 'Amser y sgwrs nesaf';
$string['configmethod'] = 'Mae\'r dull sgwrsio normal yn golygu bod y cleientiaid yn cysylltu â\'r gweinyddwyr yn rheolaidd i gael diweddariadau. Nid oes angen ei ffurfweddu ac mae\'n gweithio ym mhob man, ond mae\'n rhoi baich ar y gweinydd gyda nifer o sgwrswyr. I ddefnyddio daemon gweinydd, bydd angen mynediad cragen i Unix, ond bydd yn rhoi amgylchedd sgwrsio cyflym y gellir ei raddio.';
$string['confignormalupdatemode'] = 'Fel arfer, gellir gweinyddu diweddariadau i ystafell sgwrsio yn effeithlon drwy ddefnyddio nodwedd </em>Cadw\'n Fyw</em> HTTP 1.1, ond mae hyn yn dal yn rhoi baich ar y gweinydd. Dull mwy blaengar fyddai defnyddio strategaeth <em>Ffrydio</em> i fwydo diweddariadau i\'r defnyddwyr. Mae defnyddio <em>Ffrydio</em> yn llawer gwell o ran graddio (tebyg i\'r dull chatd) ond efallai na all eich gweinydd ddelio ag ef.';
$string['configoldping'] = 'Beth yw\'r amser hiraf all fynd heibio cyn i ni ganfod bod defnyddiwr wedi datgysylltu (mewn eiliadau)? Terfyn uchaf yw hwn, oherwydd fel arfer gellir canfod bod rhywun wedi datgysylltu yn gyflym. Bydd gwerthoedd is yn rhoi mwy o straen ar eich gweinydd. Os ydych chi\'n defnyddio\'r dull normal, <strong>peidiwch byth</strong> â gosod hwn yn is na 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Pa mor aml y dylid adnewyddu\'r ystafell sgwrsio ei hun (mewn eiliadau)? Bydd gosod hwn yn isel yn gwneud i\'r ystafell sgwrsio ymddangos yn gynt, ond gallai roi mwy o faich  ar eich gweinydd gwe pan fydd llawer o bobl yn sgwrsio. Os ydych chi\'n defnyddio diweddariadau <em>Ffrydio</em>, gallwch ddewis adnewyddu\'n amlach -- rhowch gynnig ar 2.';
$string['configrefreshuserlist'] = 'Pa mor aml y dylid adnewyddu\'r rhestr o ddefnyddwyr? (mewn eiliadau)';
$string['configserverhost'] = 'Enw gwesteiwr y cyfrifiadur lle mae\'r daemon gweinydd';
$string['configserverip'] = 'Y cyfeiriad IP rhifiadol sy\'n cyfateb â\'r enw gwesteiwr uchod';
$string['configservermax'] = 'Nifer fwyaf y cleientiaid a ganiateir';
$string['configserverport'] = 'Porth i\'w ddefnyddio ar y gweinydd ar gyfer y daemon';
$string['currentchats'] = 'Sesiynau sgwrsio byw';
$string['currentusers'] = 'Defnyddwyr presennol';
$string['deletesession'] = 'Dileu\'r sesiwn hon';
$string['deletesessionsure'] = 'Ydych chi\'n siŵr eich bod chi eisiau dileu\'r sesiwn hon?';
$string['donotusechattime'] = 'Peidio â chyhoeddi amseroedd sgyrsiau';
$string['enterchat'] = 'Cliciwch yma i ddechrau sgwrsio nawr';
$string['errornousers'] = 'Heb ddod o hyd i unrhyw ddefnyddwyr!';
$string['explaingeneralconfig'] = 'Mae\'r gosodiadau hyn mewn grym <strong>drwy\'r amser</strong>';
$string['explainmethoddaemon'] = '<strong>Dim ond</strong> os ydych wedi dewis \"Daemon gweinydd sgwrsio\" ar gyfer chat_method y bydd y gosodiadau hyn yn berthnasol';
$string['explainmethodnormal'] = '<strong>Dim ond</strong> os ydych wedi dewis \"Dull normal\" ar gyfer chat_method y bydd y gosodiadau hyn yn berthnasol';
$string['generalconfig'] = 'Ffurfweddiad cyffredinol';
$string['helpchatting'] = 'Help gyda sgwrsio';
$string['idle'] = 'Segur';
$string['messagebeepseveryone'] = 'Mae $a yn bipio pawb!';
$string['messagebeepsyou'] = 'Mae $a newydd eich bipio!';
$string['messageenter'] = 'Mae $a newydd ymuno â\'r sgwrs hon';
$string['messageexit'] = 'Mae $a wedi gadael y sgwrs hon';
$string['messages'] = 'Negeseuon';
$string['methoddaemon'] = 'Daemon gweinydd sgwrs';
$string['methodnormal'] = 'Dull normal';
$string['modulename'] = 'Sgwrs';
$string['modulenameplural'] = 'Sgyrsiau';
$string['neverdeletemessages'] = 'Peidio byth â dileu negeseuon';
$string['nextsession'] = 'Y sesiwn nesaf sydd wedi\'i threfnu';
$string['noguests'] = 'Nid yw\'r sgwrs ar agor i westeion';
$string['nomessages'] = 'Dim neges eto';
$string['normalkeepalive'] = 'Cadw\'n Fyw';
$string['normalstream'] = 'Ffrydio';
$string['noscheduledsession'] = 'Dim sesiwn wedi\'i threfnu';
$string['repeatdaily'] = 'Yr un amser bob dydd';
$string['repeatnone'] = 'Dim ailadrodd - cyhoeddi\'r amser a bennir yn unig';
$string['repeattimes'] = 'Ailadrodd sesiynau';
$string['repeatweekly'] = 'Yr un amser bob wythnos';
$string['savemessages'] = 'Cadw sesiynau blaenorol';
$string['seesession'] = 'Gweld y sesiwn hon';
$string['sessions'] = 'Sesiynau sgwrsio';
$string['strftimemessage'] = '%%A:%%M';
$string['studentseereports'] = 'Gall pawb weld sesiynau blaenorol';
$string['viewreport'] = 'Gweld sesiynau sgwrsio blaenorol';

?>
