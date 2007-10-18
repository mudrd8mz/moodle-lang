<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.8 + (2007021505)


$string['description'] = '<p>Можете да користите LDAP сервер за да ги контролирате запишувањата.  
                          Се претпоставува дека Вашето LDAP дрво содржи групи кои се мапирани кон
                          курсевите, и тоа дека секоја од тие групи/курсеви ќе
                          имаат записи за членство мапирани кон студентите.</p>
                          <p>Се претпоставува дека курсевите се дефинирани како групи во  
                          LDAP, така што секоја група содржи повеќе полиња за членство
                          (<em>member</em> or <em>memberUid</em>) кои содржат единствена
                          идентификација на корисникот.</p>
                          <p>За да користите LDAP запишување, Вашите корисници <strong>мораат</strong> 
                          да имаат валидно idnumber поле. LDAP групите мораат да го имаат
                          тој број во член полето за корисникот да биде запишан 
				  во курсот.
                          Ова најчесто ќе работи добро ако веќе користите LDAP 
                          докажување на автентичност.</p>
                          <p>Запишувањето ќе биде надградено кога корисникот ќе се најави. Вие
                           исто така можете да извршите и скрипта за чување на запишувањата. Погледнете во
                          <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
                          <p>Овој додаток може да се постави т.ш. автоматски ќе креира
                          курс кога нова група ќе се појави во LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Курсевите можат да се креираат автоматски ако запишувања за курсот не постојат во Moodle сè уште.';
$string['enrol_ldap_autocreation_settings'] = 'Поставувања за автоматско креирање на курсеви';
$string['enrol_ldap_bind_dn'] = 'Ако сакате да користите задолжителен корисник за да пребарувате корисници,                                 наведете го тука. Нешто како:                                 \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Лозинка за задолжителен корисник.';
$string['enrol_ldap_category'] = 'Категорија за автоматско создадени курсеви.';
$string['enrol_ldap_contexts'] = 'LDAP текст';
$string['enrol_ldap_course_fullname'] = 'Опционално: LDAP полето од кое ќе се земе целото име.';
$string['enrol_ldap_course_idnumber'] = 'Мапирај кон единствен идентификатор во LDAP, најчесто
                                         <em>cn</em> или <em>uid</em>.
                                         Препорачливо е да ја заклучите вредноста ако користите 
                                         автоматско создавање на курсеви.';
$string['enrol_ldap_course_settings'] = 'Подесување на запишувањето на курсот';
$string['enrol_ldap_course_shortname'] = 'Опционално: LDAP полето од кое ќе се земе краткото име.';
$string['enrol_ldap_course_summary'] = 'Опционално: LDAP полето од кое ќе се земе прегледот.';
$string['enrol_ldap_editlock'] = 'Заклучи ја вредноста';
$string['enrol_ldap_general_options'] = 'Општи опции';
$string['enrol_ldap_host_url'] = 'Наведете LDAP хост во URL-форма налик на: 
                                  \'ldap://ldap.myorg.com/\' 
                                  или \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP кориснички атрибут';
$string['enrol_ldap_objectclass'] = 'objectClass се користи за пребарување на курсевите. Најчесто
                                     \'posixGroup\'.';
$string['enrol_ldap_roles'] = 'Мапирање на улоги';
$string['enrol_ldap_search_sub'] = 'Пребарај ги групните членства од потконтекстот.';
$string['enrol_ldap_server_settings'] = 'LDAP подесувања на серверот';
$string['enrol_ldap_student_contexts'] = 'Листа на текстови каде групите со запишани студенти се наоѓаат. Различните текстови разделувај ги со\';\'. На пример: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Атрибут на членот, кога корисници припаѓаат (се запишани) во група. Најчесто \'member\' или \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Подесување на запишувањето за студентите.';
$string['enrol_ldap_teacher_contexts'] = 'Листа на контексти каде групите со запишани студенти се
                                          запишани. Различните контексти разделувај 
							ги со\';\'. На пример: 
                                          \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Атрибут на членот, кога корисници припаѓаат
                                          (се запишани) во група. Најчесто \'member\'
                                          или \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Подесување на запишувањето за предавачите.';
$string['enrol_ldap_template'] = 'Опционално: автоматски креираните курсеви можат да ги ископираат 
						подесувањата по урнек на курсот.';
$string['enrol_ldap_updatelocal'] = 'Обнови ги локалните податоци';
$string['enrol_ldap_version'] = 'Верзијата на LDAP протоколот кој Вашиот сервер го користи.';
$string['enrolname'] = 'LDAP';

?>
