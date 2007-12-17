<?PHP // $Id$ 
         // enrol_authorize.php - created with Moodle 1.8.2 + (November 27, 2007)


$string['adminacceptccs'] = 'எவ்வகை கடன் அட்டைகள் ஏற்றுக்கொள்ளப்படும்?';
$string['adminaccepts'] = 'அனுமதிக்கப்பட்ட பணம் செலுத்தல் வகைகள்';
$string['adminauthcode'] = 'பயனாளரது கடன் அட்டை இணையயத்தில் நேரடியாக அனுமதிக்கப்படாத பட்சத்தில், தொலைபேசியூடாக பயனாளரினது வங்கியிலிருந்து அங்கிகாரக்குறியீட்டை பெற்றுக்கொள்ளவும்';
$string['adminauthorizeccapture'] = 'கட்டளை மீள்பார்வை மற்றும் அங்கிகார-நிர்ணய அமைப்புகள்';
$string['adminauthorizeemail'] = 'மின்அஞ்சல் அனுப்புவதற்கான அமைப்பாக்கம்';
$string['adminauthorizesettings'] = 'அங்கிகாரம்.வலை அமைப்பாக்கம்';
$string['adminauthorizewide'] = 'பரந்த-இணைய அமைப்பாக்கம்';
$string['adminavs'] = 'Check this if you have activated Address Verification System (AVS) in your authorize.net account. This demands address fields like street, state, country and zip when user fills out payment form.';
$string['adminconfighttps'] = 'Please ensure that you have \"<a href=\"$a->url\">turned loginhttps ON</a>\" to use this plugin<br />in Admin >> Variables >> Security >> HTTP security.';
$string['adminconfighttpsgo'] = 'Go to the <a href=\"$a->url\">secure page</a> to configure this plugin';
$string['admincronsetup'] = 'The cron.php maintenance script has not been run for at least 24 hours. <br />Cron must be enabled if you want to use scheduled-capture feature.<br /><b>Enable</b> \'Authorize.net plugin\' and <b>setup cron</b> properly; or <b>uncheck an_review</b> again.<br />If you disable scheduled-capture, transactions will be cancelled unless you review them within 30 days.<br />Check <b>an_review</b> and enter <b>\'0\' to an_capture_day</b> field<br />if you want to <b>manually</b> accept/deny payments within 30 days.';
$string['adminemailexpired'] = 'This is useful for \'Manual-Capture\'. Admins are notified <b>$a</b> days prior to pending orders expiring.';
$string['adminemailexpiredsort'] = 'When the number of pending orders expiring are sent to the teachers via email, which one is important?';
$string['adminemailexpiredsortcount'] = 'கட்டளைகளின் எண்ணிக்கை';
$string['adminemailexpiredsortsum'] = 'மொத்த தொகைகள்';
$string['adminemailexpiredteacher'] = 'If you have enabled manual-capture (see above) and teachers can manage the payments, teacher may also notified about pending orders expiring. This will send an email to each course teachers about how many pending orders expiring.';
$string['adminemailexpsetting'] = '(0=disable sending email, default=2, max=5)<br />(Manual capture settings for sending email: cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'அங்கிகார-நிர்ணய நாள்';
$string['adminhelpreviewtitle'] = 'கட்டளை மீள்பார்வை';
$string['adminneworder'] = 'அன்புள்ள நிர்வாகிக்கு, நீங்கள் ஓர் தேங்கியிருக்கும் கட்டளையை பெற்றுள்ளீர்கள்: கட்டளை ID : $a->orderid பரிமாற்ற ID : $a->transid பயனாளர் : $a->user கற்கைநெறி : $a->course பெறுமதி : $a->amount திட்டமிட்ட-கைப்பற்றுதல் அதிகாரம் அழிக்கப்பட்டதா?: $a->acstatus திட்டமிட்ட-கைப்பற்றுதல் அதிகாரம் அழிக்கப்பட்டதாயின் கடன் அட்டை கைப்பற்றுதல் அதிகாரம் அழிக்கப்பட்டதாக இருக்கும் $a->captureon மற்றும் கற்கைநெறியினுள் மாணவர் உள்வாங்கப்பட்டுவிடும், இல்லையேல் அது $a->expireon இல் காலாவதியாகி இருக்கும், மற்றும் அத்தினத்திற்குப்பின் பணம் கைப்பற்றப்பட முடியாது. அத்தோடு உங்களால் உடனடியாக பின் வரும் தொடுப்பின் மூலம் : $a->url உங்களால் கற்கைநெறியினுள் மாணவர் உள்ழாங்கப்படுதலை ஏற்றுக்கொள்ளவோ /தடைசெய்யவோ முடியும்.';
$string['adminnewordersubject'] = '$a->course: புதிய தேங்கியிருக்கும் கட்டளைகள்($a->orderid)';
$string['adminpendingorders'] = 'You have disabled scheduled-capture feature.<br />Total $a->count transactions with a status of \'Authorized/Pending Capture\' will be cancelled unless you check it.<br />To accept/deny payments go to <a href=\'$a->url\'>Payment Management</a> page.';
$string['adminreview'] = 'கடன் அட்டைகளை செயற்படுத்தும் முன்னர் கட்டளைகளை மீளப்பார்க்க.';
$string['adminteachermanagepay'] = 'ஆசிரியர்கள் கற்கை நெறிக்கான பணம் செலுத்தல்களை நிர்வகிக்க முடியும்';
$string['allpendingorders'] = 'சகல தேங்கியிருக்கும் கட்டளைகள்';
$string['amount'] = 'தொகை';
$string['anlogin'] = 'Authorize.net: உள்நுளைவு பெயர்';
$string['anpassword'] = 'Authorize.net: கடவுச்சொல்';
$string['anreferer'] = 'Define the URL referer if you have set up this in your authorize.net account. This will send a line \"Referer: URL\" embedded in the web request.';
$string['antestmode'] = 'Run transactions in test mode only (no money will be drawn)';
$string['antrankey'] = 'Authorize.net: கொடுக்கல் வாங்கல் குறி';
$string['approvedreview'] = 'அனுமதி மீள்பார்வை';
$string['authcaptured'] = 'அனுமதிக்கப்பட்ட';
$string['authcode'] = 'அங்கிகாரக்குறியீடு';
$string['authorize:managepayments'] = 'பணம் செலுத்தல்களை நிர்வகிக்க';
$string['authorize:uploadcsv'] = 'CSV கோப்புக்களை மேலேற்றம் செய்க';
$string['authorizedpendingcapture'] = 'அனுமதிக்கப்பட்ட / தேங்கியிருக்கும் அனுமதி';
$string['avsa'] = 'முகவரி (தெரு)பொருந்துகிறது, தபால் குறியீடு பொருந்தவில்லை';
$string['avsb'] = 'முகவரித்தகவல்கள் வழங்கப்படவில்லை';
$string['avse'] = 'முகவரி சரிபார்த்தல் தொகுதிப்பிழை';
$string['avsg'] = 'U.S.அல்லாத கடன் அட்டை வழங்கும் வங்கி';
$string['avsn'] = 'முகவரி (தெரு), தபால் குறியீடு பொருந்தவில்லை.';
$string['avsp'] = 'முகவரி சரிபார்த்தல் தொகுதி பிரயோகிக்க முடியாது';
$string['avsr'] = 'மீள முயற்சிக்க - நேரம் கடந்துவிட்டமையால் தொகுதி கிடைக்கப்பெறாது';
$string['avsresult'] = '<b>AVS பெறுபேறு:</b> $a';
$string['avss'] = 'விநியோகிப்பவரினால் சேவைகள் எதுவும் ஆதரவளிக்கப்படவில்லை';
$string['avsu'] = 'முகவரித்தகவல்கள் எதுவும் கிடைக்கப்பெறவில்லை';
$string['avsw'] = '9 இலக்க தபால் குறீயீடு ஒத்துவருகிறது, முகவரி (தெரு) அவ்வாறில்லை';
$string['avsx'] = 'முகவரி (தெரு) மற்றும் 9 இலக்க தபால் குறீயீடு ஒத்துவருகிறது';
$string['avsy'] = 'முகவரி (தெரு) மற்றும் 5 இலக்க தபால் குறீயீடு ஒத்துவருகிறது';
$string['avsz'] = '5 இலக்க தபால் குறீயீடு ஒத்துவருகிறது, முகவரி (தெரு) அவ்வாறில்லை';
$string['canbecredit'] = 'Can be refunded to $a->upto';
$string['cancelled'] = 'நீக்கப்பட்ட';
$string['capture'] = 'பிடித்தல்';
$string['capturedpendingsettle'] = 'Captured / தேங்கியிருக்கும் Pending Settlement';
$string['capturedsettled'] = 'Captured / Settled';
$string['captureyes'] = 'கடன் அட்டை அங்கிகரிக்கப்படவுள்ளது மற்றும் மாணவர்களை உள்ளீர்க்ககப்படவுள்ளது நீங்கள் தயாரா?';
$string['ccexpire'] = 'முடிவடையும் தேதி';
$string['ccexpired'] = 'கடன் அட்டை காலாவதியாகிவிட்டது';
$string['ccinvalid'] = 'பொருத்தமற்ற கடன் அட்டை இலக்கம்';
$string['ccno'] = 'கடன் அட்டை இலக்கம்';
$string['cctype'] = 'கடன் அட்டை வகை';
$string['ccvv'] = 'கடன் அட்டை உண்மைப்படுத்தல்';
$string['ccvvhelp'] = 'அட்டையின் பிற்பக்கத்தை பார்க்க (கடைசி 3 digits)';
$string['choosemethod'] = 'If you know the enrolment key of the cource, please enter it; otherwise you need to pay for this course.';
$string['chooseone'] = 'Fill one or both of the following two fields';
$string['costdefaultdesc'] = '<strong>In course settings, enter -1</strong> to use this default cost to course cost field.';
$string['cutofftime'] = 'Transaction Cut-Off Time. When the last transaction is picked up for settlement?';
$string['delete'] = 'அழித்தல்';
$string['description'] = 'The Authorize.net module allows you to set up paid courses via CC providers.  If the cost for any course is zero, then students are not asked to pay for entry.  Two ways to set the course cost (1) a site-wide cost as a default for the whole site or (2) a course setting that you can set for each course individually. The course cost overrides the site cost.<br /><br /><b>Note:</b> If you enter an enrolment key in the course settings, then students will also have the option to enrol using a key. This is useful if you have a mixture of paying and non-paying students.';
$string['echeckabacode'] = 'வங்கி ABA இலக்கம்';
$string['echeckaccnum'] = 'வங்கிக் கணக்கு இலக்கம்';
$string['echeckacctype'] = 'வங்கிக் கணக்கு வகை';
$string['echeckbankname'] = 'வங்கியின் பெயர்';
$string['echeckbusinesschecking'] = 'வர்த்தக சோதனையிடல்';
$string['echeckchecking'] = 'சோதனையிடல்';
$string['echeckfirslasttname'] = 'வங்கிக் கணக்காளர்';
$string['echecksavings'] = 'சேமிப்புக்கள்';
$string['enrolname'] = 'Authorize.net பணம் செலுத்தும் வாயில்';
$string['expired'] = 'முடிவடைந்தது';
$string['haveauthcode'] = 'ஏற்கெனவே என்னிடம் அங்கிகாரக்குறியீடு உள்ளது';
$string['howmuch'] = 'எவ்வளவு?';
$string['httpsrequired'] = 'We are sorry to inform you that your request cannot be processed now. This site\'s configuration couldn\'t be set up correctly.<br /><br />Please don\'t enter your credit card number unless you see a yellow lock at the bottom of the browser. If the symbol appears, it means the page encrypts all data sent between client and server. So the information during the transaction between the two computers is protected, hence your credit card number cannot be captured over the internet.';
$string['invalidaba'] = 'வங்கி ABA இலக்கம் பொருத்தமற்றது';
$string['invalidaccnum'] = 'வங்கிக் கணக்கு இலக்கம் பொருத்தமற்றது';
$string['invalidacctype'] = 'பொருத்தமற்ற வங்கிக் கணக்கு வகை';
$string['logindesc'] = 'This option must be ON. <br /><br />Please ensure that you have turned <a href=\"$a->url\">loginhttps ON</a> in Admin >> Variables >> Security.<br /><br />Turning this on will make Moodle use a secure https connection just for the login and payment pages.';
$string['logininfo'] = 'Login name, password and transaction key are not shown due to security precautions. There is no need to enter again if you have configured these fields before. You see a green text left of the box if some fields were already configured. If you enter these fields for the first time, the login name (*) is required and you must enter <strong>either</strong> the transaction key (#1) <strong>or</strong> the password (#2) in the appropriate box. We recommend you enter the transaction key due to security precautions. If you want to delete the current password, tick the checkbox';
$string['methodcc'] = 'கடன் அட்டை';
$string['methodecheck'] = 'மின் சோதனை (ACH)';
$string['missingaba'] = 'வங்கி ABA இலக்கம் விடுபட்டுள்ளது';
$string['missingaddress'] = 'முகவரி விடுபட்டுள்ளது';
$string['missingbankname'] = 'வங்கியின் பெயர் விடுபட்டுள்ளது';
$string['missingcc'] = 'அட்டை எண் விடுபட்டுள்ளது';
$string['missingccauthcode'] = 'அங்கிகாரக்குறியீடு விடுபட்டுள்ளது';
$string['missingccexpire'] = 'முடிவடையும் தேதி விடுபட்டுள்ளது';
$string['missingcctype'] = 'அட்டை வகை விடுபட்டுள்ளது';
$string['missingcvv'] = 'பரிசோதிப்பு எண் விடுபட்டுள்ளது';
$string['missingzip'] = 'அஞ்சல் குறியீடு விடுபட்டுள்ளது';
$string['mypaymentsonly'] = 'எனது பணம் செலுத்தல்களை மட்டும் காண்பி';
$string['nameoncard'] = 'அட்டையிலுள்ள பெயர்';
$string['new'] = 'புதிய';
$string['noreturns'] = 'மீளளித்தல் இல்லை';
$string['notsettled'] = 'செலுத்தப்படவில்லை';
$string['orderid'] = 'கட்டளை சுட்டி';
$string['paymentmanagement'] = 'பணம் செலுத்தல் நிர்வாகம்';
$string['paymentmethod'] = 'பணம் செலுத்தல் முறை';
$string['paymentpending'] = 'Your payment is pending for this course with this order number $a->orderid.  See <a href=\'$a->url\'>Order Details</a>.';
$string['pendingecheckemail'] = 'There are $a->count pending echecks now and you have to upload a csv file to get the users enrolled.

