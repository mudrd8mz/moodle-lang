<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6.2 (2006050520)


$string['adminacceptccs'] = 'Koji tipovi kreditnih kartica se prihvataju?';
$string['adminaccepts'] = 'Izaberite dozvoljene načine plaćanja i njihove tipove';
$string['adminauthorizeccapture'] = 'Pregled porudžbine i podešavanja zakazanog prihvatanja';
$string['adminauthorizeemail'] = 'Podešavanja slanja elektronske pošte';
$string['adminauthorizesettings'] = 'Podešavanja vezana za Authorize.net';
$string['adminauthorizewide'] = 'Podešavanja na nivou sajta';
$string['adminavs'] = 'Proverite da li ste aktivirali sistem za verifikaciju adresa (AVS) u okviru Vašeg authorize.net naloga. Time ćete načiniti obaveznim adresna polja kao što su ulica, država, poštanski broj i sl. kad korisnik bude ispunjavao formular za plaćanje.';
$string['admincronsetup'] = 'Skript za održavanje cron.php nije pokretan bar 24 sata. <br />Cron mora biti omogućen ako želite da koristite mogućnosti zakazanog prihvatanja.<br /><b>Omogućite</b> \'Authorize.net dodatak\' i pravilno <b>podesite cron</b>; ili ponovo<b>nemojte označiti an_review.</b><br />Ako onemogućite zakazano prihvatanje, transakcije će biti otkazane ukoliko ih ne pregledate u roku od 30 dana.<br />Proverite <b>an_review</b> i unesite <b>\'0\' u an_capture_day</b> polje<br />ako želite <b>ručno</b> da prihvatite/odbijete uplate u roku od 30 dana.';
$string['adminemailexpired'] = 'Ovo je korisno za \'Ručno prihvatanje\'. Administratori se obaveštavaju <b>$a</b> dana pre nego što isteknu porudžbine na čekanju.';
$string['adminemailexpiredsort'] = 'Kada se veći broj porudžbina na čekanju kojima uskoro ističe rok šalje predavačima putem e-pošte, koje od njih će biti istaknute kao važne?';
$string['adminemailexpiredsortcount'] = 'Broj porudžbina';
$string['adminemailexpiredsortsum'] = 'Ukupan iznos';
$string['adminemailexpiredteacher'] = 'Ako ste omogućili ručno prihvatanje (videti gore) i predavači mogu da upravljaju uplatama, oni bi se mogli i obaveštavati o isteku porudžbina na čekanju. Ovo podešavanje će obezbediti slanje e-poruke svakom predavaču kursa sa podacima o tome koliko porudžbina na čekaju uskoro ističe.';
$string['adminemailexpsetting'] = '(0=onemogućavanje slanja e-pošte, podrazumevana vrednost=2, maksimalna vrednost=5)<br />(Podešavanja ručnog prihvatanja za slanje e-pošte: cron=omogućen, an_review=proveren, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Dan zakazanog prihvatanja';
$string['adminhelpreviewtitle'] = 'Pregled porudžbine';
$string['adminneworder'] = 'Dragi administratore,

Primili ste novu porudžbinu koja čeka na prihvatanje:

Porudžbina broj: $a->orderid
Transakcija broj: $a->transid
Korisnik: $a->user
Kurs: $a->course
Iznos: $a->amount

OMOGUĆENO ZAKAZANO PRIHVATANJE?: $a->acstatus

Ako je omogućeno zakazano prihvatanje, kreditna kartica biće procesirana dana $a->captureon i student će biti upisan na kurs, inače će porudžbina isteći dana $a->expireon i posle toga neće moći biti prihvaćena.

