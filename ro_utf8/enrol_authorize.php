<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['adminacceptccs'] = 'Care sunt tipurile de card de credit care vor fi acceptate?';
$string['adminaccepts'] = 'Selectaţi metodele de plată acceptate şi tipurile corespunzătoare';
$string['adminauthorizeemail'] = 'Setări trimitere email';
$string['adminauthorizesettings'] = 'Autorizare setări .net';
$string['adminauthorizewide'] = 'Setări generale sit';
$string['adminavs'] = 'Activaţi acest parametru dacă aţi activat funcţionalitatea Address Verification System (AVS)(Sistem de Verificare a Adreselor) în contul dumneavoastră authorize.net. Acest sistem cere utilizatorului să completeze în formularul de plată informaţii ca stradă, stat, ţară şi cod poştal.';
$string['adminconfighttpsgo'] = 'Pentru a configura acest plugin accesaţi pagina securizată <a href=\"$a->url\"></a>';
$string['adminemailexpiredsortsum'] = 'Suma totală';
$string['adminreview'] = 'Verifică comanda înainte de procesarea cardului de credit.';
$string['adminteachermanagepay'] = 'Profesorii pot procesa plăţile cursurilor.';
$string['allpendingorders'] = 'Toate cererile neprocesate';
$string['amount'] = 'Sumă';
$string['anlogin'] = 'Authorize.net: nume utilizator';
$string['anpassword'] = 'Authorize.net: Parolă';
$string['antestmode'] = 'Rulează tranzacţiile doar în modul de test (fără transferul banilor)';
$string['antrankey'] = 'Authorize.net: Transaction Key';
$string['authcode'] = 'Cod autorizaţie';
$string['authorize:managepayments'] = 'Administrare plăţi';
$string['authorize:uploadcsv'] = 'Încarcă fişier CSV';
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
$string['captureyes'] = 'Datele cardului de credit vor fi reţinute şi cursantul va fi înscris la curs. Sunteţi sigur că doriţi continuarea operaţiunii?';
$string['ccexpire'] = 'Dată expirare';
$string['ccexpired'] = 'Card de credit expirat';
$string['ccinvalid'] = 'Număr de card incorect';
$string['ccno'] = 'Număr card credit';
$string['cctype'] = 'Tip card credit';
$string['ccvv'] = 'Verificare card';
$string['ccvvhelp'] = 'Pe spatele cardului (ultimele 3 cifre)';
$string['chooseone'] = 'Completaţi unul sau ambele câmpuri de mai jos. Parola nu va fi vizibilă.';
$string['dataentered'] = 'Date introduse';
$string['delete'] = 'Distruge';
$string['echeckaccnum'] = 'Număr cont bancar';
$string['echeckacctype'] = 'Tip cont bancar';
$string['echeckbankname'] = 'Nume bancă';
$string['echeckfirslasttname'] = 'Titular cont bancar';
$string['echecksavings'] = 'Economii';
$string['expired'] = 'Expirat';
$string['haveauthcode'] = 'Posed un cod de autorizare';
$string['howmuch'] = 'Ce sumă?';
$string['invalidaba'] = 'Număr ABA incorect';
$string['invalidaccnum'] = 'Număr cont incorect';
$string['invalidacctype'] = 'Tip cont incorect';
$string['methodcc'] = 'Card de credit';
$string['methodecheck'] = 'eCheck (ACH)';
$string['mypaymentsonly'] = 'Afişează doar plăţile mele';
$string['nameoncard'] = 'Nume pe card';
$string['new'] = 'Nou';
$string['orderid'] = 'ID comandă';
$string['reason16'] = 'Nu s-a găsit tranzacţia';
$string['reason17'] = 'Comerciantul nu acceptă acest tip de card de credit.';
$string['reason28'] = 'Comerciantul nu acceptă acest tip de card de credit.';
$string['reviewnotify'] = 'Plata pe care aţi efectuat-o va fi verificată. În una din zilele următoare veţi primi un mesaj email de la profesorul dumneavoastră.';
$string['sendpaymentbutton'] = 'Trimite plată';
$string['tested'] = 'Testat';
$string['testmode'] = '[MOD TESTARE]';
$string['transid'] = 'ID tranzacţie';
$string['underreview'] = 'În curs de verificare';
$string['uploadcsv'] = 'Încărcaţi un fişier CSV';
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
