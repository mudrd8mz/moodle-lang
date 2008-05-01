<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9 + (Build: 20080430) (2007101509)


$string['adminacceptccs'] = 'Hvilke typer kredittkort vil bli akseptert?';
$string['adminaccepts'] = 'Velg betalingsmetoder som er tillatt og typene deres';
$string['adminauthcode'] = 'Hvis en brukers kredittkort ikke godkjennes direkte på internett, få tak i en godkjenningskode fra kundens bank.';
$string['adminauthorizeemail'] = 'Innstillinger for epostsending';
$string['adminauthorizesettings'] = 'Innstillinger for Authorize.net';
$string['adminauthorizewide'] = 'Innstillinger for hele nettstedet';
$string['adminconfighttps'] = 'Vær vennlig å pass på at du har \"<a href=\"$a->url\">slått loginhttps PÅ</a>\" for å bruke denne plugin<br />i Admin >> Variabler >> Sikkerhet >> HTTP sikkerhet.';
$string['adminconfighttpsgo'] = 'Gå til <a href=\"$a->url\">sikker side</a> for å konfigurere denne plugin\'en.';
$string['admincronsetup'] = 'Cron.php vedlikeholdsskript er ikke kjørt de siste 24 timer.<br/>Cron må være slått på hvis du vil bruke regelmessig-henting.<br/><B>Slå på</b> \'Authorize.net plugin\' og <b>sett opp cron</b> ordentlig; or <b>slå av an_review</b> igjen.<br />Hvis du slår av regelsmessighenting, vil transasjonene automatisk bli avbrutt hvis du ikke vedlikeholder dem innen 30 dager.<br />Sjekk <b>an_review</b> og skriv inn <b>\'0\' for an_capture_day</b> feltet<br />hvis du vil <b>manuaelt</b> akseptere/avvise betalinger innen 30 dager.';
$string['adminemailexpiredsortcount'] = 'Ordreantall';
$string['adminemailexpiredsortsum'] = 'Totalt beløp';
$string['adminhelpreviewtitle'] = 'Oversikt over ordre';
$string['allpendingorders'] = 'Alle ordre under behandling';
$string['amount'] = 'Beløp';
$string['approvedreview'] = 'Godkjent gjennomgang';
$string['authcode'] = 'Autorisasjonskode';
$string['authorize:managepayments'] = 'Behandle betalinger';
$string['authorize:uploadcsv'] = 'Last opp CSV fil';
$string['avsa'] = 'Adresse (gate) stemmer, postnummer stemmer ikke';
$string['avsb'] = 'Mangler adresseinformasjonq';
$string['avsresult'] = 'AVS Resultat: $a';
$string['avss'] = 'Tjenesten støttes ikke av tilbyder';
$string['avsu'] = 'Adresseinformasjon er utilgjengelig';
$string['cancelled'] = 'Kansellert';
$string['ccexpire'] = 'Utløpsdato';
$string['ccexpired'] = 'Kredittkortet er utløpt';
$string['ccinvalid'] = 'Ugyldig kortnummer';
$string['ccno'] = 'Kredittkortnummer';
$string['cctype'] = 'Kredittkorttype';
$string['ccvv'] = 'Kortverifisering';
$string['ccvvhelp'] = 'Se bak på kortet (3 siste siffer)';
$string['delete'] = 'Ødelegg';
$string['echeckabacode'] = 'Bankens ABA nummer';
$string['echeckaccnum'] = 'Bankkontonummer';
$string['echeckacctype'] = 'Bankkontotype';
$string['echeckbankname'] = 'Banknavn';
$string['echeckchecking'] = 'Sjekker';
$string['echecksavings'] = 'Sparekonto';
$string['expired'] = 'Utløpt';
$string['howmuch'] = 'Hvor mye?';
$string['invalidaba'] = 'Ugyldig ABA nummer';
$string['invalidaccnum'] = 'Ugyldig kontonummer';
$string['invalidacctype'] = 'Ugyldig kontotype';
$string['methodcc'] = 'Kredittkort';
$string['missingaba'] = 'Manglende ABA nummer';
$string['missingaddress'] = 'Adresse mangler';
$string['missingbankname'] = 'Manglende banknavn';
$string['missingcc'] = 'Kortnummer mangler';
$string['missingccauthcode'] = 'Manglende autorisasjonskode';
$string['missingccexpire'] = 'Utløpsdato mangler';
$string['missingcctype'] = 'Korttype mangler';
$string['missingzip'] = 'Postnummer mangler';
$string['mypaymentsonly'] = 'Vis bare mine betalinger';
$string['nameoncard'] = 'Navnet på kortet';
$string['new'] = 'Ny';
$string['paymentmanagement'] = 'Betalingshåndtering';
$string['paymentmethod'] = 'Betalingsmetode';
$string['reason16'] = 'Ingen transaksjon ble funnet';

?>
