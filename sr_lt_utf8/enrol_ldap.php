<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.6.2 (2006050520)


$string['description'] = '<p>Možete koristiti LDAP server za kontrolu Vašeg upisa. Podrazumeva se da Vaše LDAP stablo sadrži grupe planirane za kurseve, i da će svaka od tih grupa/kurseva imati unose članova koji odgovaraju planiranim studentima.</p>
<p>To znači da su kurseve definisani kao grupe u LDAP, gde svaka grupa ima višestruka polja članova (<em>member</em> ili <em>memberUid</em>) koji sadrže jedinsvenu indentifikaciju korisnika.</p>
<p>Da bi se koristili LDAP upisi, Vaši korisnici <strong>moraju</strong> imati validno idnumber polje. LDAP grupe moraju imati taj idnumber u poljima članova da bi korisnik bio upisan na kurs. Ovo će obično raditi dobro ako već koristite LDAP proveru identiteta.</p>
<p>Upis će biti ažuriran kada se korisnik prijavi na sistem. Možete pokrenuti i skript da prati sinhronizaciju upisa. Pogledajte u <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Ovaj dodatak takođe može biti postavljen da automatski kreira nove kurseve kad se nove grupe pojave u LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurs može biti automatski kreiran ako upisivanje na kurs još na postoji u Moodle sistemu.';
$string['enrol_ldap_autocreation_settings'] = 'Automatsko podešavanje kreiranja kursa';
$string['enrol_ldap_bind_dn'] = 'Ako želite da koristite obaveznog korisnika za traženje korisnika, navedite to ovde. Nešto kao \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Lozinka za obaveznog korisnika.';
$string['enrol_ldap_category'] = 'Kategorija za automatski kreirane kurseve.';
$string['enrol_ldap_course_fullname'] = 'Opciono: LDAP polje iz kog se dobija puni naziv.';
$string['enrol_ldap_course_idnumber'] = 'Planirati jedinstveni indentifikator LDAP, obično <em>cn</em> or <em>uid</em>. Preporučljivo je zaključavanje vrednosti ako koristite automatsko kreiranje kursa.';
$string['enrol_ldap_course_settings'] = 'Podešavanja upisa kursa';
$string['enrol_ldap_course_shortname'] = 'Opciono: LDAP polje iz kog se dobija kratak naziv.';
$string['enrol_ldap_course_summary'] = 'Opciono: LDAP polje iz kog se dobija rezime.';
$string['enrol_ldap_editlock'] = 'Zaključajte vrednosti';
$string['enrol_ldap_general_options'] = 'Opšta podešavanja';
$string['enrol_ldap_host_url'] = 'Naznačite glavni LDAP u URL-obliku kao \'ldap://ldap.myorg.com/\' ili \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass koja se koristi za traženje kursa. Obično \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Pretraga članstava u grupama iz podkonteksta.';
$string['enrol_ldap_server_settings'] = 'Podešavanja LDAP servera';
$string['enrol_ldap_student_contexts'] = 'Spisak konteksta u kojima su locirane grupe sa upisanim studentima. Odvojite različite kontekste sa \';\' znakom. Na primer \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atribut člana, kada korisnik pripada grupi. Obično \'member\' ili \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Podešavanja upisa studenta';
$string['enrol_ldap_teacher_contexts'] = 'Spisak konteksta u kojima su locirani upisi predavača. Odvojite različite kontekste sa \';\' znakom. Na primer \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atribut člana, kada korisnik pripada grupi. Obično \'member\' ili \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Podešavanja upisa predavača';
$string['enrol_ldap_template'] = 'Opciono: auto-kreirani kursevi mogu kopirati svoja podešavanja iz šablonskog kursa.';
$string['enrol_ldap_updatelocal'] = 'Ažuriraj lokalne podatke';
$string['enrol_ldap_version'] = 'Verzija LDAP protokola koju Vaš server koristi.';
$string['enrolname'] = 'LDAP';

?>
