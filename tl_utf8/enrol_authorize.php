<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 development (2006022400)


$string['adminauthorizeccapture'] = 'Kaayusan ng Rebyu ng Order & Auto-Capture';
$string['adminauthorizeemail'] = 'Kaayusan ng Pagpapadala ng Email';
$string['adminauthorizesettings'] = 'Kaayusan ng Authorize.net';
$string['adminauthorizewide'] = 'Kaayusan na Pangkalahatang-Site';
$string['adminavs'] = 'Tsekan ito kung pinagana mo ang Address Verification System (AVS) sa iyong account ng authorize.net.  Mangangailangan iot ng mga field para sa address tulad ng kalye, estado, bansa at zip kapag sinulatan na ng user ang form para sa pagbabayad.';
$string['admincronsetup'] = 'Hindi pinatakbo ang pangmentinang iskrip na cron.php maintenance sa loob ng 24 oras. <br />Kailangang gumagana ang cron kung nais mong gamitin ang katangiang autocapture.<br />Isaayos ang cron o tanggalin muli ang tsek ng an_review .<br />Kapag pinatay mo ang autocapture, ang mga transaksiyon ay kakanselahin maliban na lamang kung rebyuhin mo ito sa loob ng 30 araw.
<br />Tsekan ang an_review at ipasok ang \'0\' sa an_capture_day na field<br />kung nais mong pagtanggap/pagtanggi sa mga bayad sa loob ng 30 araw.';
$string['adminemailexpired'] = 'Magpadala ng mga email na babala sa mga admin kung ilang <b>$a</b> araw ang nakalipas sa kung ilang estado ng \'pinahintulutan/nakabimbin na capture\' na transaksiyon, bago mapasó ang transaksiyon. (0=patayin ang pagpapadala ng email, default=2, maks=5)<br />Kapakipakinabang ito kung paganahin mo ang pagcapture nang manomano(an_review=may tsek, an_capture_day=0).';
$string['adminhelpcapture'] = 'Nais kong tumanggap/tumanggi sa bayad ng mano-mano.  Pero nais ko ring gumamit ng autocapture para maiwasan ang pagkansela ng bayad.  Ano ang puwede kong gawin?

- Isetup ang cron.
- Tsekan ang an_review.
- Magpasok ng bilang sa mula 1 hanggang 29 sa field na an_capture_day. Ang card ay makacapture 
at ang user ay maeenrol sa kurso maliban na lamang kung macapture mo ito sa loob ng an_capture_day.';
$string['adminhelpcapturetitle'] = 'Araw ng Auto-Capture';
$string['adminhelpreview'] = 'Paano ko tatanggapin/tatanggihan ang bayad nang mano-mano?

- Tsekan ang an_review.
- Magpasok ng \'0\' sa field na an_capture_day.

Paano maeenrol kaagad sa mga kurso ang mga mag-aaral kapag ipinasok na nila ang bilang ng kanilang card?
- Tanggalin ang tsek ng an_review.';
$string['adminhelpreviewtitle'] = 'Rebyu ng Order';
$string['adminneworder'] = ' Mahal Naming Admin,

Nakatanggp ka ng bagong nakabimbin na order:

ID ng Order : $a->orderid
ID ng Transaksiyon: $a->transid
User: $a->user
Kurso: $a->course
Halaga: $a->amount

BUHAY BA ANG AUTO-CAPTURE?: $a->acstatus

Kung buhay ang auto-capture makacaptue ang credit card sa $a->captureon at ang mag-aaral ay maeenrol sa kurso, kundi ay mapapasó ito sa $a->expireon 
at hindi na makacapture pagkatapos ng araw na ito.

