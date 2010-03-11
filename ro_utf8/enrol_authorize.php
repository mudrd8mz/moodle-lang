<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['adminacceptccs'] = 'Care sunt tipurile de card de credit care vor fi acceptate?';
$string['adminaccepts'] = 'Selectaţi metodele de plată acceptate şi tipurile corespunzătoare';
$string['adminauthcode'] = 'În cazul în care informaţiile despre cardul de credit al unui utilizator nu pot fi obţinure direct prin Internet, obţine un cod de autorizare prin telefon de la banca emiţătoare a cardului.';
$string['adminauthorizeccapture'] = 'Order Review &amp; Scheduled-Capture Settings';
$string['adminauthorizeemail'] = 'Setări trimitere email';
$string['adminauthorizesettings'] = 'Autorizare setări .net';
$string['adminauthorizewide'] = 'Setări generale sit';
$string['adminavs'] = 'Activaţi acest parametru dacă aţi activat funcţionalitatea Address Verification System (AVS)(Sistem de Verificare a Adreselor) în contul dumneavoastră authorize.net. Acest sistem cere utilizatorului să completeze în formularul de plată informaţii ca stradă, stat, ţară şi cod poştal.';
$string['adminconfighttps'] = 'Pentru a putea utiliza acest plugin \"<a href=\"$a->url\">vă rugăm să vă asiguraţi că aţi pornit loginhttps</a>\" />din Admin >> Variabile >> Securitate >> Securitate HTTP.';
$string['adminconfighttpsgo'] = 'Pentru a configura acest plugin accesaţi pagina securizată <a href=\"$a->url\"></a>';
$string['admincronsetup'] = 'Scriptul de depanare cron.php maintenance nu a mai fost pornit de cel puţin 24 de ore.<br />Dacă doriţi să utilizaţi funcţionalitatea scheduled-capture scriptul Cron trebuie să fie activat.<br /><b>Activaţi</b> \'Authorize.net plugin\' şi <b>configuraţi corect scriptul cron</b>; sau <b>dezactivaţi an_review</b> din nou.<br />Dacă dezactivaţi funcţionalitatea scheduled-capture, orice tranzacţie va fi anulată dacă nu este verificată în 30 de zile.<br />Dacă doriţi să aprobaţi/respingeţi <b>manual</b> plăţile în intervalul de 30 de zile activaţi <b>an_review</b> şi completaţi valoarea <b>\'0\' în câmpul an_capture_day</b> <br />.';
$string['adminemailexpired'] = 'Acest parametru este de folos în cazul utilizării opţiunii \'Manual-Capture\'. Utilizatorii administratori primesc o notificare cu <b>$a</b> zile înainte ca o comandă neprocesată să expire.';
$string['adminemailexpiredsort'] = 'Atunci când un număr de comenzi neprocesate şi pe cale să expire sunt trimise prin email profesorilor, care este cea mai importantă?';
$string['adminemailexpiredsortcount'] = 'Număr comenzi';
$string['adminemailexpiredsortsum'] = 'Suma totală';
$string['adminemailexpiredteacher'] = 'În cazul în care aţi activat funcţionalitatea manual-capture (pentru detalii vezi mai sus) şi profesorii pot să administreze plăţi, aceştia vor putea de asemenea primi notificări în legătură cu comenzi neprocesate şi care sunt pe cale de a expira. Acest parametru va trimite notificări tuturor profesorilor din cadrul unui curs despre comenzile neprocesate şi pe cale de a expira.';
$string['adminemailexpsetting'] = '(0=dezactivează trimiterea mesajului email, implicit=2, max=5)<br />(Setări Manual capture pentru trimiterea de mesaj email: cron=activat, an_review=selectat, an_capture_day=0, an_emailexpired=1-5)
adminemailexpsetting';
$string['adminhelpcapturetitle'] = 'Zi Scheduled-Capture';
$string['adminhelpreviewtitle'] = 'Order Review';
$string['adminneworder'] = 'Stimate utilizator administrator,

Aveţi o comandă în aşteptare, iată informaţiile de identificare ale comenzii:

Order ID: $a->orderid
Transaction ID: $a->transid
User: $a->user
Course: $a->course
Amount: $a->amount

