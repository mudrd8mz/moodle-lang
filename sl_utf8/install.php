<?PHP // $Id$ 
      // install.php - created with Moodle 1.9.3+ (Build: 20081112) (2007101531)


$string['admindirerror'] = 'Izbrana skrbniška mapa ni pravilna';
$string['admindirname'] = 'Skrbniška mapa';
$string['admindirsetting'] = 'Le redka spletna mesta uporabljajo /admin kot poseben URL za dostop
    do nadzorne plošče ali česa drugega.  Žal je to v sporu s
    standardno lokacijo Moodle skrbniških stran.  To lahko popravite s
    preimenovanjem skrbniške mape v vaši namestitvi in vstavljanjem tega
    novega imena tu.  Na primer: <br /> <br /><b>moodleadmin</b><br /> <br />
    To bo popravilo skrbniške povezave za Moodle.';
$string['admindirsettinghead'] = 'Nastavitev skrbniške mape ...';
$string['admindirsettingsub'] = 'Le redka spletna mesta uporabljajo /admin kot poseben URL za dostop
    do nadzorne plošče ali česa drugega.  Žal je to v sporu s
    standardno lokacijo Moodle skrbniških strani.  To lahko popravite s
    preimenovanjem skrbniške mape v vaši namestitvi in vstavljanjem tega
    novega imena tu.  Na primer: <br /> <br /><b>moodleadmin</b><br /> <br />
    To bo popravilo skrbniške povezave za Moodle.';
$string['caution'] = 'Pozor';
$string['chooselanguage'] = 'Izberite jezik';
$string['chooselanguagehead'] = 'Izberite jezik';
$string['chooselanguagesub'] = 'Izberite jezik za SAMO namestitev. Pozneje boste lahko izbrali tudi jezike učnega okolja in uporabnikov.';
$string['compatibilitysettings'] = 'Preverjanje vaših PHP nastavitev ...';
$string['compatibilitysettingshead'] = 'Preverjanje vaših PHP nastavitev ...';
$string['compatibilitysettingssub'] = 'Da bi Moodle pravilno deloval, mora vaš strežnik opraviti vse naslednje preizkuse.';
$string['configfilenotwritten'] = 'Skripta nameščanja ni mogla samodejno ustvariti datoteke config.php, ki bi vsebovala vaše izbrane nastavitve. Verjetno v Moodle mapo ni možno zapisovati. Ročno lahko prekopirate sledečo kodo v datoteko z imenom config.php v korensko mapo Moodle.';
$string['configfilewritten'] = 'Datoteka config.php je bila uspešno ustvarjena';
$string['configurationcomplete'] = 'Konfiguracija je dokončana';
$string['configurationcompletehead'] = 'Konfiguracija je dokončana';
$string['configurationcompletesub'] = 'Moodle je poskušal shraniti vašo konfiguracijo v datoteko v korenu vaše namestitve Moodle.';
$string['database'] = 'Podatkovna zbirka';
$string['databasecreationsettings'] = 'Zdaj morate konfigurirati nastavitve podatkovne zbirke, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovno zbirko bo samodejno ustvaril namestitveni program
    s spodaj določenimi nastavitvami.<br />
    <br /> <br />
       <b>Vrsta:</b> določeno \"mysql\" s strani namestitvenega programa<br />
       <b>Gostitelj:</b> določeno \"localhost\" s strani namestitvenega programa<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> določeno \"root\" s strani namestitvenega programa<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasecreationsettingshead'] = 'Zdaj morate konfigurirati nastavitve podatkovne zbirke, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovno zbirko bo samodejno ustvaril namestitveni program
    s spodaj določenimi nastavitvami.';
$string['databasecreationsettingssub'] = '<b>Vrsta:</b> določeno \"mysql\" s strani namestitvenega programa<br />
       <b>Gostitelj:</b> določeno \"localhost\" s strani namestitvenega programa<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> določeno \"root\" s strani namestitvenega programa<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasesettings'] = 'Zdaj morate konfigurirati podatkovno zbirko, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovna zbirka mora biti že ustvarjena
    in tudi uporabniško ime in geslo za dostop do nje.<br />
    <br /> <br />
       <b>Vrsta:</b> mysql ali postgres7<br />
       <b>Gostitelj:</b> npr. localhost ali db.isp.com<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> vaše uporabniško ime podatkovne zbirke<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasesettingshead'] = 'Zdaj morate konfigurirati podatkovno zbirko, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovna zbirka mora biti že ustvarjena
    in tudi uporabniško ime in geslo za dostop do nje.';
