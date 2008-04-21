<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.8.2+ (2007021520)


$string['adminacceptccs'] = 'Pa fathau o gardiau credyd a dderbynnir?';
$string['adminaccepts'] = 'Dewiswch dulliau talu a ganiateir a\'u mathau';
$string['adminauthcode'] = 'Os nad oes modd cipio manylion cerdyn credyd defnyddiwr ar y rhyngrwyd yn uniongyrchol, dylech ofyn am god awdurdodi dros y ffôn gan fanc y cwsmer.';
$string['adminauthorizeccapture'] = 'Adolygu Archeb &amp; Wedi Trefnu Gosodiadau Cipio';
$string['adminauthorizeemail'] = 'Gosodiadau Anfon E-bost';
$string['adminauthorizesettings'] = 'Gosodiadau Authorize.net';
$string['adminauthorizewide'] = 'Gosodiadau\'r Safle Cyfan';
$string['adminavs'] = 'Ticiwch hwn os ydych wedi ysgogi\'r System Gwirio Cyfeiriadau (Address Verification Sysytem) yn eich cyfrif authorize.net. Bydd hyn yn gofyn am feysydd cyfeiriad megis stryd, talaith, gwlad a chod post pan fo defnyddiwr yn llenwi ffurflen talu.';
$string['adminconfighttps'] = 'Sicrhewch eich bod\"<a href=\"$a->url\">wedi troi loginhttps YMLAEN</a>\" i ddefnyddio\'r ategyn hwn<br />yn Gweinyddol >> Newidynnau >> Diogelwch >> Diogelwch HTTP.';
$string['adminconfighttpsgo'] = 'Ewch i\'r <a href=\"$a->url\">dudalen ddiogel</a> i ffurfweddu\'r ategyn hwn.';
$string['admincronsetup'] = 'Nid yw\'r sgript cynnal a chadw cron.php wedi\'i redeg ers o leiaf 24 awr.<br />Rhaid galluogi cron os ydych am ddefnyddio\'r nodwedd cipio wedi\'i drefnu.<br /><b>Galluogwch</b> \'Ategyn Authorize.net\' a <b>gosodwch cron</b> yn iawn; neu <b>dad-diciwch an_review</b> eto.<br />Os ydych chi\'n dewis peidio cipio wedi\'i drefnu, caiff trafodion eu canslo oni bai eich bod yn eu hadolygu o fewn 30 diwrnod.<br />Ticiwch <b>an_review</b> a theipio <b>\'0\' yn y maes an_capture_day</b> <br />os ydych am dderbyn/gwrthod taliadau <b>eich hun</b> o fewn 30 diwrnod.';
$string['adminemailexpired'] = 'Mae hyn yn ddefnyddiol ar gyfer \'Cipio-eich-hun\'. Caiff gweinyddwyr eu hysbysu <b>$a</b> diwrnod cyn i archebion dan ystyriaeth ddod i ben.';
$string['adminemailexpiredsort'] = 'Pan anfonir e-bost at yr athrawon yn nodi nifer yr archebion sydd ar y gweill sy\'n dod i ben, pa un sy\'n bwysig?';
$string['adminemailexpiredsortcount'] = 'Nifer yr archebion';
$string['adminemailexpiredsortsum'] = 'Cyfanswm';
$string['adminemailexpiredteacher'] = 'Os ydych chi wedi dewis cipio-eich-hun (gweler uchod) a gall athrawon reoli\'r taliadau, gellir eu hysbysu hefyd am archebion sydd ar y gweill sy\'n dod i ben. Bydd hyn yn anfon neges e-bost at athrawon pob cwrs am nifer yr archebion sydd ar y gweill sy\'n dod i ben.';
$string['adminemailexpsetting'] = '(0=analluogi anfon e-bost, diofyn=2, uchafswm=5)<br />(Gosodiadau cipio-eich-hun ar gyfer anfon e-bost: cron=galluogi, an_review=ticio, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Diwrnod Trefnu Cipio';
$string['adminhelpreviewtitle'] = 'Adolygu Trefn';
$string['adminneworder'] = 'Annwyl Weinyddwr,

