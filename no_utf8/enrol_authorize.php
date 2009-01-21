<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9.3+ (Build: 20090114) (2007101533.01)


$string['adminacceptccs'] = 'Hvilke typer kredittkort vil bli akseptert?';
$string['adminaccepts'] = 'Velg betalingsmetoder som er tillatt og typene deres';
$string['adminauthcode'] = 'Hvis en brukers kredittkort ikke godkjennes direkte på internett, få tak i en godkjenningskode fra kundens bank.';
$string['adminauthorizeccapture'] = 'Ordrekontroll - innstilling av automatisk påmeldingshåndtering';
$string['adminauthorizeemail'] = 'Innstillinger for epostsending';
$string['adminauthorizesettings'] = 'Innstillinger for Authorize.net';
$string['adminauthorizewide'] = 'Innstillinger for hele nettstedet';
$string['adminavs'] = 'Merk av hvis du har aktivisert AVS (Address Verification System) for din authorize.net konto. Dette medfører at brukeren må fylle ut adressefelter som gate, poststed og land når de skal betale.';
$string['adminconfighttps'] = 'Vær vennlig å pass på at du har \"<a href=\"$a->url\">slått loginhttps PÅ</a>\" for å bruke denne plugin<br />i Admin >> Variabler >> Sikkerhet >> HTTP sikkerhet.';
$string['adminconfighttpsgo'] = 'Gå til <a href=\"$a->url\">sikker side</a> for å konfigurere denne plugin\'en.';
$string['admincronsetup'] = 'Cron.php vedlikeholdsskript er ikke kjørt de siste 24 timer.<br/>Cron må være slått på hvis du vil bruke automatisk håndtering.<br/><B>Slå på</b> \'Authorize.net plugin\' og <b>sett opp cron</b> ordentlig; or <b>slå av an_review</b> igjen.<br />Hvis du slår av automatisk håndtering, vil transasjonene automatisk bli avbrutt hvis du ikke vedlikeholder dem innen 30 dager.<br />Sjekk <b>an_review</b> og skriv inn <b>\'0\' for an_capture_day</b> feltet<br />hvis du vil <b>manuaelt</b> akseptere/avvise betalinger innen 30 dager.';
$string['adminemailexpired'] = 'Dette er nyttig for manuell håndtering. Administrator blir varslet <b>$a</b> dager før ordren utløper.';
$string['adminemailexpiredsort'] = 'Når antallet ventende ordre som snart utløper blir sendt til læreren via e-post, hvilken er viktig?';
$string['adminemailexpiredsortcount'] = 'Ordreantall';
$string['adminemailexpiredsortsum'] = 'Totalt beløp';
$string['adminemailexpiredteacher'] = 'Dersom du har aktivisert manuell håndtering (se over) og lærere kan administrere betalinger, bør de også  varsles om ventende ordre som utløper. Dette vil sende en e-post til hver kurslærer med antall ventende ordre (som snart utløper).';
$string['adminemailexpsetting'] = '(0=koble ut e-postsending, standard=2, max=5)<br />(Manuelle håndteringsinnstillinger for å sende e-post: cron=aktivert, an_review=merket av, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Dag for automatisk påmeldingshåndtering';
$string['adminhelpreviewtitle'] = 'Oversikt over ordre';
$string['adminneworder'] = 'Kjære administrator,
Du har mottatt en ny ventende ordre:
Ordre ID: $a->orderid
Transaksjons ID: $a->transid
Bruker: $a->user
Kurs: $a->course
Beløp: $a->amount
Automatisk påmeldingshåndtering aktivert?: $a->acstatus
Dersom automatisk håndtering er aktivert, vil kredittkortet bli belastet $a->captureon
og deretter vil brukeren bli påmeldt kurset; hvis ikke utløper ordren $a->expireon og kan ikke belastes etter denne datoen.
Du kan også godta/avslå betalingen for å umiddelbart melde inn studenten ved å klikke denne lenken: $a->url';
$string['adminnewordersubject'] = '$a->course; Ny ventende ordre: $a->orderid';
$string['adminpendingorders'] = 'Du har koblet fra automatisk ordrehåndtering.<br />Totalt $a->count transaksjoner med statusen \'Authorized/Pending Capture\' vil kanselleres dersom du ikke sjekker dem.<br />For å godta/avslå betalinger kan du klikke på <a href=\'$a->url\'>Betalingsadministrasjon</a>-siden.';
$string['adminreview'] = 'Sjekk ordren før kredittkortet belastes.';
$string['adminteachermanagepay'] = 'Lærere kan håndtere betalinger på dette kurset.';
$string['allpendingorders'] = 'Alle ordre under behandling';
$string['amount'] = 'Beløp';
$string['anlogin'] = 'Authorize.net: Login navn';
$string['anpassword'] = 'Authorize.net: Passord';
$string['anreferer'] = 'Angi \"URL-referer\" dersom du har satt dette opp i authorize.net-kontoen. Dette vil sende en linje: \"Referer: URL\" som en del av webforespørselen.';
$string['antestmode'] = 'Kjør transaksjonene kun i testmodus (kredittkortet vil ikke bli belastet)';
$string['antrankey'] = 'Authorize.net: Traksaksjonsnøkkel';
$string['approvedreview'] = 'Godkjent gjennomgang';
$string['authcaptured'] = 'Autorisert / Håndtert';
$string['authcode'] = 'Autorisasjonskode';
$string['authorize:managepayments'] = 'Behandle betalinger';
$string['authorize:uploadcsv'] = 'Last opp CSV fil';
$string['authorizedpendingcapture'] = 'Autorisert / Ventende håndtering';
$string['avsa'] = 'Adresse (gate) stemmer, postnummer stemmer ikke';
$string['avsb'] = 'Mangler adresseinformasjonq';
$string['avse'] = 'Systemfeil i adresseverifiseringen';
$string['avsg'] = 'Kredittkort utenfor USA';
$string['avsn'] = 'Ingen samsvarende gateadresse eller postnummer';
$string['avsp'] = 'Adresseverifisering ikke nødvendig';
$string['avsr'] = 'Prøv igjen - systemet er utilgjengelig eller det er gått for lang tid';
$string['avsresult'] = 'AVS Resultat: $a';
$string['avss'] = 'Tjenesten støttes ikke av tilbyder';
$string['avsu'] = 'Adresseinformasjon er utilgjengelig';
$string['avsw'] = '9 siffers postnummer er ok, men ikke adressen';
$string['avsx'] = 'Adresse og 9 siffers postnummer er ok';
$string['avsy'] = 'Adresse og 5 siffers postnummer er ok';
$string['avsz'] = '5 siffers postnummer er ok, men ikke adressen';
$string['canbecredit'] = 'Kan bli refundert, opptil $a->upto';
$string['cancelled'] = 'Kansellert';
$string['capture'] = 'Belast';
$string['capturedpendingsettle'] = 'Belastet / Fullført';
$string['capturedsettled'] = 'Belastet / Fullført';
$string['captureyes'] = 'Kredittkortet vil bli belastet og studenten påmeldt kurset. Er du sikker?';
$string['ccexpire'] = 'Utløpsdato';
$string['ccexpired'] = 'Kredittkortet er utløpt';
$string['ccinvalid'] = 'Ugyldig kortnummer';
$string['ccno'] = 'Kredittkortnummer';
$string['cctype'] = 'Kredittkorttype';
$string['ccvv'] = 'Kortverifisering';
$string['ccvvhelp'] = 'Se bak på kortet (3 siste siffer)';
$string['choosemethod'] = 'Dersom du vet sikkerhetsnøkkel for dette kurset, kan du skrive det inn under; <br />i motsatt fall må du betale for dette kurset.';
$string['chooseone'] = 'Fyll inn ett eller begge av to følgende felter. Passordet vises ikke.';
$string['costdefaultdesc'] = '<strong>I kursinnstillngene, skriv inn -1</strong> for å benytte denne standardprisen på dette kurset.';
$string['cutofftime'] = 'Transaksjonsavbrudd. Når skal siste transaksjon fullføres?';
$string['dataentered'] = 'Innskrevne data';
$string['delete'] = 'Ødelegg';
$string['description'] = 'Authorize.net modulen lar deg sette opp betalingskurs via tilbydere for kredittkortbetaling. Dersom prisen for et kurs er null, blir ikke studenten spurt om betaling. Du kan enten sette en standardpris for alle kurs, eller overstyre dette ved å legge inn en egen kurspris for hvert kurs.<br /><br /><b>OBS: <br />Dersom du også bruker sikkerhetsnøkkel, kan studentene også bruke denne. Dette er svært nyttig når du samtidig tilbyr kurs til  betalende og ikke-betalende studenter.';
$string['echeckabacode'] = 'Bankens ABA nummer';
$string['echeckaccnum'] = 'Bankkontonummer';
$string['echeckacctype'] = 'Bankkontotype';
$string['echeckbankname'] = 'Banknavn';
$string['echeckbusinesschecking'] = 'Sjekker firma';
$string['echeckchecking'] = 'Sjekker';
$string['echeckfirslasttname'] = 'Eier av bankkontoen';
$string['echecksavings'] = 'Sparekonto';
$string['enrolname'] = 'Authorize.net Payment Gateway';
$string['expired'] = 'Utløpt';
$string['haveauthcode'] = 'Jeg har allerede en autorisasjonskode';
$string['howmuch'] = 'Hvor mye?';
$string['httpsrequired'] = 'Vi beklager å måtte informere deg om at forespørselen din ikke kan behandles nå. Denne siten er ikke konfigurert korrekt. <br /> <br />Vennligst ikke skriv inn kredittkortnummeret ditt, såfremt du ikke ser en gul hengelås i bunnen av nettleseren din. Dersom symbolet er der, betyr det at siden krypterer all kommunikasjon mellom din pc og banken. Dette er nødvendig for å hindre misbruk.';
$string['invalidaba'] = 'Ugyldig ABA nummer';
$string['invalidaccnum'] = 'Ugyldig kontonummer';
$string['invalidacctype'] = 'Ugyldig kontotype';
$string['logindesc'] = 'Denne opsjonen må være PÅ. <br /><br />Vennligst sjekk at du har slått <a href=\"$a->url\">loginhttps PÅ</a> i Admin >> Sikkerhet >> HTTP-sikkerhet.<br /><br /> Med https vil innlogging og betaling være kryptert.';
$string['logininfo'] = 'Brukernavn, passord og transaksjonsnøkkel vil ikke vises av hensyn til sikkerheten. Det er derfor ikke behov for å oppgi dette igjen dersom du har satt opp disse feltene tidligere. Du vil se et grønt felt til venstre for felt som allerede er konfigurert. Dersom du skriver inn noe her for første gang, vil brukernavnet (*) kreves oppgitt og du må oppgi <strong>enten</strong> transaksjonsnøkkel (#1) <strong>eller</strong> passordet (#2) i relevante felt. Vi anbefaler at du oppgir transaksjonsnøkkelen av forsiktighetshensyn. Merk av i sjekkboksen dersom du vil slette gjeldende passord.';
$string['methodcc'] = 'Kredittkort';
$string['methodecheck'] = 'eSjekk (ACH)';
$string['missingaba'] = 'Manglende ABA nummer';
$string['missingaddress'] = 'Adresse mangler';
$string['missingbankname'] = 'Manglende banknavn';
$string['missingcc'] = 'Kortnummer mangler';
$string['missingccauthcode'] = 'Manglende autorisasjonskode';
$string['missingccexpire'] = 'Utløpsdato mangler';
$string['missingcctype'] = 'Korttype mangler';
$string['missingcvv'] = 'Mangler verifikasjonsnummer';
$string['missingzip'] = 'Postnummer mangler';
$string['mypaymentsonly'] = 'Vis bare mine betalinger';
$string['nameoncard'] = 'Navnet på kortet';
$string['new'] = 'Ny';
$string['noreturns'] = 'Ingen retur!';
$string['notsettled'] = 'Ikke fullført';
$string['orderid'] = 'Ordre ID';
$string['paymentmanagement'] = 'Betalingshåndtering';
$string['paymentmethod'] = 'Betalingsmetode';
$string['paymentpending'] = 'Din betaling venter på behandling med dette ordrenummeret: $a->orderid. Sjekk <a href=\'$a->url\'>Ordredetaljer</a>.';
$string['pendingecheckemail'] = 'Kjære administrator,
Det er $a->count ventende e-Sjekker nå og du må laste opp en csv-fil for å melde på brukerne.
Klikk på lenken og les hjelp-filen på denne siden:
$a->url';
$string['pendingechecksubject'] = '$a->course: Ventende e-Sjekker($a->count)';
$string['pendingordersemail'] = 'Kjøre administrator,

