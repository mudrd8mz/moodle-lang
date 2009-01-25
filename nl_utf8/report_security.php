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
$string['check_defaultuserrole_details'] = '<p>Alle aangemelde gebruikers krijgen de mogelijkheden van de standaard rol. Zorg er voor dat er geen gevaarlijke mogelijkheden toegelaten zijn in deze rol.</p>
<p>De enige ondersteunde rol voor de standaard gebruiker is de rol: <em>geauthenticeerde gebruiker</em>. De bekijk cursusmogelijkheid kan beter niet ingeschakeld zijn.</p>';
$string['check_defaultuserrole_error'] = 'Fout gedefinieerde standaard rol \"$a\" gedetecteerd!';
$string['check_defaultuserrole_name'] = 'Geregistreerde gebruiker rol';
$string['check_defaultuserrole_notset'] = 'Standaardrol niet ingeschakeld';
$string['check_defaultuserrole_ok'] = 'Geregistreerde gebruiker rol definitie OK';
$string['check_displayerrors_details'] = '<p>Het inschakelen van de PHP-instelling <code>display_errors</code> wordt afgeraken op productiesites omdat een foutmelding gevoelige informatie over je server kan vrijgeven.';
$string['check_displayerrors_error'] = 'De PHP-instelling voor het tonen van fouten is ingeschakeld. Je kunt dit beter uitschakelen.';
$string['check_displayerrors_name'] = 'Tonen van PHP-fouten';
$string['check_displayerrors_ok'] = 'Tonen van PHP-fouten uitgeschakeld';
$string['check_emailchangeconfirmation_details'] = '<p>Er wordt aangeraden gebruikers hun e-mailadres te laten bevestigen wanneer ze dat wijzigen in hun profiel. Indien uitgeschakeld kunnen spammers proberen de server te misbruiken om spam te versturen.</p>';
$string['check_emailchangeconfirmation_error'] = 'Gebruikers kunnen gelijk welk e-mailadres ingeven';
$string['check_emailchangeconfirmation_name'] = 'Wijzig e-mailadres bevestiging';
$string['check_emailchangeconfirmation_ok'] = 'Bevestiging van de wijziging van het e-mailadres in het gebruikersprofiel.';
$string['check_embed_details'] = '<p>Het onbeperkt embedden van objecten is erg gevaarlijk - elke geregistreerde gebruiker kan een XSS-aanval starten tegen andere servergebruikers. Deze instelling moet uitgeschakeld worden op productieservers.</p>';
$string['check_embed_error'] = 'Onbeperkt embedden van objecten ingeschakeld - dit is erg gevaarlijk voor de meeste servers.';
$string['check_embed_name'] = 'EMBED en OBJECT toelaten';
$string['check_embed_ok'] = 'Onbeperkt embedden van objecten is niet toegelaten';
$string['check_frontpagerole_details'] = '<p>Alle geregistreerde gebruikers krijgen de standaardrol voor de startpagina voor activiteiten op die pagina.</p>
<p>Er wordt aangeraden een speciale rol hiervoor te maken en de standaard meegeleverde rollen niet te gebruiken.</p>';
$string['check_frontpagerole_error'] = 'Fout gedefinieerde starpaginarol \"$a\" gedetecteerd!';
$string['check_frontpagerole_name'] = 'Startpaginarol';
$string['check_frontpagerole_notset'] = 'Startpaginarol niet ingeschakeld';
$string['check_frontpagerole_ok'] = 'Startpaginarol definitie OK';
$string['check_globals_details'] = '<p>Register globals wordt beschouwd als een heel gevaarlijke PHP-instelling.</p>
<p><code>register_globals=off</code> moet ingesteld worden in de PHP-configuratie. Deze instelling kan aangepast worden in <code>php.ini</code>, Apache/IIS-configuratie of een <code>.htaccess</code>-bestand.</p>';
$string['check_globals_error'] = 'Register globals MOETEN uitgeschakeld zijn. Herstel de PHP-instellingen van je server onmiddellijk!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals zijn uitgeschakeld.';
$string['check_google_details'] = '<p>De instelling Open voor Google maakt het voor zoekrobots mogelijk cursussen te doorzoeken met de gastrol. Het is nutteloos deze instelling in te schakelen als aanmelden als gast niet toegelaten is.</p>';
$string['check_google_error'] = 'Gast-toegang voor zoekrobots toegelaten terwijl gast-toegang is uitgeschakeld.';
$string['check_google_info'] = 'Zoekrobots mogen binnen als gasten';
$string['check_google_name'] = 'Open voor Google';
$string['check_google_ok'] = 'Gast-toegang voor zoekrobots uitgeschakeld';
$string['check_guestrole_error'] = 'Fout geconfigureerde gastrol \"$a\" gedetecteerd!';
$string['check_guestrole_name'] = 'Gast rol';
$string['check_guestrole_notset'] = 'Gast rol niet ingeschakeld';
$string['check_guestrole_ok'] = 'Gastrol definitie OK';
$string['check_mediafilterswf_error'] = 'Flash mediafilter is ingeschakeld - dit is erg gevaarlijk voor de meeste servers';
$string['check_mediafilterswf_name'] = '.swf media filter ingeschakeld';
$string['check_mediafilterswf_ok'] = 'Flash mediafilter is niet ingeschakeld';
$string['check_noauth_error'] = 'De Geen authenticatie-plugin mag niet gebruikt worden op productie-sites.';
$string['check_noauth_name'] = 'Geen authenticatie';
$string['check_noauth_ok'] = 'Geen authenticatie-plugin is uitgeschakeld';
$string['check_openprofiles_error'] = 'Iedereen kan gebruikersprofielen zien zonder aan te melden';
$string['check_openprofiles_name'] = 'Open gebruikersprofielen';
$string['check_openprofiles_ok'] = 'Aanmelden is vereist om gebruikersprofielen te kunnen zien';
$string['check_passwordpolicy_error'] = 'Wachtwoordbeleid niet ingesteld';
$string['check_passwordpolicy_name'] = 'Wachtwoordbeleid';
$string['check_passwordpolicy_ok'] = 'Wachtwoordbeleid ingeschakeld';
$string['check_riskadmin_detailsok'] = '<p>Controleer aub volgende lijst beheerders:<br />$a</p>';
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
