<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.4+ (Build: 20090204) (2007101540)


$string['check_configrw_details'] = '<p>Priporočamo, da po namestitvi spremenite dovoljenja za dostop do datoteke config.php tako, da je spletni strežnik ne more spremeniti.
Opomba: to ne pripomore bistveno k varnosti strežnika, lahko pa omeji ali upočasni običajne napade na strežnik.</p>';
$string['check_configrw_name'] = 'Dostop za pisanje do config.php';
$string['check_configrw_ok'] = 'PHP skripte ne morejo spremeniti config.php';
$string['check_configrw_warning'] = 'PHP skripte lahko spreminjajo config.php';
$string['check_cookiesecure_details'] = '<p>Če omogočite komunikacijo prek https, priporočamo, da omogočite tudi varne piškotke in dodate stalno preusmeritev s http na https.</p>';
$string['check_cookiesecure_error'] = 'Prosimo, omogočite varne piškotke';
$string['check_cookiesecure_name'] = 'Varni piškotki';
$string['check_cookiesecure_ok'] = 'Varni piškotki omogočeni.';
$string['check_courserole_anything'] = 'Funkcija \"doanything\" ne sme biti dovoljena v tem <a href=\"$a\">kontekstu</a>.';
$string['check_courserole_details'] = '<p>Vsak predmet ima določeno eno privzeto vlogo za študente. Prosimo, da zagotovite, da ta vloga nima dostopa do tveganih funkcij.</p>
<p>Edini podprti podedovani tip za privzeto vlogo v predmetu je <em>Udeleženec</em>.</p>';
$string['check_courserole_error'] = 'Zaznane napačno definirane privzete vloge v predmetu!';
$string['check_courserole_legacy'] = 'Podedovani tip v <a href=\"$a\">vlogi</a> ni podprt.';
$string['check_courserole_name'] = 'Privzete vloge (predmeti)';
$string['check_courserole_notyet'] = 'Uporabljena samo privzeta vloga predmeta.';
$string['check_courserole_ok'] = 'Privzete vloge v predmetu so v redu.';
$string['check_courserole_risky'] = 'Tvegane funkcije zaznane v <a href=\"$a\">kontekstu</a>.';
$string['check_defaultcourserole_anything'] = 'Funkcija \"doanything\" ne sme biti dovoljena v tem <a href=\"$a\">kontekstu</a>.';
$string['check_defaultcourserole_details'] = '<p>Vsak predmet ima določeno eno privzeto vlogo za študente. Prosimo, da zagotovite, da ta vloga nima dostopa do tveganih funkcij.</p>
<p>Edini podprti podedovani tip za privzeto vlogo v predmetu je <em>Udeleženec</em>.</p>';
$string['check_defaultcourserole_error'] = 'Zaznana napačno definirana vloga \"$a\"!';
$string['check_defaultcourserole_legacy'] = 'Zaznan nepodprt podedovani tip.';
$string['check_defaultcourserole_name'] = 'Privzeta vloga v predmetu (splošna)';
$string['check_defaultcourserole_notset'] = 'Privzeta vloga ni nastavljena.';
$string['check_defaultcourserole_ok'] = 'Definicija privzete vloge za strežnik je v redu.';
$string['check_defaultcourserole_risky'] = 'Tvegane funkcije zaznane v <a href=\"$a\">kontekstu</a>.';
$string['check_defaultuserrole_details'] = '<p>Vsi prijavljeni uporabniki pridobijo pravice privzete vloge. Prosimo, da zagotovite, da ta vloga nima dostopa do tveganih funkcij.</p>
<p>Edini podprti podedovani tip za privzeto vlogo je <em>Avtenticirani uporabnik</em>.</p>';
$string['check_defaultuserrole_error'] = 'Privzeta vloga \"$a\" ni pravilno nastavljena!';
$string['check_defaultuserrole_name'] = 'Vloga prijavljenih uporabnikov';
$string['check_defaultuserrole_notset'] = 'Privzeta vloga ni nastavljena';
$string['check_defaultuserrole_ok'] = 'Vloga za prijavljene uporabnike je pravilno nastavljena.';
$string['check_displayerrors_details'] = '<p>Priporočamo, da na produkcijskih strežnikih ne omogočite PHP nastavitve <code>display_errors</code>, ker lahko napake odkrijejo občutljive informacije o vašem strežniku.</p>';
$string['check_displayerrors_error'] = 'Nastavitev PHP za prikaz napak je omogočena. Priporočamo, da jo onemogočite.';
$string['check_displayerrors_name'] = 'Prikaz PHP napak';
$string['check_displayerrors_ok'] = 'Prikaz PHP napak onemogočen.';
$string['check_emailchangeconfirmation_details'] = '<p>Priporočamo, da od uporabnikov, ki spremenijo e-poštni naslov v profilu, zahtevate potrditev novega naslova. Če tega ne zahtevate, lahko zlonamerni uporabniki vaš strežnik uporabijo za pošiljanje neželene pošte.</p>';
$string['check_emailchangeconfirmation_error'] = 'Uporabnik lahko vnese poljubni e-poštni naslov.';
$string['check_emailchangeconfirmation_name'] = 'Potrditev spremembe e-poštnega naslova';
$string['check_emailchangeconfirmation_ok'] = 'Potrditev spremembe e-poštnega naslova v profilu uporabnika.';
$string['check_embed_details'] = '<p>Podpora neomejenemu vključevanju objektov je zelo nevarna, saj lahko vsi prijavljeni uporabniki izvajajo XSS napade na druge uporabnike strežnika. Na produkcijskih strežnikih bi morala biti ta možnost onemogočena.</p>';
$string['check_embed_error'] = 'Omogočeno neomejeno vključevanje objektov. To je zelo nevarno za produkcijske strežnike.';
$string['check_embed_name'] = 'Dovoli EMBED in OBJECT';
$string['check_embed_ok'] = 'Neomejeno vključevanje objektov ni dovoljeno.';
$string['check_frontpagerole_details'] = '<p>Privzeta vloga naslovne strani je dodeljena vsem prijavljenim uporabnikom za dejavnosti na naslovni strani. Prosimo, preverite, da vloga ne dovoljuje tveganih zmožnosti.</p>
<p>Priporočamo, da v ta namen ne uporabite podedovane vloge, ampak ustvarite posebno vlogo.</p>';
$string['check_frontpagerole_error'] = 'Zaznana nepravilna definicija vloge naslovne strani \"$a\".';
$string['check_frontpagerole_name'] = 'Vloga naslovne strani';
$string['check_frontpagerole_notset'] = 'Vloga naslovne strani ni določena.';
$string['check_frontpagerole_ok'] = 'Vloga naslovne strani je OK.';
$string['check_globals_details'] = '<p>Nastavitev \"Register globals\" velja za izjemno nevarno PHP nastavitev.</p>
<p>V vaši nastavitvi PHP morate imeti <code>register_globals=off</code>. To lahko nastavite z urejanjem datoteke <code>php.ini</code>, nastavitvami Apache ali IIS ali datoteko <code>.htaccess</code>.</p>';
$string['check_globals_error'] = 'Nastavitev \"Register globals\" MORA biti onemogočena. Prosimo, da takoj popravite vašo PHP namestitev!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Nastavitev \"Register globals\" je onemogočena.';
$string['check_google_details'] = '<p>Nastavitev Odpri za Google omogoči iskalnikom dostop do predmetov z vlogo Gost. Če vaš strežnik ne podpira te vloge, vklop te funkcije ni smiseln.';
$string['check_google_error'] = 'Omogočen dostop iskalnikom, vendar brez dostopa za goste.';
$string['check_google_info'] = 'Iskalniki se lahko prijavijo kot gosti.';
$string['check_google_name'] = 'Odpri za Google';
$string['check_google_ok'] = 'Dostop za iskalnike ni omogočen.';
$string['check_guestrole_details'] = '<p>Vloga Gost je namenjena gostom, ne prijavljenim uporabnikom. Prosimo, da zagotovite, da ta vloga nima dostopa do tveganih funkcij.</p>
<p>Edini podprti podedovani tip za gostujočo vlogo v predmetu je <em>Gost</em>.</p>';
$string['check_guestrole_error'] = 'Vloga za gosta \"$a\" ni pravilno nastavljena!';
$string['check_guestrole_name'] = 'Vloga za goste';
$string['check_guestrole_notset'] = 'Vloga za goste ni nastavljena.';
$string['check_guestrole_ok'] = 'Vloga za goste je pravilno nastavljena.';
$string['check_mediafilterswf_details'] = '<p>Samodejno vključevanje vsebin Flash (swf) je zelo nevarno, saj lahko vsi prijavljeni uporabniki izvajajo XSS napade na druge uporabnike strežnika. Na produkcijskih strežnikih bi morala biti ta možnost onemogočena.</p>';
$string['check_mediafilterswf_error'] = 'Filter vsebin Flash (swf) je omogočen - za večino produkcijskih strežnikov je to zelo nevarno.';
$string['check_mediafilterswf_name'] = 'Filter vsebin Flash (.swf) omogočen.';
$string['check_mediafilterswf_ok'] = 'Filter vsebin Flash (.swf) ni omogočen.';
$string['check_noauth_details'] = '<p>Vtičnik <em>Brez avtentikacije</em> ni namenjen produkcijskim strežnikom. Prosimo, da ga izklopite, razen če je vaš strežnik v testnem okolju.</p>';
$string['check_noauth_error'] = 'Vtičnika Brez avtentikacije ni moč uporabljati na produkcijskih strežnikih.';
$string['check_noauth_name'] = 'Brez avtentikacije';
$string['check_noauth_ok'] = 'Vtičnik Brez avtentikacije ni omogočen';
$string['check_openprofiles_details'] = '<p>Odprte profile uporabnikov lahko zlorabijo nadlegovalci. Priporočamo, da je omogočena ena od funkcij <code>Prisili uporabnike k prijavi za profile</code> ali <code>Prisili uporabnike k prijavi</code>.</p>';
$string['check_openprofiles_error'] = 'Vsi neprijavljeni uporabniki imajo dostop do uporabniških profilov.';
$string['check_openprofiles_name'] = 'Odprti uporabniški profili';
$string['check_openprofiles_ok'] = 'Pregledovanje uporabniških profilov je omogočeno samo prijavljenim uporabnikom.';
$string['check_passwordpolicy_details'] = '<p>Priporočamo, da nastavite varnostno politiko gesel. Ugibanje gesel je pogosto najbolj preprost način za pridobivanje nepooblaščenega dostopa do sistema. Vendar pri politiki ne bodite preveč strogi, saj to lahko povzroči, da si uporabniki ne bodo zapomnili gesel ali pa si jih bodo zapisali.</p>';
$string['check_passwordpolicy_error'] = 'Varnostna politika gesel ni nastavljena.';
$string['check_passwordpolicy_name'] = 'Varnostna politika gesel';
$string['check_passwordpolicy_ok'] = 'Varnostna politika gesel je nastavljena.';
$string['check_riskadmin_detailsok'] = '<p>Prosimo, da preverite, če je sledeči spisek skrbnikov pravilen:</p><p>$a</p>';
$string['check_riskadmin_detailswarning'] = '<p>Prosimo, da preverite, če je sledeči spisek skrbnikov pravilen: </p><p>$a->admins</p> <p>Priporočamo, da skrbniške vloge nastavite samo v sistemskem kontekstu. Sledeči uporabniki imajo določene nepodprte skrbniške vloge:</p><p>$a->unsupported</p>';
$string['check_riskadmin_name'] = 'Skrbniki';
$string['check_riskadmin_ok'] = 'Našel $a skrbnikov sistema.';
$string['check_riskadmin_warning'] = 'Našel $a->admincount skrbnikov sistema in $a->unsupcount uporabnikov z nepodprtimi skrbniškimi vlogami.';
$string['check_riskxss_details'] = '<p>RISK_XSS označuje vse nevarne zmožnosti, ki jih lahko uporabljajo samo zaupanja vredni uporabniki.</p>
<p>Prosimo, da preverite, če popolnoma zaupate vsem uporabnikom s spodnjega spiska:
</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS zaupanja vredni uporabniki';
$string['check_riskxss_warning'] = 'RISK_XSS - našel $a zaupanja vrednih uporabnikov';
$string['check_unsecuredataroot_details'] = '<p>Korenski imenik (dataroot) ne sme biti viden s spleta. To najboljše dosežete tako, da uporabite imenik, ki je zunaj javnega spletnega imenika.</p> <p>Če premaknete imenik, morate popraviti tudi nastavitev <code>\$CFG->dataroot</code> v <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Vaš korenski imenik (dataroot) <code>$a</code> je na napačni lokaciji in je viden s spleta!';
$string['check_unsecuredataroot_name'] = 'Nezavarovan korenski imenik';
$string['check_unsecuredataroot_ok'] = 'Korenski imenik (dataroot) ne sme biti viden s spleta.';
$string['check_unsecuredataroot_warning'] = 'Vaš korenski imenik <code>$a</code> je na napačni lokaciji in je lahko viden s spleta.';
$string['configuration'] = 'Nastavitev';
$string['description'] = 'Opis';
$string['details'] = 'Podrobnosti';
$string['issue'] = 'Težava';
$string['reportsecurity'] = 'Pregled varnosti';
$string['security:view'] = 'Prikaz varnostnega poročila';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritično';
$string['statusinfo'] = 'Informativno';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Resno';
$string['statuswarning'] = 'Opozorilo';
$string['timewarning'] = 'Obdelovanje podatkov lahko traja dalj časa - prosim, bodite potrpežljivi.';

?>
