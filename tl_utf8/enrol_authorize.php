<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7 dev (2006060900)


$string['adminacceptccs'] = 'Aling uri ng credit card ang tatanggapin?';
$string['adminauthorizeccapture'] = 'Kaayusan ng Rebyu ng Order & Scheduled-Capture';
$string['adminauthorizeemail'] = 'Kaayusan ng Pagpapadala ng Email';
$string['adminauthorizesettings'] = 'Kaayusan ng Authorize.net';
$string['adminauthorizewide'] = 'Kaayusan na Pangkalahatang-Site';
$string['adminavs'] = 'Tsekan ito kung pinagana mo ang Address Verification System (AVS) sa iyong akawnt ng authorize.net.  Mangangailangan ito ng mga pitak para sa address tulad ng kalye, estado, bansa at zip kapag sinulatan na ng tagagamit ang porma para sa pagbabayad.';
$string['admincronsetup'] = 'Hindi pinatakbo ang pangmentinang iskrip na cron.php sa loob ng 24 oras. <br />Kailangang gumagana ang cron kung nais mong gamitin ang katangiang scheduled-capture.<br /><b>Buhayin</b> ang \'Authorize.net plugin\'at <b>isaayos ang cron</b> nang wasto; o <b>tanggalin muli ang tsek ng an_review</b> .<br />Kapag pinatay mo ang scheduled-capture, ang mga transaksiyon ay kakanselahin maliban na lamang kung rebyuhin mo ito sa loob ng 30 araw.
<br />Tsekan ang <b>an_review</b> at ipasok ang <b>\'0\' sa an_capture_day</b> na pitak<br />kung nais mong tumanggap/tumanggi sa mga bayad nang <b>mano-mano</b> sa loob ng 30 araw.';
$string['adminemailexpired'] = 'Ito ay kapakipakinabang para sa \'Mano-manong-Pagcapture\'.
Patatalastasan ang mga admin b>$a</b> araw bago mapasó ang mga nakabimbing order.';
$string['adminemailexpiredsort'] = 'Kapag ang bilang ng mapapasong order na nakabimbin ay ipinadala sa mga guro sa pamamagitan ng email, alin ang mahalaga?';
$string['adminemailexpiredsortcount'] = 'Bilang ng mga order';
$string['adminemailexpiredsortsum'] = 'Kabuuan ng mga halaga';
$string['adminemailexpiredteacher'] = 'Kapag binuhay mo ang mano-manong pag-capture (tingnan ang nasa itaas) at maaaring pamahalaan ng mga guro ang bayaran, maaari ring patalastasan ang mga guro ng mga nakabimbing order na mapapasó.  Magpapadala ito ng email sa bawat guro ng kurso hinggil sa kung ilang nakabimbin na order ang mapapasó.';
$string['adminemailexpsetting'] = '(0=patayin ang pagpapadala ng email, umiiral=2, maks=5)<br />
(Kaayusan ng mano-manong pag-capture para sa pagpapadala ng email:  cron=buhay, an_review=may tsek, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Araw ng Scheduled-Capture';
$string['adminhelpreviewtitle'] = 'Rebyu ng Order';
$string['adminneworder'] = 'Mahal Naming Admin,

Nakatanggap ka ng bagong nakabimbin na order:

ID ng Order : $a->orderid
ID ng Transaksiyon: $a->transid
Tagagamit: $a->user
Kurso: $a->course
Halaga: $a->amount

BUHAY BA ANG SCHEDULED-CAPTURE?: $a->acstatus

Kung buhay ang scheduled-capture maka-capture ang credit card sa $a->captureon at ang mag-aaral ay maeenrol sa kurso, kundi ay mapapasó ito sa $a->expireon 
at hindi na maka-capture pagkatapos ng araw na ito.

Gayundin maaari mong tanggapin/tanggihan ang bayad para maenrol ang mag-aaral nang daglian sa pamamagitan ng pagpunta sa link na ito:
$a->url';
$string['adminnewordersubject'] = '$a->course: Bagong Nakabimbin na Order($a->orderid)';
$string['adminpendingorders'] = 'Pinatay mo ang katangiang scheduled-capture.<br />Ang kabuuang $a->count transaksiyon na may estadong \'Pinahintulutan/Nakabimbin ang Pag-capture\' ay makakansela maliban na lamang kung tsekan mo ito.<br />Para matanggap/matanggihan ang mga bayad tumungo sa pahina para sa <a href=\'$a->url\'>Pamamahala ng Bayad</a>.';
$string['adminreview'] = 'Rebyuhin ang order bago iproseso ang credit card.';
$string['adminteachermanagepay'] = 'Puwedeng pamahalaan ng mga guro ang pagbabayad sa kurso.';
$string['amount'] = 'Halaga';
$string['anlogin'] = 'Authorize.net: Pangalan na panglagda';
$string['anpassword'] = 'Authorize.net: Kontrasenyas';
$string['anreferer'] = 'Iteklado dito ang URL referer, kung isinaayos mo ito sa iyong authorize.net akawnt.  Ipapadala nito ang linya na \"Referer: URL\" na nakaembed sa web request.';
$string['antestmode'] = 'Patakbuhin ang transaksiyon sa moda na pagsubok lamang (walang perang kukunin)';
$string['antrankey'] = 'Authorize.net: Susi ng transaksiyon';
$string['authcaptured'] = 'Pinahintulutan/Na-capture';
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
$string['capture'] = 'I-capture';
$string['capturedpendingsettle'] = 'Na-capture/Nakabimbin ang Pagtatapos ng Pagbabayad';
$string['capturedsettled'] = 'Na-capture/Tapos na ang pagbabayad';
$string['captureyes'] = 'Ika-capture ang credit card at ang mag-aaral ay ieenrol sa kurso.  Talaga bang gusto mong gawin ito?';
$string['ccexpire'] = 'Petsa ng Pagkapasó';
$string['ccexpired'] = 'Pasó na ang credit card';
$string['ccinvalid'] = 'Ditanggap na bilang ng card';
$string['ccno'] = 'Bilang ng Credit Card';
$string['cctype'] = 'Uri ng Credit Card';
$string['ccvv'] = 'Beripikasyon ng Card';
$string['ccvvhelp'] = 'Tingnan ang likod ng card (huling 3 numero)';
$string['choosemethod'] = 'Kung alam mo ang susi sa pag-enrol sa kurso, ipasok ito; kundi ay kailangan mong magbayad sa kursong ito.';
$string['chooseone'] = 'Punan ang isa o pareho sa sumusunod na dalawang pitak';
$string['cutofftime'] = 'Oras ng Cut-Off ng Transaksiyon.  Kung kailan aayusin ang huling transaksiyon para matapos na ang pagbabayad.';
$string['delete'] = 'Sirain';
$string['description'] = 'Ang Authorize.net na modyul ay pinahihintulutan kang magsaayos ng may-bayad na kurso sa pamamagitan ng mga tagalako ng CC.  Kung ang halaga ng anumang kurso ay sero, ang mga mag-aaral ay hindi na sisingilin para makapasok.  May dalawang paraan ng pagsasaayos ng halaga ng kurso (1) pangbuong site na halaga na umiiral para sa buong site o (2) isang kaayusang pangkurso na itatakda mo para sa bawat kurso.  Nananaig ang halaga ng kurso sa halaga ng site.<br /><br /><b>Tandaan:</b> Kapag nagpasok ka ng susi sa pag-eenrol sa kaayusan ng kurso, ang mga mag-aaral ay may opsiyon ding mag-enrol sa pamamagitan ng susi. Kapakipakinabang ito kung magkahalo ang mag-aaral mong nagbabayad at walang bayad.';
$string['enrolname'] = 'Gateway ng Authorize.net Payment';
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
Kapag binuhay ito ang Moodle ay gagamit ng ligtas na https na koneksiyon para lamang sa pahinang panglagda at pagbabayad.';
$string['missingaddress'] = 'Nawawala ang address';
$string['missingcc'] = 'Nawawala ang bilang ng card';
$string['missingccexpire'] = 'Nawawala ang petsa ng pagkapasó';
$string['missingcctype'] = 'Nawawala ang uri ng card';
$string['missingcvv'] = 'Nawawala ang numero na pamberipika';
$string['missingzip'] = 'Nawawala ang postal code';
$string['nameoncard'] = 'Pangalan sa card';
$string['new'] = 'Bago';
$string['noreturns'] = 'Walang saulian!';
$string['notsettled'] = 'Hindi pa tapos ang proseso ng pagbabayad';
$string['orderid'] = 'ID ng Order';
$string['paymentmanagement'] = 'Pamamahala ng Pagbabayad';
$string['paymentpending'] = 'Nakabimbin ang pagbabayad mo sa kursong ito na may bilang ng order na $a->orderid.  Tingnan ang <a href=\'$a->url\'>Mga Detalye ng Order</a>.';
$string['pendingordersemail'] = 'Mahal naming admin,

Mapapasó ang $a->pending transaksiyon para sa \"$a->course\" maliban na lamang kung tanggapin mo ang bayad sa loob ng  $a->days araw.

Babalang mensahe ito, dahil hindi mo binuhay ang 
scheduled-capture. Ibig sabihin ay kailangan mong tanggapin o tanggihan ang bayad ng mano-mano.

Para matanggap/matanggihan ang nakabimbing bayad tumungo sa:
$a->url

Para mabuhay ang scheduled-capture, alalaong baga\'y hindi ka na makakatanggap ng mga babalang email, tumungo sa:
$a->enrolurl';
$string['pendingordersemailteacher'] = 'Mahal naming guro,

Ang $a->pending transaksiyon na may halagang $a->currency $a->sumcost para sa kursong \"$a->course\" ay mapapasó maliban na lamang kung tanggapin mo ang bayad sa loob ng  $a->days araw.

Kailangan mong tanggapin o tanggihan ang bayad ng mano-mano dahil hindi binuhay ng admin ang scheduled-capture.

$a->url';
$string['pendingorderssubject'] = 'BABALA:  Ang $a->course, $a->pending order ay mapapasó sa loob ng $a->days araw.';
$string['reason11'] = 'May kaparehong transaksiyon ang ipinasa.';
$string['reason13'] = 'Ditanggap ang Login ID ng tagalako o di na aktibo ang akawnt.';
$string['reason16'] = 'Hindi natagpuan ang transaksiyon.';
$string['reason17'] = 'Hindi tumatanggap ang tagalako ng ganitong uri ng credit card.';
$string['reason27'] = 'Nagbunga ng ditugmang AVS ang transaksiyon.
Hindi tumutugma ang address sa address ng bill ng may-ari ng card.';
$string['reason28'] = 'Hindi tumatanggap ang tagalako ng ganitong uri ng credit card.';
$string['reason30'] = 'Ang kompigurasyon sa nagpoproseso ay ditanggap.  Tawagan ang Tagalako ng Serbisyo.';
$string['reason39'] = 'Hindi tanggap ang ibinigay na code ng salapi, hindi suportado, hindi pinapahintulutan ng tagalako nito o  walang reyt ng palitan ng pera.';
$string['reason43'] = 'Hindi wasto ang pagsasaayos ng tagalako sa nagpoproseso.  Tawagan mo ang iyong Tagalako ng Serbisyo.';
$string['reason44'] = 'Tinanggihan ang transaksiyong ito.  May error sa pansalâ ng Card Code!';
$string['reason45'] = 'Tinanggihan ang transaksiyong ito.  May error sa pansalâ na Card Code/AVS!';
$string['reason47'] = 'Ang sinisingil na halaga sa pagtatapos ng pagbabayad ay hindi puwedeng mas mataas sa orihinal na pinahintulutang halaga.';
$string['reason5'] = 'Kailangan ng tanggap na halaga.';
$string['reason50'] = 'Ang transaksiyong ito ay naghihintay ng pagtatapos ng pagbabayad at hindi puwedeng isauli.';
$string['reason51'] = 'Ang kabuuan ng lahat ng credit sa transaksiyon ito ay mas malaki kaysa sa orihinal na halaga ng transaksiyon.';
$string['reason54'] = 'Ang pinagbatayang transaksiyon ay hindi umaayon sa mga panuntunan ng pag-isyu ng credit.';
$string['reason55'] = 'Ang kabuuan ng credit sa pinagbatayang transaksiyon ay lalabis sa orihinal na halaga ng debit.';
$string['refund'] = 'Isauli';
$string['refunded'] = 'Isinauli';
$string['returns'] = 'Mga Isinauli';
$string['reviewday'] = 'Awtomatikong i-capture ang credit card maliban na lamang kapag nirebyu ng guro o administrador ang order sa loob ng <b>$a</b> araw.  KAILANGANG BUHAYIN ANG CRON.<br />(0 araw ay mangangahulugan na patayin ang scheduled-capture, gayundin ay rerebyuhin ito ng guro o admin nang mano-mano.  Ang transaksiyon ay kakanselahin kapag pinatay mo ang scheduled-capture o kapag hindi mo nirebyu ito sa loob ng 30 araw.)';
$string['reviewnotify'] = 'Rerebyuhin ang kabayaran mo.  Umasa ka na may email na ipapadala sa iyo ang guro mo sa loob ng ilang araw.';
$string['sendpaymentbutton'] = 'Ipadala ang Bayad';
$string['settled'] = 'Naayos na';
$string['settlementdate'] = 'Petsa ng pag-aayos';
$string['subvoidyes'] = 'Ang isinauli na transaksiyon $a->transid ay kakanselahin at ike-credit ang $a->amount sa iyong akawnt. Talaga bang nais mo itong gawin?';
$string['tested'] = 'Nasubok';
$string['testmode'] = '[MODA NA PAGSUBOK]';
$string['testwarning'] = 'Mukhang gumagana ang Capture/Void/Credit sa modang pagsubok, pero walang rekord na ginawang bago o isiningit sa datosan.';
$string['transid'] = 'ID ng Transaksiyon';
$string['unenrolstudent'] = 'Alisin sa pagkakaenrol ang mag-aaral?';
$string['voidyes'] = 'Kakanselahin ang transaksiyon.  Talaga bang nais mo itong gawin?';
$string['welcometocoursesemail'] = 'Mahal naming mag-aaral,

Salamat sa inyong bayad.  Nag-enrol ka sa mga kursong ito:

$a->courses

Maaari mong iedit ang pagkakakilanlan mo:
$a->profileurl

Maaari mong makita ang mga detalye hinggil sa bayarin mo:
$a->paymenturl';
$string['youcantdo'] = 'Hindi mo puwedeng gawin ang aksiyong ito:  $a->action';

?>