Gayundin maaari mong tanggapin/tanggihan ang bayad para maenrol ang mag-aaral nang daglian sa pamamagitan ng pagpunta sa link na ito:
$a->url';
$string['adminnewordersubject'] = '$a->course: Bagong Nakabimbin na Order($a->orderid)';
$string['adminpendingorders'] = 'Pinatay mo ang katangiang auto-capture.<br />Ang kabuuang $a->count transaksiyon na may estadong  AN_STATUS_AUTH ay makakansela maliban na lamang kung tsekan mo ito.<br />Para matanggap/matanggihan ang mga bayad tumungo sa pahina para sa <a href=\'$a->url\'>Pamamahala ng Bayad</a>.';
$string['adminreview'] = 'Rebyuhin ang order bago icapture ang credit card.';
$string['amount'] = 'Halaga';
$string['anlogin'] = 'Authorize.net: Pangalan na panglog-in';
$string['anpassword'] = 'Authorize.net: Password';
$string['anreferer'] = 'Itype dito ang URL referer, kung isinaayos mo ito sa iyong authorize.net account.  Ipapadala nito ang linya na \"Referer: URL\" na nakaembed sa web request.';
$string['antestmode'] = 'Patakbuhin ang transaksiyon sa mode na pagsubok lamang (walang perang kukunin)';
$string['antrankey'] = 'Authorize.net: Susi ng transaksiyon';
$string['authcaptured'] = 'Pinahintulutan/Nacapture';
$string['authorizedpendingcapture'] = 'Pinahintulutan/Nakabimbin ang Pagcapture';
$string['avsa'] = 'Tugma ang address (kalye), hindi ang postal code';
$string['avsb'] = 'Hindi ibinigay ang impormasyon ng address';
$string['avse'] = 'Error sa Address Verification System';
$string['avsg'] = 'Hindi pang-U.S na Bankong Nag-iisyu ng Card';
$string['avsn'] = 'Hindi tugma ang address (kalye) ni ang postal code';
$string['avsp'] = 'Hindi magagamit ang Address Verification System';
$string['avsr'] = 'Ulitin - Hindi magamit ang sistema o nagtime-out ito';
$string['avsresult'] = 'Resulta ng AVS:';
$string['avss'] = 'Hindi suportado ng nag-iisyu ang serbisyo';
$string['avsu'] = 'Walang magamit na impormasyon ng address';
$string['avsw'] = 'Tugma ang 9 na numerong postal code, hindi ang address (kalye)';
$string['avsx'] = 'Tugma ang address (kalye) at 9 na numerong postal code';
$string['avsy'] = 'Tugma ang address (kalye) at 5 numerong postal code';
$string['avsz'] = 'Tugma ang 5 numerong postal code, hindi ang address (kalye)';
$string['canbecredit'] = 'Puwedeng irefund sa $a->upto';
$string['cancelled'] = 'Kinansela';
$string['capture'] = 'Icapture';
$string['capturedpendingsettle'] = 'Nacapture/Nakabimbin ang Pagtatapos ng Pagbabayad';
$string['capturedsettled'] = 'Nacapture/Tapos na ang pagbabayad';
$string['captureyes'] = 'Ikacapture ang credit card at ang mag-aaral ay ieenrol sa kurso.  Talaga bang gusto mong gawin ito?';
$string['ccexpire'] = 'Petsa ng Pagkapasó';
$string['ccexpired'] = 'Pasó na ang credit card';
$string['ccinvalid'] = 'Ditanggap na bilang ng card';
$string['ccno'] = 'Bilang ng Credit Card';
$string['cctype'] = 'Uri ng Credit Card';
$string['ccvv'] = 'Beripikasyon ng Card';
$string['ccvvhelp'] = 'Tingnan ang likod ng card (huling 3 numero)';
$string['choosemethod'] = 'Kung alam mo ang susi sa pag-enrol sa kurso, ipasok ito; kundi ay kailangan mong magbayad sa kursong ito.';
$string['chooseone'] = 'Punan ang isa o pareho sa sumusunod na dalawang puwang';
$string['cutofftime'] = 'Oras ng Cut-Off ng Transaksiyon.  Kung kailan aayusin ang huling transaksiyon para matapos na ang pagbabayad.';
$string['delete'] = 'Sirain';
$string['description'] = 'Ang Authorize.net na modyul ay pinahihintulutan kang magsaayos ng may-bayad na kurso sa pamamagitan ng mga tagalako ng CC.  Kung ang halaga ng anumang kurso ay sero, ang mga mag-aaral ay hindi na sisingilin para makapasok.  May dalawang paraan ng pagsasaayos ng halaga ng kurso (1) pangbuong site na halaga na default para sa buong site o (2) isang kaayusang pangkurso na itatakda mo para sa bawat kurso.  Nananaig ang halaga ng kurso sa halaga ng site.<br /><br /><b>Tandaan:</b> Kapag nagpasok ka ng susi sa pag-eenrol sa kaayusan ng kurso, ang mga mag-aaral ay may opsiyon ding mag-enrol sa pamamagitan ng susi. Kapakipakinabang ito kung magkahalo ang mag-aaral mong nagbabayad at walang bayad.';
$string['enrolname'] = 'Gateway ng Authorize.net Credit Card ';
$string['expired'] = 'Pasó na';
$string['howmuch'] = 'Magkano?';
$string['httpsrequired'] = 'Ikinalulungkot naming ipaalam sa inyo na hindi puwedeng iproseso ang kahilingan mo sa kasalukuyan.   Hindi maisaayos ang kompigurasyon ng site na ito.
<br /><br />
Huwag pong ipapasok ang credit card number ninyo hangga\'t di kayo nakakakita ng dilaw na kandado sa ibaba ng browser.  Ang ibig sabihin nito, ay ieencrypt ang lahat ng datos na ipapadala sa pagitan ng client at server.  Kaya ang impormasyon sa panahon ng transaksiyon sa pagitan ng dalawang kompyuter ay protektado at ang credit card number ninyo ay hindi mananakaw sa internet.';
$string['logindesc'] = 'Kailangang naka-ON ang opsiyong ito.
<br /><br />
Pakitiyak na binuhay mo ang 
<a href=\"$a->url\">loginhttps BUHAY</a> sa Admin>>Baryabol>>Seguridad.
<br /><br />
Kapag binuhay ito ang Moodle ay gagamit ng ligtas na https na koneksiyon para lamang sa pahinang panglog-in at pagbabayad.';
$string['missingaddress'] = 'Nawawala ang address';
$string['missingcc'] = 'Nawawala ang bilang ng card';
$string['missingccexpire'] = 'Nawawala ang petsa ng pagkapasó';
$string['missingcctype'] = 'Nawawala ang uri ng card';
$string['missingcvv'] = 'Nawawala ang bilang na pamberipika';
$string['missingzip'] = 'Nawawala ang postal code';
$string['nameoncard'] = 'Pangalan sa card';
$string['noreturns'] = 'Walang solian!';
$string['notsettled'] = 'Hindi pa tapos ang proseso ng pagbabayad';
$string['orderid'] = 'ID ng Order';
$string['paymentmanagement'] = 'Pamamahala ng Pagbabayad';
$string['paymentpending'] = 'Nakabimbin ang pagbabayad mo sa kursong ito na may bilang ng order na $a->orderid.';
$string['pendingordersemail'] = 'Mahal naming admin,

