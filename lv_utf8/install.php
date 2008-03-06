<?PHP // $Id$ 
      // install.php - created with Moodle 1.7 beta + (2006101003)


$string['admindirerror'] = 'Norādītais administratora direktorijs ir nepareizs';
$string['admindirname'] = 'Administratora direktorijs';
$string['admindirsetting'] = 'Lai piekļūtu vadības panelim vai citai programmai, /admin kā īpašs URL 
    tiek izmantots tikai dažos tīmekļa resursdatoros.  Diemžēl tas konfliktē ar Moodle 
    administratoru lapu parastajām atrašanās vietām.  To var labot, 
    sistēmā pārdēvējot administratora direktoriju un šeit norādot 
    jauno nosaukumu.  Piemēram: <br /> <br /><b>moodleadmin</b><br /> <br />
    Šādi sistēmā Moodle tiks izlabotas administratoru saites.';
$string['admindirsettinghead'] = 'Administratora direktorija iestatīšana...';
$string['admindirsettingsub'] = 'Lai piekļūtu vadības panelim vai citai programmai, /admin kā īpašs URL 
    tiek izmantots tikai dažos tīmekļa resursdatoros.  Diemžēl tas konfliktē ar Moodle 
    administratoru lapu parastajām atrašanās vietām.  To var labot, 
    sistēmā pārdēvējot administratora direktoriju un šeit norādot 
    jauno nosaukumu.  Piemēram: <br /> <br /><b>moodleadmin</b><br /> <br />
    Šādi sistēmā Moodle tiks izlabotas administratoru saites.';
$string['caution'] = 'Brīdinājums.';
$string['chooselanguage'] = 'Izvēlēties valodu';
$string['chooselanguagehead'] = 'Valodas izvēle';
$string['chooselanguagesub'] = 'Lūdzu, izvēlieties valodu, kas tiks lietota TIKAI instalēšanas laikā. Vietni un lietotājiem pieejamās valodas vēlāk varēsit izvēlēties citā ekrānā.';
$string['compatibilitysettings'] = 'Notiek jūsu PHP iestatījumu pārbaude...';
$string['compatibilitysettingshead'] = 'PHP iestatījumu pārbaude...';
$string['compatibilitysettingssub'] = 'Lai sistēma Moodle varētu darboties pareizi, jūsu serverim ir veiksmīgi jānokārto visas šīs pārbaudes';
$string['configfilenotwritten'] = 'Instalēšanas skripts nevarēja automātiski izveidot failu config.php, kurā tiek iekļauti visi jūsu izraudzītie iestatījumi, jo Moodle direktorijā, iespējams, nevar ierakstīt failus. Tālāk norādīto kodu varat manuāli iekopēt Moodle saknes direktorijā esošajā failā config.php.';
$string['configfilewritten'] = 'Fails config.php ir sekmīgi izveidots';
$string['configurationcomplete'] = 'Konfigurēšana pabeigta';
$string['configurationcompletehead'] = 'Konfigurēšana pabeigta';
$string['configurationcompletesub'] = 'Sistēma Moodle mēģināja saglabāt jūsu konfigurāciju failā, kas atrodas jūsu Moodle instalācijas saknes direktorijā.';
$string['database'] = 'Datubāze';
$string['databasecreationsettings'] = 'Tagad ir jāveic tās datubāzes iestatījumu konfigurēšana, kurā tiks
    saglabāta lielākā daļa Moodle datu.  Instalēšanas programma automātiski izveidos šo datubāzi,
    izmantojot tālāk norādītos iestatījumus.<br />
    <br /><br />
       <b>Tips:</b> instalēšanas programmas noteiktais ir “mysql”
       <b>Resursdators:</b> instalēšanas programmas noteiktais ir “localhost”
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> instalēšanas programmas noteiktais ir “root”
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> brīvi izraudzīts prefikss izmantošanai visu tabulu nosaukumos';
$string['databasecreationsettingshead'] = 'Tagad ir jāveic tās datubāzes iestatījumu konfigurēšana, kurā tiks
    saglabāta lielākā daļa Moodle datu.  Instalēšanas programma automātiski izveidos šo datubāzi,
    izmantojot tālāk norādītos iestatījumus.';