Rydych chi wedi derbyn archeb newydd sydd ar y gweill:

ID Archeb: $a->orderid
ID Trafodyn: $a->transid
Defnyddiwr: $a->user
Cwrs: $a->course
Swm: $a->amount

WEDI GALLUOGI TREFNU CIPIO?: $a->acstatus

Os ydych chi wedi galluogi trefnu cipio, caiff manylion y cerdyn credyd eu cipio ar $a->captureon
ac yna cofrestrir y defnyddiwr ar y cwrs; fel arall, daw i ben
ar $a->expireon ac ni ellir eu cipio ar ôl y diwrnod hwn.

Gallwch hefyd dderbyn/gwrthod y taliad i gofrestru\'r myfyriwr ar unwaith drwy ddilyn y ddolen hon:
$a->url';
$string['adminnewordersubject'] = '$a->course; Archeb Newydd ar y Gweill: $a->orderid';
$string['adminpendingorders'] = 'Rydych chi wedi analluogi\'r nodwedd trefnu cipio.<br />Caiff cyfanswm o $a->count trafodyn â\'r statws \'Cipio wedi\'i Awdurdodi/Ar y Gweill\' eu canslo os na wnewch eu gwirio.<br />I dderbyn/gwrthod taliadau, ewch i\'r dudalen <a href=\'$a->url\'>Rheoli Taliadau</a>.';
$string['adminreview'] = 'Adolygu\'r archeb cyn prosesu\'r cerdyn credyd.';
$string['adminteachermanagepay'] = 'Gall athrawon reoli taliadau\'r cwrs.';
$string['allpendingorders'] = 'Pob Archeb sydd ar y Gweill';
$string['amount'] = 'Swm';
$string['anlogin'] = 'Authorize.net: Enw mewngofnodi';
$string['anpassword'] = 'Authorize.net: Cyfrinair';
$string['anreferer'] = 'Diffiniwch y cyfeiriwr URL os ydych chi wedi gosod un yn eich cyfrif authorize.net. Bydd hyn yn anfon llinell \"Cyfeiriwr: URL\" wedi\'i fewnosod yn y cais gwe.';
$string['antestmode'] = 'Rhedeg trafodion yn y modd prawf yn unig (ni thynnir dim arian)';
$string['antrankey'] = 'Authorize.net: Allwedd Trafodyn';
$string['approvedreview'] = 'Adolygiad wedi\'i gymeradwyo';
$string['authcaptured'] = 'Wedi Awdurdodi / Wedi Cipio';
$string['authcode'] = 'Cod Awdurdodi';
$string['authorize:managepayments'] = 'Rheoli taliadau';
$string['authorize:uploadcsv'] = 'Llwytho ffeil CSV i fyny';
$string['authorizedpendingcapture'] = 'Cipio wedi\'i awdurdodi / ar y gweill';
$string['avsa'] = 'Cyfeiriad (stryd) yn cyfateb, cod post ddim yn cyfateb';
$string['avsb'] = 'Heb ddarparu gwybodaeth cyfeiriad';
$string['avse'] = 'Gwall yn y System Gwirio Cyfeiriad';
$string['avsg'] = 'Banc Nad yw\'n Cyhoeddi Cardiau U.D.A.';
$string['avsn'] = 'Nid yw\'r cyfeiriad (stryd) na\'r cod post yn cyfateb';
$string['avsp'] = 'Nid yw\'r System Gwirio Cyfeiriad yn berthnasol';
$string['avsr'] = 'Rhoi cynnig arall arni - Nid yw\'r system ar gael neu mae\'r amser wedi dod i ben';
$string['avsresult'] = 'Canlyniad AVS: $a';
$string['avss'] = 'All y cyhoeddwr ddim delio â\'r gwasanaeth';
$string['avsu'] = 'Does dim gwybodaeth am y cyfeiriad ar gael';
$string['avsw'] = 'Cod post 9 digid yn cyfateb, cyfeiriad (stryd) ddim yn cyfateb';
$string['avsx'] = 'Cyfeiriad (stryd) a chod post 9 digid yn cyfateb';
$string['avsy'] = 'Cyfeiriad (stryd) a chod post 5 digid yn cyfateb';
$string['avsz'] = 'Cod post 5 digid yn cyfateb, cyfeiriad (stryd) ddim yn cyfateb';
$string['canbecredit'] = 'Gellir ei ad-dalu hyd at $a->upto';
$string['cancelled'] = 'Wedi canslo';
$string['capture'] = 'Cipio';
$string['capturedpendingsettle'] = 'Wedi Cipio / Setliad ar y Gweill';
$string['capturedsettled'] = 'Wedi Cipio / Wedi Setlo';
$string['captureyes'] = 'Caiff y cerdyn credyd ei gipio a chaiff y myfyriwr ei gofrestru ar y cwrs. Ydych chi\'n siŵr?';
$string['ccexpire'] = 'Dyddiad dod i ben:';
$string['ccexpired'] = 'Mae\'r cerdyn credyd wedi dod i ben';
$string['ccinvalid'] = 'Rhif cerdyn annilys';
$string['ccno'] = 'Rhif Cerdyn Credyd';
$string['cctype'] = 'Math o Gerdyn Credyd';
$string['ccvv'] = 'Gwirio Cerdyn';
$string['ccvvhelp'] = 'Edrychwch ar gefn y cerdyn (3 digid olaf)';
$string['choosemethod'] = 'Os ydych chi\'n gwybod allwedd cofrestru\'r cwrs, teipiwch ef isod.<br />Fel arall, bydd rhaid i chi dalu am y cwrs hwn.';
$string['chooseone'] = 'Llenwch un neu\'r ddau o\'r meysydd canlynol. Ni ddangosir y cyfrinair.';
$string['costdefaultdesc'] = '<strong>Yng ngosodiadau\'r cwrs, teipiwch -1</strong> i ddefnyddio\'r gost ddiofyn hon ym maes cost y cwrs.';
$string['cutofftime'] = 'Amser Diweddu Trafodion. Pryd gaiff y trafodiad olaf ei setlo?';
$string['delete'] = 'Dinistrio';
$string['description'] = 'Mae\'r modiwl Authorize.net yn eich galluogi i drefnu cyrsiau y telir amdanynt drwy ddarparwyr talu. Os mai cost unrhyw gwrs yw dim, ni ofynnir i fyfyrwyr dalu am fynediad. Ceir dwy ffordd o bennu cost y cwrs: (1) cost i\'r safle cyfan fel dewis diofyn i\'r holl safle neu (2) gosodiad cwrs y gallwch ei osod ar bob cwrs yn unigol. Bydd cost y cwrs yn diystyru cost y safle.<br /><br /><b>Cofiwch:</b> Os teipiwch allwedd cofrestru yng ngosodiadau\'r cwrs, bydd myfyrwyr hefyd yn gallu dewis defnyddio allwedd i gofrestru. Mae hyn yn ddefnyddiol os oes gennych gymysgedd o fyfyrwyr sy\'n talu a myfyrwyr sydd ddim yn talu.';
$string['echeckabacode'] = 'Rhif ABA Banc';
$string['echeckaccnum'] = 'Rhif Cyfrif Banc';
$string['echeckacctype'] = 'Math o Gyfrif Banc';
$string['echeckbankname'] = 'Enw\'r Banc';
$string['echeckbusinesschecking'] = 'Wrthi\'n Gwirio Busnes';
$string['echeckchecking'] = 'Wrthi\'n Gwirio';
$string['echeckfirslasttname'] = 'Perchennog y Cyfrif Banc';
$string['echecksavings'] = 'Cynilion';
$string['enrolname'] = 'Porth Talu Authorize.net';
$string['expired'] = 'Wedi dod i ben';
$string['haveauthcode'] = 'Mae gen i god dilysu eisoes';
$string['howmuch'] = 'Faint?';
$string['httpsrequired'] = 'Mae\'n flin gennyf, allwn ni ddim prosesu eich cais ar hyn o bryd. Doedd dim modd gosod ffurfweddiad y safle hwn yn gywir.<br /><br />Peidiwch â rhoi rhif eich cerdyn credyd os nad ydych yn gweld clo melyn yng ngwaelod y porwr. Os yw\'r symbol yn ymddangos, mae\'n golygu bod y dudalen yn amgryptio\'r holl ddata a anfonir rhwng y cleient a\'r gweinydd. Felly, caiff y wybodaeth yn ystod y trafodiad rhwng y ddau gyfrifiadur ei ddiogelu, ac ni ellir cipio rhif eich cerdyn credyd dros y rhyngrwyd.';
$string['invalidaba'] = 'Rhif ABA annilys';
$string['invalidaccnum'] = 'Rhif cyfrif annilys';
$string['invalidacctype'] = 'Math annilys o gyfrif';
$string['logindesc'] = 'Rhaid GALLUOGI y dewis hwn. <br /><br />Sicrhewch eich bod wedi <a href=\"$a->url\">GALLUOGI loginhttps</a> yn Gweinyddol >> Newidynnau >> Diogelwch.<br /><br />Bydd galluogi hyn yn gwneud i Moodle ddefnyddio cysylltiad https diogel ar gyfer y tudalennau mewngofnodi a thalu\'n unig.';
$string['logininfo'] = 'Ni ddangosir enw mewngofnodi, cyfrinair nac allwedd y trafodiad oherwydd rhagofalon diogelwch. Does dim angen eu teipio eto os ydych chi wedi ffurfweddu\'r meysydd hyn eisoes. Fe welwch destun gwyrdd i\'r chwith o\'r blwch os cafodd rhai meysydd eu ffurfweddu eisoes. Os ydych chi\'n teipio\'r meysydd hyn am y tro cyntaf, mae\'r enw mewngofnodi (*) yn ofynnol a rhaid i chi deipio <strong>naill ai</strong> allwedd y trafodiad (#1) <strong>neu</strong> y cyfrinair (#2) yn y blwch priodol. Rydym yn argymell eich bod yn teipio allwedd y trafodiad oherwydd rhagofalon diogelwch. Os ydych chi am ddileu\'r cyfrinair cyfredol, ticiwch y blwch.';
$string['methodcc'] = 'Cerdyn Credyd';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Rhif ABA ar goll';
$string['missingaddress'] = 'Cyfeiriad ar goll';
$string['missingbankname'] = 'Enw banc ar goll';
$string['missingcc'] = 'Rhif cerdyn ar goll';
$string['missingccauthcode'] = 'Cod awdurdodi ar goll';
$string['missingccexpire'] = 'Dyddiad dod i ben ar goll';
$string['missingcctype'] = 'Math cerdyn ar goll';
$string['missingcvv'] = 'Rhif gwirio ar goll';
$string['missingzip'] = 'Cod post ar goll';
$string['mypaymentsonly'] = 'Dangos fy nhaliadau i yn unig';
$string['nameoncard'] = 'Enw ar y Cerdyn';
$string['new'] = 'Newydd';
$string['noreturns'] = 'Dim dychwelyd!';
$string['notsettled'] = 'Heb ei setlo';
$string['orderid'] = 'ID yr Archeb';
$string['paymentmanagement'] = 'Rheoli Taliadau';
$string['paymentmethod'] = 'Dull Talu';
$string['paymentpending'] = 'Mae eich taliad ar gyfer y cwrs hwn ar y gweill gyda\'r rhif archebu $a->orderid. Gweler y <a href=\'$a->url\'>Manylion Archebu</a>.';
$string['pendingecheckemail'] = 'Annwyl reolwr,