$a->pending transaksjoner for kurset \"$a->course\" vil utløpe dersom du ikke godtar betaling innen $a->days dager.

Dette er en advarsel, siden du ikke aktiviserte automatisk håndtering av påmelding.

For å godta/asvlå ventende betalinger kan du gå til siden:
$a->url

For å slå på automatisk påmeldingshåndtering - det betyr at du ikke får slike meldinger mer - gå til siden:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Kjære lærer,

$a->pending transaksjoner til en verdi av $a->currency $a->sumcost for kurset \"$a->course\" vil utløpe dersom du ikke godtar betalingen innen  $a->days dager.

Du må godta eller avslå betalinger manuelt siden administrator ikke har aktivisert automatisk påmeldingshåndtering.

$a->url';
$string['pendingorderssubject'] = 'ADVARSEL: $a->course, $a->pending ordre vil utløpe om $a->days dag(er).';
$string['reason11'] = 'En duplikat transaksjon er sendt.';
$string['reason13'] = 'Bank login ID er ugyldig eller kontoen er inaktiv.';
$string['reason16'] = 'Ingen transaksjon ble funnet';
$string['reason17'] = 'Banken aksepterer ikke denne kredittkorttypen.';
$string['reason245'] = 'Denne e-Sjekk typen er ikke tillatt via dette betalingssystemet.';
$string['reason246'] = 'Denne typen e-Sjekk er ikke tillatt.';
$string['reason27'] = 'Transaksjonen ga en AVS feilmelding. Oppgitt adresse samsvarer ikke med fakturaadressen til eieren av kredittkortet.';
$string['reason28'] = 'Banken aksepterer ikke denne typen kredittkort.';
$string['reason30'] = 'Oppsettet i betalingsløsningen er feil. Kontakt bankens supporttjeneste.';
$string['reason39'] = 'Den angitte valutakoden er enten ugyldig, ikke støttet, ikke tillatt for denne banken, eller har ingen vekslingskurs.';
$string['reason43'] = 'Banken er feil satt opp i betalingsløsningen. Kontakt bankens supporttjeneste.';
$string['reason44'] = 'Denne transaksjonen er underkjent. Feil i filtrering av kortkoden!';
$string['reason45'] = 'Denne transaksjonen er underkjent. Feil i kortkode /AVS-filter!';
$string['reason47'] = 'Beløpet for fullføring kan ikke være høyere enn det opprinnelige autoriserte beløpet.';
$string['reason5'] = 'Du må oppgi et gyldig beløp.';
$string['reason50'] = 'Denne transaksjonen venter på fullføring og kan ikke stoppes.';
$string['reason51'] = 'Summen av beløp mot denne transaksjonen er større enn det opprinnelige transaksjonsbeløpet.';
$string['reason54'] = 'Transaksjonen møter ikke kriteriene for godkjenning av belasting.';
$string['reason55'] = 'Summen av beløp mot denne transaksjonen vil bli større enn det opprinnelige transaksjonsbeløpet.';
$string['reason56'] = 'Denne banken godtar bare e-Sjekk (ACH). Ingen kredittkort aksepteres.';
$string['refund'] = 'Tilbakebetaling';
$string['refunded'] = 'Tilbakebetalt';
$string['returns'] = 'Retur';
$string['reviewday'] = 'Belaster kredittkortet automatisk, unntatt hvis en lærer eller administrator gjennomgår ordren innen <b>$a</b> dager. CRON MÅ KJØRE.<br />(0 dager betyr at automatisk håndtering er frakoblet - og betyr også at lærer eller administrator må håndtere ordren manuelt. Transaksjonen vil bli avbrutt dersom du ikke aktiverer automatisk håndtering eller du behandler ordren innen 30 dager.)';
$string['reviewfailed'] = 'Mislykket gjennomgang';
$string['reviewnotify'] = 'Din betaling vil bli behandlet. Forvent en e-post innen noen dager fra læreren din.';
$string['sendpaymentbutton'] = 'Send betaling';
$string['settled'] = 'Fullført';
$string['settlementdate'] = 'Fullført dato';
$string['subvoidyes'] = 'Transaksjonen returnert  ($a->transid) vil bli kansellert og vil kreditere $a->amount til kontoen din. Er du sikker?';
$string['tested'] = 'Testet';
$string['testmode'] = '[TESTMODUS]';
$string['testwarning'] = 'Belasting, tømming og tilbakebetaling ser ut til å virke i testmodus, men ingen oppføringer ble oppdatert eller lagt til i databasen.';
$string['transid'] = 'TransaksjonsID';
$string['underreview'] = 'Under behandling';
$string['unenrolstudent'] = 'Meld ut student?';
$string['uploadcsv'] = 'Last opp en CSV-fil';
$string['usingccmethod'] = 'Påmelding via <a href=\"$a->url\"><strong>Kredittkort</strong></a>';
$string['usingecheckmethod'] = 'Påmelding via <a href=\"$a->url\"><strong>e-Sjekk</strong></a>';
$string['void'] = 'Tom';
$string['voidyes'] = 'Transaksjonen vil bli kansellert. Er du sikker?';
$string['welcometocoursesemail'] = 'Kjære student,
Takk for din betaling. Du er blitt påmeldt disse kursene:
$a->courses
Du kan nå redigere profilen din her:
$a->profileurl
Hvis du vil se betalingsdetaljene kan du klikke her:
$a->paymenturl';
$string['youcantdo'] = 'Du kan ikke utføre denne handlingen: $a->action';
$string['zipcode'] = 'Postnummer';

?>