$string['databasecreationsettingssub'] = '<b>Tips:</b> instalēšanas programmas noteiktais ir “mysql”
       <b>Resursdators:</b> instalēšanas programmas noteiktais ir “localhost”
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> instalēšanas programmas noteiktais ir “root”
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> brīvi izraudzīts prefikss izmantošanai visu tabulu nosaukumos';
$string['databasesettings'] = 'Tagad ir jāveic tās datubāzes konfigurēšana, kurā tiks
    saglabāta lielākā daļa Moodle datu.  Šai datubāzei ir jābūt jau izveidotai,
    kā arī jābūt izveidotam datubāzes piekļuves lietotājvārdam un parolei.<br />
    <br /><br />
       <b>Tips:</b> mysql vai postgres7<br />
       <b>Resursdators:</b> piemēram, localhost vai db.isp.com<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> brīvi izraudzīts prefikss izmantošanai visu tabulu nosaukumos';
$string['databasesettingshead'] = 'Tagad ir jāveic tās datubāzes konfigurēšana, kurā tiks
    saglabāta lielākā daļa Moodle datu.  Šai datubāzei ir jābūt jau izveidotai,
    kā arī jābūt izveidotam datubāzes piekļuves lietotājvārdam un parolei.';
$string['databasesettingssub'] = '<b>Tips:</b> mysql vai postgres7<br />
       <b>Resursdators:</b> piemēram, localhost vai db.isp.com<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> brīvi izraudzīts prefikss izmantošanai visu tabulu nosaukumos';
$string['databasesettingssub_mssql'] = '<b>Tips:</b> SQL*Server (ne UTF-8) <b><font color=\"red\">eksperimentāls! (Nav paredzēts izmantošanai darbam.)</font></b><br />
       <b>Resursdators:</b> piemēram, localhost vai db.isp.com<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> prefikss izmantošanai visu tabulu nosaukumos (obligāts)';
$string['databasesettingssub_mssql_n'] = '<b>Tips:</b> SQL*Server (ar iespējotu UTF-8)<br />
       <b>Resursdators:</b> piemēram, localhost vai db.isp.com<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> prefikss izmantošanai visu tabulu nosaukumos (obligāts)';
$string['databasesettingssub_mysql'] = '<b>Tips:</b> MySQL<br />
       <b>Resursdators:</b> piemēram, localhost vai db.isp.com<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> prefikss izmantošanai visu tabulu nosaukumos (nav obligāts)';
$string['databasesettingssub_oci8po'] = '<b>Tips:</b> Oracle<br />
       <b>Resursdators:</b> nav izmantots, jāatstāj tukšs<br />
       <b>Nosaukums:</b> savienojumam tnsnames.ora piešķirtais nosaukums<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> prefikss izmantošanai visu tabulu nosaukumos (obligāts, maks. 20 rakstzīmes)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tips:</b> SQL*Server (over ODBC) <b><font color=\"red\">eksperimentāls! (Nav paredzēts izmantošanai darbam.)</font></b><br />
       <b>Resursdators:</b> DSN piešķirtais nosaukums ODBC vadības panelī<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> prefikss izmantošanai visu tabulu nosaukumos (obligāts)';
$string['databasesettingssub_postgres7'] = '<b>Tips:</b> PostgreSQL<br />
       <b>Resursdators:</b> piemēram, localhost vai db.isp.com<br />
       <b>Nosaukums:</b> datubāzes nosaukums, piemēram, Moodle<br />
       <b>Lietotājs:</b> datubāzes izmantotāja lietotājvārds<br />
       <b>Parole:</b> datubāzes piekļuves parole<br />
       <b>Tabulas prefikss:</b> prefikss izmantošanai visu tabulu nosaukumos (obligāts)';
