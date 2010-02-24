<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.7+ (Build: 20100210) (2007101571.04)


$string['check_configrw_details'] = '<p>Det anbefales at fil-rettighetene til config.php endres etter installasjonen slik at webserveren ikke kan gjøre endringer. Vennligst merk at denne sjekken ikke forbedrer serverens generelle sikkerhet, selv om den forsinker og eventuelt begrenser generelle sikkerhetshull.</p>';
$string['check_configrw_name'] = 'config.php er skrivbar';
$string['check_configrw_ok'] = 'config.php er sikret mot endringer via PHP script.';
$string['check_configrw_warning'] = 'PHP script kan endre config.php.';
$string['check_cookiesecure_details'] = '<p>Dersom du aktiverer https er det anbefalt at du også aktiverer sikre cookier. Du bør også legge til en permanent omadressering til https.</p>';
$string['check_cookiesecure_error'] = 'Vennligst aktiver sikre cookier';
$string['check_cookiesecure_name'] = 'Sikre cookier';
$string['check_cookiesecure_ok'] = 'Sikre cookier er aktivert';
$string['check_courserole_anything'] = 'Egenskapen \"tillat alt\" må ikke tillates i denne <a href=\"$a\">konteksten</a>.';
$string['check_courserole_details'] = '<p>Hvert kurs har en standard rolle ved innmelding. Vennligst sjekk at denne rollen ikke har skadelige rettigheter.</p><p>Den eneste anbefalte innmeldingsrolle for et kurs er <em>Student</em>.</p>';
$string['check_courserole_error'] = 'Det er oppdaget en feilaktig konfigurert standard kursrolle!';
$string['check_courserole_name'] = 'Standard roller (kurs)';
$string['check_courserole_notyet'] = 'Kun benyttet standard kursroller.';
$string['check_courserole_ok'] = 'Standard kursrolle-definisjon er OK.';
$string['check_courserole_risky'] = 'Risikofylte egenskaper er funnet i denne <a href=\"$a\">kursrollen</a>.';
$string['check_courserole_riskylegacy'] = 'Risikabel standardtype oppdaget i <a href=\"$a->url\">$a->shortname</a>.';
$string['check_defaultcourserole_anything'] = 'Du bør  absolutt ikke aktivere \"Tillat alt\" i <a href=\"$a\">denne konteksten</a>.';
$string['check_defaultcourserole_details'] = '<p>Rollen \"Student\" ved innmelding angir også standard rolle for kurs. Vennligst sjekk at det ikke er lagt til noen risikable rettigheter til denne rollen.</p>
<p>Den eneste støttede lovlige standardrolle er <em>Student</em>.</p>';
$string['check_defaultcourserole_error'] = 'Oppdaget en risikabel standardrolle \"&a\"!';
$string['check_defaultcourserole_legacy'] = 'Ikke støttet type oppdaget.';
$string['check_defaultcourserole_name'] = 'Standard kursrolle (global)';
$string['check_defaultcourserole_notset'] = 'Standard rolle ikke satt.';
$string['check_defaultcourserole_ok'] = 'Portalen standardrolle innstillinger er OK.';
$string['check_defaultcourserole_risky'] = 'Risikable rettigheter oppdaget <a href=\"$a\">her</a>.';
$string['check_defaultuserrole_details'] = '<p>Alle innloggede brukere blir tildelt rettighetene til standard brukerrolle. Vennligst sjekk at det ikke er satt risikable rettigheter på denne rollen.</p>
<p>Eneste anbefalte rolle for standard bruker er <em>Godkjent bruker</em>. Muligheten til å se kurs må IKKE aktiveres.</p>';
$string['check_defaultuserrole_error'] = 'Standardrollen \"$a\" er ikke korrekt satt opp!';
$string['check_defaultuserrole_name'] = 'Registrert brukerrolle';
$string['check_defaultuserrole_notset'] = 'Standard rolle er ikke satt.';
$string['check_defaultuserrole_ok'] = 'Angitte innstillinger for rolledefinisjoner er OK.';
$string['check_displayerrors_details'] = '<p>Aktivering av  PHP innstillingen <code>display_errors</code> anbefales ikke da feilmeldinger kan inneholde sensitiv informasjon om serveren.</p>';
$string['check_displayerrors_error'] = 'PHP-innstillingen for feilvisning er aktivert. Vi anbefaler at du slår den av.';
$string['check_displayerrors_name'] = 'Visning av PHP-feil';
$string['check_displayerrors_ok'] = 'Visning av PHP-feil er deaktivert.';
$string['check_emailchangeconfirmation_details'] = '<p>Det anbefales at e-postbekreftelse kreves når brukeren endrer e-postadressen i profilen. Hvis den er deaktivert kan spammere misbruke kontoen til å sende søppelpost.>/p>';
$string['check_emailchangeconfirmation_error'] = 'Brukere kan skrive inn hvilken som helst e-Brukere kan skrive inn valgfri e-postadresse.';
$string['check_emailchangeconfirmation_info'] = 'Angir at brukere kun kan bruke e-postadresser fra godkjente domener.';
$string['check_emailchangeconfirmation_name'] = 'Bekreft endring av e-postadresse';
$string['check_emailchangeconfirmation_ok'] = 'Bekreft endring av e-postadressen i brukerprofilen.';
$string['check_embed_details'] = '<p>Ubegrenset OBJECT og EMBED i tekst er meget risikofylt. Alle registrerte brukere kan dermed starte et XSS-angrep mot andre brukere. Denne innstillingen bør abolutt være deaktivert på produksjonsservere.';
$string['check_embed_error'] = 'Ubegrenset OBJECT og EMBED er aktivert - dette er MEGET risikofylt på da aller fleste servere.';
$string['check_embed_name'] = 'Tillat EMBED og OBJECT';
$string['check_embed_ok'] = 'Ubegrenset OBJECT og EMBED er ikke tillatt.';
$string['check_frontpagerole_details'] = '<p>Standard hovedsiderolle gis ut til alle registrerte brukere for aktiviteter på hovedsiden. Vennligst sjekk at du ikke har noen risikofylte rettigheter på denne rollen.</p><p>Det anbefales at du ved behov oppretter en spesialrolle i stedet for å endre Moodles standardroller.</p>';
$string['check_frontpagerole_error'] = 'Ukorrekt definert hovedsiderolle \"$a\" oppdaget!';
$string['check_frontpagerole_name'] = 'Hovedsiderolle';
$string['check_frontpagerole_notset'] = 'Hovedsiderolle er ikke angitt.';
$string['check_frontpagerole_ok'] = 'Hovedsidens rolleinnstillinger er OK.';
$string['check_globals_details'] = '<p>\"Register globals\" i registerinnstillingene for PHP er svært usikre.</p>
<p><code>register_globals=off</code> må angis i PHP innstillingene. Denne innstillingen gjøres ved å redigere <code>php.ini</code>, Apache/IIS innstillinger eller <code>.htaccess</code> filen.</p>';
$string['check_globals_error'] = '\"Register globals\" MÅ deaktiveres. Vennligst endre PHP-innstillingene umiddelbart!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = '\"Register globals\" er deaktivert.';
$string['check_google_details'] = '<p>Åpen for Google-innstillingen lar søkemotorer indeksere kurs med gjestetilgang. Det er ikke noe poeng å aktivere denne innstillingen dersom gjestetilgang er avslått.';
$string['check_google_error'] = 'Det er åpnet for tilgang for søkemotorer, men gjestetilgangen er deaktivert.';
$string['check_google_info'] = 'Søkemotorer kan indeksere kurs med gjestetilgang.';
$string['check_google_name'] = 'Åpen for Google';
$string['check_google_ok'] = 'Tilgang for søkemotorer er deaktivert.';
$string['check_guestrole_details'] = '<p>Gjesterollen er for gjester, ikke innloggede brukere og tilfeldig gjestetilgang. Vennligst sjekk at det ikke er gitt risikable rettigheter til denne rollen.</p>
<p>Eneste støttede lovlige type for gjesterollen er <em>Gjest</em>.</p>';
$string['check_guestrole_error'] = 'Gjesterollen \"$a\" er ikke satt opp riktig!';
$string['check_guestrole_name'] = 'Rollen Gjest';
$string['check_guestrole_notset'] = 'Rollen Gjest er ikke satt';
$string['check_guestrole_ok'] = 'Rollen Gjest er OK satt opp.';
$string['check_mediafilterswf_details'] = '<p>Automatisk swf embedding er meget risikofylt - enhver registrert bruker kan da kjøre XSS-angrep mot andre brukere på installasjonen. Vennligst slå av dette på produksjonsservere.</p>';
$string['check_mediafilterswf_error'] = 'Flash mediafiler er aktivert - dette er meget risikofylt for de fleste servere!';
$string['check_mediafilterswf_name'] = 'Filter for .swf er aktivert';
$string['check_mediafilterswf_ok'] = 'Flash media-filter er deaktivert.';
$string['check_noauth_details'] = '<p><em>Ingen innlogging</em>-modulen er ikke beregnet for produksjonsportaler. Vennligst deaktiver denne så sant det ikke dreier seg om en utviklingsportal.';
$string['check_noauth_error'] = 'Modulen \"Ingen innlogging\" kan ikke brukes på produksjonsportaler.';
$string['check_noauth_name'] = 'Ingen autentisering';
$string['check_noauth_ok'] = 'Modulen for Ingen autentisering er deaktivert.';
$string['check_openprofiles_details'] = '<p>Åpne brukerprofiler kan angripes av spammere. Vi anbefaler at enten <code>Tving brukere til å logge inn for å se profiler</code> eller <code>Tving brukere til å logge inn</code> er aktivert.</p>';
$string['check_openprofiles_error'] = 'Enhver kan se brukerprofiler uten innlogging.';
$string['check_openprofiles_name'] = 'Åpne brukerprofiler';
$string['check_openprofiles_ok'] = 'Innlogging kreves før en kan se brukerprofiler.';
$string['check_passwordpolicy_details'] = '<p>Det anbefales at det settes passordregler, siden det er svært vanlig å gjette seg fram til vanlige passord. Ikke gjør kravene for strenge, da dette kan resultere i at brukerne stadig glemmer passordet og til slutt skriver det ned.</p>';
$string['check_passwordpolicy_error'] = 'Passordregler er ikke aktivert';
$string['check_passwordpolicy_name'] = 'Passordregler';
$string['check_passwordpolicy_ok'] = 'Passordregler er aktivert';
$string['check_passwordsaltmain_details'] = '<p>Ved å konfigurere en passord-krypteringsfrase reduserer du effektivt risikoen for passordtyveri.</p>
<p>Du konfigurerer dette ved å legge til følgende linje i config.php:</p>
<code>\$CFG->passwordsaltmain = \'en eller annen kjempelang passordstreng med tall, bokstaver og andre tegn\';</code>
<p>Denne strengen med tegn bør være en miks av tall, bokstaver og andre tegn. Du bør minst ha en streng på 40 tegn, gjerne mer.</p>
<p>Les mer her om 
 <a href=\"$a\" target=\"_blank\">passord krypterinsfrase</a> hvis du ønsker å endre dette krypteringsfrasen. <br /><strong>Når du har konfiguert en passord-krypteringsfrase må du IKKE slette passordet fra config.php - da samtlige brukere (også du) vil bli utestengt fra installasjonen!</strong></p>';