$string['databasesettingssub'] = '<b>Vrsta:</b> mysql ali postgres7<br />
       <b>Gostitelj:</b> npr. localhost ali db.isp.com<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> vaše uporabniško ime podatkovne zbirke<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasesettingssub_mssql'] = '<b>Tip:</b> SQL*Server (ne UTF-8) <b><font color=\"red\">Testno! (ni za uporabo na produkcijskem strežniku)</font></b><br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingssub_mssql_n'] = '<b>Tip:</b> SQL*Server (UTF-8)<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingssub_mysql'] = '<b>Tip:</b> MySQL<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (opcijsko)';
$string['databasesettingssub_mysqli'] = '<b>Tip:</b> Napreden MySQL<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (opcijsko)';
$string['databasesettingssub_oci8po'] = '<b>Tip:</b> Oracle<br />
<b>Strežnik:</b> ni v uporabi, mora biti prazno<br />
<b>Ime:</b> ime povezave tsanems.ora<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno, največ dva znaka)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tip:</b> SQL*Server (prek ODBC) <b><font color=\"red\">Testno! (ni za uporabo na produkcijskem strežniku)</font></b><br />
<b>Strežnik:</b> ime strežnika, nastavljeno v nadzorni plošči ODBC<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingssub_postgres7'] = '<b>Tip:</b> PostgreSQL<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingswillbecreated'] = '<b>Opomba:</b> Skripta namestitve bo poskušala avtomatsko ustvariti novo podatkovno zbirko, če le-ta še ne obstaja';
$string['dataroot'] = 'Mapa za podatke';
$string['datarooterror'] = '&#039;Mapo za podatke&#039;, ki ste jo navedli ni možno najti ali ustvariti.  Bodisi popravite pot ali ustvarite mapo ročno.';
$string['datarootpublicerror'] = '\'Mapo za podatke\', ki ste jo navedli, je direktno dostopen prek interneta, zato izberite drugo mapo.';
$string['dbconnectionerror'] = 'Povezave ni mogoče vzpostaviti s podatkovno zbirko, ki ste jo navedli. Prosimo, preverite vaše nastavitve podatkovne zbirke.';
$string['dbcreationerror'] = 'Napaka ustvarjanja podatkovne zbirke. S podanimi nastavitvami ni možno ustvariti podatkovne zbirke z navedenim imenom';
$string['dbhost'] = 'Strežnik podatkovne zbirke';
$string['dbpass'] = 'Geslo';
$string['dbprefix'] = 'Predpona tabel';
$string['dbtype'] = 'Tip';
$string['dbwrongencoding'] = 'Izbrana podatkovna zbirka uporablja kodno tabelo, ki ni priporočena ($a). Bolje bi bilo namesto nje uporabiti podatkovno zbirko, ki bi uporabljala Unicode (UTF-8). Kljub temu lahko preskočite ta preizkus z izborom \"Preskoči preizkus kodne tabele podatkovne zbirke\" spodaj, vendar lahko naletite na težave v prihodnje.';
$string['dbwronghostserver'] = 'Slediti morate pravilom nastavitve strežnika, kot so razložena zgoraj.';
$string['dbwrongnlslang'] = 'Okoljska spremenljivka NLS_LANG na vašem spletnem strežniku mora uporabljati kodni nabor AL32UTF8. Za navodila za pravilno nastavitev OCI8 si poglejte dokumentacijo PHP.';
$string['dbwrongprefix'] = 'Slediti morate pravilom za nastavitev predpone tabel, kot so razložena zgoraj.';
$string['directorysettings'] = '<p>Prosimo, potrdite lokacije te namestitve Moodle.</p>

