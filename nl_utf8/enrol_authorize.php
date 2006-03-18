<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 development (2006031600)


$string['adminauthorizeccapture'] = 'Bestellingsoverzicht & instellingen automatische ontvangsten';
$string['adminauthorizeemail'] = 'Instellingen e-mail';
$string['adminauthorizesettings'] = 'Instellingen Authorize.net';
$string['adminauthorizewide'] = 'Instellingen voor heel de site';
$string['adminavs'] = 'Controleer of je Adress Verification System (AVS) hebt geactiveerd in je authorize.net account. Wanneer de gebruiker het betaalformulier invult, worden hierdoor adresvelden zoals straat, staat, land en postcode gevraagd.';
$string['admincronsetup'] = 'Het onderhoudsscript cron.php heeft al minstens 24 uur niet gelopen.<br />Om de autocapture mogelijkheid te gebruiken moet cron ingeschakeld zijn. <br />Cron installeren of schakel an_review opnieuw uit. <br />Als je autocapture uitschakeld, zullen de transacties geannuleerd worden, tenzij je ze binnen de 30 dagen bevestigd.<br />Controleer an_review en zet \'0\' in het an_capture_day veld <br /> als je betalingen manueel wil aanvaarden/niet aanvaarden binnen 30 dagen?';
$string['adminemailexpired'] = 'Stuur een waarschuwingsmail naar de beheerders <b>$a</b> dagen geleden hoeveel het aantal van \'authorized/pending capture\' transacties er waren, voor transacties vervallen. (0=mail uitschakelen, standaardinstelling=2, maximum=5)<br />Dit is nuttig als je capturing manueel ingesteld hebt(an_review=checked, an_capture_day=0).';
$string['adminhelpcapture'] = 'Ik wil niet alleen manueel betalingen kunnen aanvaarden en weigeren, maar dit ook automatisch kunnen doen om annulatie van betalingen te vermijden. Wat moet ik doen?
-er voor zorgen dat Cron werkt
-an_review controlleren
-een nummer ingeven tussen 1 en 29 in het an_capture_day-veld. De kaart zal aanvaard worden en de gebruiker zal aangemeld worden, tenzij je het manueel doet binnen an_capture_dat.';
$string['adminhelpcapturetitle'] = 'Dag voor automatisch aanvaarden';
$string['adminhelpreview'] = 'Hoe kan ik betalingen manueel aanvaarden en weigeren?
-controleer an_review
-zet een 0 in het an_capture_day veld.

Hoe kunnen leerlingen onmiddellijk aangemeld worden in cursussen na betaling het ingeven van hun kaartnummer?
-Verwijder vinkje bij an_review';
$string['adminhelpreviewtitle'] = 'Nakijken bestellingen';
$string['adminneworder'] = 'Beste beheerder,

Je hebt een nieuwe bestelling binnengekregen:

Order ID: $a->orderid
Transaction ID: $a->transid
Gebruiker: $a->user
Cursus: $a->course
Bedrag: $a->amount

Automatisch aanvaarden ingeschakeld? $a->acstatus

Als automatisch aanvaarden ingeschakeld is, dan zal de kredietkaart aanvaard worden op $a->captureon en zal de leerling automatisch aangemeld worden in de cursus, anders zal deze aanvraag verlopen op $a->expireon en kan die niet meer bevestigd worden na die dag.

