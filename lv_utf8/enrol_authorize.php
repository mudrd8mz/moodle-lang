<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9.2+ (Build: 20080820) (2007101522)


$string['adminacceptccs'] = 'Kāda veida kredītkartes tiks akceptētas?';
$string['adminaccepts'] = 'Izvēlieties atļautās apmaksas metodes un veidus';
$string['adminauthcode'] = 'Ja lietotāja kredītkartes tveršana tieši internetā nav iespējama, iegūstiet klienta bankas autorizācijas kodu pa tālruni.';
$string['adminauthorizeccapture'] = 'Pasūtījuma pārskatīšana un ieplānotās tveršanas iestatījumi';
$string['adminauthorizeemail'] = 'E-pasta nosūtīšanas iestatījumi';
$string['adminauthorizesettings'] = 'Authorize.net iestatījumi';
$string['adminauthorizewide'] = 'Vietnes mēroga iestatījumi';
$string['adminavs'] = 'Atzīmējiet šo, ja savā authorize.net kontā esat aktivizējis adrešu pārbaudes sistēmu (AVS). Ar šo, lietotājam aizpildot maksājuma veidlapu, tiek prasīts norādīt adreses laukus, piemēram, ielu, rajonu, valsti un pasta indeksu.';
$string['adminconfighttps'] = 'Lūdzu, pārliecinieties, vai esat <a href=\"$a->url\">IESLĒDZIS loginhttps</a>\", lai izmantotu šo spraudni<br />(Administrators >> Mainīgie >> Drošība >> HTTP drošība.';
$string['adminconfighttpsgo'] = 'Lai konfigurētu šo spraudni, atveriet <a href=\"$a->url\">drošo lapu</a>.';
$string['admincronsetup'] = 'cron.php uzturēšanas skripts nav izmantots vismaz 24 stundas.<br />Ja vēlaties izmantot ieplānotās tveršanas līdzekli, ir jāiespējo Cron.<br /><b>Iespējojiet</b> Authorize.net spraudni un pareizi <b>iestatiet cron</b>; vai vēlreiz <b>noņemiet an_review atzīmi</b>.<br />Atspējojot ieplānoto tveršanu, transakcijas tiks atceltas, ja 30 dienu laikā tās nepārskatīsit.<br />Atzīmējiet <b>an_review</b> un laukā <b>an_capture_day ievadiet “0”</b>,<br />ja vēlaties <b>manuāli</b> 30 dienu laikā akceptēt/noraidīt maksājumus.';
$string['adminemailexpired'] = 'Tas noder “manuālai tveršanai”. Administratori tiek informēti <b>$a</b> dienas, pirms beidzas gaidošo pasūtījumu derīgums.';
$string['adminemailexpiredsort'] = 'Kas ir svarīgākais, kad pasniedzējiem pa e-pastu tiek nosūtīts ziņojums, cik ir gaidošo pasūtījumu, kam drīz beigsies derīgums?';
$string['adminemailexpiredsortcount'] = 'Pasūtījumu skaits';
$string['adminemailexpiredsortsum'] = 'Kopējā summa';
$string['adminemailexpiredteacher'] = 'Ja iespējojāt manuālo tveršanu (sk. iepriekš) un pasniedzēji var pārvaldīt maksājumus, tiem var paziņot arī par gaidošajiem pasūtījumiem, kuriem drīz beigsies derīgums. Ar šo katra kursa pasniedzējiem tiks nosūtīts e-pasta ziņojums, cik ir gaidošo pasūtījumu, kam drīz beigsies derīgums.';
$string['adminemailexpsetting'] = '(0=atspējot e-pasta nosūtīšanu, noklusējums=2, maksimums=5)<br />(Manuālās tveršanas iestatījumi e-pasta nosūtīšanai: cron=iespējots, an_review=atzīmēts, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Ieplānotās tveršanas diena';
$string['adminhelpreviewtitle'] = 'Pasūtījuma pārskatīšana';
$string['adminneworder'] = 'Cien. administrator,

  Jūs esat saņēmis jaunu gaidošo pasūtījumu:

   Pasūtījuma ID: $a->orderid
   Transakcijas ID: $a->transid
   Lietotājs: $a->user
   Kurss: $a->course
   Summa: $a->amount

   VAI IEPLĀNOTĀ TVERŠANA IR IESPĒJOTA? $a->acstatus

  Ja ieplānotā tveršana ir aktīva, kredītkartes tveršana jāveic $a->captureon un pēc tam ir jāveic lietotāja reģistrēšana kursā; pretējā gadījumā derīgums beigsies $a->expireon un tveršana pēc šī datuma nebūs iespējama.

  Varat arī nekavējoties akceptēt/noraidīt maksājumu par studenta reģistrāciju, izmantojot šo saiti:
  $a->url';
