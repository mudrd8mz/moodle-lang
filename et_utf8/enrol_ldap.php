<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.5.2 (2005060220)


$string['description'] = '<p> Registreerumiste kontrollimiseks võid kasutada LDAP serverit.
Eeldatakse, et sinu LDAP puu sisaldab gruppe, mis vastavad kursustele ja igaühel neist gruppidest/kursustest on olemas liikmesisestused, mis vastavad õppijatele.</p>
<p>Eeldatakse, et LDAP\'is on kursused defineeritud kui grupid, kus igal grupil on liikmeväljad
(<em>member</em> või <em>memberUid</em>), mis sisaldavad unikaalset kasutaja identifikaatorit.</p>
<p>Et kasutada registreerumisel LDAP\'i, <strong>peavad</strong> kasutajad omama kehtivaid ID numbri välju. LDAP grupid peavad sisaldama ID numbrit kasutaja väljas selleks, et kasutaja saaks kursustele registreeruda.
Tavaliselt töötab süsteem hästi, kui sa juba kasutad LDAP\'iga autentimist.</p>
<p>Registreerumised uuendatakse, kui kasutaja siseneb õpikeskkonda. Registreerumiste sünkroniseerimiseks võid kasutada ka spetsiaalset skripti. Vaata  <em>enrol/ldap/enrol_ldap_sync.php</em>.</p> <p>Seda pistikut saab seadistada ka õpikeskkonda automaatselt uusi kursusi looma LDAP\'i lisatud uute gruppide järgi.</p>';
$string['enrol_ldap_autocreate'] = 'Kursusi saab tekitada automaatselt, kui on olemas registreerumised kursustele, mida Moodle\'is veel ei eksisteeri.';
$string['enrol_ldap_autocreation_settings'] = 'Automaatse kursuse tekitamise seaded';
$string['enrol_ldap_bind_dn'] = 'Kui sa tahad kasutada bind-user\'it kasutajate otsimiseks, siis täpsusta valikud siin. Näiteks \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Salasõna bind-user tarvis.';
$string['enrol_ldap_category'] = 'Automaatselt loodud kursuste kategooria';
$string['enrol_ldap_course_fullname'] = 'Valikuline: LDAP väli, kust saab täisnime';
$string['enrol_ldap_course_idnumber'] = 'Märgi LDAP\'i unikaalne identifikaator, tavaliselt
<em>cn</em> või <em>uid</em>. Väärtused on soovitatav lukustada, kui kasutad automaatset kursuste loomist.';
$string['enrol_ldap_course_settings'] = 'Kursusele registreerumise seaded';
$string['enrol_ldap_course_shortname'] = 'Valikuline:  LDAP väli, kust saab lühinime.';
$string['enrol_ldap_course_summary'] = 'Valikuline: LDAP väli , kust saab kokkuvõtte.';
$string['enrol_ldap_editlock'] = 'Lukusta väärtus';
$string['enrol_ldap_general_options'] = 'Üldised valikud';
$string['enrol_ldap_host_url'] = 'Täpsusta LDAP host URL formaadis, näiteks
\'ldap://ldap.myorg.com/\'
või \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass, mida kasutatakse kursuste otsimiseks. Tavaliselt \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Otsi gruppide liikmeid alamkontekstidest';
$string['enrol_ldap_server_settings'] = 'LDAP serveri seaded';
$string['enrol_ldap_student_contexts'] = 'Kontekstide nimekiri, kus asuvad õppijate registreerumistega grupid . Eralda erinevad kontekstid \';\' märgiga. Näiteks \'ou=courses,o=org;ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Liikme atribuut, märkimaks kasutaja gruppikuuluvust. Tavaliselt member\' või \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Õpilase registreerumise seaded';
$string['enrol_ldap_teacher_contexts'] = 'Kontekstide nimekiri, kus asuvad õpetajate registreerimistega grupid. Eralda erinevad kontekstid \';\' märgiga. Näiteks \'ou=courses,o=org; ou=others,o=org\' ';
$string['enrol_ldap_teacher_memberattribute'] = 'Liikme atribuut, märkimaks kasutaja gruppikuuluvust. Tavaliselt member\' või \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Õpetaja registreerimise seaded';
$string['enrol_ldap_template'] = 'Valikuline: Automaatselt loodud kursused kopeerivad oma seaded mallkursuselt. ';
$string['enrol_ldap_updatelocal'] = 'Uuenda lokaalseid andmeid';
$string['enrol_ldap_version'] = 'LDAP protokolli versioon, mida sinu server kasutab';
$string['enrolname'] = 'LDAP';

?>