$string['dataroot'] = 'Datu direktorijs';
$string['datarooterror'] = 'Norādīto vienumu “Datu direktorijs” nevar atrast vai izveidot.  Vai nu labojiet ceļa nosaukumu, vai arī šo direktoriju izveidojiet manuāli.';
$string['dbconnectionerror'] = 'Nevar izveidot savienojumu ar norādīto datubāzi. Lūdzu, pārbaudiet datubāzes iestatījumus.';
$string['dbcreationerror'] = 'Datubāzes izveides kļūda. Nevar izveidot piešķirto datubāzes nosaukumu, izmantojot norādītos iestatījumus';
$string['dbhost'] = 'Resursu serveris';
$string['dbpass'] = 'Parole';
$string['dbprefix'] = 'Tabulu prefikss';
$string['dbtype'] = 'Tips';
$string['dbwrongencoding'] = 'Atlasītajā datubāzē tiek izmantots kāds no neieteicamajiem kodējumiem ($a). Šī kodējuma vietā labāk izmantot datubāzi ar vienotu kodējumu unikodā (UTF-8). Jebkurā gadījumā šo pārbaudi var apiet, tālāk atzīmējot izvēles rūtiņu “Izlaist datubāzes kodējuma pārbaudi”, tomēr tas vēlāk var izraisīt darbības problēmas.';
$string['dbwronghostserver'] = 'Jāievēro sadaļā “Resursdators” minētie noteikumi.';
$string['dbwrongnlslang'] = 'Vides mainīgajam NLS_LANG tīmekļa serverī jāizmanto rakstzīmju kopa AL32UTF8. Lai iegūtu informāciju par pareizu OCI8 konfigurēšanu, skatiet PHP dokumentāciju.';
$string['dbwrongprefix'] = 'Jāievēro sadaļā “Resursdators” minētie noteikumi.';
$string['directorysettings'] = '<p>Lūdzu, apstipriniet šīs Moodle instalācijas atrašanās vietu.</p>

<p><b>Tīmekļa adrese:</b>
norādiet pilnu tīmekļa adresi, kurā tiks veikta piekļuve sistēmai Moodle.  
Ja jūsu tīmekļa vietnei var piekļūt, izmantojot vairākus URL, izvēlieties 
piemērotāko, kuru lietos jūsu mācību iestādes studenti.  Nelietojiet 
noslēdzošo slīpsvītru.</p>

<p><b>Moodle direktorijs:</b>
norādiet pilnu direktorija ceļu uz šo instalāciju.
Pārbaudiet lielo un mazo burtu lietojumu.</p>