Click the link and read the help file on the page seen:
$a->url';
$string['pendingechecksubject'] = '$a->course: Pending eChecks($a->count)';
$string['pendingordersemail'] = 'Dear admin,

$a->pending transactions for course \"$a->course\" will expire unless you accept payment within $a->days days.

This is a warning message, because you didn\'t enable scheduled-capture.
It means you have to accept or deny payments manually.

To accept/deny pending payments go to:
$a->url

To enable scheduled-capture, it means you will not receive any warning emails anymore, go to:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Dear teacher,

$a->pending transactions costed $a->currency $a->sumcost for course \"$a->course\"
will expire unless you accept payment with in $a->days days.

You have to accept or deny payments manually because of the admin hasn\'t enabled the scheduled-capture.

$a->url';
$string['pendingorderssubject'] = 'WARNING: $a->course, $a->pending order(s) will expire within $a->days day(s).';
$string['reason11'] = 'A duplicate transaction has been submitted.';
$string['reason13'] = 'The merchant Login ID is invalid or the account is inactive.';
$string['reason16'] = 'The transaction was not found.';
$string['reason17'] = 'The merchant does not accept this type of credit card.';
$string['reason245'] = 'This eCheck type is not allowed when using the payment gateway hosted payment form.';
$string['reason246'] = 'This eCheck type is not allowed.';
$string['reason27'] = 'The transaction resulted in an AVS mismatch. The address provided does not match billing address of cardholder.';
$string['reason28'] = 'The merchant does not accept this type of credit card.';
$string['reason30'] = 'The configuration with the processor is invalid. Call Merchant Service Provider.';
$string['reason39'] = 'The supplied currency code is either invalid, not supported, not allowed for this merchant or doesn\'t have an exchange rate.';
$string['reason43'] = 'The merchant was incorrectly set up at the processor. Call your Merchant Service Provider.';
$string['reason44'] = 'This transaction has been declined. Card Code filter error!';
$string['reason45'] = 'This transaction has been declined. Card Code / AVS filter error!';
$string['reason47'] = 'The amount requested for settlement may not be greater than the original amount authorized.';
$string['reason5'] = 'A valid amount is required.';
$string['reason50'] = 'This transaction is awaiting settlement and cannot be refunded.';
$string['reason51'] = 'The sum of all credits against this transaction is greater than the original transaction amount.';
$string['reason54'] = 'The referenced transaction does not meet the criteria for issuing a credit.';
$string['reason55'] = 'The sum of credits against the referenced transaction would exceed the original debit amount.';
$string['reason56'] = 'This merchant accepts eCheck (ACH) transactions only; no credit card transactions are accepted.';
$string['refund'] = 'மீளளி';
$string['refunded'] = 'மீளளிக்கப்பட்டது';
$string['returns'] = 'திருப்பப்பட்டது';
$string['reviewday'] = 'Capture the credit card automatically unless a teacher or administrator review the order within <b>$a</b> days. CRON MUST BE ENABLED.<br />(0 day means it will disable scheduled-capture, also means teacher or admin review order manually. Transaction will be cancelled if you disable scheduled-capture or unless you review it within 30 days.)';
$string['reviewfailed'] = 'மீள்பார்வையிடல் பிழைத்துவிட்டது';
$string['reviewnotify'] = 'Your payment will be reviewed. Expect an email within a few days from your teacher.';
$string['sendpaymentbutton'] = 'பணம் செலுத்தலை அனுப்பு';
$string['settled'] = 'செலுத்தப்பட்டுவிட்டது';
$string['settlementdate'] = 'செலுத்தப்படல் திகதி';
$string['subvoidyes'] = 'Refunded transaction $a->transid will be cancelled and it will credit $a->amount to your account. Are you sure?';
$string['tested'] = 'Tested';
$string['testmode'] = '[TEST MODE]';
$string['testwarning'] = 'Capture/Void/Credit seems working in test mode, but no record was updated or inserted in database.';
$string['transid'] = 'Transaction ID';
$string['underreview'] = 'மீள்பார்வையிலுள்ளது';
$string['unenrolstudent'] = 'மாணவனை வெளியேற்ற?';
$string['uploadcsv'] = 'CSV  கோப்பொன்றினை மேலேற்றம் செய்க';
$string['usingccmethod'] = 'Enrol using <a href=\"$a->url\"><strong>Credit Card</strong></a>';
$string['usingecheckmethod'] = 'Enrol using <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Void';
$string['voidyes'] = 'Transaction will be cancelled. Are you sure?';
$string['welcometocoursesemail'] = 'Thanks for your payments. You have enrolled these courses: $a->courses You may edit your profile:
$a->profileurl';
$string['youcantdo'] = 'உம்மால் இச்செயலினைச்செய்தல் முடியாது : $a->action';
$string['zipcode'] = 'தபால் குறியீடு';

?>