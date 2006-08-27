<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 Beta 3 (2006041100)


$string['autocreate'] = 'Automatikusan lehet létrehozni kurzusokat, ha olyan kurzushoz van beiratkozás, amely még nem szerepel a Moodle-ban.';
$string['autocreation_settings'] = 'Automatikus létrehozás beállításai';
$string['category'] = 'Az automatikusan létrehozott kurzusok kategóriája';
$string['course_fullname'] = 'Azon mező neve, amely a kurzus teljes nevét tárolja.';
$string['course_id'] = 'Azon mező neve, amely a kurzus azonosítóját tárolja.
A mező értékei a Moodle kurzustáblázatának  \"enrol_db_l_coursefield\" mezőjében lévőkkel egyeznek. 	 ';
$string['course_shortname'] = 'Azon mező neve, amely a kurzus rövid nevét tárolja.';
$string['course_table'] = 'Azon táblázat neve, ahol a kurzus részleteit (rövid nevét, teljes nevét, azonosítóját stb.) tároljuk.';
$string['description'] = 'A beiratkozások nyilvántartására használhat (szinte akármilyen) külső adatbázist. Feltételezzük, hogy a külső adatbázis tartalmaz egy kurzusazonosító és egy felhasználó-azonosító mezőt. Ezeket a rendszer egybeveti a helyi kurzustáblázatból és felhasználótáblázatból Ön által kiválasztott mezőkkel.';
$string['enrolname'] = 'Külső adatbázis';
$string['general_options'] = 'Általános lehetőségek';
$string['host'] = 'Az adatbázisszerver gazdagépének neve.';
$string['local_coursefield'] = 'A kurzustáblázatban lévő azon mező neve, amelyet a távoli adatbázisban lévő bejegyzések megfeleltetésére használunk (pl. azonosítószám). ';
$string['local_fields_mapping'] = 'A Moodle (helyi) adatbázismezői';
$string['name'] = 'A konkrétan használandó adatbázis';
$string['pass'] = 'A szerver elérésére szolgáló jelszó';
$string['remote_fields_mapping'] = '(Távoli) beiratkozási adatbázismezők';
$string['server_settings'] = 'Külső adatbázis szerverének beállításai';
$string['student_coursefield'] = 'A tanulói beiratkozási táblázatban azon mező neve, amelyben a kurzusazonosítót szeretnénk megtalálni. ';
$string['student_l_userfield'] = 'A helyi felhasználói táblázatban lévő azon mező neve, amelyet a tanulók távoli rekordja alapján a felhasználó megfeleltetésére használunk (pl. azonosítószám). ';
$string['student_r_userfield'] = 'A távoli tanulói beiratkozási táblázatban azon mező neve, amelyben a felhasználói azonosítót szeretnénk megtalálni. ';
$string['student_table'] = 'Azon táblázat neve, amely a tanulói beiratkozásokat tárolja.';
$string['teacher_coursefield'] = 'A távoli tanári beiratkozási táblázatban azon mező neve, amelyben a kurzusazonosítót szeretnénk megtalálni. ';
$string['teacher_l_userfield'] = 'A helyi felhasználói táblázatban lévő azon mező neve, amelyet a tanárok távoli rekordja alapján a felhasználó megfeleltetésére használunk (pl. azonosítószám). ';
$string['teacher_r_userfield'] = 'A távoli tanári beiratkozási táblázatban azon mező neve, amelyben a felhasználói azonosítót szeretnénk megtalálni. ';
$string['teacher_table'] = 'Azon táblázat neve, amely a tanári beiratkozásokat tárolja.';
$string['template'] = 'Opcionális: az automatikusan létrehozott kurzusok a beállításokat átmásolhatják egy sablonkurzusból. Itt adja meg sablonkurzus rövid nevét.';
$string['type'] = 'Adatbázisszerver típusa';
$string['user'] = 'A szerver elérésére szolgáló felhasználói név';

?>
