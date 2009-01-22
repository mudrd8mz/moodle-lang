<?PHP // $Id$ 
      // report_security.php - created with Moodle 2.0 dev (Build: 20090122) (2009011900)


$string['check_configrw_details'] = '<p>We raden aan om de rechten op het bestand config.php te wijzigen na installatie, zodat het bestand niet door de webserver gewijzigd kan worden.
Merk op dat dit de veiligheid van de server niet enorm gaat verhogen, maar het kan inbraken vertragen of beperken.</p>';
$string['check_configrw_name'] = 'config.php beschrijfbaar';
$string['check_configrw_ok'] = 'config.php kan niet gewijzigd worden door PHP-scripts';
$string['check_configrw_warning'] = 'PHP-scripts kunnen config.php wijzigen';
$string['check_cookiesecure_details'] = '<p>Als je https inschakeld, dan kun je ook best secure cookies inschakelen. Je zou ook een permanente omleiding van http naar https moeten maken.</p>';
$string['check_cookiesecure_error'] = 'Schakel secure cookies in';
$string['check_cookiesecure_name'] = 'Secure cookies';
$string['check_cookiesecure_ok'] = 'Secure cookies ingeschakeld.';
$string['check_courserole_anything'] = 'De doe alles-mogelijkheid mag in deze <a href=\"$a\">context</a> niet toegelaten worden.';
$string['check_courserole_details'] = '<a>Voor elke cursus wordt er één standaard rol gespecifiëerd. Zorg er voor dat er geen riskante mogelijkheden voor deze rol ingeschakeld zijn.</p>
<p>De enige standaardrol die ondersteund wordt als standaard cursus rol is <em>Leerling</em>.</p>';
$string['check_courserole_error'] = 'Fout gedefinieerde standaard cursus rollen gedetecteerd!';
$string['check_courserole_legacy'] = 'Niet-ondersteund standaard type gedetecteerd in de  <a href=\"$a\">rol</a>.';
$string['check_courserole_name'] = 'Standaard cursusrollen';
$string['check_courserole_notyet'] = 'Gebruikt enkel standaard cursusrol.';
$string['check_courserole_ok'] = 'Standaard cursusroldefinities OK.';
$string['check_courserole_risky'] = 'Risicomogelijkheden gedetecteerd in <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_anything'] = 'De doe alles mogelijkheid mag niet toegelaten worden in deze <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_details'] = '<p>De standaard rol voor aanmeldingen specifieerd de standaardrol voor leerlingen in cursussen. Zorg ervoor dat er geen risicomogelijkheden toegelaten zijn in deze rol.</p>
<p>De enige standaardrol die ondersteund wordt als standaard cursus rol is <em>Leerling</em>.</p>';
$string['check_defaultcourserole_error'] = 'Fout gedefinieerde standaard rol \"$a\" gedetecteerd!';
$string['check_defaultcourserole_legacy'] = 'Niet ondersteund standaard type gedetecteerd';
$string['check_defaultcourserole_name'] = 'Site standaard cursus rol';
$string['check_defaultcourserole_notset'] = 'Standaardrol niet ingeschakeld';
$string['check_defaultcourserole_ok'] = 'Site standaard rol definitie OK';
$string['check_defaultcourserole_risky'] = 'Risico mogelijkheden gedetecteerd in <a href=\"$a\">context</a>';
$string['check_defaultuserrole_name'] = 'Geregistreerde gebruiker rol';
$string['check_defaultuserrole_notset'] = 'Standaardrol niet ingeschakeld';
$string['check_defaultuserrole_ok'] = 'Geregistreerde gebruiker rol definitie OK';
$string['check_displayerrors_error'] = 'De PHP-instelling voor het tonen van fouten is ingeschakeld. Je kunt dit beter uitschakelen.';
$string['check_displayerrors_name'] = 'Tonen van PHP-fouten';
$string['check_displayerrors_ok'] = 'Tonen van PHP-fouten uitgeschakeld';
$string['check_emailchangeconfirmation_error'] = 'Gebruikers kunnen gelijk welk e-mailadres ingeven';
$string['check_emailchangeconfirmation_name'] = 'Wijzig e-mailadres bevestiging';
$string['check_embed_name'] = 'EMBED en OBJECT toelaten';
$string['check_embed_ok'] = 'Onbeperkt embedden van objecten is niet toegelaten';
$string['check_frontpagerole_name'] = 'Startpaginarol';
$string['check_frontpagerole_notset'] = 'Startpaginarol niet ingeschakeld';
$string['check_frontpagerole_ok'] = 'Startpaginarol definitie OK';
$string['check_globals_error'] = 'Register globals MOETEN uitgeschakeld zijn. Herstel de PHP-instellingen van je server onmiddellijk!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals zijn uitgeschakeld.';
$string['check_google_info'] = 'Zoekrobots mogen binnen als gasten';
$string['check_google_name'] = 'Open voor Google';
$string['check_guestrole_name'] = 'Gast rol';
$string['check_guestrole_notset'] = 'Gast rol niet ingeschakeld';
$string['check_guestrole_ok'] = 'Gastrol definitie OK';
$string['check_mediafilterswf_name'] = '.swf media filter ingeschakeld';
$string['check_mediafilterswf_ok'] = 'Flash mediafilter is niet ingeschakeld';
$string['check_noauth_name'] = 'Geen authenticatie';
$string['check_noauth_ok'] = 'Geen authenticatie-plugin is uitgeschakeld';
$string['check_openprofiles_name'] = 'Open gebruikersprofielen';
$string['check_passwordpolicy_error'] = 'Wachtwoordbeleid niet ingesteld';
$string['check_passwordpolicy_name'] = 'Wachtwoordbeleid';
$string['check_passwordpolicy_ok'] = 'Wachtwoordbeleid ingeschakeld';
$string['check_riskadmin_name'] = 'Beheerders';
$string['check_riskadmin_ok'] = '$a serverbeheerders gevonden';
$string['check_riskxss_name'] = 'XSS vertrouwde gebruikers';
$string['check_unsecuredataroot_name'] = 'Onveilige dataroot';
$string['configuration'] = 'Configuratie';
$string['description'] = 'Beschrijving';
$string['details'] = 'Details';
$string['reportsecurity'] = 'Veiligheidsoverzicht';
$string['security:view'] = 'Bekijk veiligheidsrapport';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritiek';
$string['statusinfo'] = 'Informatie';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Ernstig';
$string['statuswarning'] = 'Waarschuwing';

?>
