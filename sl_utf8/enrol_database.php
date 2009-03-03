<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9.4+ (Build: 20090204) (2007101540)


$string['autocreate'] = 'Predmeti se lahko ustvarijo samodejno, če obstaja vpis v predmet, ki v okolju Moodle še ne obstaja.';
$string['autocreation_settings'] = 'Nastavitve samodejnega ustvarjanja';
$string['category'] = 'Kategorija za samodejno ustvarjene predmete.';
$string['course_fullname'] = 'Ime polja, v katerem je shranjeno polno ime predmeta.';
$string['course_id'] = 'Ime polja v katerem je shranjen ID predmeta. Vrednosti tega polja se uporabijo za ujemanje s tistimi v polju \"enrol_db_l_coursefield\" v tabeli predmetov Moodle.';
$string['course_shortname'] = 'Ime polja, v katerem je shranjeno kratko ime predmeta.';
$string['course_table'] = 'Ime tabele, kjer pričakujemo podrobnosti predmeta (kratko ime, polno ime, ID, in podobno)';
$string['dbhost'] = 'IP ime ali naslov strežnika podatkovne zbirke';
$string['dbname'] = 'Ime podatkovne zbirke';
$string['dbpass'] = 'Geslo strežnika';
$string['dbtable'] = 'Tabela v podatkovni zbirki';
$string['dbtype'] = 'Tip podatkovne zbirke';
$string['dbuser'] = 'Uporabnik na strežniku';
$string['defaultcourseroleid'] = 'Privzeta vloga, če ni določena nobena';
$string['description'] = 'Uporabite lahko zunanjo podatkovno zbirko (skoraj kakršnokoli) za nadzor vaših vpisov. Predvideno je, da vaša zunanja podatkovna zbirka vsebuje polje, ki vsebuje ID predmeta in polje, ki vsebuje ID uporabnika. Ti polji se primerjata s polji, ki jih izberete v lokalnem predmetu in tabelo uporabnikov.';
$string['disableunenrol'] = 'Če izberete \"Da\", uporabniki, ki so bili vpisani preko zunanjega vtičnika podatkovne zbirke, ne bodo izpisani s strani istega vtičnika ne glede na vsebino podatkovne zbirke.';
$string['enrol_database_autocreation_settings'] = 'Samodejno tvorjenje novih predmetov';
$string['enrolname'] = 'Zunanja podatkovna zbirka';
$string['general_options'] = 'Splošne možnosti';
$string['host'] = 'Ime gostitelja strežnika podatkovne zbirke.';
$string['ignorehiddencourse'] = 'Če izberete \"Da\", se uporabniki ne bodo prijavili na tečaje, ki študentom niso na voljo.';
$string['local_fields_mapping'] = 'Polja podatkovne zbirke Moodle (lokalno)';
$string['localcoursefield'] = 'Ime polja v tabeli predmetov, ki ga uporabljamo za ujemanje z zapisi v oddaljeni podatkovni zbirki (na primer idnumber)';
$string['localrolefield'] = 'Ime polja v tabeli vlog, ki ga uporabljamo za ujemanje z zapisi v oddaljeni podatkovni zbirki (na primer shortname)';
$string['localuserfield'] = 'Ime polja v tabeli uporabnikov, ki ga uporabljamo za ujemanje z zapisi v oddaljeni podatkovni zbirki (na primer idnumber)';
$string['name'] = 'Določena podatkovna zbirka za uporabo.';
$string['pass'] = 'Geslo za dostop do strežnika.';
$string['remote_fields_mapping'] = 'Polja vpisa (oddaljene) podatkovne zbirke.';
$string['remotecoursefield'] = 'Ime polja v oddaljeni tabeli, ki ga uporabljamo za ujemanje vnosov v tabeli predmetov.';
$string['remoterolefield'] = 'Ime polja v oddaljeni tabeli, ki ga uporabljamo za ujemanje vnosov v tabeli vlog.';
$string['remoteuserfield'] = 'Ime polja v oddaljeni tabeli, ki ga uporabljamo za ujemanje vnosov v tabeli uporabnikov.';
$string['server_settings'] = 'Nastavitve zunanjega strežnika podatkovne zbirke';
$string['student_coursefield'] = 'Ime polja v tabeli vpisov udeležencev v katerem pričakujemo ID številko predmeta.';
$string['student_l_userfield'] = 'Ime polja v lokalni tabeli uporabnikov, ki ga uporabljamo za ujemanje z uporabnikom v oddaljenem zapisu udeležencev (npr. idnumber).';
$string['student_r_userfield'] = 'Ime polja v oddaljeni tabeli vpisov udeležencev, v katerem pričakujemo ID številko uporabnika.';
$string['student_table'] = 'Ime tabele, v kateri so shranjeni vpisi udeležencev.';
$string['teacher_coursefield'] = 'Ime polja v tabeli vpisov izvajalcev, v katerem pričakujemo ID številko predmeta.';
$string['teacher_l_userfield'] = 'Ime polja v lokalni tabeli uporabnikov, ki ga uporabljamo za ujemanje z uporabnikom v oddaljenem zapisu izvajalcev (npr. idnumber).';
$string['teacher_r_userfield'] = 'Ime polja v oddaljeni tabeli vpisov izvajalcev, v katerem pričakujemo ID številko uporabnika.';
$string['teacher_table'] = 'Ime tabele, v kateri so shranjene prijave izvajalcev.';
$string['template'] = 'Neobvezno: samodejno ustvarjeni predmeti lahko preslikajo svoje nastavitve iz predloge predmeta. Tu vnesite kratko ime predmeta, ki naj služi kot predloga.';
$string['type'] = 'Vrsta strežnika podatkovne zbirke.';
$string['user'] = 'Uporabniško ime za dostop do strežnika.';
$string['local_coursefield'] = 'Ime polja v tabeli predmetov, ki ga uporabljamo za ujemanje vnosov v oddaljeni podatkovni zbirki (npr. idnumber).'; // ORPHANED

?>