$string['adminnewordersubject'] = '$a->course; jauns gaidošs pasūtījums: $a->orderid';
$string['adminpendingorders'] = 'Jūs esat atspējojis ieplānotās tveršanas līdzekli.<br />Pavisam ir jāatceļ $a->count transakcijas ar statusu “Autorizēts/gaida tveršanu”, ja vien tos nepārbaudīsit.<br />Lai akceptētu/noraidītu maksājumus, atveriet lapu <a href=\'$a->url\'>Maksājumu pārvaldība</a>.';
$string['adminreview'] = 'Pirms kredītkartes apstrādes pārskatīt pasūtījumu.';
$string['adminteachermanagepay'] = 'Pasniedzēji var pārvaldīt kursa maksājumus.';
$string['allpendingorders'] = 'Visi gaidošie pasūtījumi';
$string['amount'] = 'Summa';
$string['anlogin'] = 'Authorize.net: Pieslēgšanās vārds';
$string['anpassword'] = 'Authorize.net: Parole';
$string['anreferer'] = 'Definējiet URL atsauces avotu, ja to esat iestatījis savā authorize.net kontā. Ar šo tīmekļa pieprasījumā tiks nosūtīta iekļauta rindiņa “Referer: URL”.';
$string['antestmode'] = 'Izpildīt transakcijas tikai testa režīmā (nauda netiks pārskaitīta)';
$string['antrankey'] = 'Authorize.net: Transakcijas atslēga';
$string['approvedreview'] = 'Apstiprināts pārskatījums';
$string['authcaptured'] = 'Autorizēts/tverts';
$string['authcode'] = 'Autorizācijas kods';
$string['authorize:managepayments'] = 'Pārvaldīt maksājumus';
$string['authorize:uploadcsv'] = 'Augšupielādēt CSV failu';
$string['authorizedpendingcapture'] = 'Autorizēts/gaida tveršanu';
$string['avsa'] = 'Adrese (iela) atbilst, bet pasta indekss neatbilst';
$string['avsb'] = 'Nav sniegta adreses informācija';
$string['avse'] = 'Adrešu pārbaudes sistēmas kļūda';
$string['avsg'] = 'Karti izdevusi banka, kas nav ASV';
$string['avsn'] = 'Neatbilst ne adrese (iela), ne pasta indekss';
$string['avsp'] = 'Adrešu pārbaudes sistēma nav izmantojama';
$string['avsr'] = 'Mēģiniet vēlreiz — sistēma nav pieejama vai iestājies taimauts';
$string['avsresult'] = 'AVS rezultāts: $a';
$string['avss'] = 'Izdevējs pakalpojumu neatbalsta';
$string['avsu'] = 'Adreses informācija nav pieejama';
$string['avsw'] = '9 ciparu pasta indekss atbilst, bet adrese (iela) neatbilst';
$string['avsx'] = 'Adrese (iela) un 9 ciparu pasta indekss atbilst';
$string['avsy'] = 'Adrese (iela) un 5 ciparu pasta indekss atbilst';
$string['avsz'] = '5 ciparu pasta indekss atbilst, bet adrese (iela) neatbilst';
$string['canbecredit'] = 'Var atmaksāt līdz $a->upto';
$string['cancelled'] = 'Atcelts';
$string['capture'] = 'Tvert';
$string['capturedpendingsettle'] = 'Tverts/gaidošs norēķins';
$string['capturedsettled'] = 'Tverts/nokārtots';
$string['captureyes'] = 'Kredītkarte tiks tverta, un students tiks reģistrēts kursā. Vai tiešām to vēlaties?';
$string['ccexpire'] = 'Derīguma beigu datums';
$string['ccexpired'] = 'Beidzies kredītkartes derīgums';
$string['ccinvalid'] = 'Nederīgs kartes numurs';
$string['ccno'] = 'Kredītkartes numurs';
$string['cctype'] = 'Kredītkartes veids';
$string['ccvv'] = 'Kartes pārbaude';
$string['ccvvhelp'] = 'Skatiet kartes otrā pusē (pēdējie 3 cipari)';
$string['choosemethod'] = 'Ja zināt kursa reģistrācijas atslēgu, lūdzu ievadiet to,<br />citādi par šo kursu būs jāmaksā.';
$string['chooseone'] = 'Aizpildiet vienu no šiem laukiem vai abus laukus. parole netiek rādīta.';
$string['costdefaultdesc'] = '<strong>Kursa iestatījumos ievadiet -1</strong>, lai kursa cenas laukā izmantotu šo noklusējuma cenu.';
$string['cutofftime'] = 'Transakciju pārtraukšanas laiks. Kad norēķinu veikšanai tiek paņemta pēdējā transakcija?';
$string['dataentered'] = 'Ievadītie dati';
$string['delete'] = 'Iznīcināt';
$string['description'] = 'Authorize.net modulis ļauj iestatīt maksas kursus, izmantojot norēķinu pakalpojumu sniedzējus. Ja kāda kursa cena ir nulle, studentiem netiek lūgts apmaksāt dalību. Kursu cenu var iestatīt divējādi: (1) cena vietnes mērogā kā noklusējums visai vietnei vai (2) kursa iestatījums, ko katram kursam var iestatīt atsevišķi. Kursa cena liek ignorēt cenu vietnē.<br /><br /><b>Piezīme.</b> Ja kursa iestatījumos ievadāt reģistrācijas atslēgu, studentiem tiek dota iespēja reģistrēties, arī izmantojot atslēgu. Tas noder, ja ir studenti, kam ir jāmaksā, kā arī kam nav jāmaksā.';
$string['echeckabacode'] = 'Bankas ABA numurs';
$string['echeckaccnum'] = 'Bankas konta numurs';
$string['echeckacctype'] = 'Bankas konta veids';
$string['echeckbankname'] = 'Bankas nosaukums';
$string['echeckbusinesschecking'] = 'Biznesa čeku konts';
$string['echeckchecking'] = 'Čeku konts';
$string['echeckfirslasttname'] = 'Bankas konta īpašnieks';
$string['echecksavings'] = 'Krājkonts';
$string['enrolname'] = 'Authorize.net maksājumu vārteja';
$string['expired'] = 'Beidzies derīgums';
$string['haveauthcode'] = 'Man jau ir autorizācijas kods';
$string['howmuch'] = 'Cik daudz?';
$string['httpsrequired'] = 'Diemžēl jāinformē, ka jūsu pieprasījumu šobrīd nevar apstrādāt. Nevarēja iestatīt pareizu šīs vietnes konfigurāciju.<br /><br />Lūdzu, neievadiet savas kredītkartes numuru, ja pārlūkprogrammas lejasdaļā neredzat dzeltenu slēdzeni. Ja šis simbols tiek rādīts, tas nozīmē, ka lapa šifrē visus datus, kas tiek sūtīti starp klientu un serveri. Tāpēc transakcijas laikā informācija starp šiem diviem datoriem ir aizsargāta, tāpēc jūsu kredītkartes numuru internetā nevar pārtvert.';
$string['invalidaba'] = 'Nederīgs ABA numurs';
$string['invalidaccnum'] = 'Nederīgs konta numurs';
$string['invalidacctype'] = 'Nederīgs konta veids';
$string['logindesc'] = 'Šai opcijai ir jābūt IESLĒGTAI. <br /><br />Lūdzu, pārliecinieties, vai esat <a href=\"$a->url\">ieslēdzis loginhttps</a>, izmantojot Administrators >> Mainīgie >> Drošība.<br /><br />Ieslēdzot šo opciju, sistēma Moodle pieslēgšanās un maksājumu lapām izmantos drošu HTTPS savienojumu.';
$string['logininfo'] = 'Pieslēgšanās vārds, parole un transakcijas atslēga netiek rādīta drošības profilakses dēļ. Ja šos laukus iepriekš jau konfigurējāt, šī informācija vairs nav jāievada. Ja kāds lauks jau ir konfigurēts, pa kreisi no lodziņa tiek rādīts zaļš teksts. Kad informāciju šajos laukos ievadāt pirmoreiz, nepieciešams pieslēgšanās vārds (*), kā arī atbilstošajā lodziņā jāievada <strong>vai nu</strong> transakcijas atslēga (1), <strong>vai</strong> parole (2). Drošības profilaksei iesakām ievadīt transakcijas atslēgu. Ja vēlaties izdzēst pašreizējo paroli, atzīmējiet izvēles rūtiņu.';
$string['methodcc'] = 'Kredītkarte';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Trūkst ABA numura';
$string['missingaddress'] = 'Trūkst adreses';
$string['missingbankname'] = 'Trūkst bankas nosaukuma';
$string['missingcc'] = 'Trūkst kartes numura';
$string['missingccauthcode'] = 'Trūkst autorizācijas koda';
$string['missingccexpire'] = 'Trūkst derīguma beigu datuma';
$string['missingcctype'] = 'Trūkst kartes veida';
$string['missingcvv'] = 'Trūkst pārbaudes numura';
$string['missingzip'] = 'Trūkst pasta indeksa';
$string['mypaymentsonly'] = 'Rādīt tikai manus maksājumus';
$string['nameoncard'] = 'Kartē norādītais vārds';
$string['new'] = 'Jauns';
$string['noreturns'] = 'Bez atpakaļatdošanas!';
$string['notsettled'] = 'Nav nokārtots';
$string['orderid'] = 'Pasūtījuma ID';
$string['paymentmanagement'] = 'Maksājumu pārvaldība';
$string['paymentmethod'] = 'Apmaksas metode';
$string['paymentpending'] = 'Tiek gaidīts jūsu maksājums par šo kursu ar pasūtījuma numuru $a->orderid. Skatiet <a href=\'$a->url\'>pasūtījuma detaļas</a>.';
$string['pendingecheckemail'] = 'Cien. vadītāj!

