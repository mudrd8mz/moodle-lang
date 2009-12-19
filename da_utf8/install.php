<?PHP // $Id$ 
      // install.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['admindirerror'] = 'Det angivne admin-bibliotek er forkert';
$string['admindirname'] = 'Admin-bibliotek';
$string['admindirsetting'] = 'Nogle få webhoteller bruger /admin som en speciel URL til at administrere webhotellet. Det er et problem da Moodle også bruger /admin som standard til administrationssiderne. I så fald kan du omdøbe admin-biblioteket og skrive det nye navn her. For eksempel: <br /> <br /><b>moodleadmin</b><br /> <br />
Dette vil rette admin-linkene i Moodle.';
$string['admindirsettinghead'] = 'Sætter admin-biblioteket op...';
$string['admindirsettingsub'] = 'Nogle får webhoteller bruger /admin adresse til kontrolpanelet el.lign. Desværre konflikter dette med standardplaceringen af Moodles administrationssider. Du kan i så tilfælde omdøbe admin-biblioteket i din installation og skrive navnet her. Eksempel:<br /> <br /><b>moodleadmin</b><br /> <br />
Dette vil sikre admin-links i Moodle.';
$string['caution'] = 'Pas på';
$string['chooselanguage'] = 'Vælg et sprog';
$string['chooselanguagehead'] = 'Vælg et sprog';
$string['chooselanguagesub'] = 'Vælg et sprog til brug under installationen. Senere vil du kunne vælge hvilke sprog Moodle skal kunne bruge.';
$string['compatibilitysettings'] = 'Kontrollerer dine PHP-indstillinger...';
$string['compatibilitysettingshead'] = 'Kontrollerer dine PHP-indstillinger...';
$string['compatibilitysettingssub'] = 'For at Moodle kan køre uden problemer skal din server \"bestå\" alle disse tests.';
$string['configfilenotwritten'] = 'Installationsscriptet var ikke i stand til at oprette config.php-filen, der indeholder de valgte indstillinger, sandsynligvis fordi  Moodlebiblioteket er skrivebeskyttet. Du kan manuelt kopiere den følgende kode ind i en fil med navnet \"config.php\" i roden af Moodle-biblioteket.';
$string['configfilewritten'] = 'config.php er blevet oprettet';
$string['configurationcomplete'] = 'Konfigurationen er færdig.';
$string['configurationcompletehead'] = 'Konfigurationen er færdig.';
$string['configurationcompletesub'] = 'Moodle har forsøgt at gemme din konfiguration i en fil i roden af Moodle-installationen';
$string['database'] = 'Database';
$string['databasecreationsettings'] = 'Nu skal du konfigurere indstillingerne i databasen for hvor de fleste Moodle-data skal gemmes. Databasen vil blive oprettet automatisk af installationsprogrammet med indstillingerne herunder.<br />
<br /> <br />
<b>Type:</b> Fikseret til \"mysql\" af installationsprogrammet<br />
<b>Host:</b> Fikseret til \"localhost\" af installationsprogrammet<br />
<b>Name:</b> Databasenavn, f.eks. Moodle<br />
<b>User:</b> Fikseret til \"root\" af installationsprogrammet<br />
<b>Adgangskode:</b> Adgangskoden til din database<br />
<b>Tables Prefix:</b> Valgfrit fornavn (prefix) til alle tabelnavne';
$string['databasecreationsettingshead'] = 'Nu skal du konfigurere databaseindstillingerne for hvor de fleste Moodle-data skal gemmes. Denne database vil automatisk blive oprettet af installationsprogrammet med indstillingerne herunder.';
$string['databasecreationsettingssub'] = '<b>Type:</b> Fikseret til \"mysql\" af installationsprogrammet<br />
<b>Host:</b> Fikseret til \"localhost\" af installationsprogrammet<br />
<b>Name:</b> Databasenavn, f.eks. Moodle<br />
<b>User:</b> Fikseret til \"root\" af installationsprogrammet<br />
<b>Adgangskode:</b> Adgangskoden til din database<br />
<b>Tables Prefix:</b> Valgfrit fornavn (prefix) til alle tabelnavne';
$string['databasesettings'] = 'Du skal nu konfigurere databasen hvor det meste af Moodles data vil blive gemt. Databaseserveren skal allerede være oprettet og du skal have oprettet et brugernavn og en adgangskode så du kan få adgang til den.<br />
<br /> <br />
<b>Type:</b> Mysql eller postgres7<br />
<b>Vært:</b> F.eks. localhost eller db.isp.com<br />
<b>Navn:</b> Databasenavn, f.eks. moodle<br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabel Præfix:</b> Valgfrit fornavn (prefix) der bliver sat foran alle tabelnavne (kan anbefales hvis flere systemer der skal bruge den samme database).';
$string['databasesettingshead'] = 'Du skal nu konfigurere databasen hvor det meste af Moodles data vil blive gemt. Databaseserveren skal allerede være oprettet og du skal have oprettet et brugernavn og en adgangskode så du kan få adgang til den.';
$string['databasesettingssub'] = '<b>Type:</b> Mysql eller postgres7<br />
<b>Vært:</b> F.eks. localhost eller db.isp.com<br />
<b>Navn:</b> Databasenavn, f.eks. moodle<br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabel Præfix:</b> Valgfrit fornavn (prefix) der bliver sat foran alle tabelnavne (kan anbefales hvis der er flere systemer der skal bruge samme database).';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (non UTF-8) <b><strong class=\"errormsg\">Experimentiel! (ikke til brug i et produktionsmiljø)</strong ></b><br />
<b>Vært:</b> F.eks. localhost eller db.isp.com<br />
<b>Navn:</b> Databasenavn, f.eks. moodle<br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabelprefix:</b> Prefix for alle tabelnavne (obligatorisk)';
$string['databasesettingssub_mssql_n'] = '<b>Type:</b> SQL*Server (UTF-8 aktiveret) <br />
<b>Vært:</b> F.eks. localhost eller db.isp.com<br /> 
<b>Navn:</b> Databasenavn, f.eks. moodle<br /> 
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabelprefix:</b> Prefix for alle tabelnavne (obligatorisk)';
$string['databasesettingssub_mysql'] = '<b>Type:</b> MySQL<br />
<b>Vært:</b> F.eks. localhost eller db.isp.com<br />
<b>Navn:</b> Databasenavn, f.eks. moodle<br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabelprefix:</b> Prefix for alle tabelnavne (valgfrit)';
$string['databasesettingssub_mysqli'] = '<b>Type:</b> Forbedret MySQL<br />
<b>Vært:</b> F. eks. localhost eller db.isp.com<br />
<b>Navn:</b> Databasenavn, f.eks. moodle<br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabelprefix:</b> Prefix til alle navne i tabellen (valgfri)';
$string['databasesettingssub_oci8po'] = '<b>Type:</b> Oracle<br />
<b>Vært:</b> Ikke brugt, skal være blank<br />
<b>Navn:</b> Navnet på forbindelsen fra tnsnames.ora <br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabel Præfix:</b> Præfix til alle tabellerne (obligatorisk, højst 2 tegn)';
$string['databasesettingssub_odbc_mssql'] = '<b>Type:</b> SQL*Server (over ODBC) <b><strong class=\"errormsg\">Eksperimentiel! (ikke beregnet til brug i produktionsmiljø)</strong></b><br />
<b>Vært:</b> Navnet på DSN forbindelsen i ODBC kontrolpanelet<br /> 
<b>Navn:</b> Databasenavnet, f.eks. moodle<br /> 
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tabel Præfix:</b> Præfix der bruges til alle tabelnavnene (obligatorisk)';
$string['databasesettingssub_postgres7'] = '<b>Type:</b> PostgreSQL<br />
<b>Vært:</b> F.eks. localhost eller db.isp.com<br />
<b>Navn:</b> Databasenavn, f.eks. moodle<br />
<b>Bruger:</b> Brugernavn til databasen<br />
<b>Adgangskode:</b> Brugerens adgangskode<br />
<b>Tables Præfix:</b> Præfix der bruges foran alle tabelnavnene (obligatorisk)';
$string['databasesettingswillbecreated'] = '<b>Note:</b> Installationsprocessen vil søge at oprette en database hvis ikke den findes allerede.';
$string['dataroot'] = 'Databibliotek';
$string['datarooterror'] = 'Databiblioteket du specificerede kan ikke findes eller oprettes. Ret stien til biblioteket eller opret det manuelt.';
$string['datarootpublicerror'] = 'Den datamappe du har angivet har direkte adgang fra internettet, du skal bruge en anden mappe.';
$string['dbconnectionerror'] = 'Den angive database kunne ikke kontaktes. Kontroller eller ret venligst databaseinformationerne.';
$string['dbcreationerror'] = 'Fejl ved oprettelse af databasen. Kan ikke oprette den givne database med de angivne indstillinger.';
$string['dbhost'] = 'Værtsserver';
$string['dbpass'] = 'Adgangskode';
$string['dbprefix'] = 'Præfix for tabeller';
$string['dbtype'] = 'Type';
$string['dbwrongencoding'] = 'Den valgte database kører under en ikke anbefalet encoding ($a). Det vil være bedre at benytte en Unicode (UTF-8) encoded database i stedet. 
Du kan alligevel springe denne test over ved at vælge \"Skip DB Encoding Test\" tjek herunder, men det kan give problemer fremover.';
$string['dbwronghostserver'] = 'Du skal følge \"Værtsreglerne\" som forklaret ovenfor.';
$string['dbwrongnlslang'] = 'Miljøvariablen NLS_LANG  på din webserver skal bruge AL32UTF8-tegnsættet. Se PHP-dokumentationen for hvordan man konfigurerer OCI8 korrekt.';
$string['dbwrongprefix'] = 'Du skal følge reglerne for tabelprefix som forklaret ovenfor.';
$string['directorysettings'] = '<p>Kontroller venligst placeringen af af Moodle-installationen.</p>

