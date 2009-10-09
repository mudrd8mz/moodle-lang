<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Не можам да се поврзам до наведената автентикациона база на податоци...';
$string['auth_dbchangepasswordurl_key'] = 'URL за промена на лозинка';
$string['auth_dbdebugauthdb'] = 'Чистење на грешки во ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Чистење на грешки во ADOdb во конекцијата до надворешна база на податоци - користете го кога добивате празна страница при најавување. Не е погодно за сајтови за производство.';
$string['auth_dbdeleteuser'] = 'Избришан корисник $a[0] ид. $a[1]';
$string['auth_dbdeleteusererror'] = 'Грешка при бришењето на корисникот $a';
$string['auth_dbdescription'] = 'Овој метод користи надворешна табела на податоци да провери дали дадено корисничко име и лозинка се валидни.  Ако сметката е нова, тогаш информациите од други полиња може да се копираат во Moodle.';
$string['auth_dbextencoding'] = 'Шифрирање на надворешна БП';
$string['auth_dbextencodinghelp'] = 'Шифрирање што се користи во надворешната база на податоци';
$string['auth_dbextrafields'] = 'Овие полиња се опционални.  Може да избереш да бодат пополнети некои кориснички полиња со информации од <b>полиња од надворешна база на податоци</b> што се специфицираат овде. <p>Ако ги оставите празни, тогаш ќе бидат пополнети по дефиниција.</p><p>Како и да е, корисникот ќе може да ги менува сите полиња откако се најави.</p>';
$string['auth_dbfieldpass'] = 'Име на полето што ја содржи лозинката';
$string['auth_dbfieldpass_key'] = 'Поле за лозинка';
$string['auth_dbfielduser'] = 'Името на полето што ги содржи корисничките имиња';
$string['auth_dbfielduser_key'] = 'Поле за корисничко име';
$string['auth_dbhost'] = 'Компјутерот што го има серверот на базата.';
$string['auth_dbhost_key'] = 'Хост';
$string['auth_dbinsertuser'] = 'Внесен е корисник $a[0] ид. $a[1]';
$string['auth_dbinsertusererror'] = 'Грешка при внесување на корисникот $a';
$string['auth_dbname'] = 'Самото име на базата на податоци';
$string['auth_dbname_key'] = 'Име на БП';
$string['auth_dbpass'] = 'Лозинката се совпаѓа со корисничкото име';
$string['auth_dbpass_key'] = 'Лозинка';
$string['auth_dbpasstype'] = '<p>Наведете го форматот што го користи полето за лозинка.  MD5 енкрипцијата е корисна за поврзување до други веб апликации како PostNuke.</p> <p>Користете „внатрешен“ ако сакате надворешна БП за одржување на кориснички имиња &amp; адреси за е-пошта, а Moodle за одржување на лозинки. Ако користите „внатрешен“ тогаш <i>морате</i> да доставите пополнето поле за адреси за е-пошта во надворешната БП и морате редовно да ги извршувате admin/cron.php и auth/db/auth_db_sync_users.php . Moodle ќе испрати е-пошта до новите корисници со привремена лозинка.</p>';
$string['auth_dbpasstype_key'] = 'Формат на лозинка';
$string['auth_dbreviveduser'] = 'Оживеан корисник $a[0] ид. $a[1]';
$string['auth_dbrevivedusererror'] = 'Грешка при оживувањето на корисникот $a';
$string['auth_dbsetupsql'] = 'Команда за подесување на SQL';
$string['auth_dbsetupsqlhelp'] = 'SQL команда за подесување на специјална база на податоци, често се користи за подесување на шифрирањето во комуникацијата - пример за MySQL и PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Суспендиран корисник $a[0] ид. $a[1]';
$string['auth_dbsuspendusererror'] = 'Грешка при суспендирањето на корисникот $a';
$string['auth_dbsybasequoting'] = 'Користи sybase наводници';
$string['auth_dbsybasequotinghelp'] = 'Излегување со единечни наводници во стилот на sybase - потребно е за Oracle, MS SQL и некои други бази на податоци. Не ги користете во MySQL!';
$string['auth_dbtable'] = 'Име на табела во базата на податоци';
$string['auth_dbtable_key'] = 'Табела';
$string['auth_dbtitle'] = 'Надворешна база на податоци';
$string['auth_dbtype'] = 'Типот на базата (Види <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb документација</a> за детали)';
$string['auth_dbtype_key'] = 'База на податоци';
$string['auth_dbupdatinguser'] = 'Ажурирање на корисник $a[0] ид. $a[1]';
$string['auth_dbuser'] = 'Корисничко име со пристап за читање во базата';
$string['auth_dbuser_key'] = 'Корисник на БП';
$string['auth_dbusernotexist'] = 'Не може да се ажурира непостоечкиот корисник: $a';
$string['auth_dbuserstoadd'] = 'Кориснички забелешки за додавање: $a';
$string['auth_dbuserstoremove'] = 'Кориснички забелешки за отстранување: $a';