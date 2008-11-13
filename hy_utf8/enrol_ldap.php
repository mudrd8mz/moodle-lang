<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.8.2+ (2007021520)
      // local modifications from http://swnet.info/moodle


$string['description'] = '<p>Դուք կարող եք օգտագործել LDAP սերվերը, ձեր անդամագրությունները ղեկավարելու համար:
Դա ենթադրում է, որ ձեր LDAP ծառը պարունակում է խումբ, որը համապատասխանում է դասընթացներին, և այդ խմբերից/դասընթացներից յուրաքանչյուրը պետք է ունենա պարունակություններ, որոնք համապատասխանում են ուսանողներին:</p>
<p>Դա ենթադրում է, որ դասընթացները սահմանված են որպես խմբեր LDAP-ում, և ամեն խումբ ունի բազմակի անդամակցության դաշտեր (<em>member</em> կամ <em>memberUid</em>), որոնք պարունակում են օգտագործողի ID-ն:</p>
<p>LDAP անդամագրություն օգտագործելու համար, ձեր օգտագործողները <strong>պետք է</strong>
ճիշտ idnumber: LDAP-ի խմբերը պետք է ունենան այդ idnumber-ը անդամների դաշտերում, որպեսզի անդամակցեն դասընթացներին: Սա հիմնականում լավ է աշխատում, եթե դուք արդեն օգտագործում եք LDAP վավերացում:</p>
<p>Անդամագրությունները կթարմացվեն, երբ օգտագործողը մուտք գործի: Դուք կարող եք նաև աշխատացնել սցենար, որպեսզի անդամակցությունները սինխրոնացված լինեն: Դիտեք
<em>enrol/ldap/enrol_ldap_sync.php</em>:</p>
<p>Կարելի է նաև նշել, որ դասընթացները ավտոմատ ստեղծվեն, երբ նոր խմբեր են հայտնվում LDAP-ում:</p>';
$string['enrol_ldap_autocreate'] = 'Դասընթացները կարող են ստեղծվել ավտոմատորեն, եթե կան անդամագրություններ դասընթացին, որը դեռ գոյություն չունի Մուդլում:';
$string['enrol_ldap_autocreation_settings'] = 'Ավտոմատ դասընթացների ստեղծման կարգավորիչներ';
$string['enrol_ldap_bind_dn'] = 'Եթե ցանկանում եք օգտագործել bind օգտագործողին, այլ օգտագործողներ որոնելու համար, նշեք այն այստեղ: Մոտավորապես`  \'cn=ldapuser,ou=seua,o=am\'';
$string['enrol_ldap_bind_pw'] = 'bind օգտագործողի նշանաբառը';
$string['enrol_ldap_category'] = 'Ավտոմատ ստեղծված դասընթացների կատեգորիան:';
$string['enrol_ldap_contexts'] = 'LDAP կոնտեքստ';
$string['enrol_ldap_course_fullname'] = 'Երկրորդական` LDAP դաշտը, որտեղից պետքե վերցվի լրիվ անունը:';
$string['enrol_ldap_course_idnumber'] = 'Կապել ունիկալ ID-ի հետ LDAP-ում` հիմնականում  <em>cn</em> կամ <em>uid</em>: Խորհուրդ է տրվում կողպել արժեքը, եթե օգտագործում եք ավտոմատ դասընթացի ստեղծումը:';
$string['enrol_ldap_course_settings'] = 'Դասընթացի անդամագրության կարգավորիչներ';
$string['enrol_ldap_course_shortname'] = 'Երկրորդական` LDAP դաշտը, որտեղից պետքե վերցվի կրճատ անունը:';
$string['enrol_ldap_course_summary'] = 'Երկրորդական` LDAP դաշտը, որտեղից պետքե վերցվի ամփոփումը:';
$string['enrol_ldap_editlock'] = 'Կողպել արժեքը';
$string['enrol_ldap_general_options'] = 'Ընդհանուր ընտրություններ';
$string['enrol_ldap_host_url'] = 'Նշեք LDAP մեքենան URL ձևաչափով, օրինակ`  \'ldap://ldap.seua.am/\'
կամ \'ldaps://ldap.seua.am/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP-ում անդամի ատրիբուտը';
$string['enrol_ldap_objectclass'] = 'objectClass-ը, որը օգտագործվում է դասընթացների որոնման համար: Սովերաբար`  \'posixGroup\':';
$string['enrol_ldap_roles'] = 'Դերերի կապում';
$string['enrol_ldap_search_sub'] = 'Որոնել խմբերի անդամակցությունները ենթակոնտեքստում:';
$string['enrol_ldap_server_settings'] = 'LDAP Սերվերի Կարգավորիչներ';
$string['enrol_ldap_student_contexts'] = 'Կոնտեքստների ցուցակը, որտեղ պահվում են ուսանողների անդամակցություններով խմբերը: Բաժանել \';\'-ով: Օրինակ`  \'ou=courses,o=am; ou=others,o=am\'';
$string['enrol_ldap_student_memberattribute'] = 'Անդամների ատրիբուտը, երբ օգտագործողները պատկանում են (անդամակցել են) խմբին: Սովորաբար` \'member\' կամ \'memberUid\':';
$string['enrol_ldap_student_settings'] = 'Ուսանողների անդամակցության կարգավորիչներ';
$string['enrol_ldap_teacher_contexts'] = 'Կոնտեքստների ցուցակը, որտեղ պահվում են դասավանդողների անդամակցություններով խմբերը: Բաժանել \';\'-ով: Օրինակ`  \'ou=courses,o=am; ou=others,o=am\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Անդամների ատրիբուտը, երբ օգտագործողները պատկանում են (անդամակցել են) խմբին: Սովորաբար` \'member\' կամ \'memberUid\':';
$string['enrol_ldap_teacher_settings'] = 'Դասավանդողների անդամակցության կարգավորիչներ';
$string['enrol_ldap_template'] = 'Երկրորդական` ավտոմատ ստեղծված դասընթացները կարող են պատճենել իրենց կարգավորիչները շաբլոն դասընթացից:';
$string['enrol_ldap_updatelocal'] = 'Թարմացնել լոկալ տվյալները';
$string['enrol_ldap_version'] = 'LDAP արձանագրության տարբերակը, որը օգտագործում է ձեր սերվերը';
$string['enrolname'] = 'LDAP';

?>