Pašlaik ir $a->count gaidoši eCheck, un, lai lietotāji tiktu reģistrēti, jums ir jāveic csv faila augšupielāde.

Noklikšķiniet uz šīs saites un izlasiet lapā pieejamo palīdzības failu:
$a->url';
$string['pendingechecksubject'] = '$a->course: gaidoši eCheck ($a->count)';
$string['pendingordersemail'] = 'Cien. administrator!

Kursam “{$a->course}” beigsies $a->pending transakciju derīgums, ja $a->days dienu laikā neakceptēsit maksājumu.

Šis ir brīdinājuma ziņojums, jo neesat iespējojis ieplānoto tveršanu.
Tas nozīmē, ka maksājumi jums ir jāakceptē vai jānoraida manuāli.

Lai akceptētu/noraidītu gaidošos maksājumus, atveriet šo lapu:
$a->url

Lai iespējotu ieplānoto tveršanu un vairs nesaņemtu nekādus brīdinājuma ziņojumus, atveriet šo lapu:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Cien. pasniedzēj!

Kursam “{$a->course}” beigsies $a->pending transakciju derīgums par summu $a->currency $a->sumcost, ja $a->days dienu laikā neakceptēsit maksājumu.

Maksājumi jums ir jāakceptē vai jānoraida manuāli, jo administrators nav iespējojis ieplānoto tveršanu.

