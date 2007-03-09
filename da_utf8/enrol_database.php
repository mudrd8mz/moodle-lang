<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.7+ (2006101007)


$string['autocreate'] = 'Kurser oprettes automatisk hvis der er tilmeldinger til et kursus er ikke allerede eksisterer i Moodle.';
$string['autocreation_settings'] = 'Autooprettelses indstillinger';
$string['category'] = 'Kategorien for automatisk oprettede kurser.';
$string['course_fullname'] = 'Navnet på feltet hvor kursets fulde navn kan findes.';
$string['course_id'] = 'Navnet på feltet hvor kursets ID er gemt. Værdien i dette felt bliver brugt til at sammenligne feltet \"enrol_db_l_coursefield\" i moodle\'s kursustabel';
$string['course_shortname'] = 'Navnet på feltet hvor kursets korte navn kan findes.';
$string['course_table'] = 'Navnet på tabellen hvor det kan forventes at finde kursusdetaljer som \"kort navn, fulde navn, ID\" osv.';
$string['description'] = 'Du kan bruge en ekstern database (af næsten enhver slags) til at kontrollere dine tilmeldinger til kurser. Det forudsættes at den eksterne database indeholder et felt med et kursusID og et felt der indeholder et brugerID. Disse bliver så sammenlignet med de felter du vælger i det lokale kursus og brugertabel.';
$string['enrolname'] = 'Ekstern database';
$string['general_options'] = 'Generelle indstillinger';
$string['host'] = 'Databasens værtsnavn';
$string['local_coursefield'] = 'Navnet på feltet i kursustabellen der kan bruges til at sammenkæde data med den eksterne database. (eksempelvis idnummer)';
$string['local_fields_mapping'] = 'Moodle (lokalt) database felt';
$string['name'] = 'Databasen der skal bruges.';
$string['pass'] = 'Password til serveren.';
$string['remote_fields_mapping'] = 'Tilmelding (ekstern) database felter.';
$string['server_settings'] = 'Ekstern databaseserver indstillinger';
$string['student_coursefield'] = 'Navnet på det felt i elevtilmeldingstabellen som der forventes at indeholde kursusID feltet.';
$string['student_l_userfield'] = 'Navnet på det felt i den lokale brugertabel der bruges til at sammenkæde en bruger til den eksterne tabel med elever (f.eks. idnummer)';
$string['student_r_userfield'] = 'Navnet på feltet i den eksterne elevtilmeldings tabel hvor elevens id kan findes.';
$string['student_table'] = 'Navnet på tabellen hvor elevtilmeldingerne er gemt.';
$string['teacher_coursefield'] = 'Navnet på feltet i undervisertilmeldingstabellen hvor det kan forventes at finde kursets IDnummer i.';
$string['teacher_l_userfield'] = 'Navnet på feltet i den lokale brugertabel der kan bruges til at sammenkæde brugeren til en ekstern tabel med undervisere (f.eks. IDnummer)';
$string['teacher_r_userfield'] = 'Navnet på feltet i den eksterne undervisertilmeldingstabel hvor brugerens ID kan findes.';
$string['teacher_table'] = 'Navnet på tabellen hvor underviserens tilmeldinger er gemt.';
$string['template'] = 'Valgfrit: auto-oprettede kurser kan kopiere deres indstillinger fra et skabelons/meta kursus. Hvis det er tilfældet kan du skrive det korte navn på det meta / skabelons kursus der der kopieres fra.';
$string['type'] = 'Databaseserver type.';
$string['user'] = 'Brugernavn til at tilgå serveren.';

?>
