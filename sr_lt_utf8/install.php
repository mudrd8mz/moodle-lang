<?PHP // $Id$ 
      // install.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['admindirerror'] = 'Specificirani administratorski direktorijum je netačan';
$string['admindirname'] = 'Administratorski direktorijum';
$string['admindirsetting'] = 'Poneki Web serveri koriste /admin kao specijalni URL za pristup raznim podešavanjima ili nečem drugom. Nažalost to je u konfliktu sa standardnom Moodle lokacijom za administratorske stranice. Možete rešiti problem preimenovanjem administratorskog direktorijuma u Vašoj instalaciji, i navođenjem tog novog naziva ovde. Na primer: <br /> <br /><b>moodleadmin</b><br /> <br />
Ovo podešavanje će prepraviti administratorske linkove u Moodle sistemu.';
$string['admindirsettinghead'] = 'Podešavanje administratorskog direktorijuma';
$string['admindirsettingsub'] = 'Poneki Web serveri koriste /admin kao specijalni URL za pristup raznim podešavanjima ili nečem drugom. Nažalost to je u konfliktu sa standardnom Moodle lokacijom za administratorske stranice. Možete rešiti problem preimenovanjem administratorskog direktorijuma u Vašoj instalaciji, i navođenjem tog novog naziva ovde. Na primer: <br /> <br /><b>moodleadmin</b><br /> <br />
Ovo podešavanje će prepraviti administratorske linkove u Moodle sistemu.';
$string['caution'] = 'Oprez';
$string['chooselanguage'] = 'Izaberi jezik';
$string['chooselanguagehead'] = 'Izaberite jezik';
$string['chooselanguagesub'] = 'Molimo izaberite jezik koji će se koristiti samo tokom instalacije. Kasnije ćete moći da izaberete jezička podešavanja na nivou sajta i korisnika.';
$string['compatibilitysettings'] = 'Provera Vaših PHP podešavanja...';
$string['compatibilitysettingshead'] = 'Provera Vaših PHP podešavanja...';
$string['compatibilitysettingssub'] = 'Vaš server bi trebao proći sve ove testove da bi Moodle na njemu uspešno funkcionisao';
$string['configfilenotwritten'] = 'Instalacioni skript nije bio u mogućnosti da automatski kreira datoteku config.php koja bi sadržavala Vaša odabrana podešavanja, verojatno zbog toga što nema prava na pisanje (menjanje sadržaja) u Vašem Moodle direktorijumu. Ako to želite, možete ručno kopirati kod u datoteku config.php u osnovnom direktorijumu Vaše Moodle instalacije.';
$string['configfilewritten'] = 'config.php je uspešno kreiran';
$string['configurationcomplete'] = 'Konfiguracija je završena';
$string['configurationcompletehead'] = 'Konfiguracija je završena';
$string['configurationcompletesub'] = 'Moodle je pokušao da sačuva Vašu konfiguraciju u datoteci smeštenoj u korenskom direktorijumu Moodle instalacije.';
$string['database'] = 'Baza podataka';
$string['databasecreationsettings'] = 'Sada je potrebno konfigurisati podešavanja baze podataka u kojoj će se čuvati najveći deo Moodle podataka. Ta baza podataka će biti kreirana automatski prilikom instalacije, sa podešavanjima specificiranim ispod. <br />
<br /> <br />
<b>Tip:</b> postavljeno na \"mysql\" prilikom instalacije<br />
<b>Server:</b> postavljeno na \"localhost\" prilikom instalacije<br />
<b>Naziv:</b> naziv baze podataka, npr. moodle<br />
<b>Korisnik:</b> postavljeno na \"root\" prilikom instalacije<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiks tabela:</b> opcioni prefiks koji će se koristiti u nazivima svih tabela';
$string['databasecreationsettingshead'] = 'Sada je potrebno konfigurisati podešavanja baze podataka u kojoj će se čuvati najveći deo Moodle podataka. Ta baza podataka će biti kreirana automatski prilikom instalacije, sa podešavanjima specificiranim ispod.';
$string['databasecreationsettingssub'] = '<b>Tip:</b> postavljeno na \"mysql\" prilikom instalacije<br />
<b>Server:</b> postavljeno na \"localhost\" prilikom instalacije<br />
<b>Naziv:</b> naziv baze podataka, npr. moodle<br />
<b>Korisnik:</b> postavljeno na \"root\" prilikom instalacije<br />
<b>Lozinka:</b> Vaša lozinka za bazu podataka<br />
<b>Prefiks tabela:</b> opcioni prefiks koji će se koristiti u nazivima svih tabela';
$string['databasesettings'] = 'Sada je potrebno konfigurisati bazu podataka u kojoj će se čuvati veći deo Moodle podataka. Ta baza podataka mora već biti kreirana, kao i korisničko ime i lozinka za pristup istoj.<br/>
<br /> <br />
<b>Tip:</b> mysql ili postgres7<br />
<b>Server:</b> npr. localhost ili ime.servera.yu<br />
<b>Naziv:</b> naziv baze podataka, npr. moodle<br />
<b>Korisnik:</b> korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> lozinka za pristup bazi podataka<br />
<b>Prefiks tabela:</b>opcioni prefiks koji će se koristiti u nazivima svih tabela';
$string['databasesettingshead'] = 'Sada je potrebno konfigurisati bazu podataka u kojoj će se čuvati veći deo Moodle podataka. Ta baza podataka mora već biti kreirana, kao i korisničko ime i lozinka za pristup istoj.';
$string['databasesettingssub'] = '<b>Tip:</b> mysql ili postgres7<br />
<b>Server:</b> npr. localhost ili db.isp.com<br />
<b>Naziv:</b> naziv baze podataka, npr. moodle<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiks tabela:</b> opcioni prefiks koji će se koristiti u nazivima svih tabela';
$string['databasesettingssub_mssql'] = '<b>Tip:</b> SQL* Server (koji nije UTF-8) <b><font color=\"red\">Eksperimentalan! (nije za javni pristup)</font></b><br />
<b>Server:</b> npr localhost ili db.isp.com<br />
<b>Naziv:</b> naziv baze podataka, npr moodle<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiks tabela:</b> prefiks koji će se koristiti u nazivima svih tabela (obavezno)';
$string['databasesettingssub_mssql_n'] = '<b>Tip:</b> SQL* Server (UTF-8 omogućen)<br />
<b>Server:</b> npr localhost ili db.isp.com<br />
<b>Naziv:</b> naziv baze podataka, npr moodle<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi odataka<br />
<b>Prefiks tabela:</b> prefiks koji će se koristiti u nazivima svih tabela (obavezno)';
$string['databasesettingssub_mysql'] = '<b>Tip:</b> MySQL<br />
<b>Server:</b> npr localhost ili db.isp.com<br />
<b>Naziv:</b> naziv baze podataka, npr moodle<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiksi tabela:</b> prefiks koji će se  koristiti u nazivima svih tabela (opciono)';
$string['databasesettingssub_mysqli'] = '<b>Tip:</b> Unapređeni MySQL<br />
<b>Host:</b> npr. localhost ili db.isp.com<br />
<b>Ime:</b> ime baze podataka, npr. moodle<br />
<b>Korisnik:</b> Korisničko ime za Vašu bazu podataka<br />
<b>Password:</b> Lozinka korisnika Vaše  baze podataka<br />
<b>Prefiks za tabele:</b> prefiks koji se dodaje ispred imena svih tabela (nije obavezno)';
$string['databasesettingssub_oci8po'] = '<b>Tip:</b> Oracle<br />
<b>Server:</b> ne koristi se, mora se ostaviti prazno<br />
<b>Naziv:</b> ime koje ste dali tnsnames.ora konekciji<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiksi tabela:</b> prefiks koji će se koristiti u nazivima svih tabela (obavezno, maksimalno 2 vidljive kopije)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tip:</b> SQL* Server (preko ODBC) <b><font color=\"red\">Eksperimentalno! (nije za javni pristup)</font></b><br />
<b>Server:</b> ime koje ste dali DSN-u u ODBC kontrolnom panelu<br />
<b>Naziv:</b> naziv baze podataka, npr moodle<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Password:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiksi tabela:</b> prefiks koji će se koristiti u nazivima svih tabela (obavezno)';
$string['databasesettingssub_postgres7'] = '<b>Tip:</b> PostgreSQL<br />
<b>Server:</b> npr localhost ili db.isp.com<br />
<b>Naziv:</b> naziv baze podataka, npr moodle<br />
<b>Korisnik:</b> Vaše korisničko ime za pristup bazi podataka<br />
<b>Lozinka:</b> Vaša lozinka za pristup bazi podataka<br />
<b>Prefiksi tabela:</b> prefiks koji će se koristiti u nazivima svih tabela (obavezno)';
$string['databasesettingswillbecreated'] = '<b>Napomena:</b> Program ѕa instalaciju će automatski pokušati da kreira bazu podataka ukoliko ona ne postoji.';
$string['dataroot'] = 'Direktorijum podataka';
$string['datarooterror'] = '\'Direktorijum podataka\' koji ste naveli ne može biti pronađen ili kreiran. Unesite tačnu putanju ili napravite taj direktorijum ručno.';
$string['datarootpublicerror'] = '\'Direktorijum za podatke\' koji ste podesili je direktno dostupan sa Weba, morate koristiti drugi direktorijum.';
$string['dbconnectionerror'] = 'Nemoguće je uspostaviti vezu sa bazom podataka koju ste naveli. Molimo proverite podešavanja baze podataka.';
$string['dbcreationerror'] = 'Greška pri kreiranju baze podataka. Nije bilo moguće kreirati bazu navedenog imena uz zadata podešavanja';
$string['dbhost'] = 'Server';
$string['dbpass'] = 'Lozinka';
$string['dbprefix'] = 'Prefiks tabele';
$string['dbtype'] = 'Tip';
$string['dbwrongencoding'] = 'Izabrana baza podataka radi pod nepreporučljivim kodnim rasporedom ($a). Bilo bi bolje da umesto nje koristite Unicode (UTF-8) kodiranu bazu. U svakom slučaju, možete izbeći ovaj test biranjem opcije \"Preskočiti test kodnog rasporeda baze podataka\" ispod, ali se u budućnosti možete suočiti sa problemima pri korišćenju izabrane baze.';
$string['dbwronghostserver'] = 'Morate pratiti pravila \"Servera\" kao što je objašnjeno iznad.';
$string['dbwrongnlslang'] = 'NLS_LANG promenljiva okruženja Vašeg web servera mora da koristi AL32UTF8 skup karaktera. Pogledajte PHP dokumentaciju o tome kako da pravilno podesite OCI8.';
$string['dbwrongprefix'] = 'Morate pratiti pravila \"Prefiksi tabela\" kao što je gore objašnjeno.';
$string['directorysettings'] = '<p>Molimo potvrdite lokacije ove Moodle instalacije</p>

