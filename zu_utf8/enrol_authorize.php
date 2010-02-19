<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9.7+ (Build: 20100208) (2007101571.04)


$string['adminacceptccs'] = 'Yiluphi uhlobo lwekhadi lwesikweletu aluvumelekile.';
$string['adminaccepts'] = 'Kketha indlela yokukhokha evumelekile nohlobo lwayo.';
$string['adminauthcode'] = 'Uma ikhadi lesikweletu lomsebenzise lengathatheki kuyi internet, thola inombolo evumelayo ngokushaya ucingo ebhange lomsebenzisi.';
$string['adminauthorizeccapture'] = 'Order Review &amp; Scheduled-Capture Settings';
$string['adminauthorizeemail'] = 'Okokulungisa ukuthunyelwa kwama email.';
$string['adminauthorizesettings'] = 'Authorize.net Settings';
$string['adminauthorizewide'] = 'Ukulungiswa kwe Site-Wide';
$string['adminavs'] = 'Bheka lokhu uma uvule i Address Verification System (AVS)kuyi akhawundi. Lokhu kufuna igama lesitiladi,state,izwe,zip';
$string['adminconfighttps'] = 'Yenza isiqiniseko sokuthi une <a href=\"$a->url\">turned loginhttps ON</a>\" to use this plugin<br />in Admin >> Variables >> Security >> HTTP security.';
$string['adminconfighttpsgo'] = 'Hamba uye <a href=\"$a->url\">secure page</a> to configure this plugin.';
$string['admincronsetup'] = 'The cron.php maintenance script has not been run for at least 24 hours.<br />Cron must be enabled if you want to use scheduled-capture feature.<br /><b>Enable</b> \'Authorize.net plugin\' and <b>setup cron</b> properly; or <b>uncheck an_review</b> again.<br />If you disable scheduled-capture, transactions will be cancelled unless you review them within 30 days.<br />Check <b>an_review</b> and enter <b>\'0\' to an_capture_day</b> field<br />if you want to <b>manually</b> accept/deny payments within 30 days';
$string['adminemailexpired'] = 'Lokhu kuyasebenza kuyi \'Manual-Capture\'.Abaphathi bayaziswa <b>$a</b> days prior to pending orders expiring.';
$string['adminemailexpiredsort'] = 'Uma inombolo yokuqutshezwa kokuthumela ingasalungile ithunyelwa kothisha nge email, Yiyiphi ebalulekile?';
$string['adminemailexpiredsortcount'] = 'Order count';
$string['adminemailexpiredsortsum'] = 'Imali ngokuphelele';
$string['adminemailexpiredteacher'] = 'Uma wenze i manual-capture(bona ngaphezulu)othisha bazonakekela ukukhokha,bazokwaziswa nge pending orders expiring.Lokhu kuzothumela i email kothisha kubazise nge pending orders to expire.';
$string['adminemailexpsetting'] = '(0=disable sending email, default=2, max=5)<br />(Manual capture settings for sending email: cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Scheduled-Capture Day';
$string['adminhelpreviewtitle'] = 'Ukubhekwa kwama order';
$string['adminneworder'] = 'Dear Admin,

Uthole ipending order:

Order ID: $a->orderid
Transaction ID: $a->transid
User: $a->user
Course: $a->course
Amount: $a->amount

SCHEDULED-CAPTURE ENABLED?: $a->acstatus

If the scheduled-capture is active, the credit card is to be captured on $a->captureon
and then the user is to be enrolled to course; otherwise it will be expired
on $a->expireon and cannot be captured after this day.