Mapapasó ang $a->pending transaksiyon maliban na lamang kung tanggapin mo ang bayad sa loob ng  $a->days araw.

Babalang mensahe ito, dahil hindi mo binuhay ang 
autocapture. Ibig sabihin ay kailangan mong tanggapin o tanggihan ang bayad ng mano-mano.

Para matanggap/matanggihan ang nakabimbing bayad tumungo sa:
$a->url

Para mabuhay ang autocapture, alalaong baga\'y hindi ka na makakatanggap ng mga babalang email, tumungo sa:
$a->enrolurl';
$string['reason11'] = 'May kaparehong transaksiyon ang ipinasa.';
$string['reason13'] = 'Ditanggap ang Login ID ng tagalako o di na aktibo ang account.';
$string['reason16'] = 'Hindi natagpuan ang transaksiyon.';
$string['reason17'] = 'Hindi tumatanggap ang tagalako ng ganitong uri ng credit card.';
$string['reason27'] = 'Nagbunga ng ditugmang AVS ang transaksiyon.
Hindi tumutugma ang address sa address ng bill ng may-ari ng card.';
$string['reason28'] = 'Hindi tumatanggap ang tagalako ng ganitong uri ng credit card.';
$string['reason30'] = 'Ang kompigurasyon sa nagpoproseso ay ditanggap.  Tawagan ang Tagalako ng Serbisyo.';
$string['reason39'] = 'Hindi tanggap ang ibinigay na code ng salapi, hindi suportado, hindi pinapahintulutan ng tagalako nito o  walang reyt ng palitan ng pera.';
$string['reason43'] = 'Hindi wasto ang pagsasaayos ng tagalako sa nagpoproseso.  Tawagan mo ang iyong Tagalako ng Serbisyo.';
$string['reason44'] = 'Tinanggihan ang transaksiyong ito.  May error sa filter ng Card Code!';
$string['reason45'] = 'Tinanggihan ang transaksiyong ito.  May error sa Card Code/AVS filter!';
$string['reason47'] = 'Ang sinisingil na halaga sa pagtatapos ng pagbabayad ay hindi puwedeng mas mataas sa orihinal na pinahintulutang halaga.';
$string['reason5'] = 'Kailangan ng tanggap na halaga.';
$string['reason50'] = 'Ang transaksiyong ito ay naghihintay ng pagtatapos ng pagbabayad at hindi puwedeng irefund.';
$string['reason51'] = 'Ang kabuuan ng lahat ng credit sa transaksiyon ito ay mas malaki kaysa sa orihinal na halaga ng transaksiyon.';
$string['reason54'] = 'Ang pinagbatayang transaksiyon ay hindi umaayon sa mga panuntunan ng pag-isyu ng credit.';
$string['reason55'] = 'Ang kabuuan ng credit sa pinagbatayang transaksiyon ay lalabis sa orihinal na halaga ng debit.';
$string['refunded'] = 'Inirefund';
$string['returns'] = 'Mga Isinoli';
$string['reviewday'] = 'Awtomatikong icapture ang credit card maliban na lamang kapag nirebyu ng guro o administrador ang order sa loob ng <b>$a</b> araw.  KAILANGANG BUHAYIN ANG CRON.<br />(0 araw = patayin ang awtocapture = rerebyuhin ito ng guro, admin nang mano-mano.  Ang transaksiyon ay kakanselahin kapag pinatay mo ang awtocapture o kapag hindi mo nirebyu ito sa loob ng 30 araw.)';
$string['reviewnotify'] = 'Rerebyuhin ang kabayaran mo.  Umasa ka na may email na ipapadala sa iyo ang guro mo sa loob ng ilang araw.';
$string['sendpaymentbutton'] = 'Ipadala ang Bayad';
$string['settled'] = 'Naayos na';
$string['settlementdate'] = 'Petsa ng pagaayos';
$string['subvoidyes'] = 'Ang inirefund na transaksiyon $a->transid ay kakanselahin at ikecrecit ang $a->amount sa iyong account. Talaga bang nais mo itong gawin?';
$string['tested'] = 'Nasubok';
$string['testmode'] = '[MODE NA PAGSUBOK]';
$string['testwarning'] = 'Mukhang gumagana ang Capture/Void/Credit sa mode na pagsubok, pero walang rekord na ginawang bago o isiningit sa database.';
$string['transid'] = 'ID ng Transaksiyon';
$string['unenrolstudent'] = 'Alisin sa pagkakaenrol ang mag-aaral?';
$string['voidyes'] = 'Kakanselahin ang transaksiyon.  Talaga bang nais mo itong gawin?';

?>