<p><b>Webadresse:<b>
Angiv den fulde webadresse (URL) til Moodle. Hvis sitet kan tilgås fra flere URL\'er så vælg den mest naturlige, den som de studerende oftest vil bruge. Der må ikke være en skråstreg til sidst.</p>

<p><b>Moodle-bibliotek:</b>
Angiv den fulde sti til Moodle-installationen. Stien er casesensitiv.</p>

<p><b>Moodles Databibliotek</b>
Det bibliotek hvor Moodle kan gemme uploadede filer. Dette bibliotek skal være læsbart OG SKRIVBART af den bruger apache kører under, (typisk \'nobody\' eller \'apache\') men der må ikke være direkte adgang til det fra internettet.</p>';
$string['directorysettingshead'] = 'Bekræft hvor Moodle skal installeres';
$string['directorysettingssub'] = '<b>Webadresse:</b>
Angiv den fulde adresse til Moodle. Hvis der skal være adgang til siden fra flere URL\'er så vælg den naturligste, den deltagerne vil bruge. Adressen må ikke slutte med en skråstreg (slash).
<br />
<br />
<b>Moodle-bibliotek:</b>
Angiv den fulde sti til installationen. Vær påpasselig med små og store bogstaver, adressen er casesensitiv.
<br />
<br />
<b>Databibliotek:</b>
Det sted, hvor Moodle placerer uploadede filer. Dette bibliotek skal være læse- OG SKRIVBART for webserverbrugeren (typisk \'nobody\' eller \'apache\'), men der må ikke være direkte adgang fra internettet.';
$string['dirroot'] = 'Moodle-bibliotek';
$string['dirrooterror'] = 'Det angivne Moodle-bibliotek lader ikke til at være rigtigt - der kan ikke findes en Moodle-installation. Den nedenstående værdi er blevet fjernet.';
$string['download'] = 'Download';
$string['downloadlanguagebutton'] = 'Download \"$a\"-sprogpakken';
$string['downloadlanguagehead'] = 'Download sprogpakke';
$string['downloadlanguagenotneeded'] = 'Du kan fortsætte installationen med standardsprogpakken,\"$a\".';
$string['downloadlanguagesub'] = 'Du har nu mulighed for at hente en sprogpakke og fortsætte installationsprocessen på dette sprog.<br /><br />Kan du ikke downloade sprogpakken vil installationen fortsætte på engelsk. (Når installationsprocessen er færdig kan du downloade og installere flere sprogpakker.)';
$string['environmenthead'] = 'Kontrollerer din serveropsætning...';
$string['environmentsub'] = 'Vi tjekker om de forskellige komponenter i dit system lever op til de Moodles krav.';
$string['fail'] = 'Mislykkedes';
$string['fileuploads'] = 'Fil-uploads';
$string['fileuploadserror'] = 'Denne skulle være aktiveret';
$string['fileuploadshelp'] = '<p>Filupload lader til at være slået fra på din server.</p>

<p>Moodle kan stadig installeres, men uden senere mulighed for at uploade kursusfiler og profilbilleder.</p>

<p>For at tillade upload skal du (eller systemadministratoren) rette i php.ini og ændre indstillingen for <b>fil_uploads</b> til \'1\'.</p>';
$string['gdversion'] = 'GD version';
$string['gdversionerror'] = 'GD library skal være tilgængelig for PHP for at billeder kan manipuleres og oprettes.';
$string['gdversionhelp'] = '<p>Det lader til at din server ikke har GD installeret.</p>

<p>GD er et bibliotek som PHP bruger til at behandle billeder (såsom brugerprofilbilleder) og til at oprette nye billeder såsom loggrafer. Moodle kan stadig fungere uden GD - men disse funktioner vil så ikke være til rådighed.</p>

<p>For at tilføje GD på unix skal PHP kompileres med \'--with-gd\" parameteret.</p>

<p>Under windows er det normalt nok at udkommentere den linje i php.ini der refererer til libgd.dll </p>';
$string['globalsquotes'] = 'Usikker håndtering af Globale variable';
$string['globalsquoteserror'] = 'Fix dine PHP-indstillinger: aktiver register_globals og/eller slå magic_quotes_gpc til';
$string['globalsquoteshelp'] = '<p>
Kombinationen af deaktiveret \"Magic Quotes GPC\" og aktiveret \"Register Globals\" samtidig anbefales ikke.</p>

<p>Den anbefalede indstilling er
<b>magic_quotes_gpc = On</b> og <b>register_globals = Off</b> i php.ini</p>

<p>Har du ikke adgang til php.ini, kan du sikkert ikke indsætte denne linje i filen .htaccess i dit Moodle-bibliotek:

<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Sproget \"$a\" blev desværre ikke installeret. Installationen vil fortsætte på engelsk.';
$string['langdownloadok'] = 'Sproget \"$a\" blev installeret. Installationen vil fortsætte på dette sprog.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Denne skulle være deaktiveret';
$string['magicquotesruntimehelp'] = '<p>\'Magic quotes runtime\' bør slås fra for at Moodle kan fungere ordentligt.</p> 
<p>Normalt er denne indstilling slået fra som standard. Se indstillingen <b>\'magic_quotes_runtime\'</b> i filen \"php.ini\".</p> 

<p>Hvis du ikke har adgang til webserverens php.ini fil kan du evt. lave en tekstfil, kalde den .htaccess og gemme den i Moodle-biblioteket. Den skal indholde linjen: </p> 
<blockquote><div>php_value magic_quotes_runtime Off</div></blockquote>';
$string['memorylimit'] = 'Hukommelsesbegrænsning';
$string['memorylimiterror'] = 'Den tilgængelige hukommelse til PHP er ret lav... Det kan være at der opstår problemer senere.';
$string['memorylimithelp'] = '<p>Den mængde hukommelse som PHP kan bruge, er sat til $a.</p> 

<p>Dette kan forårsage at der opstår problemer senere, især hvis du har mange moduler aktiveret eller mange brugere.</p> 

<p>Vi anbefaler at du konfigurerer PHP med mere hukommelse, f.eks. 40M. 
Der er flere måder hvorpå du kan rette det.</p> 
<ol> 
<li>Hvis du har mulighed for det, kan du rekompilere PHP med <i>--enable-memory-limit</i>. 
Det vil tillade at Moodle selv kan definere hvor meget hukommelse der er brug for.</li> 

<li>Hvis du har adgang til php.ini filen kan du ændre <b>memory_limit</b>-indstillingen til noget i retning af 40M. 
Hvis du ikke har direkte adgang til den kan du bede systemadministratoren om at gøre det for dig.</li> 

<li>På nogle servere kan du oprette en \'.htaccess\' fil, gemme den i Moodle-biblioteket med linjen:
<blockquote><div>php_value memory_limit 40M</div></blockquote> 
<p>Det kan dog på nogle servere forhindre <b>alle</b> PHP-siderne i at virke (du vil se fejl når du ser på siderne). I så fald kan du blive nødt til at fjerne \'.htaccess\' filen igen.</p></li> </ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server med UTF-8 support (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP er ikke konfigureret ordentligt med MSSQL-extensionen så den kan kommunikere med SQL*Serveren. Vær venlig at tjekke din php.ini-fil eller genkompiler PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP er ikke blevet ordentligt konfigureret med MySQL udvidelsen så den kan kommunikere med MySQL. Tjek din php.ini eller rekompiler PHP.';
$string['mysqli'] = 'Forbedret MySql (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP er ikke konfigureret korrekt med MySqli extensionen så den kan kommunikere med MySql. Tjek php.ini eller rekompiler PHP, MySqli extensionen er ikke tilgængelig for PHP 4';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP er ikke konfigureret ordentligt med OCI8-extensionen så den kan kommunikere med Oracle. Vær venlig at tjekke din php.ini-fil eller genkompiler PHP.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP er ikke blevet korrekt konfigureret med PHP\'s ODBC modul så den kan kommunikere med SQL*Serveren. Kontroller venligst php.ini filen eller rekompiler PHP.';
$string['pass'] = 'OK';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP er ikke blevet korrekt konfigureret med PHP\'s PGSQL modul så den kan kommunikere med PostgreSQL. Kontroller venligst php.ini filen eller rekompiler PHP.';
$string['phpversion'] = 'PHP version';
$string['phpversionerror'] = 'PHP versionen skal være nyere end 4.3.0 eller 5.1.0 (5.0.x er behæftet med fejl).';
$string['phpversionhelp'] = '<p>Moodle kræver mindst PHP version 4.3.0. eller 5.1.0 (5.0.x er behæftet med fejl).</p> 
<p>Webserveren bruger i øjeblikket version $a</p> 
<p>Du bliver nødt til at opdatere PHP eller flytte systemet over på en anden webserver der har en nyere version af PHP!</p> 
(Har du ver. 5.0.x kan du også nedgradere til 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['safemode'] = 'Safe mode';
$string['safemodeerror'] = 'Moodle kan have problemer med \"Safe mode: on\"';
$string['safemodehelp'] = '<p>Moodle kan have flere problemer når \'safe mode\' er slået til, ikke mindst kan systemet sandsynligvis ikke oprette nye filer.</p>

<p>\'Safe Mode\' er oftest slået til hos paranoide offentlige webhoteller, så det kan være at du bliver nødt til at finde et andet webhotel til Moodle.</p>

<p>Du kan godt fortsætte installationen, men der vil sandsynligvis opstå problemer senere.</p>';
$string['sessionautostart'] = 'Session autostart';
$string['sessionautostarterror'] = 'Denne skulle være deaktiveret';
$string['sessionautostarthelp'] = '<p>Moodle kræver at PHP understøtter sessions.</p>

<p>Sessions kan aktiveres i php.ini ... kik efter parameteren session.auto_start</p>';
$string['skipdbencodingtest'] = 'Spring testen af DB-tegnsæt over';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Du ser denne side fordi du med succes har installeret og åbnet pakken <strong>$a->packname $a->packversion</strong> på din computer.
Tillykke med det!';
$string['welcomep30'] = 'Denne udgave af <strong>$a->installername</strong> indeholder programmerne til at oprette et miljø, hvori <strong>Moodle</strong> vil operere, nemlig:';
$string['welcomep40'] = 'Pakken indeholder også <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Brugen af programmerne i denne pakke er styret af deres respektive licenser. Hele <strong>$a->installername</strong>-pakken er <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> og distribueret under <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>-licensen.';
$string['welcomep60'] = 'De følgende sider vil hjælpe dig gennem nogle nemme trin til konfiguration og opsætning af <strong>Moodle</strong> på din computer. Du kan acceptere standardindstillingerne eller vælge at ændre dem så de bedre svarer til dine egne behov.';
$string['welcomep70'] = 'Klik på \"Næste\" herunder for at forsætte opsætningen af <strong>Moodle</strong>.';
$string['wwwroot'] = 'Webadresse';
$string['wwwrooterror'] = 'Webadressen fremstår ikke korrekt - Moodle-installationen er ikke placeret der. Værdien herunder er nulstillet.';

?>
