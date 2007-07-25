<?PHP // $Id$ 
      // install.php - created with Moodle 1.9 dev (2007071300)


$string['admindirerror'] = 'Admin mappen som er angitt er feil';
$string['admindirname'] = 'Admin mappe';
$string['admindirsetting'] = 'Noen få webservere bruker /admin som en spesiell URL for å få tak i kontrollpanel eller lignende. Uheldigvis er dette i konflikt med standardplasseringen for Moodle\'s adminsider. Du kan ordne dette ved å gi adminkatalogen et nytt navn i installasjonen din, og skrive det nye navnet her. For eksempel <br /> <br /><b>moodleadmin</b><br /> <br />
Dette vil ordne adminlenkene i Moodle.';
$string['admindirsettinghead'] = 'Setter adminmappen';
$string['admindirsettingsub'] = 'Noen få webservere bruker /admin som en spesiell URL for å få tak i kontrollpanel eller lignende. Uheldigvis er dette i konflikt med standardplasseringen for Moodle\'s adminsider. Du kan ordne dette ved å gi adminkatalogen et nytt navn i installasjonen din, og skrive det nye navnet her. For eksempel <br /> <br /><b>moodleadmin</b><br /> <br />
Dette vil ordne adminlenkene i Moodle.';
$string['caution'] = 'Varsel';
$string['chooselanguage'] = 'Velg et språk';
$string['chooselanguagehead'] = 'Velg et språk';
$string['chooselanguagesub'] = 'Velg språk (bare for INSTALLASJONEN). Du vil kunne velge språk for nettsted og bruker på et skjermbilde senere.';
$string['compatibilitysettings'] = 'Sjekker PHP innstillingene dine...';
$string['compatibilitysettingshead'] = 'Sjekker PHP innstillinge dine...';
$string['compatibilitysettingssub'] = 'Serveren din må tilfredsstille alle disse testene for å kjøre Moodle orntlig.';
$string['configfilenotwritten'] = 'Installerinsprogrammet var ikke i stand til å lage config.php med dine valgte innstillinger automatisk, antakelig fordi det ikke er tilgang til å skrive i Moodle-mappen. Du kan manuelt kopiere følgende kode i en fil som du kaller config.php i rot-mappen i Moodle.';
$string['configfilewritten'] = 'config.php er opprett uten feil';
$string['configurationcomplete'] = 'Konfigurasjonen er ferdig';
$string['configurationcompletehead'] = 'Konfigurasjonen er ferdig';
$string['configurationcompletesub'] = 'Moodle gjorde et forsøk på å lagre konfigurasjonen din i en fil i roten av Moodle-installasjonen din';
$string['database'] = 'Database';
$string['databasecreationsettings'] = 'Nå må du konfigurere databaseinnstillinge hvor mesteparten av Moodle-dataene vil lagres. Denne databasen blir laget automatisk av innstalleringsprogrammet med innstillingene under.<br />
<br /><br />
<b>Type:</b> satt til \"mysql\" av installeringsprogrammet<br />
<b>Vert:</b> satt til \"localhost\" av installeringsprogrammet<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> satt til \"root\" av installeringsprogrammet<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> alternativt prefiks å bruke foran alle tabellnavnene<br />';
$string['databasecreationsettingshead'] = 'Nå må du konfigurere databaseinnstillinge hvor mesteparten av Moodle-dataene vil lagres. Denne databasen blir laget automatisk av innstalleringsprogrammet med innstillingene under.';
$string['databasecreationsettingssub'] = '<b>Type:</b> satt til \"mysql\" av installeringsprogrammet<br />
<b>Vert:</b> satt til \"localhost\" av installeringsprogrammet<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> satt til \"root\" av installeringsprogrammet<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> alternativt prefiks å bruke foran alle tabellnavnene';
$string['databasesettings'] = 'Nå må du konfigurere databaseinnstillinge hvor mesteparten av Moodle-dataene vil lagres. Denne databasen må allerede ha blitt laget og et brukernavn og passord for å få tilgang til den.<br />
<br /><br />
<b>Type:</b> satt til \"mysql\" av installeringsprogrammet<br />
<b>Vert:</b> satt til \"localhost\" av installeringsprogrammet<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> satt til \"root\" av installeringsprogrammet<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> alternativt prefiks å bruke foran alle tabellnavnene';
$string['databasesettingshead'] = 'Nå må du konfigurere databaseinnstillinge hvor mesteparten av Moodle-dataene vil lagres. Denne databasen må allerede ha blitt laget og et brukernavn og passord for å få tilgang til den.';
$string['databasesettingssub'] = '<b>Type:</b> satt til \"mysql\" av installeringsprogrammet<br />
<b>Vert:</b> satt til \"localhost\" av installeringsprogrammet<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> satt til \"root\" av installeringsprogrammet<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> alternativt prefiks å bruke foran alle tabellnavnene';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (ikke UTF-8 <b>Eksperimentell! (ikke til bruk i produksjon)</font></b><br />
<b>Vert:</b> f.eks localhost eller db.vert.no<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> satt til \"root\" av installeringsprogrammet<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> prefiks å bruke foran alle tabellnavnene (obligatorisk)';
$string['databasesettingssub_mssql_n'] = '<b>Type:</b> SQL*Server (UTF-8 slått på)<br />
<b>Vert:</b> f.eks localhost eller db.vert.no<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> satt til \"root\" av installeringsprogrammet<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> prefiks å bruke foran alle tabellnavnene (obligatorisk)';
$string['databasesettingssub_mysql'] = '<b>Type:</b> MySQL<br />
<b>Vert:</b> f.eks localhost eller db.vert.no<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> ditt brukernavn til databasen<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> prefiks å bruke foran alle tabellnavnene (valgfritt)';
$string['databasesettingssub_oci8po'] = '<b>Type:</b> Oracle<br />
<b>Vert:</b> brukes ikke, må være blank<br />
<b>Navn:</b> gitt navn på tnsnames.ora forbindelsen<br />
<b>Bruker:</b> brukernavn til databasen<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> prefiks å bruke foran alle tabellnavnene (obligatorisk, 2cc maks)';
$string['databasesettingssub_odbc_mssql'] = '<b>Type:</b> SQL*Server (gjennom ODBC<b><font color=\"red\">Eksperementiell! (ikke for bruk i produksjon</font></b><br />
<b>Vert:</b> gitt DSN navn i ODBC kontrollpanel<br />
<b>Navn:</b> databasenavn, f.eks moodle<br />
<b>Bruker:</b> brukernavn til databasen<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> prefiks å bruke foran alle tabellnavn (obligatorisk)';
$string['databasesettingssub_postgres7'] = '<b>Type:</b> PostgreSQL<br />
<b>Vert:</b> f.eks localhost eller db.vert.no<br />
<b>Navn:</b> databasenavn f.eks. moodle<br />
<b>Bruker:</b> ditt brukernavn til databasen<br />
<b>Passord:</b> databasepassordet ditt<br />
<b>Tabell prefix:</b> prefiks å bruke foran alle tabellnavnene (obligatorisk)';
$string['dataroot'] = 'Datamappe';
$string['datarooterror'] = '\"Datamappen\" du oppga kunne ikke bli funnet eller opprettet. Vennligst rett stien eller opprett katalogen manuelt.';
$string['dbconnectionerror'] = 'Fikk ingen forbindelse til databasen du oppga. Vennligst sjekk database-innstillingene dine.';
$string['dbcreationerror'] = 'Feil under opprettelse av database. Kunne ikke opprette gitte databasenavn med oppgitte innstillinger';
$string['dbhost'] = 'Tjenervert';
$string['dbpass'] = 'Passord';
$string['dbprefix'] = 'Tabellprefix';
$string['dbtype'] = 'Type';
$string['dbwrongencoding'] = 'Den valgte databasen kjører på ikke-anbefalt språk-koding ($a). Det ville vært bedre å bruke en Unicode (UTF-8) kodet database istedet. Du kan imidlertid omgå denne testen ved å velge \"Hopp over DB-koding Test\" innstillingen under, men du kan oppleve problemer med dette senere.';
$string['dbwronghostserver'] = 'Du må følge \"Tjener\" reglene som forklart over.';
$string['dbwrongnlslang'] = 'NLS_LANG variabelen i webserveren din må bruke AL32UTF tegnsettet. Se PHP-dokumentasjonen om hvordan å konfigurere OCI8 ordentlig.';
$string['dbwrongprefix'] = 'Du må følge \"Tabell-prefiks\" reglene som forklart over.';
$string['directorysettings'] = '<p>Vennligst bekreft lokasjonen for denne Moodle-installsjonen.</p>

