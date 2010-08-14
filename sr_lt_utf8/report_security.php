<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['check_configrw_details'] = '<p>Preporučuje se da se ovlašćenja za datoteku config.php promene posle instalacije tako da se ona ne može promeniti od strane Web servera.
Molimo zapazite da ova mera ne poboljšava značajno bezbednost servera, mada može usporiti ili ograničiti opšte propuste.</p>';
$string['check_configrw_name'] = 'Upisiva config.php datoteka';
$string['check_configrw_ok'] = 'PHP skriptovi ne mogu da izmene config.php datoteku.';
$string['check_configrw_warning'] = 'PHP skriptovi mogu da izmene config.php.';
$string['check_cookiesecure_details'] = '<p>Ukoliko je omogućena https komunikacija preporučuje se, takođe, da  omogućite sigurnosne kolačiće. Trebalo bi, takođe, da dodate permanentnu redirekciju sa http na https.</p>';
$string['check_cookiesecure_error'] = 'Molimo da omogućite bezbedne kolačiće';
$string['check_cookiesecure_name'] = 'Bezbedni kolačići';
$string['check_cookiesecure_ok'] = 'Bezbedni kolačići omogućeni';
$string['check_courserole_anything'] = 'Mogućnost \"uradibilošta\" ne sme biti dozvoljena u ovom <a href=\"$a\">kontekstu</a>.';
$string['check_courserole_details'] = '<p>Svaki kurs ima navedenu samo jednu podrazumevanu ulogu pri upisu. Molimo da proverite da za tu ulogu nisu dozvoljene rizične mogućnosti.</p>
<p>Jedini podržani tip nasleđivanja za podrazumevanu ulogu na kursu je <em>Student</em>.</p>';
$string['check_courserole_error'] = 'Otkrivene su pogrešno definisane podrazumevane uloge na kursu!';
$string['check_courserole_name'] = 'Podrazumevane uloge (kursevi)';
$string['check_courserole_notyet'] = 'Koriste se samo podrazumevane uloge na kursu.';
$string['check_courserole_ok'] = 'Definicije podrazumevanih uloga na kursu su OK';
$string['check_courserole_risky'] = 'Otkrivene su rizične mogućnosti u <a href=\"$a\">kontekstu</a>.';
$string['check_courserole_riskylegacy'] = 'Otkriven je rizičan tip nasleđivanja u <a href=\"$a->url\">$a->shortname</a>';
$string['check_defaultcourserole_anything'] = 'Mogućnost \"uradibilošta\" ne sme biti dozvoljena u ovom <a href=\"$a\">kontekstu</a>.';
$string['check_defaultcourserole_details'] = '<p>Podrazumevana uloga studenta za upis na kurs određuje podrazmevanu ulogu za kurseve. Molimo da proverite da za tu ulogu nisu dozvoljene rizične mogućnosti.</p>
<p>Jedini podržani tip nasleđivanja za podrazumevanu ulogu je <em>Student</em>.</p>';
$string['check_defaultcourserole_error'] = 'Otkrivene je pogrešno definisana podrazumevana uloga \"$a\" na kursu!';
$string['check_defaultcourserole_legacy'] = 'Otkriven je rizičan tip nasleđivanja';
$string['check_defaultcourserole_name'] = 'Podrazumevana uloga na kursu (globalno)';
$string['check_defaultcourserole_notset'] = 'Podrazumevana ulog nije podešena.';
$string['check_defaultcourserole_ok'] = 'Podrazumevana definicija uloge na nivou sajta je OK';
$string['check_defaultcourserole_risky'] = 'Otkrivene su rizične mogućnosti u <a href=\"$a\">kontekstu</a>.';
$string['check_defaultuserrole_details'] = '<p>Svim korisnicima koji su prijavljeni na sistem daju se mogućnosti koje ima podrazumevana korisnička uloga Molimo Vas, proverite da za tu ulogu nisu dozvoljene opasne mogućnosti.</p>
<p>Jedino podržani tip nasleđivanja za podrazumevanu korisničku ulogu  je<em>Provereni korisnik</em>. Mogućnost za pregled kursa ne sme biti omogućena.</p>';
$string['check_defaultuserrole_error'] = 'Podrazumevana uloga korsnika \"$a\" je pogrešno definisana!';
$string['check_defaultuserrole_name'] = 'Podrazumevana uloga za sve korisnike';
$string['check_defaultuserrole_notset'] = 'Podrazumevana uloga nije podešena';
$string['check_defaultuserrole_ok'] = 'Definicija podrazumevane ulog za sve korisnike je OK';
$string['check_displayerrors_details'] = '<p>Uključivanje PHP podešavanja <code>display_errors</code> se ne preporučuje na sajtovima sa aktivnim kursevima zato što poruke o greškama mogu otkriti osetljive informacije o Vašem serveru.</p>';
$string['check_displayerrors_error'] = 'PHP podešavanje za prikazivanje grešaka je uključeno. Preporučuje se da ga isključite.';
$string['check_displayerrors_name'] = 'Prikaz PHP grešaka';
$string['check_displayerrors_ok'] = 'Prikaz PHP grešaka je onemohućen';
$string['check_emailchangeconfirmation_details'] = '<p>Preporučuje se da potvrda e-adrese bude neophodna kada korsnici menjaju  elektronske adrese u svojim profilima. Ako je ova opcija isključena, spameri mogu pokušati da iskoiste server za slanje neželjene porruke.</p>
<p>Polje za elektronsku adresu, takođe, može biti zaključano od strane dodataka za proveru identiteta. Ova mogućnost se ovde ne razamtra.</p>';
$string['check_emailchangeconfirmation_error'] = 'Korisnici mogu da unesu bilo koju elektronsku adresu';
$string['check_emailchangeconfirmation_info'] = 'Korisnici mogu mogu da unesu samo  elektronske adrese dozvonjenih domena.';
$string['check_emailchangeconfirmation_name'] = 'Potvrda promene elektronske adrese';
$string['check_emailchangeconfirmation_ok'] = 'Potvrda promene eletronske adrese u korisničkom profilu';
$string['check_embed_details'] = 'Neograničeno umetanje objekata je veroma opasno - bilo koji registrovani korisnik može da pokrene XSS napad protiv drugih korisnika. Ovo podešavanje treba onemogućiti na serverima sa aktivnim kursevima.</p>';
$string['check_embed_error'] = 'Neograničeno umetanje objekata je omogućeno - to je veoma opasno za većinu servera.';
$string['check_embed_name'] = 'Dozvoli EMBED i OBJECT';
$string['check_embed_ok'] = 'Neograničeno umetanje objekata nije dozvoljeno';
$string['check_frontpagerole_details'] = '<p>Podrazumevana uloga naslovne stranice je data svim registrovanim korisnicima za aktivnosti na naslovnoj stranici. Molimo Vas da proverite da li su za ovu ulogu dozvoljene opasne mogućnosti.</p>
<p>Preporučljivo je da se za ovu namenu kreira posebna uloga, bez upotrebe tipa nasleđivanja uloge</p>';
$string['check_frontpagerole_error'] = 'Otkrivena je pogrešno definisana uloga naslovne stranice \"$a\"!';
$string['check_frontpagerole_name'] = 'Uloge početne stranice';
$string['check_frontpagerole_notset'] = 'Uloge početne stranice nisu postavljene';
$string['check_frontpagerole_ok'] = 'Deifinicija uloge naslovne stranice je OK.';
$string['check_globals_details'] = '<p>Register globals se smatra jako nesigurnim PHP podešavanjem.</p>
<p><code>register_globals=off</code> mora biti postavljeno u PHP konfiguracionoj datoteci. Ovo podešavanje možete kontrolisati tako što ćete urediti Vaš <code>php.ini</code>, Apache/IIS konfiguraciju ili <code>.htaccess</code> datoteku.</p>';
$string['check_globals_error'] = 'Register globals MORA biti isključen. Molimo da odmah izmenite PHP podešavanja!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals je isključen.';
$string['check_google_details'] = '<p>Podešavanje Otvoreno za Gugl pretraživač dopušta pretraživačkim mašinama da pristupe kursevima kao gosti. Ne postoji način da se ova podešavanje uključi ukoliko prijavljivanje u ulozi gosta nije dozvonjeno.</p>';
$string['check_google_error'] = 'Pristup pretraživačkim mašinama je dozvoljen ali je pristup gostima onemogućen.';
$string['check_google_info'] = 'Pretraživači mogu ući kao gosti';
$string['check_google_name'] = 'Otvoreno za Gugl pretraživač';
$string['check_google_ok'] = 'Pristup pretraživačima nije omogućen';
$string['check_guestrole_details'] = '<p>Uloga Gost se koristi za goste, korisnike koje nisu prijavljeni na sistem kao i za privremeni pristup kursu. Molimo da proverite da nisu dozvoljene rizične mogućnosti za ovu ulogu.</p>
<p>Jedini podrržani nasleđeni tip za ulogu gosta je <em>Gost</em>.</p>';
$string['check_guestrole_error'] = 'Uloga gosta \"$a\" je pogrešno definisana';
$string['check_guestrole_name'] = 'Uloga gosta';
$string['check_guestrole_notset'] = 'Uloga gosta nije postavljena';
$string['check_guestrole_ok'] = 'Definicija za ulogu gosta je OK';
$string['check_mediafilterswf_details'] = '<p>Automatsko umetanje swf datoteka je veoma opasno - bilo koji registrovani korisnik može da pokrene XSS napad protiv drugih korisnika. Molimo Vas da onemogućite ovu opciju na serverima sa aktivnim kursevima.</p>';
$string['check_mediafilterswf_error'] = 'Filter za Fleš je omogućen - ovo je vrlo opasno za većinu servera.';
$string['check_mediafilterswf_name'] = '.swf filter je omogućen';
$string['check_mediafilterswf_ok'] = 'Filter za Fleš nije omogućen';
$string['check_noauth_details'] = '<p>Dodatak <em>Bez provere identitea</em> nije namenjen sajtovima sa aktivnim kursevima. Molimo Vas da onemogućite ovaj dodatak osim ako ovo nije razvojni sajt koji služi za testiranje.</p>';
$string['check_noauth_error'] = 'Dodatak \'Bez provere identiteta\' ne može biti korišćen na na sajtovima sa aktivnim kursevima.';
$string['check_noauth_name'] = 'Bez provere identiteta';
$string['check_noauth_ok'] = 'Dodatak \'Bez provere identiteta\' je onemogućen';
$string['check_openprofiles_details'] = '<p>Otvorene korisničke profile mogu da zloupotrebe spameri. Preporučuje se da bude uključena opcija <code>Obavezno prijavljivanje korisnika za pristup stranici sa profilom</code> ili <code>Obavezno prijavljivanje korisnika na sistem</code>.</p>';
$string['check_openprofiles_error'] = 'Svako može da vidi korisničke profile bez prijavljivanja na sistem';
$string['check_openprofiles_name'] = 'Otvoreni korisnički profili';
$string['check_openprofiles_ok'] = 'Za gledanje korisničkih profila neophodna je prethodna prijava na sistem.';
$string['check_passwordpolicy_details'] = 'Preporučuje se postavljanje polise za lozinku, jer je pogađanje lozinke vrlo često najlakši način za sticanje neovlašćenog pristupa.
Ipak ne činite zahteve previše strogim, jer to može dovesti do nemogućnosti da korisnici zapamte svoje lozinke, ili ih zaboravljaju, ili zapisuju.</p>';
$string['check_passwordpolicy_error'] = 'Polisa za lozinke nije postavljena.';
$string['check_passwordpolicy_name'] = 'Polisa za lozinke';
$string['check_passwordpolicy_ok'] = 'Omogućena polisa za lozinke.';
$string['check_riskadmin_detailsok'] = '<p>Molimo Vas da potvrdite sledeći spisak administratorea sistema:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Molimo Vas da potvrdite sledeći spisak administratorea sistema:</p>a->admins
<p>Preporučuje da se da ulogu administraotra dodeljujete samo u kontekstu sistema. Sledeći korisnici imaju dodeljene administratorske uloge koje nisu podržane:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Administratori';
$string['check_riskadmin_ok'] = 'Pronađen/o je $a server administrator/a.';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) pregledaj dodeljene uloge</a>';
$string['check_riskadmin_warning'] = 'Pronađeno je $a->admincount administratora servera i $a->unsupcount dodeljenih administratorskih uloga koje nisu podržane.';
$string['check_riskxss_details'] = '<p>RISK_XSS označava sve opasne mogućnosti (capability) koje mogu koristiti samo korisnici od poverenja.</p>
<p>Molimo da proverite sledeći spisak korisnika i uverite se da im možete potpuno verovati na ovom serveru:</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS korisnici od poverenja';
$string['check_riskxss_warning'] = 'RISK_XSS - pronađeno korisnika kojima se mora verovati: $a';
$string['check_unsecuredataroot_details'] = '<p>Koreni direktorijum za podatke ne sme biti dostupan sa Weba. Najbolji način da se osigura da direktorijum nije dostupan sa Weba je koristiti direktorijum izvan javnog Web direktorijuma.</p>
<p>Ako pomerite direktorijum, potrebno je da shodno tome ažurirate podešavanje <code>\$CFG->dataroot</code> u <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Baš direktorijum podataka <code>$a</code> je na pogrešnoj lokaciji i dostupan je preko Weba!';
$string['check_unsecuredataroot_name'] = 'Nebezbedni direktorijum podataka';
$string['check_unsecuredataroot_ok'] = 'Direktorijum podataka ne sme biti dostupan preko Weba';
$string['check_unsecuredataroot_warning'] = 'Vaš koreni direktorijum za podatke <code>$a</code> je na pogrešnoj lokaciji i može biti izložen pristupu sa Weba';
$string['configuration'] = 'Konfiguracija';
$string['description'] = 'Opis';
$string['details'] = 'Detalji';
$string['issue'] = 'Pregled bezbednosti';
$string['reportsecurity'] = 'Pregled bezbednosti sistema';
$string['security:view'] = 'Pogledaj izveštaj o bezbednosti';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritično';
$string['statusinfo'] = 'Informacija';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Ozbiljno';
$string['statuswarning'] = 'Upozorenje';
$string['timewarning'] = 'Obrada podataka može potrajati, molim vas da budete strpljivi';

?>