<p><b>Datu direktorijs:</b>
ir jānorāda vieta, kurā sistēma Moodle var saglabāt augšupielādētos failus.  Šajā
direktorijā tīmekļa servera lietotājam (parasti “nobody” vai “apache”) jābūt atļaujai lasīt UN IERAKSTĪT failus, 
tomēr viņš nedrīkst šim direktorijam piekļūt 
tieši no tīmekļa.</p>';
$string['directorysettingshead'] = 'Lūdzu, apstipriniet šī Moodle instalācijas atrašanās vietas';
$string['directorysettingssub'] = '<b>Tīmekļa adrese:</b>
norādiet pilnu tīmekļa adresi, kurā tiks veikta piekļuve sistēmai Moodle.  
Ja jūsu tīmekļa vietnei var piekļūt, izmantojot vairākus URL, izvēlieties 
piemērotāko, kuru lietos jūsu mācību iestādes studenti.  Nelietojiet 
noslēdzošo slīpsvītru.
<br />
<br />
<b>Moodle direktorijs:</b>
norādiet pilnu direktorija ceļu uz šo instalāciju.
Pārbaudiet lielo un mazo burtu lietojumu.
<br />
<br />
<b>Datu direktorijs:</b>
ir jānorāda vieta, kurā sistēma Moodle var saglabāt augšupielādētos failus.  Šajā
direktorijā tīmekļa servera lietotājam (parasti “nobody” vai “apache”) jābūt atļaujai lasīt UN IERAKSTĪT failus, 
tomēr viņš nedrīkst šim direktorijam piekļūt 
tieši no tīmekļa.';
$string['dirroot'] = 'Moodle direktorijs';
$string['dirrooterror'] = 'Šķiet, ka vienuma “Moodle direktorijs” iestatījums nav pareizs — šajā vietā nevar atrast Moodle instalāciju. Tālāk norādītā vērtība ir atiestatīta.';
$string['download'] = 'Lejupielādēt';
$string['downloadlanguagebutton'] = 'Lejupielādēt &quot;$a&quot; valodas pakotni';
$string['downloadlanguagehead'] = 'Valodas pakotnes lejupielāde';
$string['downloadlanguagenotneeded'] = 'Varat turpināt instalēšanu, izmantojot noklusējuma (“{$a}”) valodas pakotni.';
$string['downloadlanguagesub'] = 'Tagad jums ir iespēja lejupielādēt konkrētas valodas pakotni un turpināt instalēšanu šajā valodā.<br /><br />Ja nevarat lejupielādēt valodas pakotni, instalēšana tiks turpināta angļu valodā. (Pēc instalēšanas pabeigšanas varēsit lejupielādēt un instalēt arī citu valodu pakotnes.)';
$string['environmenthead'] = 'Vides pārbaude...';
$string['environmentsub'] = 'Tiek veikta pārbaude, vai dažādi jūsu sistēmas komponenti atbilst sistēmas prasībām.';
$string['fail'] = 'Neveiksme';
$string['fileuploads'] = 'Failu augšupielāde';
$string['fileuploadserror'] = 'Šai funkcijai jābūt aktivizētai';
$string['fileuploadshelp'] = '<p>Šķiet, ka failu augšupielāde jūsu serverī ir atspējota.</p>

<p>Sistēmu Moodle joprojām var instalēt, tomēr bez šīs iespējas nevarēsit 
   augšupielādēt kursu failus vai jauno lietotāju profilu attēlus.</p>

<p>Lai iespējotu failu augšupielādi, jums (vai sistēmas administratoram) 
   ir jārediģē sistēmas galvenais fails php.ini un 
   parametra <b>file_uploads</b> iestatījums jānomaina uz “1”.</p>';
$string['gdversion'] = 'GD versija';
$string['gdversionerror'] = 'Lai varētu apstrādāt un izveidot attēlus, ir jābūt instalētai GD bibliotēkai.';
$string['gdversionhelp'] = '<p>Šķiet, ka jūsu serverī nav instalēta GD.</p>

<p>GD ir bibliotēka, kas ir nepieciešama PHP, lai sistēmā Moodle varētu apstrādāt attēlus 
   (piemēram, lietotāju profilu ikonas) un izveidot jaunus attēlus (piemēram, 
   reģistrācijas datu diagrammas).  Sistēma Moodle turpinās darboties arī bez GD — tikai šie līdzekļi 
   jums nebūs pieejami.</p>

<p>Lai sistēmā Unix bibliotēku GD pievienotu PHP, kompilējiet PHP, izmantojot parametru --with-gd.</p>

<p>Sistēmā Windows parasti var rediģēt failu php.ini, kā arī noņemt komentāra statusu rindai ar atsauci uz failu php_gd2.dll.</p>';
$string['globalsquotes'] = 'Riskanta vispārīgo iestatījumu apstrādes metode';
$string['globalsquoteserror'] = 'PHP iestatījumu labošana: atspējojiet register_globals un/vai iespējojiet magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Nav ieteicams atspējot funkciju Magic Quotes GPC un vienlaikus iespējot funkciju Register Globals.</p>

Failā php.ini ieteicams norādīt iestatījumu <b>magic_quotes_gpc = On</b> un <b>register_globals = Off</b>

