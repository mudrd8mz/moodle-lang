<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_auth_user_create_key'] = 'Создавај корисници надворешно';
$string['auth_ldap_bind_dn'] = 'Ако сакате да користите врзување на корисник на пребарување корисници, наведете овде. Нешто како \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Истакнато име';
$string['auth_ldap_bind_pw'] = 'Лозинка за врзан корисник.';
$string['auth_ldap_bind_pw_key'] = 'Лозинка';
$string['auth_ldap_bind_settings'] = 'Опции за врзување';
$string['auth_ldap_changepasswordurl_key'] = 'URL за промена на лозинка';
$string['auth_ldap_contexts'] = 'Листа на текстови каде корисниците се лоцирани. Одделете различни текстови со \';\'. На пример: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Текстови';
$string['auth_ldap_create_context'] = 'Ако овозможите создавање на корисник со потврдување од е-пошта, наведете го текстот каде корисниците се создаваат. Овој текст треба да се разликува од другите корисници од безбедносни причини. Не треба да се додаде овој текст на ldap_context-variable, Moodle автоматски ќе бара корисници со овој текст.<br /><b>Забелешка!</b> Мора да ја измените функцијата auth_user_create() во датотеката auth/ldap/lib.php за да направите создавањето на корисници да работи';
$string['auth_ldap_create_context_key'] = 'Текст за нови корисници';
$string['auth_ldap_creators'] = 'Листа на групи на чии членови им е дозволено да создаваат нови курсеви. Одделете ги групите со \';\'. Нешто како \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Создавачи';
$string['auth_ldap_expiration_desc'] = 'Одберете „Не“ за да се онеспособи проверката на истечени лозинки или LDAP да чита време на истекување на лозинката директно од LDAP';
$string['auth_ldap_expiration_key'] = 'Истекување';
$string['auth_ldap_expiration_warning_desc'] = 'Број на денови пред да се издаде предупредување за истекување на лозинката.';
$string['auth_ldap_expiration_warning_key'] = 'Предупредување за истекување';
$string['auth_ldap_expireattr_desc'] = 'Опционално: Ги отфрла атрибутите на ldap кои го чуваат времето на истекување на лозинката';
$string['auth_ldap_expireattr_key'] = 'Атрибут на истекување';
$string['auth_ldap_graceattr_desc'] = 'Опционално: Ги отфрла атрибутите на gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Атрибут на gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Овозможи поддршка за LDAP gracelogin. Откако ќе истече лозинката корисникот може да се најави се додека gracelogin не е 0. Овозможувајќи ја оваа опција прикажува порака ако е истечена лозинката.';
$string['auth_ldap_gracelogins_key'] = 'Grace најавувања';
$string['auth_ldap_host_url'] = 'Наведете хост за LDAP во URL-форма како \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\' Одделете ги серверите со \';\' да добиете failover поддршка.';
$string['auth_ldap_host_url_key'] = 'URL на хостот';
$string['auth_ldap_ldap_encoding'] = 'Наведете шифрирање што се користи од LDAP серверот. Најверојатно е utf-8, MS AD v2 користи стандардно платформско шифрирање како cp1252, cp1250 итн.';
$string['auth_ldap_ldap_encoding_key'] = 'Шифрирање на LDAP';
$string['auth_ldap_login_settings'] = 'Опции за најавување';
$string['auth_ldap_memberattribute'] = 'Опционално: Премостува кориснички атрибути, кога корисникот припаѓа на група. Обично \'член\'';
$string['auth_ldap_memberattribute_isdn'] = 'Опционално: Премостува вредности на корисничките атрибути, или 0 или 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Корисничкиот атрибут користи дн';
$string['auth_ldap_memberattribute_key'] = 'Кориснички атрибут';
$string['auth_ldap_noconnect'] = 'Модулот LDAP не може да се поврзе на серверот: $a';
$string['auth_ldap_noconnect_all'] = 'Модулот LDAP не може да се поврзе на било кој сервер: $a';
$string['auth_ldap_noextension'] = 'Предупредување: Модулот LDAP за PHP изгледа дека не е присутен. Осигурајте се дека е инсталиран и овозможен.';
$string['auth_ldap_objectclass'] = 'Опционално: Премостува objectClass кој се користи за пребарување по име на корисници од ldap_user_type. Обично не мора да го изменувате ова.';
$string['auth_ldap_objectclass_key'] = 'Класа на објект';
$string['auth_ldap_opt_deref'] = 'Одлучува како се гледаат алиасите при пребарување. Одбери една од следните вредности: „Не“ (LDAP_DEREF_NEVER) или „Да“ (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Алијаси на диреференци';
$string['auth_ldap_passtype'] = 'Наведете го форматот на новите или променети лозинки во LDAP серверот.';
$string['auth_ldap_passtype_key'] = 'Формат на лозинка';
$string['auth_ldap_passwdexpire_settings'] = 'Опции на истекување на LDAP лозинката.';
$string['auth_ldap_preventpassindb'] = 'Одберете „да“ за да не се зачувува лозинката во базата на Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Скриј лозинки';
$string['auth_ldap_search_sub'] = 'Пребарувај корисници од подтекстот.';
$string['auth_ldap_search_sub_key'] = 'Барај подтекст';
$string['auth_ldap_server_settings'] = 'Опции на LDAP серверот';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() не го поддржува обележаниот кориснички тип:\"$a\" (..сè уште)';
$string['auth_ldap_update_userinfo'] = 'Промени ги информациите на корисникот (име, презиме, адреса..) од LDAP до Moodle.  Наведете ги „Мапирање на податоци“ опциите ако е потребно.';
$string['auth_ldap_user_attribute'] = 'Опционално: Ги премостува атрибутите користени за пребарување корисници по име. Обично \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Кориснички атрибут';
$string['auth_ldap_user_settings'] = 'Кориснички опции за пребарување';
$string['auth_ldap_user_type'] = 'Одберете како да се зачувуваат корисниците во LDAP. Оваа опција одлучува како истекува најавувањето, grace најавување и создавање корисници ќе работи.';
$string['auth_ldap_user_type_key'] = 'Тип на корисник';
$string['auth_ldap_usertypeundefined'] = 'Не е дефиниран config.user_type или функцијата ldap_expirationtime2unix не го поддржува обележаниот тип!';
$string['auth_ldap_usertypeundefined2'] = 'Не е дефиниран config.user_type или функцијата ldap_unixi2expirationtime не го поддржува обележаниот тип!';
$string['auth_ldap_version'] = 'Верзијата на LDAP протоколот што Вашиот сервер ја користи.';
$string['auth_ldap_version_key'] = 'Верзија';
$string['auth_ldapdescription'] = 'Овој метод овозможува автентикација наспроти надворешен LDAP сервер.

                                  Ако корисничкото име и лозинка се валидни, Moodle создава нов корисник 

                                  во базата. Овој модул може да чита кориснички атрибути од LDAP и однапред да пополнува

                                  полиња во Moodle.  За следните најавувања само корисничко име и 

                                  лозинка се проверуват.';
$string['auth_ldapextrafields'] = 'Овие полиња се опционални.  Може да изберете да бидат пополнети некои кориснички полиња со информации од <b>LDAP полиња</b> што се наведува овде. <p>Ако ги оставите овие полиња празни, тогаш ништо нема да се префрли од LDAP и ќе се користат дефинираните вредности од Moodle.</p><p>Како и да е, корисникот ќе може да ги изменува сите овие полиња откако ќе се најави.</p>';
$string['auth_ldapnotinstalled'] = 'Не може да користи LDAP автентикација. Модулот LDAP од PHP не е инсталиран.';
$string['auth_ldaptitle'] = 'LDAP сервер';