You can also accept/deny the payment to enrol the student immediately following this link:
$a->url';
$string['adminnewordersubject'] = '$a->course; New Pending Order: $a->orderid';
$string['adminpendingorders'] = 'You have disabled scheduled-capture feature.<br />Total $a->count transactions with the status of \'Authorized/Pending Capture\' are to be cancelled unless you check them.<br />To accept/deny payments, go to <a href=\'$a->url\'>Payment Management</a> page.';
$string['adminreview'] = 'Bheka indlela okuyiyo ngaphambi kokuba uqhubeze ikhadi lesikweletu.';
$string['adminteachermanagepay'] = 'Othisha bazobhekana nokukhokhwa kwezifundo.';
$string['allpendingorders'] = 'All Pending Orders';
$string['amount'] = 'Imali';
$string['anlogin'] = 'Authorize.net: Login name';
$string['anpassword'] = 'Authorize.net: Password';
$string['anreferer'] = 'Define the URL referer if you have set up this in your authorize.net account. This will send a line \"Referer: URL\" embedded in the web request.';
$string['antrankey'] = 'Authorize.net: Transaction Key';
$string['approvedreview'] = 'Kuyavunyelwa okuboniwe';
$string['authcaptured'] = 'Kuvunyelwe/Kubanjiwe';
$string['authcode'] = 'Inombolo yokuvumela';
$string['authorize:managepayments'] = 'Nakekela ukukhokha';
$string['authorize:uploadcsv'] = 'Shicilela ifayela le CSV.';
$string['authorizedpendingcapture'] = 'Authorized / Pending Capture';
$string['avsa'] = 'Ikheli (isitilati)siyahambelana, postal code ayihambelani.';
$string['avsb'] = 'Ulwazi nge address oyinikile';
$string['avse'] = 'Address Verification System Error';
$string['avsg'] = 'Non-U.S. Card Issuing Bank';
$string['avsn'] = 'No match on address (street) nor postal code';
$string['avsp'] = 'Address Verification System not applicable';
$string['avsr'] = 'Zama- isystem ayitholakala okukanye iphelelwe isikhathi.';
$string['avsresult'] = 'AVS Result: $a';
$string['avss'] = 'Service not supported by issuer';
$string['avsu'] = 'Ulwazi ngekheli alukho';
$string['avsw'] = '9 digit postal code matches, address (street) does not';
$string['avsx'] = 'Address (street) and 9 digit postal code match';
$string['avsy'] = 'Address (street) and 5 digit postal code match';
$string['avsz'] = '5 digit postal code matches, address (street) does not';
$string['canbecredit'] = 'Can be refunded to $a->upto';
$string['cancelled'] = 'Kuyekiwe';
$string['capture'] = 'Capture';
$string['capturedpendingsettle'] = 'Captured / Pending Settlement';
$string['capturedsettled'] = 'Captured / Settled';
$string['captureyes'] = 'Ikhadi lesikweletu lizobonwa bese abafundi bayabhaliswa esifundweni. Unesiqiniseko?';
$string['ccexpire'] = 'Usuku lokonakala';
$string['ccexpired'] = 'Lelikhadi lesikweletu lonakele.';
$string['ccinvalid'] = 'inombolo okungeyiyo yekhadi';
$string['ccno'] = 'inombolo yekhadi lesikweletu';
$string['cctype'] = 'Uhlobo lwekhadi lesikweletu';
$string['ccvv'] = 'Ukuqhutshezwa kwekhadi';
$string['ccvvhelp'] = 'Bheka ngemumva kwekhadi(izinombolo ezi 3 zokugcina)';
$string['choosemethod'] = 'Uma uwazi ukhiye wokubhalisela ukubhala,sicela uwufake ngezansi,<br /> Ngaphandle kwalokho kuzodingeka isikhokhele lesisifundo.';
$string['chooseone'] = 'Gcwalisa esisodwa noma zombili lezi zikhala ezilandelayo. Ukhuye wokuvula awukhonjisiwe.';
$string['costdefaultdesc'] = '<strong>In course settings, enter -1</strong> to use this default cost to course cost field.';
$string['cutofftime'] = 'Transaction Cut-Off Time. When the last transaction is picked up for settlement?';
$string['dataentered'] = 'i Data ifakiwe';
$string['delete'] = 'Kumoshe';
$string['description'] = 'I Authorize.net module ikuvumela ukuthi ulungise izifundo ezikhokhiwe kubalawuli bokukhokha.uma ukukhokhwa kwesifundo kusasengu 0, lapho abafundi abatshelwa ukuba bakhokhele ukungena. Zimbili izindlela zokulungisa ukubiza kwesifundo (1) i site-wide ibiza njenge default yayo yonke i site noma (2 ukulungisa isifundo ozosilungisela isifundo ngasinye.Ukubiza kwesifundo kudlula ukubiza kwe site.<br /><br /><b>Naka:</b> uma ufaka ukhiye wokubhalisa ekulungisweni kwesifundo, nabafundi nabo bazokwazi ukubhalisa ngokusebenzisa lowo khiye.Lokhu kuyasiza uma kuxubene abafundi abakhokhile nabangakhokhile.';
$string['echeckabacode'] = 'Inombolo ye ABA yebhange.';
$string['echeckaccnum'] = 'Inombolo ye akhawundi yebhange.';
$string['echeckacctype'] = 'Uhlobo lwe akhawundi yebhange.';
$string['echeckbankname'] = 'Igama lebhange.';
$string['echeckbusinesschecking'] = 'Ukubhekwa kwebhizinisi.';
$string['echeckchecking'] = 'Kuyabhekwa.';
$string['echeckfirslasttname'] = 'Umnikazi we akhawundi yebhange.';
$string['echecksavings'] = 'Okugciniwe.';
$string['enrolname'] = 'Authorize.net Payment Gateway';
$string['expired'] = 'Akusebenzi.';
$string['haveauthcode'] = 'Sengiyifakile inombolo yokuvunyelwa.';
$string['howmuch'] = 'Malini?';
$string['httpsrequired'] = 'Siyaxolisa ukukwazisa ukuthi okucelile angeke kuqhutshezwe njengamanje. i configuration yale site ayilungisiwe kahle.<br /><br />Sicela ungayifaki inombolo yekhadi lakho lesikweletu uma ungayiboni ilokhi eyellow ngaphansi kwe browser.Uma uphawu luvela, kusho ukuthi ikhasi leveza yonke i data ethunyelwe phakathi kwe client ne server.Ulwazi ngenkathi kuqhutshezwa izimali phakathi kwama computer amabili lunakekelwe, yazi ukuthi inombolo yekhadi lakho lesikweletu ngeke ibonakale kuyi internet.';
$string['invalidaba'] = 'Inombolo ye ABA okungeyona.';
$string['invalidaccnum'] = 'Inombolo ye akhawundi okungeyona';
$string['invalidacctype'] = 'Uhlobo okungelona lwe akhawundi';
$string['logindesc'] = 'Lokhu kumele kube ON. <br /><br />yenza isiqiniseko sokuthi lokhu ku<a href=\"$a->url\">loginhttps ON</a> in Admin >> Variables >> Security.<br /><br />Ukuvula lokhu kuzokwenz i  Moodle isebenzise i https connection evulekile ukuze u login and payment pages.';
$string['logininfo'] = 'Igama lokungena,ukhiye ne trnsaction key akuveziwe ngenxa yokuvikela.Asikho isidingo sokungena futhi uma uke wangena ngaphambilini.';
$string['methodcc'] = 'Ikhadi lesikweletu.';
$string['methodecheck'] = 'eCheck (ACH).';
$string['missingaba'] = 'inombolo ye ABA ayikho.';
$string['missingaddress'] = 'Ikheli alikho.';
$string['missingbankname'] = 'Igama lebhange alikho.';
$string['missingcc'] = 'Inombolo yekhadi ayikho.';
$string['missingccauthcode'] = 'inombolo yokuvunyelwa ayikho.';
$string['missingccexpire'] = 'Usuku lokungasenzeki alukho.';
$string['missingcctype'] = 'Uhlobo lwekhadi alukho.';
$string['missingcvv'] = 'Inombolo yokuqhubeza ayikho.';
$string['missingzip'] = 'Ikhodi ye postal ayikho.';
$string['mypaymentsonly'] = 'Khombisa engikukhokhile kuphela.';
$string['nameoncard'] = 'Igama ekhadini';
$string['new'] = 'Okusha';
$string['noreturns'] = 'Akubuyelwa emumva.';
$string['notsettled'] = 'Akuqediwe';
$string['orderid'] = 'OrderID';
$string['paymentmanagement'] = 'Abanakekela ezokukhokha.';
$string['paymentmethod'] = 'Indlela yokukhokha.';
$string['paymentpending'] = 'Your payment is pending for this course with this order number $a->orderid. See <a href=\'$a->url\'>Order Details</a>.';
$string['pendingecheckemail'] = 'Dear manager,

