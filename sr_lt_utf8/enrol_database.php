<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 + (2006050506)


$string['autocreate'] = 'Kursevi se mogu automatski kreirati ako je dozvoljeno upisati kurs koji još ne postoji u Moodle sistemu.';
$string['autocreation_settings'] = 'Podešavanja automatskog kreiranja kurseva';
$string['category'] = 'Kategorija za automatski kreirane kurseve.';
$string['course_fullname'] = 'Polje u kom se čuva pun naziv kursa.';
$string['course_id'] = 'Polje u kom se čuva identifikator kursa. Vrednosti ovog polja se koriste za upoređivanje sa onima u polju \"enrol_db_l_coursefield\" u tabeli kursa.';
$string['course_shortname'] = 'Polje u kom se čuva kratki naziv kursa.';
$string['course_table'] = 'Tabela u kojoj se mogu naći detaljne informacije o kursu (kratki naziv, pun naziv, identifikator itd.)';
$string['description'] = 'Možete upotrebiti spoljašnju bazu podataka (skoro bilo koje vrste) za kontrolu Vaših upisa. To podrazumeva da Vaša spoljašnja baza podataka sadrži polje sa identifikatorom kursa, kao i polje sa identifikatorom korisnika. Ona se upoređuju sa poljima koja izaberete u lokalnom kursu i korisničkim tabelama.';
$string['enrolname'] = 'Spoljašnja baza podataka';
$string['general_options'] = 'Opšte opcije';
$string['host'] = 'Naziv servera baze';
$string['local_coursefield'] = 'Polje u tabeli kursa koje se koristi za upoređivanje sa unosima u udaljenoj bazi podataka (npr. idnumber).';
$string['local_fields_mapping'] = 'Polja Moodle (lokalne) baze podataka';
$string['name'] = 'Baza podataka određena za korišćenje';
$string['pass'] = 'Lozinka za pristup serveru.';
$string['remote_fields_mapping'] = 'Polja upisa (udaljene) baze podataka.';
$string['server_settings'] = 'Podešavanja servera spoljašnje baze podataka';
$string['student_coursefield'] = 'Polje u tabeli studentskih upisa u kom se može naći identifikator kursa.';
$string['student_l_userfield'] = 'Polje u lokalnoj korisničkoj tabeli koje se koristi za upoređivanje korisnika sa udaljenim zapisima za studente (npr. idnumber).';
$string['student_r_userfield'] = 'Polje u udaljenoj tabeli studentskih upisa u kom se može naći identifikator korisnika.';
$string['student_table'] = 'Tabela u kojoj se čuvaju upisi studenata.';
$string['teacher_coursefield'] = 'Polje u tabeli upisa predavača u kom se može naći identifikator kursa.';
$string['teacher_l_userfield'] = 'Polje u lokalnoj korisničkoj tabeli koje se koristi za upoređivanje korisnika sa udaljenim zapisima predavača (npr. idnumber).';
$string['teacher_r_userfield'] = 'Polje u udaljenoj tabeli upisa predavača u kom se može naći identifikator korisnika.';
$string['teacher_table'] = 'Tabela u kojoj se čuvaju upisi predavača.';
$string['template'] = 'Opciono: automatski kreirani kursevi mogu svoja podešavanja preuzeti od nekog šablona kursa. Unesite kratki naziv šablona kursa.';
$string['type'] = 'Tip servera baze';
$string['user'] = 'Korisničko ime za pristup serveru.';

?>