SCHEDULED-CAPTURE ENABLED?: $a->acstatus

Dacă funcţionalitatea scheduled-capture este activată, informaţiile despre cardul de credit vor fi reţinute la data $a->captureon
şi ulterior utilizatorul va fi înscris la curs; în cazul în care funcţionalitatea amintită mai sus nu este activată comanda expiră la $a->expireon şi informaţiile despre card nu vor mai putea fi reţinute ulterior acestei date.

Aveţi de asemenea posibilitatea să acceptaţi/respingeţi plata şi să realizaţi pe loc înscrierea cursantului la curs accesând următorul link:
$a->url';
$string['adminnewordersubject'] = '$a->course; Comandă nouă în aşteptare: $a->orderid';
$string['adminpendingorders'] = 'Aţi dezactivat funcţionalitatea scheduled-capture.<br />Există un număr de $a->count tranzacţii cu status-ul \'Autorizat/Pending Capture\' care vor fi anulate dacă nu le verificaţi.<br />Pentru a accepta/respinge plăţi accesaţi, <a href=\'$a->url\'>Administrare Plăţi</a> page.';
$string['adminreview'] = 'Verifică comanda înainte de procesarea cardului de credit.';
$string['adminteachermanagepay'] = 'Profesorii pot procesa plăţile cursurilor.';
$string['allpendingorders'] = 'Toate cererile neprocesate';
$string['amount'] = 'Sumă';
$string['anlogin'] = 'Authorize.net: nume utilizator';
$string['anpassword'] = 'Authorize.net: Parolă';
$string['anreferer'] = 'Define the URL referer if you have set up this in your authorize.net account. This will send a line \"Referer: URL\" embedded in the web request.';
$string['antestmode'] = 'Rulează tranzacţiile doar în modul de test (fără transferul banilor)';
$string['antrankey'] = 'Authorize.net: Transaction Key';
$string['approvedreview'] = 'Approved Review';
$string['authcaptured'] = 'Autorizat / Capturat';
$string['authcode'] = 'Cod autorizaţie';
$string['authorize:managepayments'] = 'Administrare plăţi';
$string['authorize:uploadcsv'] = 'Încarcă fişier CSV';
$string['authorizedpendingcapture'] = 'Autorizat / Captura în aşteptare';
$string['avsa'] = 'Adresa este corectă, codul poştal nu este corect';
$string['avsb'] = 'Adresa nu a fost furnizată';
$string['avse'] = 'Eroare a Sistemului de Verificare a Adresei';
$string['avsg'] = 'Banca emitentă a cardului - Non-U.S.';
$string['avsn'] = 'Nici adresa (strada) completată nici codul poştal introduse nu au fost regăsite';
$string['avsp'] = 'Sistemul de Verificare a Adresei nu este aplicabil';
$string['avsr'] = 'Mai încercaţi - sistemul nu este disponibil sau sesiunea a expirat';
$string['avsresult'] = 'Rezultat AVS: $a';
$string['avss'] = 'Acest serviciu nu este oferit de emitent';
$string['avsu'] = 'Adresa nu este disponibilă';
$string['avsw'] = 'Codul poştal compus din 9 cifre este corect dar adresa (strada), nu';
$string['avsx'] = 'Atât adresa (strada) cât şi codul poştal compus din 9 cifre sunt corecte';
$string['avsy'] = 'Atât adresa (strada) cât şi codul poştal compus din 5 cifre sunt corecte';
$string['avsz'] = 'Codul poştal compus din 5 cifre este corect dar adresa (strada), nu';
$string['canbecredit'] = 'Poate fi returnat până la valoarea de $a->upto';
$string['cancelled'] = 'Anulat';
$string['capture'] = 'Captura';
$string['capturedpendingsettle'] = 'Capturat/În curs de soluţionare';
$string['capturedsettled'] = 'Capturat/Soluţionat';
$string['captureyes'] = 'Datele cardului de credit vor fi reţinute şi cursantul va fi înscris la curs. Sunteţi sigur că doriţi continuarea operaţiunii?';
$string['ccexpire'] = 'Dată expirare';
$string['ccexpired'] = 'Card de credit expirat';
$string['ccinvalid'] = 'Număr de card incorect';
$string['ccno'] = 'Număr card credit';
$string['cctype'] = 'Tip card credit';
$string['ccvv'] = 'Verificare card';
$string['ccvvhelp'] = 'Pe spatele cardului (ultimele 3 cifre)';
$string['choosemethod'] = 'În cazul în care cunoaşteţi cheia de înscriere la curs completaţi-o în câmpul de mai jos;<br/>Dacă nu cunoaşteţi această cheie va trebui să plătiţi pentru acest curs.';
$string['chooseone'] = 'Completaţi unul sau ambele câmpuri de mai jos. Parola nu va fi vizibilă.';
$string['costdefaultdesc'] = '<strong>În setările cursului, completaţi  -1</strong> pentru a utiliza acest cost implicit în câmpul Cost curs.';
$string['cutofftime'] = 'Transaction Cut-Off Time. When the last transaction is picked up for settlement?';
$string['dataentered'] = 'Date introduse';
$string['delete'] = 'Distruge';
$string['description'] = 'Modulul Authorize.net vă permite să configuraţi cursuri cu plată. Dacă stabiliţi costul unui curs 0, studenţii vor putea accesa cursul respectiv fără să plătească. Aveţi la dispoziţie două modalităţi de stabilire a costului unui curs (1) un cost generic implicit, valabil pentru toate cursurile din cadrul sit-ului sau (2) un cost pe care îl puteţi stabili pentru fiecare curs în parte. Costul stabilit individual pentru un curs anulează preţul generic stabilit la nivel de sit.<br /><br /><b>Notă:</b> În cazul în care stabiliţi că pentru accesarea unui anumit curs este nevoie de o cheie de înscriere, atunci cursanţii vor avea posibilitatea să se înscrie folosind şi această opţiune: cheia de înscriere. Această setare este folositoare pentru cazurile în care doriţi să faceţi cursul accesibil atât cursanţilor plătitori cât şi celor ne-plătitori.';
$string['echeckabacode'] = 'Numărul ABA al băncii';
$string['echeckaccnum'] = 'Număr cont bancar';
$string['echeckacctype'] = 'Tip cont bancar';
$string['echeckbankname'] = 'Nume bancă';
$string['echeckbusinesschecking'] = 'Business Checking';
$string['echeckchecking'] = 'Verificare';
$string['echeckfirslasttname'] = 'Titular cont bancar';
$string['echecksavings'] = 'Economii';
$string['enrolname'] = 'Authorize.net Payment Gateway';
$string['expired'] = 'Expirat';
$string['haveauthcode'] = 'Posed un cod de autorizare';
$string['howmuch'] = 'Ce sumă?';
$string['httpsrequired'] = 'Ne pare rău să vă informăm că cererea dumneavoastră nu poate fi procesată în acest moment. Acest sit nu a putut fi configurat corect.<br /><br />Vă rugăm nu introduceţi numărul cardului dumneavoastră dacă nu vizualizaţi imaginea unui lacăt galben în partea inferioară a browserului. Lacătul galben indică faptul că pagina criptează toate datele transmise între client şi server. Acest lucru indică faptul că informaţia transmisă între cele două computere în timpul tranzacţiei este protejată şi în acest fel numărul cardului dumneavoastră de credit nu poate fi capturat prin Internet.';
$string['invalidaba'] = 'Număr ABA incorect';
$string['invalidaccnum'] = 'Număr cont incorect';
$string['invalidacctype'] = 'Tip cont incorect';
$string['logindesc'] = 'Această opţiune trebuie să fie ACTIVATĂ. <br /><br />Vă rugăm să vă asiguraţi că aţi ACTIVAT <a href=\"$a->url\">loginhttps</a> din Admin >> Variabile >> Securitate.<br /><br />Activarea acestui parametru va determina Moodle să folosească o conexiune https securizată doar pentru paginile de login şi pentru cele de plăţi.';
$string['logininfo'] = 'Numele de utilizator, parola şi cheia tranzacţiei nu sunt afişate din motive de securitate. Dacă aţi configurat aceste câmpuri anterior nu mai este nevoie să le completaţi din nou. Câmpurile marcate cu un text verde la stânga sunt câmpuri care au fost deja configurate. Dacă este prima oară când completaţi aceste câmpuri, numele de utilizator este obligatoriu (indicat de asterisc *); în continuare trebuie să completaţi <strong>fie</strong> cheia tranzacţiei <strong>fie</strong> parola în câmpurile corespunzătoare. Din motive de securitate, recomandarea noastră este să completaţi cheia tranzacţiei. În cazul în care doriţi să ştergeţi parola curentă, selectaţi opţiunea corespunzătoare.';
$string['methodcc'] = 'Card de credit';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Lipseşte numărul ABA';
$string['missingaddress'] = 'Lipseşte adresa';
$string['missingbankname'] = 'Lipseşte numele băncii';
$string['missingcc'] = 'Lipseşte numărul cardului';
$string['missingccauthcode'] = 'Lipseşte codul de autorizare';
$string['missingccexpire'] = 'Lipseşte data de expirare';
$string['missingcctype'] = 'Lipseşte tipul cardului';
$string['missingcvv'] = 'Lipseşte numărul de verificare';
$string['missingzip'] = 'Lipseşte codul poştal';
$string['mypaymentsonly'] = 'Afişează doar plăţile mele';
$string['nameoncard'] = 'Nume pe card';
$string['new'] = 'Nou';
$string['noreturns'] = 'No returns!';
$string['notsettled'] = 'Tranzacţia nu a fost soluţionată';
$string['orderid'] = 'ID comandă';
$string['paymentmanagement'] = 'Administrare Plăţi';
$string['paymentmethod'] = 'Metodă Plată';
$string['paymentpending'] = 'Plata pe care aţi făcut-o pentru acest curs este în curs de procesare, numărul comenzii dumneavoastră este $a->orderid. Pentru detalii accesaţi <a href=\'$a->url\'>Detalii comandă</a>.';
$string['pendingecheckemail'] = 'Stimate utilizator administrator,

