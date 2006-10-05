<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.6.2 (2006050520)


$string['description'] = '<p>Можете користити LDAP сервер за контролу Вашег уписа. Подразумева се да Ваше LDAP стабло садржи групе планиране за курсеве, и да ће свака од тих група/курсева имати уносе чланова који одговарају планираним студентима.</p>
<p>То значи да су курсеве дефинисани као групе у LDAP, где свака група има вишеструка поља чланова (<em>member</em> или <em>memberUid</em>) који садрже јединсвену индентификацију корисника.</p>
<p>Да би се користили LDAP уписи, Ваши корисници <strong>морају</strong> имати валидно idnumber поље. LDAP групе морају имати тај idnumber у пољима чланова да би корисник био уписан на курс. Ово ће обично радити добро ако већ користите LDAP проверу идентитета.</p>
<p>Упис ће бити ажуриран када се корисник пријави на систем. Можете покренути и скрипт да прати синхронизацију уписа. Погледајте у <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Овај додатак такође може бити постављен да аутоматски креира нове курсеве кад се нове групе појаве у LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Курс може бити аутоматски креиран ако уписивање на курс још на постоји у Moodle систему.';
$string['enrol_ldap_autocreation_settings'] = 'Аутоматско подешавање креирања курса';
$string['enrol_ldap_bind_dn'] = 'Ако желите да користите обавезног корисника за тражење корисника, наведите то овде. Нешто као \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Лозинка за обавезног корисника.';
$string['enrol_ldap_category'] = 'Категорија за аутоматски креиране курсеве.';
$string['enrol_ldap_course_fullname'] = 'Опционо: LDAP поље из ког се добија пуни назив.';
$string['enrol_ldap_course_idnumber'] = 'Планирати јединствени индентификатор LDAP, обично <em>cn</em> or <em>uid</em>. Препоручљиво је закључавање вредности ако користите аутоматско креирање курса.';
$string['enrol_ldap_course_settings'] = 'Подешавања уписа курса';
$string['enrol_ldap_course_shortname'] = 'Опционо: LDAP поље из ког се добија кратак назив.';
$string['enrol_ldap_course_summary'] = 'Опционо: LDAP поље из ког се добија резиме.';
$string['enrol_ldap_editlock'] = 'Закључајте вредности';
$string['enrol_ldap_general_options'] = 'Општа подешавања';
$string['enrol_ldap_host_url'] = 'Назначите главни LDAP у URL-облику као \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass која се користи за тражење курса. Обично \'posixGroуp\'.';
$string['enrol_ldap_search_sub'] = 'Претрага чланстава у групама из подконтекста.';
$string['enrol_ldap_server_settings'] = 'Подешавања LDAP сервера';
$string['enrol_ldap_student_contexts'] = 'Списак контекста у којима су лоциране групе са уписаним студентима. Одвојите различите контексте са \';\' знаком. На пример \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Атрибут члана, када корисник припада групи. Обично \'member\' или \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Подешавања уписа студента';
$string['enrol_ldap_teacher_contexts'] = 'Списак контекста у којима су лоцирани уписи предавача. Одвојите различите контексте са \';\' знаком. На пример \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Атрибут члана, када корисник припада групи. Обично \'member\' или \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Подешавања уписа предавача';
$string['enrol_ldap_template'] = 'Опционо: ауто-креирани курсеви могу копирати своја подешавања из шаблонског курса.';
$string['enrol_ldap_updatelocal'] = 'Ажурирај локалне податке';
$string['enrol_ldap_version'] = 'Верзија LDAP протокола коју Ваш сервер користи.';
$string['enrolname'] = 'LDAP';

?>