Kunama $a->count pending echecks njengamanje kumele ufake ifayela le csv ukuze abasebenzisi babhaliswe.
Cinezela ilink bese ufunda ifayela lokusiza kuleli khasi elibonakalayo:$a->url';
$string['pendingechecksubject'] = '$a->course: Pending eChecks($a->count)';
$string['pendingordersemail'] = '$a->pending transactions for course \"$a->course\" will expire unless you accept payment within $a->days days.

Lona umlayezo wokukuqaphelisa, ngoba awuyivulanga i scheduled -capture.
Kumele wamukele noma unqabe ukukhokwa ngokwakho.

ukwamukela noma unqabe ukukhokwa okusaqhutshezwa hamba uye:
$a->url

Ukwenza i scheduled-capture isebenze,kusho ukuthi ngeke usawathola ama emails akuqaphelisayo,hamba uye:$a->enrolurl';
$string['pendingordersemailteacher'] = 'Dear teacher,

$a->pending transactions costed $a->currency $a->sumcost for course \"$a->course\"
will expire unless you accept payment with in $a->days days.

Kumele wamukele nima unqabe ukukhokhwa ngokwakho ngoba abaphethe abayivulile i schedule-capture.$a->url';
$string['pendingorderssubject'] = 'QHAPHELA: $a->course, $a->pending order(s) will expire within $a->days day(s).';
$string['reason11'] = 'Iduplicate transaction imikisiwe.';
$string['reason13'] = 'The merchant Login ID is invalid or the account is inactive.';
$string['reason16'] = 'itransaction itholakele.';
$string['reason17'] = 'i merchant iyilamukeli loluhlobo lwekhadi lesikweletu.';
$string['reason245'] = 'Loluhlobo lwe eCheck aluvumelekile uma usebenzisa i payment gateway hosted payment form.';
$string['reason246'] = 'Loluhlobo lwe eCheck aluvumelekile.';
$string['reason27'] = 'The transaction resulted in an AVS mismatch.Ikheli enikeziwe ayihambisani nekheli le billing yomnikazi wekhadi.';
$string['reason28'] = 'Imerchant ayilumukeli loluhlobo lwekhadi lwesikweletu.';
$string['reason30'] = 'Ukuqhutshezwa akulungile. fonela i Service Provider ye Merchant.';
$string['reason39'] = 'Ukhiye  we currency enikeziwe okukanye ayiphelele, ayivunjelwe, ayivunyelwe kule merchant okukanye ayinayo i exchange rate.';
$string['reason43'] = 'The merchant was incorrectly set up at the processor. Call your Merchant Service Provider.';
$string['reason44'] = 'Le transaction ayiphumelelanga.Card Code filter error!';
$string['reason45'] = 'Le transaction ayiphumelelanga.Card Code / AVS filter error!';
$string['reason47'] = 'Inani ebeliceliwe, licelelwe isixhazululo kungenzeka lingabi ngaphezu kwenani okuyilona lona';
$string['reason5'] = 'Inani okuyilona lona liyadingeka';
$string['reason50'] = 'Le transaction ilinde i settlement futhi ngeke ibuyiselwe emumva.';
$string['reason51'] = 'Inani lezikweletu ngokwale transaction likhulu kunenani okuyilona lona.';
$string['reason54'] = 'The referenced transaction does not meet the criteria for issuing a credit.';
$string['reason55'] = 'The sum of credits against the referenced transaction would exceed the original debit amount.';
$string['reason56'] = 'Le merchant yamukela i eCheck(ACH) transaction kuphela; awekho ama transactions ekhadi lesikweletu alamukelekile.';
$string['refund'] = 'Buyisela';
$string['refunded'] = 'Okubuyisiwe';
$string['returns'] = 'Okujikisiwe';
$string['reviewday'] = 'Capture the credit card automatically unless a teacher or administrator review the order within <b>$a</b> days. CRON MUST BE ENABLED.<br />(0 day means it will disable scheduled-capture, also means teacher or admin review order manually. Transaction will be cancelled if you disable scheduled-capture or unless you review it within 30 days.)';
$string['reviewfailed'] = 'Ukubukwa akuphumelelanga.';
$string['reviewnotify'] = 'Ukukhokha kwakho kuzobhekwa.Lindela i email emumva kwezinsuku ezincane evela kuthisha wakho.';
$string['sendpaymentbutton'] = 'Thumela ukukhokha.';
$string['settled'] = 'Settled';
$string['settlementdate'] = 'Usuku lwe settlement.';
$string['subvoidyes'] = 'The transaction refunded ($a->transid) is going to be cancelled and this will cause crediting $a->amount to your account. Are you sure?';
$string['tested'] = 'Kuqinisekisiwe';
$string['testmode'] = 'INDLELA YOKUKUQINISEKISA';
$string['testwarning'] = 'Capturing/Voiding/Refunding seems working in test mode, but no record was updated or inserted in database.';
$string['transid'] = 'TransactionID';
$string['underreview'] = 'Ngaphansi kokumbekwa';
$string['unenrolstudent'] = 'Susa umfundi ekubhalisweni?';
$string['uploadcsv'] = 'Shicilela ifayela le CSV';
$string['usingccmethod'] = 'Enrol using <a href=\"$a->url\"><strong>Credit Card</strong></a>';
$string['usingecheckmethod'] = 'Enrol using <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Void';
$string['voidyes'] = 'itransaction izosuswa.Unesiqiniseko?';
$string['youcantdo'] = 'Angeke ukwenze lokhu $a->action';
$string['zipcode'] = 'Zip Code';
$string['welcometocoursesemail'] = 'Dear student,

Siyabonga ngokukhokha.Ubhalisiwe kulesi sifundo.
$a->courses

Ungalungisa ulwazi ngawe
$a->profileurl

You may view your payment details:
$a->paymenturl'; // ORPHANED

?>
