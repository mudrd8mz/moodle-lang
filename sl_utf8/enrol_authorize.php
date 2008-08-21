<?php // $Id:
      // enrol_authorize.php
$string['adminacceptccs'] = 'Katere vrste kreditnih kartic bodo sprejete?';
$string['adminaccepts'] = 'Izberi način in vrsto plačila';
$string['adminauthcode'] = 'Če uporabnikova kreditna kartica ni sprejeta preko interneta, si preko telefona priskrbite avtorizacijsko kodo od vaše banke.';
$string['adminauthorizeccapture'] = 'Pregled naročila in Nastavitve razporejenega zajemanja';
$string['adminauthorizeemail'] = 'Nastavitve pošiljanja elektronske pošte';
$string['adminauthorizesettings'] = 'Nastavitve Authorize.net';
$string['adminauthorizewide'] = 'Nastavitve za celo spletno mesto';
$string['adminavs'] = 'Označite to, če ste vključili sistem preverjanja naslova (AVS - Address Verification Sistem) v vašem računu authorize.net. To zahteva polja naslova kot so ulica, država, poštna številka, ko uporabnik izpolnjuje obrazec plačila.';
$string['adminconfighttps'] = 'Prosim priskrbite si, da imate "<a href="$a->url">vklopljen loginhttps ON</a>" za uporabo plugin<br />in Admin >> Variables >> Security >> HTTP varnost.';
$string['adminconfighttpsgo'] = 'Pojdi na <a href="$a->url">secure page</a> za oblikovanje vtičnikov.';
$string['admincronsetup'] = 'Vzdrževalna skripta cron.php ni bila zagnana vsaj 24 ur. <br />Cron mora biti omogočen, če želite uporabljati možnost razporejenega zajemanja.<br /><b>Omogočite</b> &#039;Vtičnik Authorize.net&#039; in pravilno <b>nastavite cron</b>; ali znova <b>odznačite an_review</b>.<br /> Če onemogočite razporejen zajem, bodo transakcije preklicane, če jih ne boste pregledali v 30-ih dneh. <br />Označite <b>an_review</b> in vnesite <b>&#039;0&#039; v polje an_capture_day</b>, če želite <b>ročno</b> sprejeti ali zavrniti plačila v 30-ih dneh.';
$string['adminemailexpired'] = 'To je uporabno za &#039;Ročno zajemanje&#039;. Skrbniki so obveščeni <b>$a</b> dni preden čakajoča naročila potečejo.';
$string['adminemailexpiredsort'] = 'Ko se vrsta čakajočih naročil, ki bodo potekla, pošlje izvajalcu prek elektronske pošte, kaj je pomembno?';
$string['adminemailexpiredsortcount'] = 'Število naročil';
$string['adminemailexpiredsortsum'] = 'Vsota zneskov';
$string['adminemailexpiredteacher'] = 'Če ste omogočili ročen zajem (glej zgoraj) in lahko izvajalci upravljajo plačila, so lahko izvajalci tudi obveščeni o čakajočih naročilih, ki bodo potekla. To bo poslalo elektronsko pošto vsakemu izvajalcu predmeta o tem, koliko čakajočih naročil bo poteklo.';
$string['adminemailexpsetting'] = '(0=onemogoči pošiljanja e-pošte, privzeto=2, največ=5)<br />(Nastavitve ročnega zajemanja za pošiljanje e-pošte: cron=omogočeno, an_review=označeno, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Dan razporejenega zajemanja';
$string['adminhelpreviewtitle'] = 'Pregled naročila';
$string['adminneworder'] = 'Spoštovani administrator,

  Prejeli ste novo naročilo:

   ID naročila: $a->orderid
   ID transakcije: $a->transid
   Uporabnik: $a->user
   Predmet: $a->course
   Znesek: $a->amount

   Omogočen vpis do določenega datuma?: $a->acstatus

  Če je omogočena ta nastavitev, bo kreditna kartica obremenjena dne $a->captureon. Uporabnik bo vpisan v predmet. Če ni omogočena ta nastavitev bo vpis potekel dne $a->expireon. Po tem dnevu obremenitev kartice ne bo izvedena.

  Plačilo udeleženca (vpisnino) sprejmete/zavrnete na povezavi:
  $a->url';