Možete i odmah prihvatiti/odbiti uplatu i ako želite upisati studenta na kurs prateći sledeći link:
$a->url';
$string['adminnewordersubject'] = '$a->course: Nova porudžbina na čekanju ($a->orderid)';
$string['adminpendingorders'] = 'Isključili ste mogućnost zakazanog prihvatanja.<br />Ukupno $a->count transakcija sa statusom \'Autorizovana/Čeka na prihvatanje\' biće poništeno ukoliko ih ne potvrdite.<br />Da biste prihvatili/odbili uplate idite na stranicu <a href=\'$a->url\'>Upravljanje plaćanjem</a>.';
$string['adminreview'] = 'Pregled porudžbine pre procesiranja kreditne kartice.';
$string['adminteachermanagepay'] = 'Predavači mogu upravljati plaćanjem kursa.';
$string['amount'] = 'Iznos';
$string['anlogin'] = 'Authorize.net: Korisničko ime';
$string['anpassword'] = 'Authorize.net: Lozinka';
$string['anreferer'] = 'Definišite URL za preusmeravanje ako ste to podesili na svom authorize.net nalogu. To će poslati liniju \"Preusmeravanje: URL\" u okviru web zahteva.';
$string['antestmode'] = 'Pokretanje transkacija isključivo u test modu (neće doći do podizanja novca)';
$string['antrankey'] = 'Authorize.net: Ključ za transakciju';
$string['authcaptured'] = 'Autorizovano/Prihvaćeno';
$string['authorize:managepayments'] = 'Upravljenje uplatama';
$string['authorizedpendingcapture'] = 'Autorizovano/Čeka na prihvatanje';
$string['avsa'] = 'Adresa (ulica) se uklapa, ali ne i poštanski broj';
$string['avsb'] = 'Nisu date informacije o adresi';
$string['avse'] = 'Greška u sistemu za verifikaciju adresa';
$string['avsg'] = 'Banka koja je izdala karticu (van SAD-a)';
$string['avsn'] = 'Ne uklapa se ni adresa (ulica) ni poštanski broj';
$string['avsp'] = 'Nije primenljiv sistem za verifikaciju adresa';
$string['avsr'] = 'Ponovni pokušaj - Sistem nije dostupan ili je vreme isteklo';
$string['avsresult'] = '<b>AVS rezultat:</b> $a';
$string['avss'] = 'Izdavač ne podržava ovu uslugu';
$string['avsu'] = 'Nisu dostupne informacije o adresi';
$string['avsw'] = 'Devetocifreni poštanski broj se uklapa, ali ne i adresa (ulica)';
$string['avsx'] = 'Adresa (ulica) i devetocifreni poštanski broj se uklapaju';
$string['avsy'] = 'Adresa (ulica) i petocifreni poštanski broj se uklapaju';
$string['avsz'] = 'Petocifreni poštanski broj se uklapa, ali ne i adresa (ulica)';
$string['canbecredit'] = 'Može biti refundirano do $a->upto';
$string['cancelled'] = 'Otkazano';
$string['capture'] = 'Prihvatanje';
$string['capturedpendingsettle'] = 'Prihvaćeno/Čeka na dogovor';
$string['capturedsettled'] = 'Prihvaćeno/Dogovoreno';
$string['captureyes'] = 'Kreditna kartica će biti prihvaćena i student će biti upisan na kurs. Da li ste sigurni da to želite?';
$string['ccexpire'] = 'Datum isteka važnosti kreditne kartice';
$string['ccexpired'] = 'Kreditna kartica je istekla';
$string['ccinvalid'] = 'Pogrešan broj kartice';
$string['ccno'] = 'Broj kreditne kartice';
$string['cctype'] = 'Tip kreditne kartice';
$string['ccvv'] = 'Provera kreditne kartice';
$string['ccvvhelp'] = 'Pogledajte poleđinu kartice (poslednje 3 cifre)';
$string['choosemethod'] = 'Ukoliko znate pristupnu lozinku kursa unesite je; u suprotnom morate da platite da biste upisali ovaj kurs.';
$string['chooseone'] = 'Popunite jedno ili oba polja';
$string['costdefaultdesc'] = '<strong>U podešavanjima kursa, unesite -1</strong>u polje za cenu da biste koristili podrazumevani iznos.';
$string['cutofftime'] = 'Vreme prekida transakcije. Kada je poslednja transakcija preuzeta za dogovor?';
$string['delete'] = 'Uništiti';
$string['description'] = 'Authorize.net modul Vam dozvoljava da postavite kurseve koji se plaćaju preko CC davalaca usluga. Ako je cena bilo kog kursa 0, od studenata se ne traži da plate za pristup kursu. Postoje dva načina da se postavi cena kursa (1) cena na nivou sajta, podrazumevana za svaki kurs (2) ili podešavanje svakog pojedinačnog kursa. Cena kursa ima prednost nad podrazumevanom cenom na nivou sajta.<br /><br /><b>Napomena:</b> Ako postavite lozinku za upis na kurs, studenti će recimo moći da se upišu koristeći samo tu lozinku. To je korisno ako imate dve grupe studenata na istom kursu - one koji plaćaju njegovo pohađanje i one za koje je on besplatan.';
$string['echeckabacode'] = 'Bankovni ABA broj';
$string['echeckaccnum'] = 'Broj bankovnog računa';
$string['echeckacctype'] = 'Broj bankovnog računa';
$string['echeckbankname'] = 'Naziv banke';
$string['echeckbusinesschecking'] = 'Provera poslovanja';
$string['echeckchecking'] = 'Provera';
$string['echeckfirslasttname'] = 'Vlasnik bankovnog računa';
$string['echecksavings'] = 'Ušteđevina';
$string['enrolname'] = 'Authorize.net gateway za plaćanje';
$string['expired'] = 'Isteklo';
$string['howmuch'] = 'Koliko?';
$string['httpsrequired'] = 'Žao nam je, ali Vaš zahtev trenutno ne može biti procesiran. Konfiguracija ovog sajta izgleda nije pravilno izvršena.<br /><br />Molimo ne unosite broj Vaše kreditne kartice ukoliko ne vidite žuti katanac na dnu stranice Vašeg web čitača. Kada se ovaj simbol pojavi, to znači da stranica šifrira sve podatke koji se razmenjuju između klijenta i servera. Tako da su informacije zaštićene tokom transakcija između dva računara, te broj vaše kreditne kartice ne može biti ukraden prilikom upotrebe na sajtu.';
$string['invalidaba'] = 'Pogrešan ABA broj';
$string['invalidaccnum'] = 'Pogrešan broj računa';
$string['invalidacctype'] = 'Pogrešan tip računa';
$string['logindesc'] = 'Ova opcija mora biti uključena. <br /><br />Molimo proverite da li ste uključili <a href=\"$a->url\">loginhttps</a> u Administracija >> Promenljive >> Bezbednost.<br /><br />Uključivanjem ove opcije postići ćete to da Moodle koristi sigurnu https konekciju samo za stranica za pristup sistemu i uplate.';
$string['methodcc'] = 'Kreditna kartica';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Nedostaje ABA broj';
$string['missingaddress'] = 'Nedostaje adresa';
$string['missingbankname'] = 'Nedostaje naziv banke';
$string['missingcc'] = 'Nedostaje broj kreditne kartice';
$string['missingccexpire'] = 'Nedostaje datum isticanja kreditne kartice';
$string['missingcctype'] = 'Nedostaje tip kreditne kartice';
$string['missingcvv'] = 'Nedostaje verifikacioni broj';
$string['missingzip'] = 'Nedostaje poštanski broj';
$string['nameoncard'] = 'Ime na kartici';
$string['new'] = 'Novo';
$string['noreturns'] = 'Bez povraćaja novca!';
$string['notsettled'] = 'Nije utvrđeno';
$string['orderid'] = 'Identifikator porudžbine';
$string['paymentmanagement'] = 'Upravljanje plaćanjem';
$string['paymentmethod'] = 'Način plaćanja';
$string['paymentpending'] = 'Vaša uplata za ovaj kurs, pod rednim brojem $a->orderid, čeka na prihvatanje. Pogledajte <a href=\'$a->url\'>Detalji porudžbine</a>.';
$string['pendingordersemail'] = 'Dragi administratore,