Ja jums nav piekļuves failam php.ini, Moodle direktorija failā .htaccess, iespējams, varat ierakstīt 
   šādu rindu:
   <blockquote>php_value magic_quotes_gpc On</blockquote>
   <blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Instalēšana';
$string['langdownloaderror'] = '“{$a}” valodas pakotne diemžēl netika instalēta. Instalēšana tiks turpināta angļu valodā.';
$string['langdownloadok'] = '“{$a}” valodas pakotne tika sekmīgi instalēta. Instalēšana tiks turpināta šajā valodā.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Šai funkcijai jābūt deaktivizētai';
$string['magicquotesruntimehelp'] = '<p>Lai sistēma Moodle darbotos pareizi, funkcijai Magic Quotes Runtime jābūt izslēgtai.</p>

<p>Pēc noklusējuma tā parasti ir izslēgta — skatiet parametra <b>magic_quotes_runtime</b> iestatījumu failā php.ini.</p>

Ja jums nav piekļuves failam php.ini, Moodle direktorija failā .htaccess, iespējams, varat ierakstīt 
   šādu rindu:
   <blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Atmiņas apjoma ierobežojums';
$string['memorylimiterror'] = 'PHP atmiņas apjoms ir diezgan ierobežots — tas vēlāk var izraisīt problēmas.';
$string['memorylimithelp'] = '<p>Pašlaik iestatītais PHP atmiņas apjoma ierobežojums jūsu serverī ir $a.</p>

<p>Sistēmā Moodle tas vēlāk var izraisīt atmiņas izmantošanas problēmas, it īpaši tad, 
   ja būsit iespējojis lielu skaitu moduļu un/vai lietotāju.</p>

<p>Ieteicams konfigurēt PHP ar pēc iespējas lielāku atmiņas apjomu, piemēram, 40 MB.  
   Ir vairāki veidi, kā to var izdarīt, piemēram:</p>
<ol>
<li>Ja iespējams, atkārtoti kompilējiet PHP, izmantojot <i>--enable-memory-limit</i>.  
    Šādā gadījumā sistēma Moodle atmiņas apjoma ierobežojumu varēs iestatīt automātiski.</li>
<li>Ja jums ir piekļuve php.ini failam, varat mainīt tajā esošo parametra <b>memory_limit</b> 
    iestatījumu, piemēram, uz 40 MB.  Ja jums nav piekļuves šim failam, palūdziet 
    to izdarīt administratoram.</li>
