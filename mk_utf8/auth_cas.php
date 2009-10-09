<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Избор на автентикација';
$string['accesCAS'] = 'CAS корисници';
$string['accesNOCAS'] = 'други корисници';
$string['auth_cas_auth_user_create'] = 'Надворешно создавање на корисници';
$string['auth_cas_baseuri'] = 'URI на серверот (ништо ако нема базен Uri)<br />На пример, ако CAS серверот одговара на host.domaine.fr/CAS/ тогаш<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Почетно URI';
$string['auth_cas_broken_password'] = 'Не можете да одите понатаму без да ја променете Вашата лозинка, меѓутоа нема достапна страница за нејзино променување. Контактирајте го Вашиот Moodle администратор.';
$string['auth_cas_cantconnect'] = 'LDAP делот од CAS модулот не може да се поврзе на сервер: $a';
$string['auth_cas_casversion'] = 'Верзија';
$string['auth_cas_changepasswordurl'] = 'URL за промена на лозинка';
$string['auth_cas_create_user'] = 'Вклучете го ова ако сакате да внесете корисници во базата на податоци на Moodle кои се автентицирани со CAS. Ако не, само корисници кои постојат во базата на податоци и можат да се најавуваат.';
$string['auth_cas_create_user_key'] = 'Создај корисник';
$string['auth_cas_enabled'] = 'Вклучете го ова ако сакате да користите CAS автентикација.';
$string['auth_cas_hostname'] = 'Хостот на САS серверот <br />eg: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Име на хостот';
$string['auth_cas_invalidcaslogin'] = 'Извинете, Вашето најавување не успеа - не можевте да се авторизирате';
$string['auth_cas_language'] = 'Изберен јазик';
$string['auth_cas_language_key'] = 'Јазик';
$string['auth_cas_logincas'] = 'Пристап на безбедна конекција';
$string['auth_cas_logoutcas'] = 'Сменете го ова во „да“ ако сакате да се одјавите од CAS кога ќе се исклучите од Moodle';
$string['auth_cas_logoutcas_key'] = 'Одјавете се од CAS';
$string['auth_cas_multiauth'] = 'Сменете го ова во „да“ ако сакате да имате повеќе автентикации (CAS + друга автентикација)';
$string['auth_cas_multiauth_key'] = 'Повеќе автентикации';
$string['auth_cas_port'] = 'Порта на CAS серверот';
$string['auth_cas_port_key'] = 'Порта';
$string['auth_cas_proxycas'] = 'Сменете го ова во „да“ ако користите CAS во режим со посредник';
$string['auth_cas_proxycas_key'] = 'Режим со посредник';
$string['auth_cas_server_settings'] = 'CAS конфигурација на серверот';
$string['auth_cas_text'] = 'Сигурна конекција';
$string['auth_cas_use_cas'] = 'Користи CAS';
$string['auth_cas_version'] = 'Верзија на CAS';
$string['auth_casdescription'] = 'Овој метод користи CAS сервер (Централен Автентикационен Сервис-Central Authentication Service) за автентикација на корисниците во Single Sign On environment (SSO). Може да се користи и едноставна LDAP автентикација. Ако даденото корисничко име и лозинка се валидни според CAS, Moodle креира нов корисник во базата на податоци, земајќи ги корисничките атрибути од LDAP ако е потребно. На следните најавувања се проверуваат само корисничкото име и лозинката.';
$string['auth_casnotinstalled'] = 'Не може да се користи CAS автентикација. Модулот LDAP од PHP не е инсталиран.';
$string['auth_castitle'] = 'Користете CAS сервер (SSO)';