<p><b>Web Addresse:</b>
Angi full webadresse for hvor Moodle vil være tilgjengelig.  
Hvis nettstedet er tilgjengelig via flere URL\'er velg den det er mest naturlig at studentene vil bruke. Ikke bruke etterfølgende skråstrek.</p>

<p><b>Moodle Mappe:</b>
Oppgi full mappesti til installasjonen. Pass på at små/store bokstaver stemmer.</p>

<p><b>Data Mappe:</b>
Du trenger et sted hvor moodle kan lagre opplastede filer. Denne katalogen bør være lesbar OG SKRIVBAR av webserverbrukeren (vanligvis \'ingen\' eller \'apache\'), men det bør være tilgjengelig direkte fra webben .</p>';
$string['directorysettingshead'] = 'Vennligst bekreft lokasjonen for denne Moodle-installsjonen';
$string['directorysettingssub'] = '<p>Vennligst bekreft lokasjonen for denne Moodle-installsjonen.</p>

<p><b>Web Addresse:</b>
Angi full webadresse for hvor Moodle vil være tilgjengelig.  
Hvis nettstedet er tilgjengelig via flere URL\'er velg den det er mest naturlig at studentene vil bruke. Ikke bruke etterfølgende skråstrek.</p>

<p><b>Moodle Mappe:</b>
Oppgi full mappesti til installasjonen. Pass på at små/store bokstaver stemmer.</p>

<p><b>Data Mappe:</b>
Du trenger et sted hvor moodle kan lagre opplastede filer. Denne katalogen bør være lesbar OG SKRIVBAR av webserverbrukeren (vanligvis \'ingen\' eller \'apache\'), men det bør være tilgjengelig direkte fra webben .</p>';
$string['dirroot'] = 'Moodlemappe';
$string['dirrooterror'] = '\'Moodlemappe\' innstillingen ser ut til å være feil - vi kan ikke finne noen Moodle installasjon der. Verdien under har blitt nullstillt.';
$string['download'] = 'Last ned';
$string['downloadlanguagebutton'] = 'Last ned &quot;$a&quot; språkpakken';
$string['downloadlanguagehead'] = 'Last ned språkpakke';
$string['downloadlanguagenotneeded'] = 'Du kan fortsette installasjonsprosessen med gjeldende språkpakke, \"$a\".';
$string['downloadlanguagesub'] = 'Du har nå valget mellom å laste ned en språkpakke og fortsette installasjonsprosessen med dette språket.<br /><br />Hvis du ikke får til å laste ned språkpakken, vil installasjonsprosessen fortsette på Engelsk. (Med en gang installasjonen er ferdig, vil du ha muligheten til å laste ned og installere flere språkpakker).';
$string['environmenthead'] = 'Sjekker \"omgivelsene\" dine...';
$string['environmentsub'] = 'Vi sjekker om forskjellige komponenter i systemet ditt tilfredsstiller systemkravene.';
$string['fail'] = 'Feilet';
$string['fileuploads'] = 'Filopplastinger';
$string['fileuploadserror'] = 'Denne skulle finnes på';
$string['fileuploadshelp'] = '<p>Filopplasting ser ut til å være slått av på serveren din.</p>

<p>Moodle kan fortsatt installeres, men uten denne muligheten, vil du ikke kunne laste opp kursfiler eller nye profilbilder.</p>

<p>For å slå på filopplasting må du (eller systemadministratoren) måtte redigere php.ini fila for hele systemet ditt og endre innstillingene for <b>file_uploads</b> til \'1\'.</p>';
$string['gdversion'] = 'GD versjon';
$string['gdversionerror'] = 'GD-biblioteket må være tilstede for å kunne behandle og opprette bilder.';
$string['gdversionhelp'] = '<p>Det ser ikke ut som serveren din har GD installert.</p>

<p>GD er et bibliotek som kreves av PHP for å tillate Moodle å behandle bilder (som brukerprofil-ikonene) og for å lage nye bilder (som log-grafene). Moodle kan virke uten GD - men disse mulighetene vil ikke være tilgjengelig for deg.</p>

<p>For å legge til GD under Unix, kompiler PHP med --with-gd innstillingen</p>

<p>I Windows kan du vanligvis redigere php.ini og ta bort kommentarmarkeringen på linjen for php_gd2.dll.</p>';
$string['globalsquotes'] = 'Usikker behandling av Globale verdier';
$string['globalsquoteserror'] = 'Ordne PHP innstillingene: slå av register_globals og/eller slå på magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Kombinasjonen av avslått Magic Quotes GPC og påslått Register Globals er ikke anbefalt.</p>

<p>Anbefalt innstilling er: <b>magic_quotes_gpc = On</b> og <b>register_globals = Off</b> i php.ini fila di</p>

<p>Hvis du ikke har tilgang til  php.ini, kan du klare å plassere følgende linjer i en fil som heter eller skal hete .htaccess i Moodle-mappen din:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Installasjon';
$string['langdownloaderror'] = 'Beklageligvis ble ikke språkpakken \"$a\" installert. Installasjonsprosessen vil fortsette på Engelsk.';
$string['langdownloadok'] = 'Installasjonen av språket \"$a\" var vellykket. Installasjonen vil nå fortsette på dette språket.';
$string['magicquotesruntime'] = 'Magic Quotes Oppetid';
$string['magicquotesruntimeerror'] = 'Denne bør være av';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime/oppetid bør være slått av for at Moodle skal fungere ordentlig.</p>

<p>Normalt er den avslått som standard... se innstillingen for <b>magic_quotes_runtime</b> i php.ini fila.</p>

<p>Hvis du ikke har tilgang til php.ini, kan du skrive inn følgende linjer i en fil som du kaller .htaccess i Moodlekatalogen din:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Minne-grense';
$string['memorylimiterror'] = 'Minnegrensen for PHP er satt for lavt... du kan få problemer med dette senere.';
$string['memorylimithelp'] = '<p>PHP minnegrensen for serveren din er nå satt til $a.</p>

<p>Dette kan skape minneproblemer for Moodle senere, spesielt hvis du har mange moduler tillatt og/eller mange brukere.</p>

<p>Vi anbefaler at du konfigurer PHP med en høyere grense enn mulig, for eksepmel 40M. Det er flere måter å gjøre dette på.:</p>
<ol>
<li>Hvis du har muligheten, rekompiler PHP med<i>--enable-memory-limit</i>.  
Dette vil tillate Moodle å sette minnegrensen selv.</li>
<li>Hvis du har tilgang til php.ini fila di, kan du endre <b>memory_limit</b> innstillinga der til omtrent 40M. Hvis du ikke har tilgang kan du be administrator gjøre dette for deg.</li>
<li>På noen PHP-servere kan du lage en .htaccess fil i Moodlemappen som inneholder denne linjen:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Uansett, på noen servere kan dette forhindre <b>alle</b> PHP sider fra å virke (du vil se feilmeldinger når du ser på sider) og da må du fjerne .htaccess fila.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server med UTF-8 support (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP er ikke ordentlig konfigurert med MSSQL tillegg slik at den kan kommunisere med SQL*Server. Vær vennlig å sjekk php.ini fila di eller rekompiler PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP har ikke blitt ordentlig konfigurert med MySQL innstillingene slik at den kan kommunisere med MySQL. Vær vennlig å sjekk php.ini fila di eller rekompiler PHP.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP har ikke blitt ordentlig konfigurert med OCI8 tillegget slik at den kan kommunisere med Oracle. Vær vennlig å sjekk php.ini fila di eller rekompiler PHP.';
$string['odbc_mssql'] = 'SQL*Server gjennom ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP har ikke blitt ordentlig konfigurert med ODBS tillegget slik at den kan kommunisere med SQL*Server. Vær vennlig å sjekk php.ini fila di eller rekompiler PHP.';
$string['pass'] = 'Godkjent';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP har ikke blitt ordentlig konfigurert med PGSQL tillegget slik at den kan kommunisere med PostgreSQL. Vær vennlig å sjekk php.ini fila di eller rekompiler PHP.';
$string['phpversion'] = 'PHP versjon';
$string['phpversionerror'] = 'PHP versjon må være minst 4.1.0';
$string['phpversionhelp'] = '<p>Moodle trenger en PHP versjon minst 4.3.0 eller 5.1.0 (5.0.x har rekke kjente problem).</p>
<Du kjører nå versjon $a</p>
<p>Du må oppgradere PHP eller flytte til en server med en nyere versjon av PHP!<br /> (I forhold til 5.0.x kan du også nedgradere til versjon 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['safemode'] = 'Sikkermodus';
$string['safemodeerror'] = 'Moodle kan ha trøbbel når sikkermodus er på';
$string['safemodehelp'] = '<p>Moodle kan oppleve en rekke problemer med sikkermodus på, ikke minst det at du sannsynligvis ikke kan opprette nye filer.</p>

<P>Sikkermodus er vanligvis bare slått på på paranoide offentlige webtjenere, så det kan hende du må finne en ny webtilbyder for Moodle-siden din.</p>

<p>Du kan fortsette installasjonen hvis du ønsker, men det kan hende du får en del problemer.</p>';
$string['sessionautostart'] = 'Sesjon Autostart';
$string['sessionautostarterror'] = 'Denne bør være av';
$string['sessionautostarthelp'] = '<P>Moodle trenger sesjonsupport og vil ikke virke uten.</p>

<p>Sesjoner kan slås på i php.ini fila se etter session.auto_start variabelen.</p>';
$string['skipdbencodingtest'] = 'Hopp over DB koding testen';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Du ser denne siden fordi du nå med hell har installert og kjørt <strong>$a->packname $a->packversion</strong>pakke på datamaskinen din. Gratulerer!';
$string['welcomep30'] = 'Denne versjonen av <strong>$a->installername</strong> inkluderer programmer for å lage et miljø som <strong>Moodle</strong> jobber i, nemlig:';
$string['welcomep40'] = 'Denne pakken inkluderer også  <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Bruken av alle applikasjoner i denne pakken er administrert av egne lisenser. Hele <strong>$a->installername</strong> pakken er <a href=\"http://www.opensource.org/docs/definition_plain.html\">
åpen kildekode</a> og er distribuert under  <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> lisensen.';
$string['welcomep60'] = 'De følgende sidene vil vise deg gjennom noen enkle steg for å konfigurere og sette opp <strong>Moodle</strong> på datamaskinen din. Du kan akseptere standard innstillinger, eller, hvis du vil, justere dem etter egne behov.';
$string['welcomep70'] = 'Klikk på \"Neste\" knappen under for å fortsette med <strong>Moodle</strong>-installasjonen';
$string['wwwroot'] = 'Web addresse';
$string['wwwrooterror'] = 'Webadressen synes ikke å være gyldig - denne Moodleinstallasjonen synes ikke å være der. Innstilling har blitt resatt.';

?>
