<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['check_configrw_details'] = '<p>Det anbefales at filrettighederne på config.php ændres efter installationen så filen ikke kan modificeres af webserveren. Bemærk at dette tiltag ikke forbedrer sikkerheden på serveren ret meget, selv om det besværliggør eller begrænser generelle angreb.</p>';
$string['check_configrw_name'] = 'Skrivbar config.php';
$string['check_configrw_ok'] = 'config.php kan ikke ændres af PHP-scripts.';
$string['check_configrw_warning'] = 'PHP-scripts kan ændre i config.php.';
$string['check_cookiesecure_details'] = '<p>Hvis du aktiverer https anbefales det at du også aktiverer sikre cookies. Du bør også tilføje en permanent viderestilling fra http til https.</p>';
$string['check_cookiesecure_error'] = 'Vær venlig at tillade sikre cookies';
$string['check_cookiesecure_name'] = 'Sikre cookies';
$string['check_cookiesecure_ok'] = 'Sikre cookies er aktiveret';
$string['check_courserole_anything'] = 'Kompetencen \"<acronym title =\"mǻ_alt\">doanything</acronym>\" må ikke sættes til \"tillad\" i denne <a href=\"$a\">kontekst</a>.';
$string['check_courserole_details'] = '<p>Hvert kursus har en standardrolle til nytilmeldte. Du må forsikre dig om at denne rolle ikke har nogen sikkerhedsmæssigt følsomme beføjelser tilladt.</p> <p>Den eneste supporterede \"legacy\" rolle for et standardkursus er <em>Studerende</em>.</p>';
$string['check_courserole_error'] = 'Der er fundet en ukorrekt defineret standard kursusrolle!';
$string['check_courserole_name'] = 'Standardroller (kurser)';
$string['check_courserole_ok'] = 'Definitioner af standard kursusroller er OK.';
$string['check_courserole_risky'] = 'Risikable beføjelser fundet i denne <a href=\"$a\">kontekst</a>.';
$string['check_courserole_riskylegacy'] = 'Risikabel \"legacy\" type fundet i <a href=\"$a->url\">$a->shortname</a>.';
$string['check_defaultcourserole_anything'] = 'Kompetencen \"<acronym title =\"mǻ_alt\">doanything</acronym>\" må ikke sættes til \"tillad\" i denne <a href=\"$a\">kontekst</a>.';
$string['check_defaultcourserole_details'] = '<p>Standardrolle til studerende ved kursustilmelding specificerer standardrollen på kurser. Vær venlig at forsikre dig om at der ikke er givet nogen risikable tilladelser til denne rolle.';
$string['check_defaultcourserole_error'] = 'Kursusrollen \"$a\" er fundet ukorrekt defineret!';
$string['check_defaultcourserole_legacy'] = 'Risikabel \"legacy\" type fundet.';
$string['check_defaultcourserole_name'] = 'Standard rolle i kursus (globalt)';
$string['check_defaultcourserole_notset'] = 'Standardrollen er ikke specificeret.';
$string['check_defaultcourserole_ok'] = 'Definitionen af standardrollen på sitet er OK.';
$string['check_defaultcourserole_risky'] = 'Risikable beføjelser fundet i <a href=\"$a\">denne kontekst</a>.';
$string['check_defaultuserrole_error'] = 'Standardrollen \"$a\" for brugere er ikke defineret korrekt!';
$string['check_defaultuserrole_name'] = 'Standardrolle til alle brugere';
$string['check_defaultuserrole_notset'] = 'Standardrollen er ikke specificeret.';
$string['check_defaultuserrole_ok'] = 'Definitionen af standardrollen for alle brugere er OK.';
$string['check_displayerrors_error'] = 'PHP-indstillingen til at vise fejl er aktiveret. Den anbefales deaktiveret.';
$string['check_displayerrors_name'] = 'Visning af PHP-fejl';
$string['check_displayerrors_ok'] = 'Visning af PHP-fejl er deaktiveret.';
$string['check_emailchangeconfirmation_name'] = 'Bekræftelse af ny e-mail-adresse';
$string['check_emailchangeconfirmation_ok'] = 'Bekræftelse af ændring af e-mail-adresse i brugerprofilen.';
$string['check_embed_name'] = 'Tillad EMBED og OBJECT';
$string['check_frontpagerole_name'] = 'Forsiderolle';
$string['check_frontpagerole_notset'] = 'Der er ikke valgt forsiderolle.';
$string['check_google_details'] = '<p>Indstillingen \"Åben for Google\" giver søgemaskiner adgang til kurser som gæster. Der er ingen grund til at aktivere denne indstilling hvis gæstelogin ikke er tilladt.</p>';
$string['check_google_error'] = 'Søgemaskineadgang er tilladt, men det er gæsteadgang ikke.';
$string['check_google_info'] = 'Søgemaskiner kan få adgang som gæster.';
$string['check_google_name'] = 'Åben for Google';
$string['check_google_ok'] = 'Søgemaskineadgang er ikke aktiveret.';
$string['check_guestrole_error'] = 'Gæsterollen \"$a\" er ikke defineret korrekt!';
$string['check_guestrole_name'] = 'Gæsterolle';
$string['check_guestrole_ok'] = 'Definitionen af gæsterollen er OK.';
$string['check_openprofiles_error'] = 'Alle kan se brugerprofiler uden at logge ind.';
$string['check_openprofiles_name'] = 'Åbne brugerprofiler';
$string['check_openprofiles_ok'] = 'Kun brugere, der er logget ind, kan se brugerprofiler.';
$string['check_passwordpolicy_error'] = 'Der er ikke defineret en adgangskodepolitik.';
$string['check_passwordpolicy_name'] = 'Adgangskodepolitik';
$string['check_passwordpolicy_ok'] = 'Adgangskodepolitik aktiveret';
$string['check_passwordsaltmain_name'] = 'Adgangskode-\"salt\"';
$string['check_passwordsaltmain_ok'] = 'Adgangskode-\"salt\" er OK';
$string['check_passwordsaltmain_weak'] = 'Adgangskode-\"salt\" er svagt';
$string['check_riskadmin_name'] = 'Administratorer';
$string['check_riskadmin_ok'] = '$a server administrator(er) fundet';
$string['check_riskbackup_details_systemroles'] = '<p>De følgende systemroller tillader pt brugere at inkludere brugerdata i backups.
Vær venlig at sikre at denne tilladelse er nødvendig.</p> $a';
$string['check_riskbackup_editoverride'] = '<a href=\"$a->url\">$a->name i $a->contextname</a>';
$string['check_riskbackup_editrole'] = '<a href=\"$a->url\">$a->name</a>';
$string['check_riskbackup_name'] = 'Backup af brugerdata';
$string['check_riskbackup_ok'] = 'Ingen roller har eksplicit tilladelse til at tage backup af brugerdata';
$string['check_riskbackup_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) i $a->contextname</a>';
$string['check_riskbackup_warning'] = 'Fandt $a->rolecount roller, $a->overridecount tilsidesættelser og $a->usercount brugere med tilladelse til at tage backup af brugerdata.';
$string['check_unsecuredataroot_details'] = '<p>Mappen med moodledata må ikke være tilgængelig fra Internettet. Den bedste måde at sikre det på, er at placere mappen udenfor den offentlige webmappe.</p>
<p>Hvis du flytter mappen skal du opdatere indstillingen for <code>\$CFG->dataroot</code> i <code>config.php</code> tilsvarende.</p>';
$string['check_unsecuredataroot_error'] = 'Din datamappe <code>$a</code> er placeret forkert og er synlig på Internettet!';
$string['check_unsecuredataroot_name'] = 'Usikker datamappe';
$string['check_unsecuredataroot_ok'] = 'Datamappen må ikke være tilgængelig fra Internettet.';
$string['check_unsecuredataroot_warning'] = 'Din datamappe <code>$a</code> er placeret forkert og kan være synlig på Internettet.';
$string['configuration'] = 'Konfiguration';
$string['description'] = 'Beskrivelse';
$string['details'] = 'Detaljer';
$string['reportsecurity'] = 'Sikkerhedsoversigt';
$string['security:view'] = 'Vis sikkerhedsrapport';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritisk';
$string['statusinfo'] = 'Information';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Alvorlig';
$string['statuswarning'] = 'Advarsel';
$string['timewarning'] = 'Det kan tage nogen tid at behandle dataene, vær tålmodig...';

?>