Mae $a->count echeck ar y gweill bellach, a bydd rhaid i chi lwytho ffeil csv i fyny er mwyn cofrestru\'r defnyddwyr.

Cliciwch y ddolen a darllenwch y ffeil help ar y dudalen a welwch:
$a->url';
$string['pendingechecksubject'] = '$a->course: eChecks ar y gweill ($a->count)';
$string['pendingordersemail'] = 'Annwyl weinyddwr,

Bydd $a->pending trafodiad ar gyfer y cwrs \"$a->course\" yn dod i ben oni bai eich bod yn derbyn taliad o fewn $a->days diwrnod.

Neges rhybudd yw hon, oherwydd ni wnaethoch alluogi\'r broses trefnu cipio.
Mae\'n golygu bod rhaid i chi dderbyn neu wrthod taliadau eich hun.

I dderbyn/gwrthod taliadau sydd ar y gweill, ewch i:
$a->url

Er mwyn trefnu cipio, a fydd yn golygu na fyddwch yn derbyn dim mwy o negeseuon e-bost rhybudd, ewch i:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Annwyl athro,

Bydd $a->pending trafodiad gwerth $a->currency $a->sumcost ar gyfer y cwrs \"$a->course\"
yn dod i ben oni bai eich bod yn derbyn taliad o fewn $a->days diwrnod.