<li>Dažos PHP serveros Moodle direktorijā var izveidot failu .htaccess, kurā 
    ir šāda rinda:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Tomēr dažos serveros tas neļaus darboties <b>nevienai</b> PHP lapai 
    (atverot šīs lapas, tiks parādīti kļūdas ziņojumi), un fails .htaccess būs jānoņem.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server ar UTF-8 atbalstu (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP ar paplašinājumu MSSQL nav pareizi konfigurēta un nevar sazināties ar SQL*Server.  Lūdzu, pārbaudiet php.ini failu vai atkārtoti kompilējiet PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP ar paplašinājumu MySQL nav pareizi konfigurēta un nevar sazināties ar MySQL.  Lūdzu, pārbaudiet php.ini failu vai atkārtoti kompilējiet PHP.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP ar paplašinājumu OCI8 nav pareizi konfigurēta un nevar sazināties ar Oracle.  Lūdzu, pārbaudiet php.ini failu vai atkārtoti kompilējiet PHP.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP ar paplašinājumu ODBC nav pareizi konfigurēta un nevar sazināties ar SQL*Server.  Lūdzu, pārbaudiet php.ini failu vai atkārtoti kompilējiet PHP.';
$string['pass'] = 'Nokārtots';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP ar paplašinājumu PGSQL nav pareizi konfigurēta un nevar sazināties ar PostgreSQL.  Lūdzu, pārbaudiet php.ini failu vai atkārtoti kompilējiet PHP.';
$string['phpversion'] = 'PHP versija';
$string['phpversionerror'] = 'PHP versijai jābūt vismaz 4.3.0 vai 5.1.0 (versijai 5.0.x piemīt vairākas zināmas problēmas).';
$string['phpversionhelp'] = '<p>Sistēmā Moodle jāizmanto PHP, kuras versija ir vismaz 4.3.0 vai 5.1.0 (versijai 5.0.x piemīt vairākas zināmas problēmas).</p>
<p>Jūs pašlaik lietojat versiju $a</p>
<p>Ir jājaunina PHP vai jāpāriet uz resursdatoru, kurā tiek izmantota jaunāka PHP versija.</p>
(Ja PHP versija ir 5.0.x, var arī atkāpties uz versiju 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['safemode'] = 'Drošais režīms';
$string['safemodeerror'] = 'Ja ir ieslēgts drošais režīms, sistēmā Moodle tas var izraisīt darbības problēmas';
$string['safemodehelp'] = '<p>Ja ir ieslēgts drošais režīms, sistēmā Moodle tas var izraisīt vairākas problēmas, piemēram, 
   iespējams, nebūs atļauts izveidot jaunus failus.</p>
   
<p>Drošais režīms parasti tiek iespējots publiskos tīmekļa resursdatoros, kas tiek pārspīlēti sargāti, tādēļ 
   savai Moodle vietnei jums, iespējams, tikai jāatrod cits tīmekļa resursu pakalpojumu uzņēmums.</p>
   
<p>Ja vēlaties, varat turpināt instalēšanu, tomēr jārēķinās, ka vēlāk var tikt izraisītas dažas problēmas.</p>';
$string['sessionautostart'] = 'Automātiska sesijas startēšana';
$string['sessionautostarterror'] = 'Šai funkcijai jābūt deaktivizētai';
$string['sessionautostarthelp'] = '<p>Sistēmā Moodle ir nepieciešams sesijas atbalsts, un sistēma bez šī atbalsta nedarbosies.</p>

<p>Sesijas var iespējot failā php.ini — atrodiet parametru session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Izlaist datubāzes kodējuma pārbaudi';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Jūs redzat šo lapu, jo esat veiksmīgi instalējis un 
    palaidis savā datorā pakotni <strong>$a->packname $a->packversion</strong>. Apsveicam!';
$string['welcomep30'] = 'Šajā <strong>$a->installername</strong> laidienā ir iekļautas lietojumprogrammas, 
    kas paredzētas, lai izveidotu vidi, kurā darbosies sistēma <strong>Moodle</strong>, proti:';
$string['welcomep40'] = 'Pakotnē ir iekļauta arī sistēma <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Visu šīs pakotnes lietojumprogrammu izmantošanu regulē attiecīgo 
    licenču nosacījumi. Visā <strong>$a->installername</strong> pakotnē ir iekļauts 
    <a href=\"http://www.opensource.org/docs/definition_plain.html\">atklātais pirmkods</a>, un tā tiek izplatīta 
    saskaņā ar <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> licences nosacījumiem.';
$string['welcomep60'] = 'Nākamajās lapās tiks sniegti vienkārši norādījumi par to, kā 
    datorā konfigurēt un iestatīt sistēmu <strong>Moodle</strong>. Varat akceptēt noklusējuma 
    iestatījumus vai varat tos mainīt, lai pielāgotu savām vajadzībām.';
$string['welcomep70'] = 'Noklikšķiniet uz pogas Tālāk, lai turpinātu sistēmas <strong>Moodle</strong> instalēšanu.';
$string['wwwroot'] = 'Tīmekļa adrese';
$string['wwwrooterror'] = 'Iestatījums “Tīmekļa adrese”, šķiet, ir nederīgs, jo šī sistēmas Moodle instalācija tajā nav atrodama. Tālāk norādītā vērtība ir atiestatīta.';

?>