Je kunt de betaling ook onmiddellijk aanvaarden en de leerling onmiddellijk toegang geven tot de cursus door deze link te volgen $a->url';
$string['adminnewordersubject'] = '$a->course: Nieuwe bestelling ($a->orderid)';
$string['adminpendingorders'] = 'Je hebt de functie voor automatisch aanvaarden uitgeschakeld.<br />Er zijn $a->count transacties met als status AN_STATUS_AUTH die geannulleerd zullen worden, tenzij je ze goedkeurt.<br />Deze betalingen aanvaarden/verwerpen doe je met de <a href=\'$a->url\'>Beheer betalingen</a> pagina';
$string['adminreview'] = 'Controleer de bestelling voor het aanvaarden van de kredietkaart';
$string['adminteachermanagepay'] = 'Leraren kunnen de betalingen van de cursus beheren';
$string['amount'] = 'Bedrag';
$string['anlogin'] = 'Authorize.net: Login naam';
$string['anpassword'] = 'Authorize.net: Wachtwoord (niet vereistà';
$string['anreferer'] = 'Type hier de URL-verwijzing als je dit instelt met je authorize.net account. Dit zal een header \"Referer:URL\" in de webaanvraag zetten.';
$string['antestmode'] = 'Authorize.net: test transacties';
$string['antrankey'] = 'Authorize.net: transactiesleutel';
$string['authcaptured'] = 'Goedgekeurd /  Aanvaard';
$string['authorizedpendingcapture'] = 'Goedgekeurd / Wachten op aanvaarding';
$string['avsa'] = 'Adres (straat) is juist';
$string['avsb'] = 'Adres niet opgegeven';
$string['avse'] = 'Systeem fout in adresverificatie';
$string['avsg'] = 'Non-U.S. Card Issuing Bank';
$string['avsn'] = 'Straat en postcode fout';
$string['avsp'] = 'Adres verificatiesysteem niet beschikbaar';
$string['avsr'] = 'Probeer opnieuw - Systeem niet beschikbaar of time out';
$string['avsresult'] = 'AVS Resultaat';
$string['avss'] = 'Service niet ondersteund';
$string['avsu'] = 'Adresinformatie niet beschikbaar';
$string['avsw'] = '9 cijferige postcode klopt, adres (straat) niet';
$string['avsx'] = 'Adres (straat) en 9 cijferige postcode niet juist';
$string['avsy'] = 'Adres (straat) en 5 cijferige postcode niet juist';
$string['avsz'] = '5 cijferige postcode is juist, adres (straat) niet';
$string['canbecredit'] = 'Kan teruggestort worden op $a->upto';
$string['cancelled'] = 'Geannuleerd';
$string['capture'] = 'Aanvaardt';
$string['capturedpendingsettle'] = 'Aanvaard / Verwerking bezig';
$string['capturedsettled'] = 'Aanvaard / afgewerkt';
$string['captureyes'] = 'De kredietkaart wordt aanvaard en de leerling wordt in de cursus aangemeld. Ben je zeker?';
$string['ccexpire'] = 'Vervaldatum';
$string['ccexpired'] = 'De kredietkaart is vervallen';
$string['ccinvalid'] = 'Ongeldig kaartnummer';
$string['ccno'] = 'Kredietkaartnummer';
$string['cctype'] = 'Kredietkaarttype';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = 'Kijk op de achterkant van de kaart (laatste 3 cijfers)';
$string['choosemethod'] = 'Als je de cursussleutel voor deze cursus kent, geef die dan in, indien je hem niet kent moet je betalen voor deze cursus';
$string['chooseone'] = 'Vul één of beide velden in';
$string['delete'] = 'Vernietig';
$string['description'] = 'Met de Authorize.net module kun je betaalde cursussen inrichten via CC-providers. Als de prijs voor een cursus 0 is, dan krijgen leerlingen de vraag om te betalen niet. Er is een standaardprijs die je hier voor de hele site kunt instellen en er is een instelling om de prijs per cursus vast te leggen. De prijs per cursus gaat over de standaardprijs van de site.';
$string['enrolname'] = 'Authorize.net Kredietkaart toegang';
$string['expired'] = 'Vervallen';
$string['howmuch'] = 'Hoe veel?';
$string['httpsrequired'] = 'Jammer, maar je aanvraag kan nu niet verwerkt worden. De instellingen van deze site konden niet juist gezet worden<br /><br />
Geef het nummer van je kredietkaart niet in voor je een geel hangslot onderaan je browser ziet. Dat betekent dat alle informatie die over internet verstuurd wordt, versleuteld is. Op die manier is de informatie tijdens de transactie beschermd en kan je kredietkaartnummer niet onderschept worden op het internet.';
$string['logindesc'] = 'Deze optie moet AAN staan.<br /><br />
Je kunt de optie <a href=\"$a->url\">loginhttps</a> instellen in de sectie Variablen/Veiligheid.
<br /><br />
Door die instelling te gebruiken zal Moodle een veilige https-connectie maken voor de aanmelding- en betalingspagina\'s.';
$string['missingaddress'] = 'adres ontbreekt';
$string['missingcc'] = 'kaartnummer  ontbreekt';
$string['missingccexpire'] = 'vervaldatum  ontbreekt';
$string['missingcctype'] = 'kaarttype  ontbreekt';
$string['missingcvv'] = 'verificatienummer  ontbreekt';
$string['missingzip'] = 'postcode  ontbreekt';
$string['nameoncard'] = 'naam op de kaart';
$string['noreturns'] = 'geen teruggave!';
$string['orderid'] = 'Bestelnummer';
$string['paymentmanagement'] = 'Beheer betalingen';
$string['paymentpending'] = 'Je betaling voor deze cursus wordt verwerkt met dit bestelnummer: $a->orderid.';
$string['reason11'] = 'Deze transactie is dubbel ingestuurd';
$string['reason16'] = 'De transactie is niet gevonden';
$string['reason5'] = 'Geldig bedrag invullen';
$string['refund'] = 'Terugstorten';
$string['refunded'] = 'Teruggestort';
$string['reviewday'] = 'Vraag het kredietkaartnummer automatisch, tenzij een leraar of beheer de bestelling herziet binnen de <b>$a</b> dagen. CRON MOET INGESCHAKELD ZIJN.<br />
<0 dagen = schakel automatisch vragen uit = leraar of beheerder herzien de bestelling manueel. De transactie zal niet doorgaan als je automatisch kredietkaart vragen uitschakelt tenzij je ze goedkeurt binnen de 30 dagen.)';
$string['reviewnotify'] = 'Je betaling zal bekeken worden. Verwacht binnen enkele dagen een e-mail van je leraar.';
$string['sendpaymentbutton'] = 'Stuur betaling';
$string['tested'] = 'Getest';
$string['testmode'] = '[TESTMODUS]';
$string['transid'] = 'TransactieID';
$string['unenrolstudent'] = 'Leerling afmelden?';
$string['voidyes'] = 'Transactie zal geannuleerd worden. Wil je dat echt?';
$string['youcantdo'] = 'Deze actie kun je niet doen: $a->action';
$string['zipcode'] = 'Postcode';

?>