$string['adminnewordersubject'] = '$a->course; Novo čakajoče naročilo ($a->orderid)';
$string['adminpendingorders'] = 'Možnost razporejenega zajema ste onemogočili.<br />Skupno $a->count transakcij v stanju &#039;Avtorizirano / Čaka na zajem&#039; bo preklicanih, če jih ne preverite.<br />Za sprejem ali zavrnitev plačil pojdite na stran <a href=&#039;$a->url&#039;>upravljanja plačil</a>.';
$string['adminreview'] = 'Preglej naročilo pred obdelavo kreditne kartice.';
$string['adminteachermanagepay'] = 'Izvajalci lahko upravljajo plačila za predmet.';
$string['allpendingorders'] = 'Vsa nerešena naročila';
$string['amount'] = 'Znesek';
$string['anlogin'] = 'Authorize.net: Uporabniško ime';
$string['anpassword'] = 'Authorize.net: Geslo';
$string['anreferer'] = 'Določi URL klicatelja, če ste to nastavili v vašem authorize.net računu. To bo poslalo vrstico "Referer: URL" umeščeno v spletno zahtevo.';
$string['antestmode'] = 'Zaženi transakcije samo v testnem načinu (denar ne bo obračunan)';
$string['antrankey'] = 'Authorize.net: Ključ transakcije';
$string['approvedreview'] = 'Dovoljen ponoven pregled';
$string['authcaptured'] = 'Avtorizirano / Zajeto';
$string['authcode'] = 'Avtorizacijska koda';
$string['authorize:managepayments'] = 'Upravljenje s plačili';
$string['authorize:uploadcsv'] = 'Naloži CSV datoteko';
$string['authorizedpendingcapture'] = 'Avtorizirano / Čaka na zajem';
$string['avsa'] = 'Naslov (ulica) se ujema, poštna številka pa ne';
$string['avsb'] = 'Ni zagotovljenih podatkov o naslovu';
$string['avse'] = 'Napaka sistema preverjanja naslova';
$string['avsg'] = 'Banka, ki je izdala kartico ni iz ZDA';
$string['avsn'] = 'Ne ujemata se ne naslov (ulica) niti poštna številka';
$string['avsp'] = 'Sistem preverjanja naslova ni uporaben';
$string['avsr'] = 'Poskusite znova - sistem ni dosegljiv ali je potekla časovna omejitev';
$string['avsresult'] = '<b>AVS rezultat:</b> $a';
$string['avss'] = 'Storitve izdajatelj ne podpira';
$string['avsu'] = 'Podatki o naslovu niso na voljo';
$string['avsw'] = '9 mestna poštna številka se ujema, naslov (ulica) pa ne';
$string['avsx'] = 'Naslov (ulica) in 9 mestna poštna številka se ujemata';
$string['avsy'] = 'Naslov (ulica) in 5 mestna poštna številka se ujemata';
$string['avsz'] = '5 mesta poštna številka se ujema, naslov (ulica) pa ne';
$string['canbecredit'] = 'Je lahko povrnjeno do $a->upto';
$string['capture'] = 'Zajem';
$string['capturedpendingsettle'] = 'Zajeto / Čaka na poravnavo';
$string['capturedsettled'] = 'Zajeto / Poravnano';
$string['captureyes'] = 'Kreditna kartica bo zajeta in udeleženec bo vpisan v predmet. Ste prepričani?';
$string['ccexpire'] = 'Datum poteka';
$string['ccexpired'] = 'Kreditna kartica je potekla';
$string['ccinvalid'] = 'Neveljavna številka kartice';
$string['ccno'] = 'Številka kreditne kartice';
$string['cctype'] = 'Vrsta kreditne kartice';
$string['ccvv'] = 'Preverjanje kartice';
$string['ccvvhelp'] = 'Poglejte na hrbtno stran kartice (zadnje 3 številke)';
$string['choosemethod'] = 'Če poznate ključ za vpis v predmet, ga vnesite, sicer morate plačati za ta predmet.';
$string['chooseone'] = 'Izpolnite eno ali obe sledeči polji';
$string['costdefaultdesc'] = '<strong>V predmetu nastavitve, vnesite -1</strong> za uporabo privzetih cen predmeta za ceno polja.';
$string['cutofftime'] = 'Presečni datum transakcije. Kdaj je pobrana zadnja transakcija za poravnavo?';
$string['echeckabacode'] = 'ABA Številka banke';
$string['echeckaccnum'] = 'Številka bančnega računa';
$string['echeckacctype'] = 'Vrsta bančnega računa';
$string['echeckbankname'] = 'Ime banke';
$string['echeckbusinesschecking'] = 'Preverjanje prometa';
$string['echeckchecking'] = 'Preverjanje';
$string['echeckfirslasttname'] = 'Lastnik bančnega računa';
$string['echecksavings'] = 'Prihranki';
$string['haveauthcode'] = 'Že imam avtorizacijsko kodo';
$string['howmuch'] = 'Koliko?';
$string['httpsrequired'] = 'Žal vas moramo obvestiti, da vaše zahteve zdaj ni možno obdelati. Konfiguracije strani ni bilo možno pravilno nastaviti.<br /><br />Ne vnašajte številke vaše kreditne kartice, če ne vidite rumene ključavnice na dnu brskalnika. Če se simbol pojavi, pomeni, da je stran šifrira vse podatke, ki se izmenjujejo med odjemalcem in strežnikom. Tako so informacije med transakcijo med dvema računalnikoma zaščitene, tako da številka vaše kreditne kartice ne more biti prestrežena prek interneta.';
$string['invalidaba'] = 'Napačna ABA številka';
$string['invalidaccnum'] = 'Napačna številka bančnega računa';
$string['invalidacctype'] = 'Napačna vrsta bančnega računa';
$string['logindesc'] = 'Ta možnost mora biti vključena. <br /><br />Zagotovite, da ste vključili <a href="$a->url">loginhttps ON</a> v Skrbništvo >> Spremenljivke >> Varnost.<br /><br />Z vključitvijo bo Moodle uporabljal varno https povezavo samo za prijavo in strani plačevanja.';
$string['logininfo'] = 'Uporabniško ime, geslo in transakcijska koda niso prikazane med varnostnimi ukrepi. Ni potrebe za ponovni vnos v polja, če ste jih že izpolnili. Če so bila ta polja že vnešena, vidite na levi strani zeleno besedilo.Če ta polja vnašate prvič, morate vpisati uporabniško ime (*) in <strong>either</strong> the transaction key (#1) <strong>or</strong> geslo (#2) v  namenjeno polje. Priporočamo da vnesete transakcijsko kodo med varnostnimi ukrepi. Če želite izbrisati trenutno geslo, označi checkbox.';
$string['methodcc'] = 'Kreditna kartica';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Manjkajoča ABA številka';
$string['missingaddress'] = 'Manjkajoč naslov';
$string['missingbankname'] = 'Manjkajoče ime banke';
$string['missingcc'] = 'Manjkajoča številka kartice';
$string['missingccauthcode'] = 'Manjkajoča avtorizacijska koda';
$string['missingccexpire'] = 'Manjkajoč datum poteka';
$string['missingcctype'] = 'Manjkajoča vrsta kartice';
$string['missingcvv'] = 'Manjkajoča potrditvena številka';
$string['missingzip'] = 'Manjkajoča poštna številka';
$string['mypaymentsonly'] = 'Prikaži samo moja plačila';
$string['nameoncard'] = 'Ime na kartici';
$string['new'] = 'Novo';
$string['noreturns'] = 'Brez vračil!';
$string['notsettled'] = 'Ni poravnano';
$string['orderid'] = 'ID naročila';
$string['paymentmanagement'] = 'Upravljanje plačil';
$string['paymentmethod'] = 'Metoda plačila';
$string['paymentpending'] = 'Vaše plačilo za ta predmet čaka s to številko naročila $a->orderid.  Oglejte si <a href=&#039;$a->url&#039;>Podrobnosti naročila</a>.';
$string['pendingecheckemail'] = 'Tu so $a->count nerešena echecks zato morate naložiti csv datoteko za pridobitev uporabniške dokumetacije za regiatracijo.