<p><b>Spletni naslov:</b>
Navedite polni spletni naslov za dostop do Moodle.  
Če je vaše spletno mesto dostopno prek več URL naslovov izberite
najbolj pogostega, ki ga bodo uporabljali udeleženci.  Ne vključite 
zaključne poševnice.</p>

<p><b>Mapa Moodle:</b>
Navedite polno pot do mape te namestitve. Pazite, da bodo pravilne velike in male črke.</p>

<p><b>Mapa za podatke:</b>
Potrebujete prostor kamor lahko Moodle shranjuje naložene datoteke.  Ta
mapa mora omogočati branje IN PISANJE za uporabniško ime spletnega strežnika
(običajno &#039;nobody&#039; ali &#039;www-data&#039;), a ne sme biti neposredno dostopna
 prek spleta.</p>';
$string['directorysettingshead'] = 'Potrdite lokacije te namestitve Moodle';
$string['directorysettingssub'] = '<b>Spletni naslov:</b>
Navedite polni spletni naslov za dostop do Moodle.  
Če je vaše spletno mesto dostopno prek več URL naslovov izberite
najbolj pogostega, ki ga bodo uporabljali udeleženci.  Ne vključite 
zaključne poševnice.
<br />
<br />
<b>Mapa Moodle:</b>
Navedite polno pot do mape te namestitve. Pazite, da bodo pravilne velike in male črke.
<br />
<br />
<b>Podatkovna mapa:</b>
Potrebujete prostor kamor lahko Moodle shranjuje naložene datoteke.  Ta
mapa mora omogočati branje IN PISANJE za uporabniško ime spletnega strežnika
(običajno &#039;nobody&#039; ali &#039;www-data&#039;), a ne sme biti neposredno dostopna
 prek spleta.';
$string['dirroot'] = 'Mapa Moodle';
$string['dirrooterror'] = 'Nastavitev &#039;Mape Moodle&#039; je kot kaže napačna - tam ni najti namestitve Moodle. Spodnja vrednost je bila ponovno nastavljena.';
$string['download'] = 'Prenos';
$string['downloadlanguagebutton'] = 'Prenesite jezikovni paket &quot;$a&quot;';
$string['downloadlanguagehead'] = 'Prenos jezikovnega paketa';
$string['downloadlanguagenotneeded'] = 'Nadaljujete lahko postopek namestitve z uporabo privzetega jezikovnega paketa, \"$a\".';
$string['downloadlanguagesub'] = 'Zdaj imate možnost prenosa jezikovnega paketa in nadaljevanja s postopkom namestitve v tem jeziku.<br /><br />Če ne morete prenesti jezikovnega paketa, se bo namestitveni postopek nadaljeval v angleščini. (Ko bo namestitveni postopek zaključen, boste imeli možnost prenosa in namestitve dodatnih jezikovnih paketov.)';
$string['environmenthead'] = 'Preverjanje vašega okolja ...';
$string['environmentsub'] = 'Preverjamo, če razne komponente vašega sistema ustrezajo sistemskim zahtevam';
$string['fail'] = 'Neuspeh';
$string['fileuploads'] = 'Nalaganje datotek';
$string['fileuploadserror'] = 'To bi moralo biti vključeno';
$string['fileuploadshelp'] = '<p>Nalaganje datotek je kot kaže onemogočeno na vašem strežniku.</p>

<p>Moodle je še vedno možno namestiti, vendar brez te možnosti, ne boste mogli 
   nalagati datotek predmetov ali novih slik uporabniških profilov.</p>

<š>Za omogočanje nalaganja datotek boste (ali vaš skrbnik sistema) morali 
   urediti glavno datoteko php.ini na vašem sistemu in spremeniti nastavitev za 
   <b>file_uploads</b> na &#039;1&#039;.</p>';
$string['gdversion'] = 'Različica GD';
$string['gdversionerror'] = 'Knjižnica GD mora biti prisotno za obdelavo in ustvarjanje slik';
$string['gdversionhelp'] = '<p>Na vašem strežniku kot kaže ni nameščen GD.</p>

<p>GD je knjižnica, ki jo potrebuje PHP, da lahko Moodle obdeluje slike 
   (kot so ikone uporabniškega profila) in ustvarja nove slike (kot so 
   grafi dnevnikov).  Moodle bo deloval tudi brez GD - te možnosti 
   vam preprosto ne bodo na voljo.</p>

<p>Za dodajanje GD v PHP v sistemu Unix, prevedite PHP s parametrom --with-gd.</p>

<p>V okolju Windows lahko običajno uredite php.ini in odkomentirate vrstico, ki se sklicuje na php_gd2.dll.</p>';
$string['globalsquotes'] = 'Nevarna obravnava globalnih spremenljivk';
$string['globalsquoteserror'] = 'Popravite vaše PHP nastavitve: onemogočite register_globals in / ali omogočite magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Kombinacija hkrati onemogočenega Magic Quotes GPC in omogočenega Register Globals ni priporočena.</p>

<p>Priporočena nastavitev je <b>magic_quotes_gpc = On</b> in <b>register_globals = Off</b> v vaši datoteki php.ini</p>

<p>Če nimate dostopa do datoteke php.ini, boste morda lahko vstavili sledečo vrstico v datoteko 
   imenovano .htaccess v vaši mapi Moodle:
   <blockquote>php_value magic_quotes_gpc On</blockquote>
   <blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Namestitev';
$string['langdownloaderror'] = 'Žal jezik \"$a\" ni bil nameščen. Postopek namestitve se bo nadaljeval v angleščini.';
$string['langdownloadok'] = 'Jezik \"$a\" je bil uspešno nameščen. Postopek namestitve se bo nadaljeval v tem jeziku.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'To bi moralo biti izključeno';
$string['magicquotesruntimehelp'] = '<p>Možnost Magic quotes runtime bi morala biti izključena za pravilno delovanje Moodle.</p>

<p>Po navadi je privzeta vrednost izključena ... poglejte nastavitev <b>magic_quotes_runtime</b> v vaši datoteki php.ini.</p>

<p>Če nimate dostopa do datoteke php.ini, boste morda lahko vstavili sledečo vrstico v datoteko 
   imenovano .htaccess v vaši mapi Moodle:
   <blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Omejitev pomnilnika';
$string['memorylimiterror'] = 'Omejitev pomnilnika PHP je nastavljena precej nizko ... pozneje lahko pride do težav.';
$string['memorylimithelp'] = '<p>Omejitev pomnilnika PHP je trenutno na vašem strežniku nastavljena na $a.</p>

<p>To lahko povzroči, da bo imel Moodle pozneje težave s pomnilnikom. Še posebej,
   če imate vključenih veliko modulov oziroma veliko uporabnikov.</p>

<p>Priporočamo, da konfigurirate PHP z višjo omejitvijo, če je možno npr. 40M.  
   To lahko poskusite storiti na več načinov:</p>
<ol>
<li>Če lahko, ponovno prevedite PHP z <i>--enable-memory-limit</i>.  
    To bo omogočilo, da bo Moodle sam nastavil omejitev pomnilnik zase.</li>
<li>Če imate dostop do vaše datoteke php.ini, lahko spremenite vrednost <b>memory_limit</b> 
    v tej datoteki na, recimo, 40M.  Če nimate dostopa, boste morda 
    lahko prosili vašega skrbnika, da to naredi za vas.</li>
<li>Na nekaterih strežnikih PHP lahko ustvarite datoteko .htaccess v mapi Moodle, 
    ki naj vsebuje to vrstico:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Vendar lahko to prepreči delovanje <b>vseh</b> PHP strani 
    (ob prikazu strani boste videli napake) in boste morali odstraniti datoteko .htaccess.</p></li>
</ol>';
$string['mssql'] = 'MS SQL (mssql)';
$string['mssql_n'] = 'Strežnik SQL s podporo UTF-8 (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'Nastavitev MSSQL v PHP je napačna, zato ne more komunicirati z MSSQL strežnikom. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP ni bil pravilno konfiguriran z razširitvijo MySQL in zato ne more komunicirati z MySQL.  Prosimo, preverite vašo datoteko php.ini ali ponovno prevedite PHP.';
$string['mysqli'] = 'Napreden MySQl (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP ni bil pravilno konfiguriran z dodatkom MySQLi, ki omogoča komunikacijo z MySQL. Prosim preverite datoteko php.ini ali ponovno namestite PHP. Dodatka MySQLi ni mogoče uporabiti skupaj s PHP 4.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'Nastavitev OCI8 v PHP je napačna, zato ne more komunicirati s strežnikom Oracle. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['odbc_mssql'] = 'MS SQL prek ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'Nastavitev ODBC v PHP je napačna, zato ne more komunicirati z MS SQL strežnikom prek ODBC. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['pass'] = 'Uspešno';
$string['pgsqlextensionisnotpresentinphp'] = 'Nastavitev PGSQL v PHP je napačna, zato ne more komunicirati s strežnikom PostgreSQL. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['phpversion'] = 'Različica PHP';
$string['phpversionerror'] = 'Različica PHP mora biti vsaj 4.3.0 ali 5.1.0 (5.0.x ima vrsto znanih težav).';
$string['phpversionhelp'] = '<p>Moodle zahteva različico PHP vsaj 4.3.0 ali 5.1.0 (5.0.x ima vrsto znanih težav).</p>
<p>Vaša trenutna različica je $a</p>
<p>Posodobiti in nadgraditi morate PHP ali premakniti program na strežnik s novejšo različico PHP!<br />
(V primeru različice 5.0.x lahko namestite tudi različico 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['postgresqlwarning'] = '<strong>Opomba:</strong> če imate težave pri povezavi, lahko poskusite nastaviti gostujoči strežnik kot
host=\'postgresql_host\' port=\'5432\' dbname=\'postgresql_database_name\' user=\'postgresql_user\' password=\'postgresql_user_password\'
ter pustite polja Database, User and Password prazna. Več informacij je na voljo na <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">Moodle Docs</a>';
$string['safemode'] = 'Varni način';
$string['safemodeerror'] = 'Moodle lahko ima težave z vključenim varnim načinom';
$string['safemodehelp'] = '<p>Moodle ima lahko razne težave z vključenim varnim načinom. Ne samo, da
   verjetno ne bo smel ustvarjati novih datotek.</p>
   
<p>Varni način je običajno vključen pri paranoidnih javnih spletnih gostiteljih in boste morda morali
   poiskati novo podjetje za gostovanje vašega Moodle spletnega mesta.</p>
   
<p>Če želite lahko poskusite nadaljevati z namestitvijo, a pričakujte nekaj težav pozneje.</p>';
$string['sessionautostart'] = 'Samodejni začetek seje';
$string['sessionautostarterror'] = 'To bi moralo biti izključeno';
$string['sessionautostarthelp'] = '<p>Moodle zahteva podporo za seje in ne bo deloval brez tega.</p>

<p>Seje lahko omogočite v datoteki php.ini ... poiščite parameter session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Preskoči preizkus kodne tabele podatkovne zbirke';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'To stran vidite, ker ste uspešno namestili in 
    zagnali paket <strong>$a->packname $a->packversion</strong> na vašem računalniku. Čestitamo!';
$string['welcomep30'] = 'Ta različica <strong>$a->installername</strong> vključuje aplikacije 
    za ustvarjanje okolja v katerem bo deloval <strong>Moodle</strong> in sicer:';
$string['welcomep40'] = 'Ta paket vključuje tudi <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Uporabo vseh aplikacij v tem paketu določajo njihove ustrezne 
    licence. Celoten paket <strong>$a->installername</strong> je 
    <a href=\"http://www.opensource.org/docs/definition_plain.html\">odprta koda</a> in se razširja 
    pod licenco <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Naslednje strani vas bodo popeljale skozi nekaj enostavno sledljivih korakov za 
    konfiguracijo in nastavitev <strong>Moodle</strong>  na vašem računalniku. Sprejmete lahko privzete 
    nastavitve ali jih, če tako želite, spremenite, da bodo ustrezale vašim potrebam.';
$string['welcomep70'] = 'Kliknite spodnji gumb \"Naprej\" za nadaljevanje nastavitve <strong>Moodle</strong>.';
$string['wwwroot'] = 'Spletni naslov';
$string['wwwrooterror'] = 'Spletni naslov kot kaže ni veljaven - te namestitve Moodle, kot kaže, ni tam. Spodnja vrednost je bila ponovno nastavljena.';

?>
