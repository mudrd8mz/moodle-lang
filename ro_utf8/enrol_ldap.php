<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['description'] = '<p>Aveţi posibilitatea de a utiliza un server LDAP pentru a controla înscrierile la cursuri. 
Se presupune că structura arborescentă LDAP conţine grupuri ce corespund cursurilor, şi că fiecare din aceste grupuri/cursuri va avea elemente echivalente studenţilor.</p>
<p>Cursurile sunt considerate echivalentul grupurilor în  
LDAP, cu fiecare din grupuri având mai multe câmpuri de membership 
(<em>member</em> sau <em>memberUid</em>) care conţin un cod de identificare unic pentru utilizator.</p>
<p>Pentru a putea utiliza LDAP pentru înscrieri, utilizatorii sitului dumneavoastră <strong>trebuie</strong> 
să aibă asociat un valid idnumber field. The LDAP groups must have 
that idnumber in the member fields for a user to be enrolled 
in the course.
Acest proces ar trebui să funcţioneze bine dacă folosiţi deja Autentificarea LDAP.</p>
<p>Situaţia înscrierilor va fi actualizată la logarea unui utilizator. De asemenea, pentru a controla situaţia înscrierilor puteţi rula un script. Accesaţi 
<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Acest plugin poate fi configurat astfel încât la crearea de noi grupuri în LDAP să fie create şi cursuri noi.</p>';
$string['enrol_ldap_autocreate'] = 'Cursurile pot fi create automat dacă există înscrieri la cursuri care nu există încă în Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Setări creare automată de cursuri';
$string['enrol_ldap_bind_dn'] = 'Dacă doriţi să folosiţi bind-user la căutarea utilizatorilor specificaţi acest lucru aici. Iată un exemplu: \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Parolă pentru bind-user.';
$string['enrol_ldap_category'] = 'Categoria pentru cursurile create automat.';
$string['enrol_ldap_contexts'] = 'Contexte LDAP';
$string['enrol_ldap_course_fullname'] = 'Opţional: câmpul LDAP îşi va lua numele complet din.';
$string['enrol_ldap_course_idnumber'] = 'Asociaţi cu un identificator unic în LDAP, de obicei <em>cn</em> sau <em>uid</em>.  Se recomandă să blocaţi valoarea dacă folosiţi crearea automată de cursuri.';
$string['enrol_ldap_course_settings'] = 'Setări înscriere la curs';
$string['enrol_ldap_course_shortname'] = 'Opţional: câmpul LDAP îşi va lua numele prescurtat din.';
$string['enrol_ldap_course_summary'] = 'Opţional: câmpul LDAP îşi va lua rezumatul din.';
$string['enrol_ldap_editlock'] = 'Blocare valoare';
$string['enrol_ldap_general_options'] = 'Opţiuni generale';
$string['enrol_ldap_host_url'] = 'Specificaţi LDAP host în format URL, ex: 
\'ldap://ldap.myorg.com/\' 
or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'Atribut membru LDAP';
$string['enrol_ldap_objectclass'] = 'objectClass folosit la căutarea cursurilor. De obicei
\'posixGroup\'.';
$string['enrol_ldap_roles'] = 'Mapare roluri';
$string['enrol_ldap_search_sub'] = 'Search group memberships from subcontexts.';
$string['enrol_ldap_server_settings'] = 'Setări Server LDAP';
$string['enrol_ldap_student_contexts'] = 'Lista de contextele unde sunt localizate grupurile cu înscrierile cursanţilor. Separarea contextelor se face cu ajutorul caracterului \';\'. Exemplu: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atribut membru, atunci când utilizatorii aparţin (sunt înscrişi într-un) unui grup. De obicei \'membru\'
sau \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Setări înscrieri cursanţi';
$string['enrol_ldap_teacher_contexts'] = 'Lista contextelor unde se găsesc grupuri cu înscrierile profesorilor. Separaţi contextele prin semnul \';\'. De exemplu: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atribut membru, atunci când utilizatorii aparţin (sunt înscrişi într-un) unui grup. De obicei \'membru\'
sau \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Setări înscrieri profesori';
$string['enrol_ldap_template'] = 'Opţional: cursurile create automat pot copia setările dintr-un curs şablon.';
$string['enrol_ldap_updatelocal'] = 'Actualizează date locale';
$string['enrol_ldap_version'] = 'Versiunea protocolului LDAP utilizată de serverul dumneavoastră.';
$string['enrolname'] = 'LDAP';

?>
