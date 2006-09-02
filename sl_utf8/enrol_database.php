<?PHP // $Id:enrol_database.php from enrol_database.xml
      // Comments: tomaz at zid dot si

$string['enrolname'] = 'Zunanja podatkovna zbirka';
$string['description'] = 'Uporabite lahko zunanjo podatkovno zbirko (skoraj kakršnokoli) za nadzor vaših vpisov. Predvideno je, da vaša zunanja podatkovna zbirka vsebuje polje, ki vsebuje ID predmeta in polje, ki vsebuje ID uporabnika. Ti polji se primerjata s polji, ki jih izberete v lokalnem predmetu in tabelo uporabnikov.';
$string['server_settings'] = 'Nastavitve zunanjega strežnika podatkovne zbirke';
$string['type'] = 'Vrsta strežnika podatkovne zbirke.';
$string['host'] = 'Ime gostitelja strežnika podatkovne zbirke.';
$string['name'] = 'Določena podatkovna zbirka za uporabo.';
$string['user'] = 'Uporabniško ime za dostop do strežnika.';
$string['pass'] = 'Geslo za dostop do strežnika.';
$string['local_fields_mapping'] = 'Moodle (lokalno) polja podatkovne zbirke';
$string['local_coursefield'] = 'Ime polja v tabeli predmetov, ki ga uporabljamo za ujemanje vnosov v oddaljeni podatkovni zbirki (npr. idnumber).';
$string['remote_fields_mapping'] = 'Polja vpisa (oddaljene) podatkovne zbirke.';
$string['student_table'] = 'Ime tabele v kateri so shranjeni vpisi udeležencev.';
$string['student_coursefield'] = 'Ime polja v tabeli vpisov udeležencev v katerem pričakujemo ID številko predmeta.';
$string['student_l_userfield'] = 'Ime polja v lokalni tabeli uporabnikov, ki ga uporabljamo za ujemanje z uporabnikom v oddaljenem zapisu udeležencev (npr. idnumber).';
$string['student_r_userfield'] = 'Ime polja v oddaljeni tabeli vpisov udeležencev v katerem pričakujemo ID številko uporabnika.';
$string['teacher_table'] = 'Ime tabele v kateri so shranjene prijave izvajalcev.';
$string['teacher_coursefield'] = 'Ime polja v tabeli vpisov izvajalcev v katerem pričakujemo ID številko predmeta.';
$string['teacher_l_userfield'] = 'Ime polja v lokalni tabeli uporabnikov, ki ga uporabljamo za ujemanje z uporabnikom v oddaljenem zapisu izvajalcev (npr. idnumber).';
$string['teacher_r_userfield'] = 'Ime polja v oddaljeni tabeli vpisov izvajalcev v katerem pričakujemo ID številko uporabnika.';
$string['autocreation_settings'] = 'Nastavitve samodejnega ustvarjanja';
$string['autocreate'] = 'Predmeti se lahko ustvarijo samodejno, če obstaja vpis v predmet, ki v okolju Moodle še ne obstaja.';
$string['category'] = 'Kategorija za samodejno ustvarjene predmete.';
$string['template'] = 'Neobvezno: samodejno ustvarjeni predmeti lahko preslikajo svoje nastavitve iz predloge predmeta. Tu vnesite kratko ime predmeta, ki naj služi kot predloga.';
$string['course_table'] = 'Ime tabele kjer pričakujemo podrobnosti predmeta (kratko ime, polno ime, ID, in podobno)';
$string['course_fullname'] = 'Ime polja v katerem je shranjeno polno ime predmeta.';
$string['course_shortname'] = 'Ime polja v katerem je shranjeno kratko ime predmeta.';
$string['course_id'] = 'Ime polja v katerem je shranjen ID predmeta. Vrednosti tega polja se uporabijo za ujemanje s tistimi v polju \"enrol_db_l_coursefield\" v tabeli predmetov Moodle.';
$string['general_options'] = 'Splošne možnosti';


?>