Rhaid i chi dderbyn neu wrthod taliadau eich hun oherwydd nid yw\'r gweinyddwr wedi galluogi trefnu cipio.

$a->url';
$string['pendingorderssubject'] = 'RHYBUDD: $a->course, bydd $a->pending archeb yn dod i ben o fewn $a->days diwrnod.';
$string['reason11'] = 'Mae trafodiad dyblyg wedi\'i gyflwyno.';
$string['reason13'] = 'Mae ID Mewngofnodi\'r masnachwr yn annilys neu mae\'r cyfrif yn anweithredol.';
$string['reason16'] = 'Heb ganfod y trafodiad.';
$string['reason17'] = 'Nid yw\'r masnachwr yn derbyn y math hwn o gerdyn credyd.';
$string['reason245'] = 'Ni chaniateir y math hwn o eCheck wrth ddefnyddio\'r ffurflen talu sy\'n cael ei gwesteio yn yr adwy talu.';
$string['reason246'] = 'Ni chaniateir y math hwn o eCheck.';
$string['reason27'] = 'Mae\'r trafodiad hwn wedi arwain at anghysonder AVS. Nid yw\'r cyfeiriad a roddwyd yn cyfateb i gyfeiriad bilio deilydd y cerdyn.';
$string['reason28'] = 'Nid yw\'r masnachwr yn derbyn y math hwn o gerdyn credyd.';
$string['reason30'] = 'Mae\'r ffurfweddiad gyda\'r prosesydd yn annilys. Ffoniwch y Darparwr Gwasanaeth Masnachwr.';
$string['reason39'] = 'Mae\'r cod arian a roddwyd naill ai\'n annilys, does dim modd delio ag ef, ni chaiff ei ganiatáu ar gyfer y masnachwr hwn, neu nid oes ganddo gyfradd cyfnewid.';
$string['reason43'] = 'Masnachwr heb ei osod yn gywir yn y prosesydd. Ffoniwch eich Darparwr Gwasanaeth Masnachwr.';
$string['reason44'] = 'Mae\'r trafodiad hwn wedi ei wrthod. Gwall hidlydd Cod Cerdyn!';
$string['reason45'] = 'Mae\'r trafodiad hwn wedi ei wrthod. Gwall hidlydd Cod Cerdyn / AVS!';
$string['reason47'] = 'Ni all y swm gofynnol i setlo fod yn fwy na\'r swm a awdurdodwyd yn y lle cyntaf.';
$string['reason5'] = 'Rhaid cael swm dilys.';
$string['reason50'] = 'Mae\'r trafodiad hwn yn aros i gael ei setlo ac ni ellir ei ad-dalu.';
$string['reason51'] = 'Mae swm yr holl gredydau yn erbyn y trafodiad hwn yn fwy na swm y trafodiad gwreiddiol.';
$string['reason54'] = 'Nid yw\'r trafodiad y cyfeiriwyd ato\'n bodloni\'r meini prawf ar gyfer cyflwyno credyd.';
$string['reason55'] = 'Byddai swm y credydau yn erbyn y trafodiad y cyfeiriwyd ato yn fwy na swm y debyd gwreiddiol.';
$string['reason56'] = 'Dim ond trafodion eCheck (ACH) y mae\'r masnachwr hwn yn eu derbyn; ni dderbynnir trafodion cerdyn credyd.';
$string['refund'] = 'Ad-daliad';
$string['refunded'] = 'Wedi Ad-dalu';
$string['returns'] = 'Dychwelyd';
$string['reviewday'] = 'Cipio\'r manylion cerdyn credyd yn awtomatig oni bai bod athro neu weinyddwr yn adolygu\'r archeb o fewn <b>$a</b> diwrnod. RHAID GALLUOGI CRON.<br />(Bydd 0 diwrnod yn golygu y bydd yn analluogi trefnu cipio, a hefyd yn golygu bod rhaid i athro neu weinyddwr adolygu\'r archeb eu hunain. Caiff y trafodiad ei ganslo os ydych yn dewis peidio â threfnu cipio neu oni bai eich bod yn ei adolygu o fewn 30 diwrnod.)';
$string['reviewfailed'] = 'Adolygiad wedi Methu';
$string['reviewnotify'] = 'Caiff eich taliad ei adolygu. Byddwch yn derbyn e-bost o fewn ychydig ddiwrnodau gan eich athro.';
$string['sendpaymentbutton'] = 'Anfon Taliad';
$string['settled'] = 'Wedi Setlo';
$string['settlementdate'] = 'Dyddiad Setlo';
$string['subvoidyes'] = 'Caiff y trafodiad a ad-dalwyd ($a->transid) ei ganslo, a bydd hyn yn credydu $a->amount i\'ch cyfrif. Ydych chi\'n siŵr?';
$string['tested'] = 'Wedi Profi';
$string['testmode'] = '[MODD PRAWF]';
$string['testwarning'] = 'Ymddengys bod cipio/dirymu/ad-dalu yn gweithio yn y modd prawf, ond ni chafodd unrhyw gofnod ei ddiweddaru na\'i blannu yn y gronfa ddata.';
$string['transid'] = 'ID y Trafodiad';
$string['underreview'] = 'Wrthi\'n Cael ei Adolygu';
$string['unenrolstudent'] = 'Dadgofrestru myfyriwr?';
$string['uploadcsv'] = 'Llwytho ffeil CSV i fyny';
$string['usingccmethod'] = 'Cofrestru drwy ddefnyddio <a href=\"$a->url\"><strong>Cerdyn Credyd</strong></a>';
$string['usingecheckmethod'] = 'Cofrestru drwy ddefnyddio <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Dirymu';
$string['voidyes'] = 'Caiff y trafodiad ei ganslo. Ydych chi\'n siŵr?';
$string['welcometocoursesemail'] = 'Annwyl fyfyriwr,

Diolch am eich taliadau. Rydych chi  wedi cofrestru ar y cyrsiau hyn:

$a->courses

Gallwch olygu eich proffil:
 $a->profileurl

Gallwch weld manylion eich taliad:
 $a->paymenturl';
$string['youcantdo'] = 'Chewch chi ddim gwneud y weithred hon: $a->action';
$string['zipcode'] = 'Cod post';

?>
