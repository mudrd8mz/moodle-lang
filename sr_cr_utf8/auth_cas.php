<?PHP // $Id$ 
      // auth_cas.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['CASform'] = 'Избор провере идентитета';
$string['accesCAS'] = 'CAS корисници';
$string['accesNOCAS'] = 'други корисници';
$string['auth_cas_auth_user_create'] = 'Креирај кориснике екстерно';
$string['auth_cas_baseuri'] = 'URI сервера (ништа ако не постоји основни URI)<br />На пример, ако CAS сервер одговора на host.domaine.rs/CAS/ онда<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Основни URI';
$string['auth_cas_broken_password'] = 'Не можете да наставите без промене своје лозинке. Међутим, не постоји доступна страница на којој то можете да урадите. Молимо вас да контактирате Moodle администратора.';
$string['auth_cas_cantconnect'] = 'LDAP део CAS модула не може да се повеже са сервером: $a';
$string['auth_cas_casversion'] = 'Верзија';
$string['auth_cas_changepasswordurl'] = 'URL за промену лозинке';
$string['auth_cas_create_user'] = 'Укључите ово уколико желите да убаците у базу података Moodlea корсинике чији је идентитет проверен помоћу CAS-а. Уколико не желите, онда ће на систем моћи да се пријаве само корисници који већ постоје у бази података Moodlea';
$string['auth_cas_create_user_key'] = 'Креирај корисника';
$string['auth_cas_enabled'] = 'Укључите ово уколико желите да користе CAS проверу идентитета.';
$string['auth_cas_hostname'] = 'Име рачунара домаћина на којем је CAS сервер <br />тј: host.domain.rs';
$string['auth_cas_hostname_key'] = 'Име рачунара';
$string['auth_cas_invalidcaslogin'] = 'Опростите, Ваша пријава на систем није успела - нисте могли бити ауторизовани.';
$string['auth_cas_language'] = 'Изабрани језик';
$string['auth_cas_language_key'] = 'Језик';
$string['auth_cas_logincas'] = 'Приступ преко безбедне конекције';
$string['auth_cas_logoutcas'] = 'Промените ово на \'да\' уколико желите да се одјавите са CAS сервера када прекинете конекцију са Moodleom.';
$string['auth_cas_logoutcas_key'] = 'Одјава са CAS сервера';
$string['auth_cas_multiauth'] = 'Промените ово на \'да\' уколико желите да имате вишеструку проверу идентитета (CAS + друга провера идентитета)';
$string['auth_cas_multiauth_key'] = 'Вишеструка провера идентитета';
$string['auth_cas_port'] = 'Порт CAS севера';
$string['auth_cas_port_key'] = 'Порт';
$string['auth_cas_proxycas'] = 'Промените ово на \'да\' уколико користите CAS y прокси моду.';
$string['auth_cas_proxycas_key'] = 'Прокси мод';
$string['auth_cas_server_settings'] = 'Конфигурација CAS сервера';
$string['auth_cas_text'] = 'Безбедна конекција';
$string['auth_cas_use_cas'] = 'Користи CAS';
$string['auth_cas_version'] = 'Верзија CAS-a';
$string['auth_casdescription'] = 'Овај метод користи CAS (Central Authentication Service) сервер за проверу идентитета корисника у тзв. SSO окружењу (Single Sign On environment). Такође, можете да користите једноставу LDAP проверу идентитета. Уколико су дато корисничко име и лозинка исправни према CAS-у Moodle креира нове корисничке податке у својој бази података, узимајући корисничке адтрибуте из LDAP-а уколико је неопходно. Приликом следеће пријаве на систем провервају се само корисничко име и лозинка.';
$string['auth_casnotinstalled'] = 'Није могуће користити CAS проверу идентитета. PHP LDAP модул није инсталиран.';
$string['auth_castitle'] = 'CAS сервер (SSO)';

?>
