<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.7 beta + (2006101003)


$string['description'] = '<p>Savu reģistrāciju kontrolei varat izmantot LDAP serveri.  
                          Tiek pieņemts, ka jūsu LDAP kokā ir grupas, kas atbilst kursiem, un ka katrai no šīm grupām/kursiem būs dalības ievadnes, kas atbilst studentiem.</p>
                          <p>Tiek pieņemts, ka LDAP sistēmā kursi ir definēti kā grupas, un katrai grupai ir vairāki dalības lauki 
                          (<em>member</em> vai <em>memberUid</em>), kas satur unikālu lietotāja identifikatoru.</p>
                          <p>Lai izmantotu LDAP reģistrāciju, lietotājiem <strong>nepieciešams</strong> derīgs lauks idnumber. Lai lietotājs tiktu reģistrēts kursā, LDAP grupās šim idnumber jābūt norādītam dalībnieku laukā.
                          Tas parasti darbojas, ja jau izmantojat LDAP autentifikāciju.</p>
                          <p>Lietotājam pieslēdzoties, reģistrācijas tiks atjauninātas. Varat arī izmantot kādu reģistrācijas sinhronizācijas skriptu. Skatiet failā <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
                          <p>Šo spraudni var arī iestatīt automātiskai jaunu kursu izveidei, ja LDAP sistēmā parādās jaunas grupas.</p>';
$string['enrol_ldap_autocreate'] = 'Kursus var izveidot automātiski, ja sistēmā Moodle veiktas reģistrācijas uz kursiem, kas vēl nepastāv.';
$string['enrol_ldap_autocreation_settings'] = 'Automātiskās kursu izveides iestatījumi';
$string['enrol_ldap_bind_dn'] = 'Ja lietotāju meklēšanai vēlaties izmantot lietotāja saistīšanu, norādiet to šeit. Apmēram šādi: “cn=ldapuser,ou=public,o=org”';
$string['enrol_ldap_bind_pw'] = 'Lietotāju saistīšanas parole.';
$string['enrol_ldap_category'] = 'Automātiski izveidoto kursu kategorija.';
$string['enrol_ldap_contexts'] = 'LDAP konteksti';
$string['enrol_ldap_course_fullname'] = 'Nav obligāti: LDAP lauks, no kura iegūt pilno nosaukumu.';
$string['enrol_ldap_course_idnumber'] = 'Kartējiet uz unikālu LDAP identifikatoru, parasti <em>cn</em> vai <em>uid</em>. Ja izmantojat automātisko kursu izveidi, šo vērtību ieteicams bloķēt.';
$string['enrol_ldap_course_settings'] = 'Kursu reģistrācijas iestatījumi';
$string['enrol_ldap_course_shortname'] = 'Nav obligāti: LDAP lauks, no kura iegūt īso nosaukumu.';
$string['enrol_ldap_course_summary'] = 'Nav obligāti: LDAP lauks, no kura iegūt kopsavilkumu.';
$string['enrol_ldap_editlock'] = 'Bloķēt vērtību';
$string['enrol_ldap_general_options'] = 'Vispārīgās opcijas';
$string['enrol_ldap_host_url'] = 'Norādiet LDAP resursdatoru URL veidā, piemēram, 
                                  “ldap://ldap.mana_organizācija.lv/” 
                                  vai “ldaps://ldap.mana_organizācija.lv/”';
$string['enrol_ldap_memberattribute'] = 'LDAP dalībnieka atribūts';
$string['enrol_ldap_objectclass'] = 'Kursu meklēšanai izmantotā klase objectClass. Parasti “posixGroup”';
$string['enrol_ldap_roles'] = 'Lomu kartēšana';
$string['enrol_ldap_search_sub'] = 'Meklēt grupas dalības, izmantojot apakškontekstus.';
$string['enrol_ldap_server_settings'] = 'LDAP servera iestatījumi';
$string['enrol_ldap_student_contexts'] = 'Kontekstu saraksts, kur iekļautas grupas ar studentu reģistrācijām. Atsevišķos kontekstus atdaliet ar “;”. Piemēram: 
                                          “ou=courses,o=org; ou=others,o=org”';
$string['enrol_ldap_student_memberattribute'] = 'Dalībnieka atribūts, ja lietotāji iekļauti (ir reģistrēti) kādā grupā. Parasti “member” vai “memberUid”.';
$string['enrol_ldap_student_settings'] = 'Studentu reģistrācijas iestatījumi';
$string['enrol_ldap_teacher_contexts'] = 'Kontekstu saraksts, kur iekļautas grupas ar pasniedzēju reģistrācijām. Atsevišķos kontekstus atdaliet ar “;”. Piemēram: 
                                          “ou=courses,o=org; ou=others,o=org”';
$string['enrol_ldap_teacher_memberattribute'] = 'Dalībnieka atribūts, ja lietotāji iekļauti (ir reģistrēti) kādā grupā. Parasti “member” vai “memberUid”.';
$string['enrol_ldap_teacher_settings'] = 'Pasniedzēju reģistrācijas iestatījumi';
$string['enrol_ldap_template'] = 'Nav obligāti: automātiski izveidoto kursu iestatījumus var kopēt no kāda veidnes kursa.';
$string['enrol_ldap_updatelocal'] = 'Atjaunināt lokālos datus';
$string['enrol_ldap_version'] = 'Jūsu serverī izmantojamā LDAP protokola versija.';
$string['enrolname'] = 'LDAP';

?>
