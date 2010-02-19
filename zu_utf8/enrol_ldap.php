<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.9.4 (Build: 20090128) (2007101540)
      // local modifications from http://free.icyber.co.za


$string['description'] = 'Ungasebenzisa i LDAP server ukuze unakekele abambalisile. Kuyacatshangelwa ukuthi i LDAP yakho inequlu eliya ezifundweni, nokuthi iqulu ngalinye line membership entries kubafundi.</p>
<p> kuyacatshangelwa ukuthi izifundo zichazwe njengequlu kuyi LDAP,iqulu ngalinye libe nama membership fields aphindaphindekile(<em>member</em> or <em>memberUid</em>) ene ncazelo ehlukile yomsebenzisi.</p>
<p>Ukusebenzisa i LDAP yokubhalisa,abasebenzisi<strong>kumele</strong> babe nenombolo ye field okuyiyona yona.Iqulu le LDAP kumele libe nayo le nombolo ye id kuyi member fields ukuze abasebenzisi babhalise esifundweni.Lokhu kuvame ukusebenza kahle uma ngabe usuvele usebenzisa i LDAP Authentication.</p>
<p>Ukubhalisa kuzoqhutshezwa uma umsebenzisi engena.Futhi ungasebenzisa i script ukubeka ukubhaliswa kuyi synch.Bheka kuyi<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>This plugin can also be set to automatically create new
courses when new groups appear in LDAP.</p>
description';
$string['enrol_ldap_autocreate'] = 'Izifundo zingazikhandekela uma kunababhalisile esifundweni esingekho kuyi moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Okokulungisa ukukhandakela kwezifundo.';
$string['enrol_ldap_bind_dn'] = 'Uma ufuna ukusebenzisa i bind-user ukucinga abasebenzisi,kuchaze la.Into enje \'cn=ldapuser,ou=public,o=org\'
enrol_ldap_bind_dn';
$string['enrol_ldap_bind_pw'] = 'Ukhiye we bind-user.';
$string['enrol_ldap_category'] = 'Umkhakha wokuzikhandakela kwezifundo.';
$string['enrol_ldap_contexts'] = 'LDAP contexts';
$string['enrol_ldap_course_fullname'] = 'Kuyakhethwa:isikhala se LDAP ukuthola igama eligcwele kukho';
$string['enrol_ldap_course_idnumber'] = 'Map to the unique identifier in LDAP, usually
<em>cn</em> or <em>uid</em>. It is
recommended to lock the value if you are using
automatic course creation.';
$string['enrol_ldap_course_settings'] = 'Okokulungisa ukubhaliswa kwezifundo.';
$string['enrol_ldap_course_shortname'] = 'Optional: LDAP field to get the shortname from.';
$string['enrol_ldap_course_summary'] = 'Optional: LDAP field to get the summary from.';
$string['enrol_ldap_editlock'] = 'Lock value';
$string['enrol_ldap_general_options'] = 'General Options';
$string['enrol_ldap_host_url'] = 'Specify LDAP host in URL-form like
\'ldap://ldap.myorg.com/\'
or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP member attribute';
$string['enrol_ldap_objectclass'] = 'objectClass used to search courses. Usually
\'posixGroup\'.';
$string['enrol_ldap_roles'] = 'Role mapping';
$string['enrol_ldap_search_sub'] = 'Cinga iqulu lama membership kuye subcontexts.';
$string['enrol_ldap_server_settings'] = 'LDAP Server Settings';
$string['enrol_ldap_student_contexts'] = 'List of contexts where groups with student
enrolments are located. Separate different
contexts with \';\'. For example:
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Member attribute, when users belongs
(is enrolled) to a group. Usually \'member\'
or \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Student enrolment settings';
$string['enrol_ldap_teacher_contexts'] = 'List of contexts where groups with teacher
enrolments are located. Separate different
contexts with \';\'. For example:
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Member attribute, when users belongs
(is enrolled) to a group. Usually \'member\'
or \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Ukulungisa kothisha ngokubhalisa.';
$string['enrol_ldap_template'] = 'Optional: auto-created courses can copy
their settings from a template course.';
$string['enrol_ldap_updatelocal'] = 'Update local data';
$string['enrol_ldap_version'] = 'Uhlobo lwe LDAP protocol olusetshenziswa yi server.';
$string['enrolname'] = 'LDAP';

?>
