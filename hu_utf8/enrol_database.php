<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.7 beta + (2006101003)
 
$string['autocreate'] = 'Automatikusan jöhetnek létre kurzusok, ha a Moodle-ban még nem létező kurzusra érkezik beiratkozás.';
$string['autocreation_settings'] = 'Automatikus létrehozás beállításai';
$string['category'] = 'Az automatikusan létrehozott kurzusok kategóriája.';
$string['course_fullname'] = 'A kurzus teljes nevét tároló mező neve.';
$string['course_id'] = 'Azon mező neve, amely a kurzus azonosítóját tárolja. A mező értékei a Moodle kurzustáblázatának \"enrol_db_l_coursefield\" a mezőjében lévőkkel egyeznek.';
$string['course_shortname'] = 'A kurzus rövid nevét tároló mező neve.';
$string['course_table'] = 'A kurzus részleteit (rövid nevét, teljes nevét, azonosítóját stb.) tároló táblázat neve.';
$string['dbtype'] = 'Adatbázis típusa';
$string['dbhost'] = 'A szerver IP-címe vagy -száma';
$string['dbuser'] = 'Szerverfelhasználó';
$string['dbpass'] = 'Szerverjelszó';
$string['dbname'] = 'Adatbázisnév';
$string['dbtable'] = 'Adatbázis-táblázat';
$string['defaultcourseroleid'] = 'Alaphelyzetben, egyéb szerep megadása híján hozzárendelt szerep.';
$string['description'] = 'A beiratkozások nyilvántartására használhat (szinte akármilyen) külső adatbázist. Feltételezzük, hogy a külső adatbázis tartalmaz egy kurzusazonosító és egy felhasználó-azonosító mezőt. Ezeket a rendszer egybeveti a helyi kurzustáblázatból és felhasználótáblázatból Ön által kiválasztott mezőkkel.';
$string['disableunenrol'] = 'Igenre állítva a korábban külső adatbázis-segédprogrammal beiratkozottak ugyanezzel a segédprogrammal nem iratkoznak ki, az adatbázis tartalmától függetlenül.';
$string['enrolname'] = 'Külső adatbázis';
$string['enrol_database_autocreation_settings'] = 'Új kurzusok automatikus létrehozása';
$string['general_options'] = 'Általános lehetőségek';
$string['host'] = 'Az adatbázisszerver gazdagépének neve.';
$string['ignorehiddencourse'] = 'Bekapcsolása esetén a rendszer a felhasználókat nem iratkoztatja be tanulók számára nem elérhetőnek beállított kurzusokra.';
$string['localcoursefield'] = 'A kurzustáblázatban a távoli adatbázisban lévő bejegyzések megfeleltetésére használt mező neve (pl. azonosító szám).';
$string['localrolefield'] = 'A felhasználói táblázatban a távoli adatbázisban lévő bejegyzések megfeleltetésére használt mező neve (pl. rövid név).';
$string['localuserfield'] = 'A felhasználói táblázatban a távoli adatbázisban lévő bejegyzések megfeleltetésére használt mező neve (pl. azonosító szám). ';
$string['local_fields_mapping'] = 'A Moodle (helyi) adatbázismezői';
$string['name'] = 'A konkrétan használandó adatbázis';
$string['pass'] = 'A szerver elérésére szolgáló jelszó';
$string['remote_fields_mapping'] = '(Távoli) beiratkozási adatbázismezők';
$string['remotecoursefield'] = 'A távoli táblázatban a kurzustáblázatban lévő bejegyzések megfeleltetésére használt mező neve.';
$string['remoterolefield'] = 'A távoli táblázatban a szerepek táblázatában lévő bejegyzések megfeleltetésére használt mező neve.';
$string['remoteuserfield'] = 'A távoli táblázatban a felhasználói táblázatban lévő bejegyzések megfeleltetésére használt mező neve.';
$string['server_settings'] = 'Külső adatbázisszerver beállításai';
$string['student_coursefield'] = 'A tanulói beiratkozási táblázatban a kurzusazonosítót várhatóan tartalmazó mező neve.';
$string['student_l_userfield'] = 'A helyi felhasználói táblázatban a tanulók távoli rekordja alapján a felhasználó megfeleltetésére használt mező neve (pl. azonosító szám).';
$string['student_r_userfield'] = 'A távoli tanulói beiratkozási táblázatban a felhasználói azonosítót várhatóan tartalmazó mező neve.';
$string['student_table'] = 'A tanulói beiratkozásokat tároló táblázat neve.';
$string['teacher_coursefield'] = 'A távoli tanári beiratkozási táblázatban a kurzusazonosítót várhatóan tartalmazó mező neve.';
$string['teacher_l_userfield'] = 'A helyi felhasználói táblázatban a tanárok távoli rekordja alapján a felhasználó megfeleltetésére használt mező neve (pl. azonosító szám).';
$string['teacher_r_userfield'] = 'A távoli tanári beiratkozási táblázatban a felhasználói azonosítót várhatóan tartalmazó mező neve.';
$string['teacher_table'] = 'A tanári beiratkozásokat tároló táblázat neve.';
$string['template'] = 'Opcionális: az automatikusan létrehozott kurzusok a beállításokat átmásolhatják egy sablonkurzusból. Itt adja meg a sablonkurzus rövid nevét.';
$string['type'] = 'Az adatbázisszerver típusa';
$string['user'] = 'A szerver elérésére szolgáló felhasználónév';

?>