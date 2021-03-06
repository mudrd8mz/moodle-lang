<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9 + (Build: 20080324) (2007101509)
$string['autocreate'] = 'Kurs kan opprettes automatisk dersom det er påmelding til kurs som ennå ikke eksisterer i Moodle.';
$string['autocreation_settings'] = 'Autooppretting innstillinger';
$string['category'] = 'Kategori for autoopprettede kurs';
$string['course_fullname'] = 'Feltnavnet hvor kursets fulle navn er lagret.';
$string['course_id'] = 'Feltnavnet hvor kursID er lagret. Verdien i dette feltet brukes til å koble mot \"enrol_db_l_coursefield\" i Moodles kurstabell.';
$string['course_shortname'] = 'Feltnavnet hvor kursets kortnavn er lagret.';
$string['course_table'] = 'Tabellnavnet hvor vi kan finne kursdetaljer som kortnavn, fullt navn, ID osv.';
$string['dbhost'] = 'Server IP - navn eller nummer';
$string['dbname'] = 'Databasenavn';
$string['dbpass'] = 'Server passord';
$string['dbtable'] = 'Databasetabell';
$string['dbtype'] = 'Databasetype';
$string['dbuser'] = 'Serverbruker';
$string['defaultcourseroleid'] = 'Rollen som skal tildeles dersom ingen rolle er angitt.';
$string['description'] = 'Du kan bruke en ekstern database (nesten hva som helst) til å styre påmeldinger. Vi antar at din eksterne database inneholder felt med kurs ID og bruker ID. Disse blir sammenlignet med felt du velger i den lokale kurs og brukertabellen.';
$string['disableunenrol'] = 'Dersom JA vil tidligere påmeldte via ekstern database ikke bli utmeldt via samme plugin, samme hva.';
$string['enrol_database_autocreation_settings'] = 'Autoopprettelse av nye kurs';
$string['enrolname'] = 'Ekstern database';
$string['general_options'] = 'Generelle innstillinger';
$string['host'] = 'Vertsnavnet til databaseserveren';
$string['ignorehiddencourse'] = 'Dersom JA vil ikke brukere bli lagt til i kurs som er merket \"Utilgjengelige for studenter\".';
$string['local_fields_mapping'] = 'Moodle (lokal) databasefelter';
$string['localcoursefield'] = 'Feltnavnet i kurstabellen vi bruker for å koble mot oppføringer i den eksterne databasen. (eg idnumber).';
$string['localrolefield'] = 'Feltnavnet i rolletabellen som vi bruker for å koble mot oppføringer i den eksterne databasen. (eg shortname)';
$string['localuserfield'] = 'Feltnavnet i brukertabellen som vi bruker for å koble mot oppføringer i den eksterne databasen. (eg idnumber)';
$string['name'] = 'Databasen som skal brukes';
$string['pass'] = 'Passord for servertilgang';
$string['remote_fields_mapping'] = 'Databasefelt for (ekstern) påmelding.';
$string['remotecoursefield'] = 'Feltnavnet i den eksterne databasen som vi bruker til å koble mot oppføringer i kurstabellen.';
$string['remoterolefield'] = 'Feltnavnet i den eksterne tabellen som vi bruker for å koble mot oppføringer i rolletabellen.';
$string['remoteuserfield'] = 'Feltnavnet i den eksterne tabellen som vi bruker for å koble mot oppføringer i brukertabellen.';
$string['server_settings'] = 'Innstillinger for ekstern databaseserver';
$string['student_coursefield'] = 'Feltnavnet i påmeldingstabellen hvor vi forventer å finne kurs ID.';
$string['student_l_userfield'] = 'Feltnavnet i den lokale brukertabellen som vi bruker for å koble en bruker til en ekstern oppføring for studenter (eg idnumber).';
$string['student_r_userfield'] = 'Feltnavnet i den eksterne studentpåmeldingstabellen hvor vi forventer å finne bruker ID.';
$string['student_table'] = 'Tabellnavnet hvor studentpåmeldinger er lagret.';
$string['teacher_coursefield'] = 'Feltnavnet i lærerpåmeldingstabellen hvor vi forventer å finne kurs ID.';
$string['teacher_l_userfield'] = 'Feltnavnet i den lokale brukertabellen som vi bruker til å koble en bruker mot en ekstern oppføring for lærere (eg idnumber).';
$string['teacher_r_userfield'] = 'Feltnavnet i den eksterne lærerpåmeldingstabellen hvor vi forventer å finne bruker ID.';
$string['teacher_table'] = 'Tabellnavnet hvor lærerpåmeldinger er lagret.';
$string['template'] = 'Ekstra: Autopprettede kurs kan arve innstillingene fra et malkurs. Angi her kortnavnet til malkurset.';
$string['type'] = 'Type databaseserver';
$string['user'] = 'Brukernavn for tilgang til serveren';
?>
