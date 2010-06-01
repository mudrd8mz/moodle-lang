<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9.8 (Build: 20100325) (2007101580)


$string['autocreate'] = 'Kursus var izveidot automātiski, ja sistēmā Moodle veiktas reģistrācijas uz kursiem, kas vēl nepastāv.';
$string['autocreation_settings'] = 'Automātiskās izveides iestatījumi';
$string['category'] = 'Automātiski izveidoto kursu kategorija.';
$string['course_fullname'] = 'Tā lauka nosaukums, kur tiek glabāts kursa pilnais nosaukums.';
$string['course_id'] = 'Tā lauka nosaukums, kur tiek glabāts kursa ID. Šī lauka vērtības tiek izmantotas, lai veidotu atbilstības sistēmas Moodle kursu tabulas lauka “enrol_db_l_coursefield” vērtībām.';
$string['course_shortname'] = 'Tā lauka nosaukums, kur tiek glabāts kursa īsais nosaukums.';
$string['course_table'] = 'Pēc tam tās tabulas nosaukums, kur vajadzētu būt detalizētai informācijai par kursu (īsais nosaukums, pilnais nosaukums, ID u.c.)';
$string['dbhost'] = 'Servera IP nosaukums vai numurs';
$string['dbname'] = 'Datubāzes nosaukums';
$string['dbpass'] = 'Servera parole';
$string['dbtable'] = 'Datubāzes tabula';
$string['dbtype'] = 'Datubāzes tips';
$string['dbuser'] = 'Servera lietotājs';
$string['defaultcourseroleid'] = 'Loma, kas tiks piešķirta pēc noklusējuma, ja nav norādīta neviena cita loma.';
$string['description'] = 'Savu reģistrāciju kontrolei varat izmantot ārēju datubāzi (gandrīz jebkādu). Tiek pieņemts, ka ārējā datubāzē ir lauks ar kursa ID, kā arī lauks ar lietotāja ID. Tie tiek salīdzināti ar lokālajā kursu un lietotāju tabulā izvēlētajiem laukiem.';
$string['disableunenrol'] = 'Ja iestatīts jā, lietotāji, kas iepriekš reģistrēti ar ārējās datubāzes spraudni, netiks atreģistrēti ar šo pašu spraudni neatkarīgi no datubāzes satura.';
$string['enrol_database_autocreation_settings'] = 'Automātiska jaunu kursu izveide';
$string['enrolname'] = 'Ārējā datubāze';
$string['general_options'] = 'Vispārīgās opcijas';
$string['host'] = 'Datubāzes servera resursdatora nosaukums.';
$string['ignorehiddencourse'] = 'Ja iestatīta apstiprinoša vērtība, lietotāji netiks reģistrēti kursos, kas iestatīti kā studentiem nepieejami.';
$string['local_fields_mapping'] = 'Moodle (lokālās) datubāzes lauki';
$string['localcoursefield'] = 'Kursu tabulas tā lauka nosaukums, ko izmanto attālās datubāzes ierakstu saskaņošanai (piemēram, id_numurs).';
$string['localrolefield'] = 'Lomu tabulas tā lauka nosaukums, ko izmanto attālās datubāzes ierakstu saskaņošanai (piemēram, īsais_nosaukums).';
$string['localuserfield'] = 'Lietotāju tabulas tā lauka nosaukums, ko izmanto attālās datubāzes ierakstu saskaņošanai (piemēram, id_numurs).';
$string['name'] = 'Konkrētā izmantojamā datubāze.';
$string['pass'] = 'Parole, lai piekļūtu serverim.';
$string['remote_fields_mapping'] = 'Reģistrācijas (attālās) datubāzes lauki.';
$string['remotecoursefield'] = 'Attālās tabulas tā lauka nosaukums, ko izmanto kursu tabulas ierakstu saskaņošanai.';
$string['remoterolefield'] = 'Attālās tabulas tā lauka nosaukums, ko izmanto lomu tabulas ierakstu saskaņošanai.';
$string['remoteuserfield'] = 'Attālās tabulas tā lauka nosaukums, ko izmanto lietotāju tabulas ierakstu saskaņošanai.';
$string['server_settings'] = 'Ārējās datubāzes servera iestatījumi';
$string['student_coursefield'] = 'Studentu reģistrācijas tabulas tā lauka nosaukums, kurā jābūt norādītam kursa ID.';
$string['student_l_userfield'] = 'Lokālās lietotāju tabulas tā lauka nosaukums, ko izmanto lietotāju un attālo studentu ierakstu atbilstības atrašanai (piemēram, id_numurs).';
$string['student_r_userfield'] = 'Attālās studentu reģistrācijas tabulas tā lauka nosaukums, kurā jābūt norādītam lietotāja ID.';
$string['student_table'] = 'Tās tabulas nosaukums, kurā glabājas dati par studentu reģistrāciju.';
$string['teacher_coursefield'] = 'Pasniedzēju reģistrācijas tabulas tā lauka nosaukums, kurā jābūt norādītam kursa ID.';
$string['teacher_l_userfield'] = 'Lokālās lietotāju tabulas tā lauka nosaukums, ko izmanto lietotāju un attālo pasniedzēju ierakstu atbilstības atrašanai (piemēram, id_numurs).';
$string['teacher_r_userfield'] = 'Attālās pasniedzēju reģistrācijas tabulas tā lauka nosaukums, kurā jābūt norādītam lietotāja ID.';
$string['teacher_table'] = 'Tās tabulas nosaukums, kurā glabājas dati par pasniedzēju reģistrāciju.';
$string['template'] = 'Nav obligāti: automātiski izveidoto kursu iestatījumus var kopēt no kāda veidnes kursa. Šeit ierakstiet veidnes kursa īso nosaukumu.';
$string['type'] = 'Datubāzes servera tips.';
$string['user'] = 'Lietotājvārds, lai piekļūtu serverim.';

?>