<p><b>Web adresa:</b>
Specificirajte potpunu web adresu na kojoj će se pristupati Moodle sistemu.
Ako je Vašem web sajtu moguće pristupiti preko više URL-ova, izaberite onaj koji će najverovatnije koristiti Vaši studenti. Nemojte navoditi krajnju kosu crtu.</p>

<p><b>Moodle direktorijum:</b>
Specificirajte potpunu putanju do ove instalacije
Vodite računa o velikim i malim slovima.</p>

<p><b>Direktorijum podataka:</b>
Morate odrediti mesto na kom će Moodle čuvati postavljene datoteke. Korisnik web servera (obično \'niko\' ili \'apache\') bi morao imati mogućnost da čita podatke iz tog direktorijuma, ali i da ih u njega upisuje, ali oni ne bi trebali biti dostupni direktno preko web-a.</p>';
$string['directorysettingshead'] = 'Molimo potvrdite lokacije ove Moodle instalacije';
$string['directorysettingssub'] = '<b>Web adresa:</b>
Specificirajte potpunu web adresu na kojoj će se pristupati Moodle sistemu.
Ako je Vašem web sajtu moguće pristupiti preko više URL-ova, izaberite onaj koji će najverovatnije koristiti Vaši studenti. Nemojte navoditi krajnju kosu crtu.
<br />
<br />
<b>Moodle direktorijum:</b>
Specificirajte potpunu putanju do ove instalacije
Vodite računa o velikim i malim slovima.
<br />
<br />
<b>Direktorijum podataka:</b>
Morate odrediti mesto na kom će Moodle čuvati postavljene datoteke. Korisnik web servera (obično \'niko\' ili \'apache\') bi morao imati mogućnost da čita podatke iz tog direktorijuma, ali i da ih u njega upisuje, ali oni ne bi trebali biti dostupni direktno preko web-a.';
$string['dirroot'] = 'Moodle direktorijum';
$string['dirrooterror'] = 'Podešavanje \'Moodle direktorijuma\' je čini se netačno - ne može se tamo naći Moodle instalacija. Niža vrednost će biti ponovo dovedena na početni položaj.';
$string['download'] = 'Preuzeti';
$string['downloadlanguagebutton'] = 'Preuzmi \"$a\" jezički paket';
$string['downloadlanguagehead'] = 'Preuzmi jezički paket';
$string['downloadlanguagenotneeded'] = 'Možete nastaviti proces instalacije korišćenjem podrazumevanog jezičkog paketa, \"$a\".';
$string['downloadlanguagesub'] = 'Sada imate mogućnost preuzimanja željenog jezičkog paketa i nastavka instalacionog procesa na tom jeziku.<br /><br />Ako niste u mogućnosti da preuzmete jezički paket, instalacioni proces će se nastaviti na engleskom jeziku. (Kada se instalacija završi, imaćete mogućnost da preuzmete i instalirate dodatne jezičke pakete.)';
$string['environmenthead'] = 'Proveravanje Vašeg okruženja...';
$string['environmentsub'] = 'Proverava se da li razne komponente Vašeg sistema zadovoljavaju sistemske zahteve';
$string['fail'] = 'Nije prošlo';
$string['fileuploads'] = 'Postavljanje datoteka';
$string['fileuploadserror'] = 'Ova opcija bi trebala biti uključena';
$string['fileuploadshelp'] = '<p>Postavljanje datoteka je izgleda nedostupno na Vašem serveru.</p>

<p>Moodle još uvek može biti instaliran, ali bez ove mogućnosti, nećete biti u mogućnosti da učitavate datoteke kursa ili nove slike za korisničke profile.</p>

<p>Da učitavanje datoteke bude dostupno Vi (ili Vaš sistem administrator) treba da promenite php.ini datoteku na Vašem sistemu i postavite podešavanje za <b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'GD verzija';
$string['gdversionerror'] = 'GD datoteka sa izvornim kodom trebala bi prezentirati proces i kreirati slike';
$string['gdversionhelp'] = '<p>Na Vašem serveru izgleda nije instaliran GD.</p>

<p>GD je biblioteka koju traži PHP da bi dozvolio Moodle sistemu da procesira slike (kao što su ikonice korisničkih profila) i da kreira nove slike (kao što je grafikon prijava na sistem).  Moodle će još raditi i bez GD biblioteke - ove opcije Vam jednostavno neće biti dostupne.</p>

<p>Da biste dodali GD u PHP pod Unix-om, kompajlirajte PHP koristeći --with-gd parametar.</p>

<p>Pod Windows-om obično možete izmeniti php.ini i skinuti oznaku komentara u liniji koja se odnosi na php_gd2.dll.</p>';
$string['globalsquotes'] = 'Nesigurno rukovanje globalnim varijablama';
$string['globalsquoteserror'] = 'Popravite svoja PHP podešavanja: onemogućite register_globals i/ili omogućite magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Kombinacija istovremeno onemogućenog podešavanja Magic Quotes GPC i omogućenog Register Globals nije preporučljiva.</p>

<p>Preporučeno podešavanje je <b>magic_quotes_gpc = On</b> i <b>register_globals = Off</b> u Vašoj datoteci php.ini</p>

<p>Ako nemate pristup svojoj php.ini datoteci, možda možete da stavite sledeći red u datoteku pod nazivom .htaccess u Vašem Moodle direktorijumu:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Instalacija';
$string['langdownloaderror'] = 'Nažalost jezik \"$a\" nije instaliran. Proces instalacije biće nastavljen na engleskom jeziku.';
$string['langdownloadok'] = 'Jezik \"$a\" je uspešno instaliran. Instalacioni proces će biti nastavljen na ovom jeziku.';
$string['magicquotesruntime'] = 'Magic Quotes vreme izvršavanja';
$string['magicquotesruntimeerror'] = 'Ova opcija bi trebala biti isključena';
$string['magicquotesruntimehelp'] = '<p>Magic Quotes vreme izvršavanja bi trebalo isključiti da Moodle propisno funkcioniše.</p>

<p>Normalno ovo je isključeno po podrazumevanoj vrednosti... pogledajte podešavanje <b>magic_quotes_runtime</b> u svojoj php.ini datoteci.</p>

<p>Ako nemate pristup php.ini datoteci, možda možete da stavite sledeći red u datoteku pod nazivom .htaccess koja se nalazi u Vašem Moodle direktorijumu: <blocquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Ograničenje memorije';
$string['memorylimiterror'] = 'PHP ograničenje memorije je podešeno na prilično nizak nivo... kasnije može doći do problema.';
$string['memorylimithelp'] = '<p>PHP ograničenje memorije za Vaš server je trenutno podešeno na $a.</p>

<p>Ovo može da prouzrokuje kasnije memorijske probleme Vašeg Moodle sistema, posebno ako imate mnogo dozvoljenih modula i/ili mnogo korisnika.</p>

<p>Preporučujemo da konfigurišete PHP sa višim ograničenjem ako je moguće, recimo 16M. Postoji nekoliko načina da se to uradi. Pokušajte:</p><ol>
<li>Ako možete, rekompajlirajte PHP sa <i>--enable-memory-limit</i>. Ovo će dozvoliti Moodle sistemu da postavi memorijsko ograničenje sam za sebe.</li>
<li>Ako imate pristup Vašoj php.ini datoteci, možete promeniti <b>memory_limit</b> podešavanje u recimo 16M. Ako nemate pristup toj datoteci možete pitati svog administratora da to uradi za Vas.</li>
<li>Na nekim PHP serverima možete kreirati .htaccess datoteku u Moodle direktorijumu koja sadrži red:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Kakogod, na nekim serverima će to sprečiti prikazivanje <b>svih</b> PHP stranica (biće Vam prikazana poruka o grešci umesto svake stranice), pa ćete sa njih morati ukloniti .htaccess datoteku.</p></li>
</ol>';
$string['mssql'] = 'SQL* Server (mssql)';
$string['mssql_n'] = 'SQL* Server sa UTF-8 podrškom (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP nije bio propisno konfigurisan sa MSSQL ekstenzijom tako da može komunicirati sa SQL* Serverom. Molimo Vas da proverite svoju php.ini datoteku ili opet kompajlirate PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP neće biti propisno konfigurisan sa MySQL ekstenzijom tako da može komunicirati sa MySQL-om. Molimo Vas da proverite svoju php.ini datoteku ili opet kompajlirate PHP.';
$string['mysqli'] = 'Unapređeni MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP nije pravilno podešen za rad sa MySQLi ekstenzijom da bi mogao komunicirati sa MySQL. Molimo proverite Vašu php.ini datoteku ili ponovo kompajlirajte PHP. MySQLi ekstenzija nije na raspolaganju za PHP 4.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP nije bio propisno konfigurisan sa OCI8 ekstenzijom tako da može komunicirati sa Oracle-om. Molimo Vas da proverite svoju php.ini datoteku ili opet kompajlirate PHP.';
$string['odbc_mssql'] = 'SQL* Server preko ODBCa (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP nije bio propisno konfigurisan sa ODBC ekstenzijom tako da može komunicirati sa SQL* Serverom. Molimo Vas da proverite svoju php.ini datoteku ili opet kompajlirate PHP.';
$string['pass'] = 'Prošlo';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP nije bio propisno konfigurisan sa  PGSQL ekstenzijom tako da može komunicirati sa PostgreSQLom. Molimo Vas da proverite svoju php.ini datoteku ili opet kompajlirate PHP.';
$string['phpversion'] = 'PHP verzija';
$string['phpversionerror'] = 'PHP verzija mora biti bar 4.3.0 ili 5.1.0 (5.0.x funkcioniše uz brojne uočene probleme)';
$string['phpversionhelp'] = '<p>Moodle zahteva najmanje PHP verziju 4.3.0 ili 5.1.0 (5.0.x funkcioniše uz brojne uočene probleme).</p>
<p>Trenutno imate verziju $a</p>
<p>Morate nadograditi PHP ili premestiti Moodle instalaciju na web server sa novijom verzijom PHP-a!</br>
(U slučaju verzije 5.0.x bilo bi dobro da je snizite na 4.4.x verziju)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['postgresqlwarning'] = '<strong>Napomena:</strong>Ako naiđete na neke probleme sa konekcijom, možete pokušati da postavite polje Host Server kao host=\'postgresql_host\' port=\'5432\' dbname=\'postgresql_database_name\' user=\'postgresql_user\' password=\'postgresql_user_password\'
i da ostavite prazna polja Baza podataka, Korisnik i Lozinka. Više informacija na <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">Moodle Docs</a>';
$string['safemode'] = 'Bezbedan mod';
$string['safemodeerror'] = 'Moodle može imati problema sa uključenim bezbednim modom rada';
$string['safemodehelp'] = '<p>Moodle može imati različite probleme sa uključenim bezbednim modom rada, od kojih je jedan od bitnijih taj da najverovatnije neće imati dozvolu da kreira nove datoteke.</p>
   
<p>Bezbedni mod rada je obično jedino dozvoljen na paranoičnim javnim Web serverima, tako da možete prosto naći web server kod neke druge kuće za Vaš Moodle sajt.</p>
   
<p>Možete pokušati nastaviti sa instalacijom ako želite, ali očekujte nekoliko problema kasnije.</p>';
$string['sessionautostart'] = 'Automatski početak sesije';
$string['sessionautostarterror'] = 'Ova opcija bi trebala biti isključena';
$string['sessionautostarthelp'] = '<p>Moodle zahteva podršku za sesije i neće funcionisati bez nje.</p>

<p>Rad sa sesijama se može omogućiti u php.ini datoteci... potražite session.auto_start parametar.</p>';
$string['skipdbencodingtest'] = 'Preskočiti test kodnog rasporeda baze podataka';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Prikazana Vam je ova stranica jer ste uspešno instalirali i pokrenuli <strong>$a->packname $a->packversion</strong> paket na Vašem računaru. Čestitamo!';
$string['welcomep30'] = 'Ovo izdanje <strong>$a->installername</strong> uključuje aplikacije za kreiranje okruženja u kom će <strong>Moodle</strong> uspešno funkcionisati, konkretno:';
$string['welcomep40'] = 'Ovaj paket obuhvata i <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Korišćenje aplikacija iz ovog paketa je uslovljeno njhovim licencama. Kompletan <strong>$a->installername</strong> paket je <a href=\"http://www.opensource.org/docs/definition_plain.html\">otvorenog koda</a> i distribuira se pod <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> licencom.';
$string['welcomep60'] = 'Naredne stranice će Vas provesti kroz nekoliko jednostavnih koraka tokom kojih ćete konfigurisati <strong>Moodle</strong> na Vašem računaru. Možete prihvatiti podrazumevana podešavanja ili ih, opciono, prilagoditi sopstvenim potrebama.';
$string['welcomep70'] = 'Kliknite na dugme za nastavak da biste dalje podešavali <strong>Moodle</strong>.';
$string['wwwroot'] = 'Web adresa';
$string['wwwrooterror'] = 'Navedena \'Web adresa\' se čini nevalidnom - ova Moodle instalacija izgleda nije na njoj. Vrednost navedena ispod je resetovana.';
$string['availablelangs'] = 'Spisak dostupnih jezika'; // ORPHANED
$string['cliadminpassword'] = 'Nova lozinka za administratora'; // ORPHANED
$string['clialreadyinstalled'] = 'Datoteka config.php već postoji. Upotrebite komandu admin/cli/upgrade.php ako želite da ažurirate svoj sajt.'; // ORPHANED
$string['cliinstallfinished'] = 'Instalacija je uspešno završena'; // ORPHANED
$string['cliinstallheader'] = 'Moodle $a program za instalaciju iz komandne linije'; // ORPHANED
$string['climustagreelicense'] = 'U neinteraktivnom modu morate prihvatiti licencu navodeći opciju --agree-license'; // ORPHANED
$string['clitablesexist'] = 'Baza podtaka već postoji. Nije moguće nastaviti instalaciju iz komandne linije.'; // ORPHANED
$string['databasecreationsettingssub2'] = '<b>Tip:</b> fiksno \"mysqli\" <br />
<b>Host:</b> fiksno \"localhost\" <br />
<b>Ime:</b> ime baze podataka, npr. moodle<br />
<b>Korisnik:</b> fiksno \"root\" od strane instalacionog programa<br />
<b>Lozinka:</b> lozinka Vaše baze podataka<br />
<b>Prefiksi tabela:</b> opcioni prefiks za imena svih tabela'; // ORPHANED
$string['databasehead'] = 'Podešavanja baze podataka'; // ORPHANED
$string['databasehost'] = 'Server baze podataka :'; // ORPHANED
$string['databasename'] = 'Ima baze podataka :'; // ORPHANED
$string['databasepass'] = 'Lozinka za pristup bazi podataka :'; // ORPHANED
$string['databasesocket'] = 'Unix soket'; // ORPHANED
$string['databasetypehead'] = 'Izaberi drajver baze podataka'; // ORPHANED
$string['databasetypesub'] = 'Moodle podržava nekoliko tipova baza podataka. Ukoliko ne znate koji tip da koristite kontaktirajte administratora servera.'; // ORPHANED
$string['databaseuser'] = 'Korisničko ime za pristup bazi podataka :'; // ORPHANED
$string['doyouagree'] = 'Da li se slažete? (da/ne)'; // ORPHANED
$string['environmentsub2'] = 'Svaka verzija Moodlea ima minimum zahteva po pitanju odgovarajuće PHP verѕije i nekoliko obaveznih PHP ekstenzija.
Puna provera okruženja se vrši pre svake instalacije ili ažuriranja postojeće verzije. Ukoliko ne znate kako da instalirate novu verziju ili omogućite PHP ektenzije kontaktirajte Vašeg server administratora.'; // ORPHANED
$string['errorsinenvironment'] = 'Greške u okruženju'; // ORPHANED
$string['inputdatadirectory'] = 'Direktorijum podatka'; // ORPHANED
$string['inputwebadress'] = 'Web adresa :'; // ORPHANED
$string['inputwebdirectory'] = 'Direktorijum Moodlea'; // ORPHANED
$string['nativemysqli'] = 'Unapređen MySQL(native/mysqli)'; // ORPHANED
$string['nativemysqlihelp'] = 'Sada je nophodno da konfigurišete bazu podatka gde će najveći deo podataka iz Moodlea biti pohranjen. Baza podataka može biti kreirana ako korisnik ima potrebna ovlašćenja. Korisničko ime i lozinka moraju već da postoje. Prefiks tabela je opcioni.'; // ORPHANED
$string['nativeoci'] = 'Oracle (native/oci)'; // ORPHANED
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)'; // ORPHANED
$string['nativepgsqlhelp'] = 'Sada je nophodno da konfigurišete bazu podatka gde će najveći deo podataka iz Moodlea biti pohranjen. Ova baza podataka prethodno već mora biti kreirana, kao i korisničko ime i lozinka potrebni za pristup bazi. Prefiks tabele je obavezan.'; // ORPHANED
$string['paths'] = 'Putanje'; // ORPHANED
$string['pathserrcreatedataroot'] = 'Instalciona procedura ne može da kreira direktorijum baze podataka ($a->dataroot)'; // ORPHANED
$string['pathshead'] = 'Potvrdi putanje'; // ORPHANED
$string['pathsrodataroot'] = 'U direktorijum za podatke nije moguć upis'; // ORPHANED
$string['pathsroparentdataroot'] = 'U nadređeni direktorijum ($a->parent) nije moguć upis. Direktorijum za podatke ($a->dataroot) ne može kreirati instalacioni program.'; // ORPHANED
$string['pathssubadmindir'] = 'Nekoliko sajtova za Webhosting koristi /admin kao specijalni URL za pristup kontrolnom panelu. Na žalost, to može da da dovede do konflikta sa standardnim direktorijumom u kojem su smešten Moodle administratorske stranice. Ovaj problem možete rešiti tako što ćete tokom instalacije preimenovati admin direktorijum u, na primer <em>moodleadmin</em>.'; // ORPHANED
$string['pathssubdataroot'] = 'Potreban vam je prostor gde će Moodle čuvati postavnjene datoteke. Ovaj direktorijum bi trebalo da bude podešen tako da se može čitati i u njega upisivati od strane korisnika Web servera (obično \'nobody\' ili \'apache\'), ali istovremeno mora biti dostupan direktno preko Weba. Ukoliko ovaj direktorijum ne postoji Moodle će pikušati da ga kreira tokom instalacije,'; // ORPHANED
$string['pathssubdirroot'] = 'Puna putanja do direktotijuma za instalaciju Moodlea. Promenite samo ukoliko želite da koristite sinbolične linkove.'; // ORPHANED
$string['pathssubwwwroot'] = 'Puna ver adresa preko koje će se pristupati Moodleu. Nije moguće pristupati Moodleu koristeći višnj adresa. Ukoliko Vaš sajt ima više javnih adresa onda na svima morate da podesite permanentnu direkciju ka jednoj adresi. Ukoliko je Vaš sajt dostupam sa Interneta ali i iz Intranet okružeanja koristite javnu adresu i podesite DNS tako da i Intranet korisnici mogu da koriste tu javnu adresu.'; // ORPHANED
$string['pathsunsecuredataroot'] = 'Dataroot lokacija nije bezbedna'; // ORPHANED
$string['pathswrongadmindir'] = 'Admin direktorijum ne postoji'; // ORPHANED
$string['pathswrongdirroot'] = 'Neispravna dirroot lokacija'; // ORPHANED
$string['phpextension'] = '$a PHP ekstenѕija'; // ORPHANED
$string['releasenoteslink'] = 'Za više informaciji o ovoj verziji  Moodlea, pogledajte <em>Release Notes</em> na $a'; // ORPHANED
$string['sqliteextensionisnotpresentinphp'] = 'PHP nije pravilno podešen sa ekstenzijom SQLite. Molimo proverite Vašu datoteku php.ini ili ponovo kompajlirajte PHP.'; // ORPHANED
$string['upgradingqtypeplugin'] = 'Nadogradnja dodatka za pitanja/tipove'; // ORPHANED
$string['aborting'] = 'Odustajanje od instalacije'; // ORPHANED
$string['adminemail'] = 'Adresa e-pošte :'; // ORPHANED
$string['adminfirstname'] = 'Ime :'; // ORPHANED
$string['admininfo'] = 'Podaci o administratoru'; // ORPHANED
$string['adminlastname'] = 'Prezime :'; // ORPHANED
$string['adminpassword'] = 'Lozinka :'; // ORPHANED
$string['adminusername'] = 'Korisničko ime :'; // ORPHANED
$string['askcontinue'] = 'Nastavi (da/ne) :'; // ORPHANED
$string['availabledbtypes'] = 'Dostupne baze podataka'; // ORPHANED
$string['cannotconnecttodb'] = 'Nije moguće uspostaviti vezu sa bazom podataka'; // ORPHANED
$string['checkingphpsettings'] = 'Provera PHP podešavanja'; // ORPHANED
$string['configfilecreated'] = 'Konfiguraciona dadoteka je uspešno kreirana'; // ORPHANED
$string['configfiledoesnotexist'] = 'Konfiguraciona dadoteka ne postoji!!!'; // ORPHANED
$string['configurationfileexist'] = 'Konfiguraciona datoteka već postoji'; // ORPHANED
$string['creatingconfigfile'] = 'Kreiranje konfiguracione datoteke'; // ORPHANED
$string['databasesettingsformoodle'] = 'Podešavanja baze podataka za Moodle'; // ORPHANED
$string['databasetype'] = 'Vrsta baze podataka :'; // ORPHANED
$string['disagreelicense'] = 'Nadogradnja se ne može nastavti zbog neslaganja sa GPL licencom!'; // ORPHANED
$string['downloadlanguagepack'] = 'Da li želite da sada preuzmete jezički paket (da/ne) :'; // ORPHANED
$string['downloadsuccess'] = 'Jezički paket je uspešno preuzet'; // ORPHANED
$string['installationiscomplete'] = 'Instalacija je završena'; // ORPHANED
$string['invalidargumenthelp'] = 'Greška: Neispravni argument(i)
Upotreba: \$php cliupgrade.php OPTIONS
Iskoristi opciju --help za dodatnu pomoć'; // ORPHANED
$string['invalidemail'] = 'Neispravna adresa e-pošte'; // ORPHANED
$string['invalidhost'] = 'Neispravan host'; // ORPHANED
$string['invalidint'] = 'Greška: vrednost nije ceo broj'; // ORPHANED
$string['invalidintrange'] = 'Greška: vrednost je izvan ispravnog opsega'; // ORPHANED
$string['invalidpath'] = 'Neispravna putanja'; // ORPHANED
$string['invalidsetelement'] = 'Greška: Zadata vrednost se ne nalazi među ponuđenim opcijama'; // ORPHANED
$string['invalidtextvalue'] = 'Neispravna tekstalna vrednost'; // ORPHANED
$string['invalidurl'] = 'Neispravna URL adresa'; // ORPHANED
$string['invalidvalueforlanguage'] = 'Neispravna vrednost za opciju --lang. Kucajte --help za pomoć'; // ORPHANED
$string['invalidyesno'] = 'Geška: vrednost nije ispravan da/ne adrgument'; // ORPHANED
$string['locationanddirectories'] = 'Lokacije i direktorijumi'; // ORPHANED
$string['pdosqlite3'] = 'SQLite 3 (PDO) <b><strong class=\"errormsg\">Eksperimentalno! (nije za korišćenje na serveru na kojem postoje aktivni kursevi)</strong></b>'; // ORPHANED
$string['php52versionerror'] = 'Verzija PHP mora biti najmanje 5.2.0.'; // ORPHANED
$string['php52versionhelp'] = '<p>Moodle zahteva verziju PHP najmanje 5.2.0.</p>
<p>Trenutno Vam radi verzija $a</p>
<p>Morate unaprediti verziju PHP ili preseliti sajt na server domaćin koji ima noviju verziju PHP!</p>'; // ORPHANED
$string['selectlanguage'] = 'Izbor jezika za instalaciju'; // ORPHANED
$string['sitefullname'] = 'Pun naziv sajta :'; // ORPHANED
$string['siteinfo'] = 'Detalji o sajtu'; // ORPHANED
$string['sitenewsitems'] = 'Vesti :'; // ORPHANED
$string['siteshortname'] = 'Kratak naziv sajta :'; // ORPHANED
$string['sitesummary'] = 'Kratak pregled sajta :'; // ORPHANED
$string['tableprefix'] = 'Prefiks tabele :'; // ORPHANED
$string['upgradingactivitymodule'] = 'Nadogradnja modula Aktivnost'; // ORPHANED
$string['upgradingbackupdb'] = 'Nadogradnja rezervne kopije baze podataka'; // ORPHANED
$string['upgradingblocksdb'] = 'Nadogradnja blokova baze podatka'; // ORPHANED
$string['upgradingblocksplugin'] = 'Nadogradnja dodatka za blokove'; // ORPHANED
$string['upgradingcompleted'] = 'Nadogradnja je završeno...'; // ORPHANED
$string['upgradingcourseformatplugin'] = 'Nadogradnja dodatka za format kursa'; // ORPHANED
$string['upgradingenrolplugin'] = 'Nadogradnja dodatka za upis'; // ORPHANED
$string['upgradinggradeexportplugin'] = 'Nadogradnja dodatka za izvoz ocena'; // ORPHANED
$string['upgradinggradeimportplugin'] = 'Nadogradnja dodatka za uvoz ocena'; // ORPHANED
$string['upgradinggradereportplugin'] = 'Nadogradnja dodatka za izveštaj o ocenama'; // ORPHANED
$string['upgradinglocaldb'] = 'Nadogradlja lokalne baze podataka'; // ORPHANED
$string['upgradingmessageoutputpluggin'] = 'Unapređenje dodatka Izlaz Poruke'; // ORPHANED
$string['upgradingrpcfunctions'] = 'Nadogradnja ROC funkcija'; // ORPHANED
$string['usagehelp'] = 'Synopsis:
\$php cliupgrade.php OPTIONS

OPTIONS
--lang Ispravni instalirani jezik za instalaciju. Podrazumevan je engleski English(en)
--webaddr Web adresa Moodle sajta
--dir Lokacija moodle Web direktorijuma
--datadir Lokacija moodle direktorijuma za podatke (ne bi trebalo da bude vidljiv na Webu)
--dbtype Tip baze podataka. Podrazumevana je mysql
--dbhost Ime računara servera baze podataka. Podrazumevno je localhost
--dbname Ime baze podataka. Podrazumevano je moodle
--dbuser Korisničko ime na serveru baze podataka. Podrazumevano je prazno
--dbpass Lozinka korisničkog naloga na serveru baze podataka. Podrazumevano je prazno
--prefix Prefiks imena tabelâ za bazu podataka iznad. Podrazumevano je mdl
--verbose 0 Nema izlaza, 1 Sumarni izlaz(Podrazumevano), 2 Detaljni izlaz
--interactivelevel 0 Neinteraktivni, 1 poluinteraktivni(Podrazumevano), 2 interaktivno
--agreelicense Da(Podrazumevano) ili Ne
--confirmrelease Da(Podrazumevano) ili Ne
--sitefullname Puno ime sajta. Podrazumevano je: Moodle Site (Molimo da promenite podrazumevano ime!!)
--siteshortname Kraće ime sajta. Podrazumevano je moodle
--sitesummary Pregled opcija za sajt. Podrazumevano je prazno 
--adminfirstname ime administratora. Podrazumevano je Admin
--adminlastname Prezime administratora. Podrazumevano je User
--adminusername Korisničko ime administratora. Podrazumevano je admin
--adminpassword Lozinka administratora. Podrazumevano je admin
--adminemail Adresa e-pošte administratora. Podrazumevano je  root@localhost
--help štampa ovu pomoć

Način korišćenja:
\$php cliupgrade.php --lang=en --webaddr=http://www.example.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost --dbname=moodle --dbuser=root --prefix=mdl --agreelicense=yes --confirmrelease=yes --sitefullname=\"Example Moodle Site\" --siteshortname=moodle --sitesummary=siteforme --adminfirstname=Admin --adminlastname=User --adminusername=admin --adminpassword=admin --adminemail=admin@example.com --verbose=1 --interactivelevel=2'; // ORPHANED
$string['versionerror'] = 'Korisnik je odbačen zbog greške u verziji'; // ORPHANED
$string['welcometext'] = '---Dobrodošli u komandnu liniju programa za instalaciju Moodlea---'; // ORPHANED
$string['writetoconfigfilefaild'] = 'Greška: Zapisivanje u konfiguracionu datoteku nije uspelo'; // ORPHANED
$string['yourchoice'] = 'Vaš izbor :'; // ORPHANED
$string['databasesettingssub_sqlite3_pdo'] = '<b>Tip:</b> SQLite 3 (PDO) <b><strong class=\"errormsg\">Eksperimentalno! (nije za zvanično korišćenje)</strong></b><br />
<b>Host:</b> putanja do direktorijuma gde će biti sačuvane datoteke baze podataka (koristiti potpunu putanju); koristiti  localhost ili ostaviti prazno da bi bio korišćen direktorijum Moodle data <br />
<b>Ime:</b> ime baze podataka, npr. moodle (opciono)<br />
<b>Korisnik:</b> korisničko ime Vaše baze podataka (opciono)<br />
<b>Lozinka:</b> lozinka za pristup Vašoj bazi podataka (opciono)<br />
<b>Prefiks imena tabela:</b> opcioni prefiks koji se koristi kod imena tabela <br />
Ime datoteke baze podataka biće određeno prema korisničkom imenu, imenu baze podataka i prema lozinki koju ste uneli iznad.'; // ORPHANED
$string['sqlite3_pdo'] = 'SQLite 3 (PDO) <b><strong class=\"errormsg\">Eksperimentalno! (nije za zvanično korišćenje)</strong></b>'; // ORPHANED

?>