$a->url';
$string['pendingorderssubject'] = 'BRĪDINĀJUMS. $a->course, $a->pending pasūtījumam(-iem) pēc $a->days dienas(-ām) beigsies derīgums.';
$string['reason11'] = 'Ir iesniegts transakcijas dublikāts.';
$string['reason13'] = 'Nav derīgs tirgotāja pieslēgšanās ID vai konts nav aktīvs.';
$string['reason16'] = 'Transakcija netika atrasta.';
$string['reason17'] = 'Tirgotājs neakceptē šāda veida kredītkarti.';
$string['reason245'] = 'Ja izmantojat maksājumu vārtejas viesoto maksājuma veidlapu, šis eCheck veids nav atļauts.';
$string['reason246'] = 'Šis eCheck veids nav atļauts.';
$string['reason27'] = 'Transakcijas rezultāts ir AVS neatbilstība. Norādītā adrese neatbilst kartes turētāja rēķinu nosūtīšanas adresei.';
$string['reason28'] = 'Tirgotājs neakceptē šāda veida kredītkarti.';
$string['reason30'] = 'Konfigurācija ar šo procesoru nav derīga. Sazinieties ar tirdzniecības pakalpojumu sniedzēju.';
$string['reason39'] = 'Norādītais valūtas kods nav derīgs, netiek atbalstīts, šim tirgotājam nav atļauts, vai arī tam nav valūtas maiņas kursa.';
$string['reason43'] = 'Tirgotājs nepareizi iestatīts procesorā. Sazinieties ar savu tirdzniecības pakalpojumu sniedzēju.';
$string['reason44'] = 'Šī transakcija tika noraidīta. Kartes koda filtra kļūda!';
$string['reason45'] = 'Šī transakcija tika noraidīta. Kartes koda/AVS filtra kļūda!';
$string['reason47'] = 'Norēķinam pieprasītā summa nevar būt lielāka par sākotnēji autorizēto summu.';
$string['reason5'] = 'Nepieciešama derīga summa.';
$string['reason50'] = 'Šī transakcija gaida norēķinu, un tā netiks atmaksāta.';
$string['reason51'] = 'Visu šai transakcijai atbilstošo kredītu summa ir lielāka par sākotnējo transakcijas summu.';
$string['reason54'] = 'Norādītā transakcija neatbilst kredīta izsniegšanas kritērijam.';
$string['reason55'] = 'Šai transakcijai atbilstošo kredītu summa pārsniegtu sākotnējo transakcijas summu.';
$string['reason56'] = 'Šis tirgotājs akceptē tikai eCheck (ACH) transakcijas; nekādas kredītkartes transakcijas netiek akceptētas.';
$string['refund'] = 'Atmaksāt';
$string['refunded'] = 'Atmaksāts';
$string['returns'] = 'Atdošanas';
$string['reviewday'] = 'Tvert kredītkarti automātiski, ja pasniedzējs vai administrators šo pasūtījumu nepārskata <b>$a</b> dienu laikā. JĀBŪT IESPĒJOTAM CRON.<br />(0 dienas nozīmē, ka ieplānotā tveršana tiks atspējota un pasniedzējs vai administrators pasūtījumu pārskatīs manuāli. Ja atspējosit ieplānoto tveršanu vai 30 dienu laikā neveiksit pārskatīšanu, transakcija tiks atcelta.)';
$string['reviewfailed'] = 'Pārskatīšanas kļūme';
$string['reviewnotify'] = 'Jūsu maksājums tiks pārskatīts. Dažu dienu laikā varat sagaidīt e-pasta ziņojumu no sava pasniedzēja.';
$string['sendpaymentbutton'] = 'Nosūtīt maksājumu';
$string['settled'] = 'Samaksāts';
$string['settlementdate'] = 'Samaksāšanas datums';
$string['subvoidyes'] = 'Atmaksājamā transakcija ($a->transid) tiks atcelta, un jūsu konts tiks kreditēts ar $a->amount. Vai tiešām to vēlaties?';
$string['tested'] = 'Pārbaudīts';
$string['testmode'] = '[TESTA REŽĪMS]';
$string['testwarning'] = 'Šķiet, ka testa režīmā tveršana/anulēšana/atmaksāšana darbojas, bet datubāzē neviens ieraksts netika atjaunināts vai ievietots.';
$string['transid'] = 'Transakcijas ID';
$string['underreview'] = 'Tiek pārskatīts';
$string['unenrolstudent'] = 'Vai atcelt studenta reģistrāciju?';
$string['uploadcsv'] = 'Augšupielādēt CSV failu';
$string['usingccmethod'] = 'Reģistrēties, izmantojot <a href=\"$a->url\"><strong>kredītkarti</strong></a>';
$string['usingecheckmethod'] = 'Reģistrēties, izmantojot <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Anulēt';
$string['voidyes'] = 'Transakcija tiks atcelta. Vai esat pārliecināts?';
$string['welcometocoursesemail'] = 'Cien. student!

Pateicamies par jūsu maksājumiem! Jūs esat reģistrēts šādos kursos:

$a->courses

Jūs varat rediģēt savu profilu:
 $a->profileurl

Varat skatīt detalizētu informāciju par savu maksājumu:
 $a->paymenturl';
$string['youcantdo'] = 'Jūs nevarat veikt šo darbību: $a->action';
$string['zipcode'] = 'Pasta indekss';

?>