Kliknite na povezavo in preberite datoteko za pomoč in navedene strani: 
$a->url';
$string['pendingechecksubject'] = '$a->course: Nerešena eChecks($a->count)';
$string['pendingordersemail'] = 'Spoštovani skrbnik,

$a->pending transakcij za predmet "$a->course" bo poteklo, če ne sprejmete plačila v $a->days dneh.

To je opozorilno sporočilo, ker niste omogočili razporejenega zajemanja.
To pomeni, da morate sprejeti ali zavrniti plačila ročno.

Za sprejem ali zavrnitev čakajočih plačil obiščite:
$a->url

Za omogočanje razporejenega zajemanja, kar pomeni, da opozorilnih sporočil ne boste več prejemali, pojdite na:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Spoštovani izvajalec,

$a->pending transakcij vrednih $a->sumcost $a->currency za predmet "$a->course"
bo poteklo, če ne sprejmete plačila v $a->days dneh.

Plačila morate sprejeti ali zavrniti ročno, ker skrbnik ni omogočil razporejenega zajemanja.

$a->url';
$string['pendingorderssubject'] = 'OPOZORILO: $a->course, $a->pending naročil(o) bo poteklo v $a->days dneh.';
$string['reason11'] = 'Podvojena transakcija je bila oddana.';
$string['reason13'] = 'Prijavni ID trgovca ni veljaven ali račun ni aktiven.';
$string['reason16'] = 'Transakcija ni bila najdena.';
$string['reason17'] = 'Trgovec ne sprejema te vrste kreditne kartice.';
$string['reason245'] = 'Ta vrsta eCheck ni dovoljena kadar uporabljate plačilni obrazec na gostiteljevem plačilnem portalu.';
$string['reason246'] = 'Ta vrsta eCheck ni dovoljena.';
$string['reason27'] = 'Transakcija se ne ujema v sistemu preverjanja naslova. Zagotovljen naslov se ne ujema z naslovom za izdajo računa lastnika kartice.';
$string['reason28'] = 'Trgovec ne sprejema te vrste kreditne kartice.';
$string['reason30'] = 'Konfiguracija s procesorjem kreditnih kartic ni veljavna. Pokličite ponudnika trgovskih storitev.';
$string['reason39'] = 'Ponujena koda valute je bodisi neveljavna, ni podprta, ni dovoljena za tega trgovca ali nima menjalniškega tečaja.';
$string['reason43'] = 'Trgovec je bil nepravilno nastavljen pri procesorju kreditnih kartic. Pokličite vašega ponudnika trgovskih storitev.';
$string['reason44'] = 'Ta transakcija je bila izbrisana. Napaka filtra kod kartic!';
$string['reason45'] = 'Ta transakcija je bila izbrisana. Napaka filtra kode kartic / AVS!';
$string['reason47'] = 'Zahtevan znesek za poravnavo ne sme biti višji od prvotno avtoriziranega zneska.';
$string['reason5'] = 'Zahtevan je veljaven znesek.';
$string['reason50'] = 'Ta transakcija čaka poravnavo in ne more biti povrnjena.';
$string['reason51'] = 'Vsota vseh dobropisov za to transakcijo je višja od originalnega zneska transakcije.';
$string['reason54'] = 'Sklicevana transakcija ne ustreza kriterijem za izdajo dobropisa.';
$string['reason55'] = 'Vsota dobropisov za sklicevano transakcijo bi presegla prvotno zaračunan znesek.';
$string['reason56'] = 'Ta trgovec dovoljuje le transakcije z eCheck (ACH). Transakcije s kreditnimi karticami niso dovoljene.';
$string['refund'] = 'Povrni';
$string['refunded'] = 'Povrnjeno';
$string['returns'] = 'Vrnitve';
$string['reviewday'] = 'Zajemi kreditno kartico samodejno, če izvajalec ali skrbnik ne pregledata naročila v <b>$a</b> dneh. CRON MORA BITI OMOGOČEN.<br />(0 dni pomeni, da bo razporejeno zajemanje onemogočeno in bosta izvajalec ter skrbnik pregledovala naročila ročno. Transakcija bo preklicana, če onemogočite samodejno zajemanje ali v primeru, da ne bo pregledana v 30-ih dneh.)';
$string['reviewfailed'] = 'Pregled ni uspel';
$string['reviewnotify'] = 'Vaše plačilo bo pregledano. V nekaj dneh pričakujte elektronsko sporočilo od vašega izvajalca.';
$string['settled'] = 'Poravnano';
$string['settlementdate'] = 'Datum poravnave';
$string['subvoidyes'] = 'Povrnjena transakcija $a->transid bo preklicana in bo izvedla dobropis v vrednosti $a->amount na vaš račun. Ste prepričani?';
$string['tested'] = 'Preizkušeno';
$string['testmode'] = '[NAČIN PREIZKUŠANJA]';
$string['testwarning'] = 'Zajem/Razveljavitev/Dobropis kot kaže delujejo v preizkusnem načinu, vendar zapisi v podatkovni zbirki niso bili posodobljeni ali vneseni.';
$string['transid'] = 'ID transakcije';
$string['underreview'] = 'Pod pregledom';
$string['unenrolstudent'] = 'Izpiši udeleženca?';
$string['uploadcsv'] = 'Naloži CSV datoteko';
$string['usingccmethod'] = 'Vpis uporablja <a href="$a->url"><strong>Credit Card</strong></a>';
$string['usingecheckmethod'] = 'Vpis uporablja <a href="$a->url"><strong>eCheck</strong></a>';
$string['void'] = 'Neveljavno';
$string['voidyes'] = 'Transakcija bo preklicana. Ste prepričani?';
$string['welcometocoursesemail'] = 'Spoštovani udeleženec,

Hvala za vaša plačila. Vpisali ste se v te predmete:

$a->courses

Svoj profil lahko uredite:
 $a->profileurl

Ogledate si lahko podrobnosti plačila:
 $a->paymenturl';
$string['youcantdo'] = 'Tega dejanja ne morete izvesti: $a->action';
$string['zipcode'] = 'Poštna številka';
?>