Lista cu eChecks în curs de procesare numără în acest moment $a->count intrări. Va trebui să încărcaţi acum un fişier csv pentru a înscrie utilizatorii.

Executaţi clic pe link şi citiţi fişierul help din pagina care se afişează: $a->url';
$string['pendingechecksubject'] = '$a->course: eChecks în curs de procesare($a->count)';
$string['pendingordersemail'] = 'Stimate utilizator administrator,

Tranzacţiile în curs de procesare $a->pending pentru cursul \"$a->course\" vor expira dacă nu acceptaţi plata într-un interval de $a->days zile.

Acesta este un mesaj de avertizare pe care îl primiţi pentru că nu aţi activat funcţionalitatea de scheduled-capture. Aceasta înseamnă că va trebui să acceptaţi sau să respingeţi plăţile manual.

Dacă doriţi să aceptaţi sau să respingeţi plăţi accesaţi $a->url.

Dacă doriţi să activaţi funcţionalitatea scheduled-capture (caz în care nu veţi mai primi mesaje email de atenţionare) accesaţi: $a->enrolurl
.';
$string['pendingordersemailteacher'] = 'Stimate utilizator profesor,

Un număr de $a->pending tranzacţii în curs de procesare cu un preţ de $a->currency $a->sumcost pentru cursul \"$a->course\"
vor expira dacă nu acceptaţi plăţile în interval de $a->days zile.

