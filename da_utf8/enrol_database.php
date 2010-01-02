<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['autocreate'] = 'Kurser oprettes automatisk hvis der er tilmeldinger til et kursus der ikke allerede eksisterer i Moodle.';
$string['autocreation_settings'] = 'Indstillinger på automatisk oprettede kurser';
$string['category'] = 'Kategorien til automatisk oprettede kurser.';
$string['course_fullname'] = 'Navnet på feltet med kursets fulde navn.';
$string['course_id'] = 'Navnet på feltet hvor kursets ID er gemt. Værdien i dette felt bliver brugt til at sammenligne feltet \"enrol_db_l_coursefield\" i Moodles kursustabel';
$string['course_shortname'] = 'Navnet på feltet med kursets korte navn.';
$string['course_table'] = 'Navnet på tabellen hvor det kan forventes at finde kursusdetaljer som \"kort navn, fulde navn, ID\" osv.';
$string['dbhost'] = 'Server-IP, navn eller nummer';
$string['dbname'] = 'Databasenavn';
$string['dbpass'] = 'Serveradgangskode';
$string['dbtable'] = 'Databasetabel';
$string['dbtype'] = 'Databasetype';
$string['dbuser'] = 'Serverbruger';
$string['defaultcourseroleid'] = 'Den rolle, der tildeles automatisk, hvis ingen anden rolle er specificeret.';
$string['description'] = 'Du kan bruge en ekstern database (af næsten enhver slags) til at kontrollere dine tilmeldinger til kurser. Det forudsættes at den eksterne database indeholder et felt med et kursus-ID og et felt der indeholder et bruger-ID. Disse bliver sammenlignet med de felter du vælger lokalt i kursus- og brugertabel.';
$string['disableunenrol'] = 'Hvis du vælger ja her vil brugere, der tidligere er tilmeldt via det eksterne database-plugin, ikke frameldes af samme plugin uanset databasens indhold.';
$string['enrol_database_autocreation_settings'] = 'Automatisk oprettelse af nye kurser';
$string['enrolname'] = 'Ekstern database';
$string['general_options'] = 'Generelle indstillinger';
$string['host'] = 'Databasens værtsnavn';
$string['ignorehiddencourse'] = 'Hvis du vælger ja her vil brugere ikke blive tilmeldt kurser, der ikke er tilgængelige for studerende.';
$string['local_fields_mapping'] = 'Moodles (lokale) databasefelter';
$string['localcoursefield'] = 'Navnet på feltet i kursustabellen som skal matche med den eksterne database (f.eks. ID-nummer)';
$string['localrolefield'] = 'Navnet på feltet i rolletabellen der bruges til at matche med den eksterne databases felt (f.eks. kortnavn)';
$string['localuserfield'] = 'Navnet på feltet i brugertabellen der bruges til at matche med den eksterne databases felt (f.eks. ID-nummer)';
$string['name'] = 'Databasen der skal bruges.';
$string['pass'] = 'Adgangskode til serveren.';
$string['remote_fields_mapping'] = 'Databasefelter (eksternt) til tilmeldinger.';
$string['remotecoursefield'] = 'Navnet på feltet i den eksterne tabel der bruges til at matche poster i kursustabellen';
$string['remoterolefield'] = 'Navnet på feltet i den eksterne tabel der bruges til at matche poster i rolletabellen.';
$string['remoteuserfield'] = 'Navnet på feltet i den eksterne tabel der bruges til at matche poster i brugertabellen.';
$string['server_settings'] = 'Ekstern databaseserverindstillinger';
$string['student_coursefield'] = 'Navnet på det felt i elevtilmeldingstabellen som forventes at indeholde feltet med kursus-ID.';
$string['student_l_userfield'] = 'Navnet på feltet i den lokale brugertabel der bruges til at matche en bruger med en ekstern tabel med studerende (f.eks. ID-nummer)';
$string['student_r_userfield'] = 'Navnet på feltet i den eksterne elevtilmeldingstabel som forventes at indeholde feltet med bruger-ID.';
$string['student_table'] = 'Navnet på tabellen hvor elevtilmeldingerne er gemt.';
$string['teacher_coursefield'] = 'Navnet på feltet i lærertilmeldingstabellen som forventes at indeholde kursets ID-nummer.';
$string['teacher_l_userfield'] = 'Navnet på feltet i den lokale brugertabel der bruges til at matche en bruger med en ekstern tabel med lærere (f.eks. ID-nummer)';
$string['teacher_r_userfield'] = 'Navnet på feltet i den eksterne lærertilmeldingstabel som forventes at indeholde feltet med bruger-ID.';
$string['teacher_table'] = 'Navnet på tabellen hvor lærertilmeldinger er gemt.';
$string['template'] = 'Valgfrit: Automatisk oprettede kurser kan kopiere deres indstillinger fra en kursusskabelon. Hvis det er tilfældet kan du skrive det korte navn på det skabelonkursus der kopieres fra.';
$string['type'] = 'Databaseservertype.';
$string['user'] = 'Brugernavn til serveren.';
$string['local_coursefield'] = 'Navnet på feltet i kursustabellen der kan bruges til at sammenkæde data med den eksterne database. (eksempelvis idnummer)'; // ORPHANED

?>