$a->pending transakcija koje čekaju na prihvatanje za kurs \"$a->course\" će isteći ukoliko ne prihvatite uplate u roku od $a->days dana.

Ova poruka Vam se šalje kao upozorenje, jer niste omogućili zakazano prihvatanje.
To znači da ručno morate da prihvatite ili odbijete svaku uplatu.

Da biste prihvatili/odbili uplate na čekanju idite na:
$a->url

Da biste omogućili zakazano prihvatanje, što bi značilo da više ne biste dobijali ovakve poruke upozorenja, idite na:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Dragi predavaču,

$a->pending transakcija ukupne vrednosti $a->currency $a->sumcost za kurs \"$a->course\"
će isteći ukoliko ne prihvatite uplate u roku od $a->days dana.

Morate ručno da prihvatate ili odbijate uplate jer administrator nije omogućio zakazano prihvatanje.

$a->url';
$string['pendingorderssubject'] = 'UPOZORENJE: $a->course, $a->pending porudžbina će isteći u roku od $a->days dana.';
$string['reason11'] = 'Predat je duplikat transakcije.';
$string['reason13'] = 'Trgovački identifikator korisničkog imena nije ispravan ili taj nalog nije aktivan.';
$string['reason16'] = 'Transakcija nije pronađena.';
$string['reason17'] = 'Trgovac ne prihvata ovaj tip kreditne kartice.';
$string['reason245'] = 'Ovaj eCheck tip nije dozvoljen kad se koristi forma za plaćanje podržana mrežnim prolazom.';
$string['reason246'] = 'Ovaj eCheck tip nije dozvoljen.';
$string['reason27'] = 'Transakcija je rezultovala AVS neslaganjem. Adresa koja je data se ne slaže sa adresom za slanje računa vlasnika kartice.';
$string['reason28'] = 'Trgovac ne prihvata ovaj tip kreditne kartice.';
$string['reason30'] = 'Konfiguracija sa procesorom nije validna. Pozovite davaoca trgovinskih usluga.';
$string['reason39'] = 'Dostavljena šifra valute nije validna, nije podržana, nije dozvoljena za ovog trgovca ili pak nema zadat kurs.';
$string['reason43'] = 'Trgovac je pogrešno podešen pri procesoru. Pozovite davaoca trgovinskih usluga.';
$string['reason44'] = 'Ova transakcija je odbijena. Greška filtera kreditne kartice!';
$string['reason45'] = 'Ova transakcija je odbijena. Greška filtera kreditne kartice/sistema za verifikaciju adresa.';
$string['reason47'] = 'Iznos zahtevan za dogovor ne sme biti veći od originalno odobrene sume.';
$string['reason5'] = 'Potreban je validan iznos.';
$string['reason50'] = 'Transakcija čeka na dogovor i ne može biti refundirana.';
$string['reason51'] = 'Suma svih kredita za ovu transakciju veća je od vrednosti originalne transakcije.';
$string['reason54'] = 'Referencirana transakcija ne ispunjava uslove za izdavanje kredita.';
$string['reason55'] = 'Suma kredita za referenciranu transakciju bi prešla originalni debitni iznos.';
$string['reason56'] = 'Ovaj trgovac prihvata samo eCheck (ACH) transakcije; transakcije kreditnim karticama nisu podržane.';
$string['refund'] = 'Refundiranje';
$string['refunded'] = 'Refundirano';
$string['returns'] = 'Povraćaji';
$string['reviewday'] = 'Prihvatiti kreditnu karticu automatski ukoliko predavač ili administrator ne pregledaju porudžbinu u roku od <b>$a</b> dana. CRON MORA BITI OMOGUĆEN.<br />(0 dana znači da će biti onemogućena zakazana prihvatanja, kao i da će predavač ili administrator ručno pregledati porudžbinu. Transakcija će biti otkazana ako onemogućite zakazano prihvatanje ili ako ne pregledate porudžbinu u roku od 30 dana.)';
$string['reviewnotify'] = 'Vaša uplata će biti pregledana. Očekujte e-poruku od Vašeg predavača u roku od nekoliko dana.';
$string['sendpaymentbutton'] = 'Slanje uplate';
$string['settled'] = 'Dogovoreno';
$string['settlementdate'] = 'Datum dogovora';
$string['subvoidyes'] = 'Refundirana transakcija $a->transid će biti poništena i dodaće svotu od $a->amount na Vaš račun. Da li ste sigurni da želite da nastavite?';
$string['tested'] = 'Testirano';
$string['testmode'] = '[REŽIM ZA TESTIRANJE]';
$string['testwarning'] = 'Prihvatanje/Ništa/Kredit izgleda radi u režimu za testiranje, ali nijedan zapis nije ažuriran ili umetnut u bazu podataka.';
$string['transid'] = 'Identifikator transakcije';
$string['unenrolstudent'] = 'Ispis studenta?';
$string['usingccmethod'] = 'Greška pri korišćenju opcije <a href=\"$a->url\"><strong>Kreditna kartica</strong></a>';
$string['usingecheckmethod'] = 'Greška pri korišćenju opcije <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Ništa';
$string['voidyes'] = 'Transakcija će biti otkazana. Da li ste sigurni da to želite?';
$string['welcometocoursesemail'] = 'Poštovani polazniče,

Hvala Vam za Vaše uplate. Upisali ste se na sledeće kurseve:

$a->courses

Možete urediti svoj korisnički profil:
$a->profileurl

A možete pogledati i detaljne informacije o obavljenoj uplati:
$a->paymenturl';
$string['youcantdo'] = 'Ne možete izvršiti ovu akciju: $a->action';
$string['zipcode'] = 'Poštanski broj';

?>