Va trebui să acceptaţi sau să respingeţi plăţile manual pentru că utilizatorul administrator nu a activat funcţionalitatea scheduled-capture.

$a->url';
$string['pendingorderssubject'] = 'ATENŢIE!: $a->course, comenzile $a->pending în curs de procesare expiră în termen de $a->days day(s).';
$string['reason11'] = 'S-a transmis o tranzacţie duplicat.';
$string['reason13'] = 'Login ID al comerciantului este incorect sau contul nu este activ.';
$string['reason16'] = 'Nu s-a găsit tranzacţia';
$string['reason17'] = 'Comerciantul nu acceptă acest tip de card de credit.';
$string['reason245'] = 'This eCheck type is not allowed when using the payment gateway hosted payment form.';
$string['reason246'] = 'Acest tip de eCheck nu este acceptat.';
$string['reason27'] = 'The transaction resulted in an AVS mismatch. The address provided does not match billing address of cardholder.';
$string['reason28'] = 'Comerciantul nu acceptă acest tip de card de credit.';
$string['reason30'] = 'The configuration with the processor is invalid. Call Merchant Service Provider.';
$string['reason39'] = 'Codul de monedă pe care l-aţi furnizat este fie incorect, fie nu este acceptat, fie nu este acceptat pentru comerciantul ales sau nu există rată de schimb pentru moneda specificată.';
$string['reason43'] = 'Informaţiile despre comerciant nu au fost configurate corect. Vă rugăm contactaţi Merchant Service Provider.';
$string['reason44'] = 'Această tranzacţie a fost respinsă. Eroare filtru Cod Card!';
$string['reason45'] = 'Această tranzacţie a fost respinsă. Eroare filtru Cod Card/AVS!';
$string['reason47'] = 'The amount requested for settlement may not be greater than the original amount authorized.';
$string['reason5'] = 'Vă rugăm completaţi o valoare corectă.';
$string['reason50'] = 'This transaction is awaiting settlement and cannot be refunded.';
$string['reason51'] = 'The sum of all credits against this transaction is greater than the original transaction';
$string['reason54'] = 'The referenced transaction does not meet the criteria for issuing a credit.';
$string['reason55'] = 'The sum of credits against the referenced transaction would exceed the original debit amount.';
$string['reason56'] = 'Acest comerciant acceptă exclusiv tranzacţii cu eCheck (ACH); nu se acceptă tranzacţii cu carduri de credit.';
$string['refund'] = 'Refund';
$string['refunded'] = 'Refunded';
$string['returns'] = 'Returns';
$string['reviewday'] = 'Reţine automat informaţiile despre cardul de credit dacă un profesor nu verifică comanda în termen de  <b>$a</b> zile. FUNCŢIONALITATEA CRON TREBUIE SĂ FIE ACTIVATĂ.<br />(Dacă completaţi 0 zile înseamnă că funcţionalitatea scheduled-capture este dezactivată, şi profesorul sau utilizatorul administrator va trebui să verifice manual comanda. Tranzacţia va fi anulată dacă dezactivaţi funcţionalitatea scheduled-capture sau dacă tranzacţia nu este verificată în termen de 30.)';
$string['reviewfailed'] = 'Verificare eşuată';
$string['reviewnotify'] = 'Plata pe care aţi efectuat-o va fi verificată. În una din zilele următoare veţi primi un mesaj email de la profesorul dumneavoastră.';
$string['sendpaymentbutton'] = 'Trimite plată';
$string['settled'] = 'Settled';
$string['settlementdate'] = 'Settlement Date';
$string['subvoidyes'] = 'The transaction refunded ($a->transid) is going to be cancelled and this will cause crediting $a->amount to your account. Are you sure?';
$string['tested'] = 'Testat';
$string['testmode'] = '[MOD TESTARE]';
$string['testwarning'] = 'Capturing/Voiding/Refunding seems working in test mode, but no record was updated or inserted in database.';
$string['transid'] = 'ID tranzacţie';
$string['underreview'] = 'În curs de verificare';
$string['unenrolstudent'] = 'Anulează înscriere cursant?';
$string['uploadcsv'] = 'Încărcaţi un fişier CSV';
$string['usingccmethod'] = 'Înscriere cu <a href=\"$a->url\"><strong>Card de Credit</strong></a>';
$string['usingecheckmethod'] = 'Înscriere cu <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Nul';
$string['voidyes'] = 'Tranzacţia va fi anulată. Sunteţi sigur?';
$string['welcometocoursesemail'] = 'Stimate cursant,

Vă multumim că aţi efectuat plata cursurilor.
V-aţi înscris la următoarele cursuri:
$a->courses

Dacă doriţi să modificaţi informaţiile din profil accesaţi:
$a->profileurl

Dacă doriţi să vizualizaţi detaliile plăţilor efectuate accesaţi:
$a->paymenturl';
$string['youcantdo'] = 'Nu puteţi realiza această acţiune: $a->action';
$string['zipcode'] = 'Zip Code';

?>
