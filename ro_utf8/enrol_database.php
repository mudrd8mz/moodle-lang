<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['autocreate'] = 'Cursurile se pot crea automat dacă există înscrieri la un curs ce nu există încă pe Moodle.';
$string['autocreation_settings'] = 'Propietăți pentru crearea automată';
$string['category'] = 'Categoria cursurile create automat';
$string['course_fullname'] = 'Numele câmpului care va stoca numele complet al cursului.';
$string['course_id'] = 'Numele câmpului unde se stochează ID-ul cursului. Valorile din acest câmp sunt folosite pentru maparea cu cele din câmpul \"enrol_db_l_coursefield\" din tabela cursului din Moodle.';
$string['course_shortname'] = 'Numele câmpului unde se stochează numele prescurtat al cursului.';
$string['course_table'] = 'Numele tabelei în care ar trebui să se regăsească detaliile cursului (nume prescurtat, nume complet, ID, etc.)';
$string['dbhost'] = 'Număr sau nume IP server';
$string['dbname'] = 'Nume bază de date';
$string['dbpass'] = 'Parolă server';
$string['dbtable'] = 'Tabelă bază de date';
$string['dbtype'] = 'Tip bază de date';
$string['dbuser'] = 'Utilizator server';
$string['defaultcourseroleid'] = 'Rolul care va fi atribuit implicit în cazul în care nu se atribuie explicit niciun rol.';
$string['description'] = 'Aveţi posibilitatea de a folosi o bază de date externă (de aproape orice tip) pentru a controla înscrierile la cursuri. Se presupune că baza de date externă conţine un câmp care stochează ID-ul cursului şi un câmp care stochează ID-ul utilizatorului. Acestea vor fi comparate cu câmpurile selectate de dumneavoastră din tabelele locale de utilizatori din cadrul cursului.';
$string['disableunenrol'] = 'Dacă alegeţi Da în acest câmp, utilizatorilor înscrişi anterior prin intermediul pluginului bazei de date externe nu li se va putea anula înscrierea prin intermediul aceluiaşi plugin indiferent de conţinutul bazei de date.';
$string['enrol_database_autocreation_settings'] = 'Creare automată de cursuri noi';
$string['enrolname'] = 'Bază de date externă';
$string['general_options'] = 'Opţiuni generale';
$string['host'] = 'Database server hostname';
$string['ignorehiddencourse'] = 'Dacă alegeţi Da pentru acest parametru utilizatorii nu vor putea fi înscrişi la cursuri care sunt setate să nu fie disponibile cursanţilor.';
$string['local_fields_mapping'] = 'Câmpuri bază de date Moodle (locală)';
$string['localcoursefield'] = 'Numele câmpului din tabela Curs pe care îl folosim pentru a identifica intrările în baza de date remote.';
$string['localrolefield'] = 'Numele câmpului din tabela Roluri pe care îl folosim pentru a identifica intrările în baza de date remote.';
$string['localuserfield'] = 'Numele câmpului din tabela Utilizatori pe care îl folosim pentru a identifica intrările în baza de date remote.';
$string['name'] = 'Baza de date ce va fi utilizată.';
$string['pass'] = 'Parola pentru accesarea serverului.';
$string['remote_fields_mapping'] = 'Câmpuri bază de date înscrieri (remote)';
$string['remotecoursefield'] = 'Numele câmpului din tabela remote pe care îl folosim pentru a identifica intrările în tabela Curs.';
$string['remoterolefield'] = 'Numele câmpului din tabela remote pe care îl folosim pentru a identifica intrările în tabela Roluri.';
$string['remoteuserfield'] = 'Numele câmpului din tabela remote pe care îl folosim pentru a identifica intrările în tabela Utilizatori.';
$string['server_settings'] = 'Setări Server Bază de Date Externă';
$string['student_coursefield'] = 'Numele câmpului din tabela de înscrieri cursanţi în cadrul căruia ar trebui să se regăsească ID-ul cursului.';
$string['student_l_userfield'] = 'Numele câmpului din tabela locală cu Utilizatori pe care îl folosim pentru a asocia utilizatorul cu o înregistrare remote pentru cursanţi (ex. idnumber).';
$string['student_r_userfield'] = 'Numele câmpului din tabela remote Înscrieri unde ne aşteptăm să găsim ID-ul utilizatorului.';
$string['student_table'] = 'Numele tabelei în care se stochează înscrierile la cursuri realizate de studenţi.';
$string['teacher_coursefield'] = 'Numele câmpului din tabela Profesori unde ne aşteptăm să găsim ID-ul cursului.';
$string['teacher_l_userfield'] = 'Numele câmpului din tabela locală cu Utilizatori pe care îl folosim pentru a asocia utilizatorul cu o înregistrare remote pentru profesori (ex. idnumber).';
$string['teacher_r_userfield'] = 'Numele câmpului din tabela remote Înscrieri Profesori unde ne aşteptăm să găsim ID-ul utilizatorului.';
$string['teacher_table'] = 'Numele tabelei în care se stochează înscrierile profesorilor.';
$string['template'] = 'Opţional: cursurile create automat pot copia setările dintr-un curs şablon. Completaţi aici numele prescurtat al cursului şablon.';
$string['type'] = 'Tip server bază de date';
$string['user'] = 'Nume de utilizator pentru accesarea serverului.';

?>