$string['check_passwordsaltmain_name'] = 'Passord-krypteringsfrase';
$string['check_passwordsaltmain_ok'] = 'Passord-krypteringsfrasen er OK';
$string['check_passwordsaltmain_warning'] = 'Det er ikke angitt noen passord-krypteringsfrase';
$string['check_passwordsaltmain_weak'] = 'Passord-krypteringsfrasen er for svak';
$string['check_riskadmin_detailsok'] = '<p>Vennligst bekreft følgede liste over administratorer:</p> $a';
$string['check_riskadmin_detailswarning'] = '<p>Vennligst bekreft følgede liste over administratorer:</p>$a->admins
<p>Det anbefales at en bare tildeler administratorrettigheter i systemkonteksten. Følgende har admin-rettigheter som ikke støttes:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Administratorer';
$string['check_riskadmin_ok'] = 'Fant $a administratorer';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) Vis rolletildeling</a>';
$string['check_riskadmin_warning'] = 'Fant  $a->admincount administratorer og  $a->unsupcount med administratorrettigheter andre steder på systemet.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Disse aktiverte overstyringene gir brukere rett til å inkludere brukerdata i sikkerhetskopier. Du bør sjekke om disse tillatelsene er nødvendige.</p> $a';
$string['check_riskbackup_details_systemroles'] = '<p>Følgende systemroller er satt til å tillate brukere å ta med brukerdata i sikkerhetskopier. Du bør sjekke om disse tillatelsene er nødvendige.</p> $a';
$string['check_riskbackup_details_users'] = '<p>På grunn av overordnede roller eller lokale overstyringer har følgende brukerkontoer rett til å ta sikkerhetskopier med private data fra alle påmeldte brukere i kurs. Du bør sjekke om du stoler på disse brukerne og at brukerpassord er beskyttet med sterke passord:</p> $a';
$string['check_riskbackup_detailsok'] = 'Ingen roller har eksplisitt tillatelse til å ta sikkerhetskopi av brukerdata. Likevel, merk at administratorer med tillatelsen \"Gjøre alt\" kan utføre dette.';
$string['check_riskbackup_editoverride'] = '<a href=\"$a->url\">$a->name in $a->contextname</a>';
$string['check_riskbackup_editrole'] = '<a href=\"$a->url\">$a->name</a>';
$string['check_riskbackup_name'] = 'Sikkerhetskopi av brukerdata';
$string['check_riskbackup_ok'] = 'Ingen roller har eksplisitt rett til å ta sikkerhetskopi av brukerdata';
$string['check_riskbackup_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) in $a->contextname</a>';
$string['check_riskbackup_warning'] = 'Fant $a->rolecount roller, $a->overridecount overstyringer og $a->usercount brukere med rett til å ta sikkerhetskopi av brukerdata.';
$string['check_riskxss_details'] = '<p>RISK_XSS viser deg alle risikable rettigheter bare klarerte brukere kan benytte.</p>
<p>Vennligst bekreft følgende liste av brukere og sikre at disse er klarerte for denne serveren:</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS klarerte brukere';
$string['check_riskxss_warning'] = 'RISK_XSS - fant $a brukere som ikke er klarert.';
$string['check_unsecuredataroot_details'] = '<p>Datakatalogen må ikke kunne nås direkte fra web. Beste måten å sikre dette på er å plassere datakatalogen utenfor webområdet på serveren.</p>
<p>Dersom du flytter katalogen, må du oppdatere <code>\$CFG->dataroot</code> innstillingen i <code>config.php</code> tilsvarende.</p>';
$string['check_unsecuredataroot_error'] = 'Datakatalogen  <code>$a</code> er plassert feil og direkte tilgjengelig via web!';
$string['check_unsecuredataroot_name'] = 'Usikker datakatalog';
$string['check_unsecuredataroot_ok'] = 'Datakatalogen skal IKKE være tilgjengelig direkte via web.';
$string['check_unsecuredataroot_warning'] = 'Datakatalogen  <code>$a</code> er plassert feil og kan være tilgjengelig direkte via web.';
$string['configuration'] = 'Konfigurasjon';
$string['description'] = 'Beskrivelse';
$string['details'] = 'Detaljer';
$string['issue'] = 'Problem';
$string['reportsecurity'] = 'Sikkerhetsoversikt';
$string['security:view'] = 'Vis sikkerhetsrapport';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritisk';
$string['statusinfo'] = 'Informasjon';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Alvorlig';
$string['statuswarning'] = 'Advarsel';
$string['timewarning'] = 'Databehandlingen kan ta lang tid, vennligst vær tålmodig...';
$string['check_courserole_legacy'] = 'Ikke støttet vanlig rolletype funnet i denne <a href=\"$a\">rollen</a>.'; // ORPHANED

?>
